<?php

/**
 * Attachments handler.
 */
class GridGallery_Galleries_Attachment
{
	protected $_wp_upload_dir;
    protected $_wp_upload_url;
	protected $_no_ssl_upload_url;

    public function __construct()
    {
        $wp_upload_dir = wp_upload_dir( null, false );
        $this->_wp_upload_dir = $wp_upload_dir['basedir'];
//        $this->_wp_upload_dir = WP_CONTENT_DIR.'/uploads';
//        if(defined('UPLOADS')){
//            $this->_wp_upload_dir = ABSPATH . UPLOADS;
//        }
        $this->_wp_upload_url = $wp_upload_dir['baseurl'];
        $this->_no_ssl_upload_url = $this->_wp_upload_url;
        if(is_ssl()) {
            $this->_wp_upload_url = str_replace('http://', 'https://', $this->_wp_upload_url);
        }

        $this->settings = get_option('sg_settings');
        
        if (isset($this->settings['image_editor']) && $this->settings['image_editor'] !== 'auto') {
            if (!has_filter('wp_image_editors', array($this, 'forceImageEditor'))) {
                @set_time_limit(120);
                add_filter('wp_image_editors', array($this, 'forceImageEditor'));
            }
        }
    }

    public function forceImageEditor($editors)
    {
        if ($this->settings['image_editor'] == 'imagick') {
            $editors = array('WP_Image_Editor_Imagick');
        } elseif($this->settings['image_editor'] == 'gd') {
            $editors = array('WP_Image_Editor_GD');
        }

        return $editors;
    }

    /**
     * Returns attachment image with requested sizes.
     * If it is not possible to get requested size method returns placeholder.
     *
     * @param int $attachmentId Attachment Id.
     * @param int $width Requested image width.
     * @param int $height Requested image height.
     * @return string
     */
    public function getAttachment($attachmentId, $width, $height = null, $cropPosition = null, $cropQuality = null)
    {
        $attachment = $this->getMetadata($attachmentId);

//        if (!$attachment || !is_file($this->getFilePath($attachment))) {
        if (!$attachment) {
            if (!$height) {
                $height = $width;
            }
            if(!$width) {
                $width = $height;
            }

            return $this->getPlaceholderUrl($width, $height);
        }

        //is file attached to wp media library by url
        if(!is_file($this->getFilePath($attachment))){
            return $attachment['url'];
        }

        //that means photo size will be dynamically calculated by % of container
        if(is_null($width) && is_null($height)){
            return $attachment['url'];
        }

        if ($cropPosition && $width && $height) {
            $cropPositionUpdate = get_post_meta($attachmentId, 'cropPositionNeedUpdate');
            $cropPositionUpdate = reset($cropPositionUpdate);
            // Check if crop size or position changed since last crop
            if ((!empty($cropPositionUpdate) &&
                ($cropPositionUpdate[0] == true ||
                $cropPositionUpdate[1] !== $width ||
                $cropPositionUpdate[2] !== $height)) || $cropQuality) {
                if ($url = $this->crop($attachment, $width, $height, $cropPosition, $cropQuality)) {
                    update_post_meta($attachmentId, 'cropPositionNeedUpdate', array(false, $width, $height), $cropPositionUpdate);
                    return $url;
                }
            }
        }

        if ($url = $this->getDefaultSizeUrl($attachment, $width, $height)) {
            return $url;
        }

        if ($url = $this->getCroppedSizeUrl($attachment, $width, $height)) {
            return $url;
        }

        if ($url = $this->crop($attachment, $width, $height, $cropQuality)) {
            return $url;
        }

        if (!isset($attachment['sizes']) || !isset($attachment['sizes']['full'])) {
            return $this->getPlaceholderUrl($width, $height);
        }

        return $attachment['sizes']['full']['url'];
    }

    /**
     * Returns attachment metadata by attachment id.
     *
     * @param int $attachmentId Attachment Id.
     * @return array
     */
    public function getMetadata($attachmentId)
    {
        return wp_prepare_attachment_for_js($attachmentId);
    }

    /**
     * Returns full path to the attachment or NULL on failure.
     *
     * @param array $attachment Attachment metadata.
     * @return null|string
     */
    public function getFilePath($attachment)
    {
        if (!is_array($attachment) || !isset($attachment['url'])) {
            return null;
        }

        $url = $attachment['url'];

        if(strpos($url,$this->_wp_upload_url) !== false){
            $url = str_replace($this->_wp_upload_url, realpath($this->_wp_upload_dir), $url);
        }elseif (strpos($url,$this->_no_ssl_upload_url) !== false){
            $url = str_replace($this->_no_ssl_upload_url, realpath($this->_wp_upload_dir), $url);
        }

        return $url;
    }

    /**
     * Returns url to the requested size or NULL if this size does not exists.
     *
     * @param array $attachment Attachment metadata.
     * @param int $width Requested width.
     * @param int $height Requested height.
     * @return null|string
     */
    protected function getDefaultSizeUrl($attachment, $width, $height)
    {
        if (!$height || !$attachment['sizes']) {
            return null;
        }

        foreach ($attachment['sizes'] as $size) {
            if ($size['width'] === $width && $size['height'] === $height) {
                return $size['url'];
            }
        }

        return null;
    }

    /**
     * Crops the attachment image and return path to the cropped image.
     * If crop fails returns NULL.
     *
     * @param array $attachment Attachment metadata.
     * @param int $width Image width.
     * @param int $height Image height.
     * @return string|null
     */
    protected function crop($attachment, $width, $height = null, $cropPosition = null, $cropQuality = null)
    {
        $filepath = $this->getFilePath($attachment);
        $editor   = $this->getEditor($filepath);
        list($or_width, $or_height) = getimagesize($filepath);
        $crop = true;

        if (!$editor) {
            return null;
        }

        //Crop quality
        if($cropQuality == null){
            $editor->set_quality(100);
        } else {
            $editor->set_quality(intval($cropQuality));
        }

        //Crop filter for small images
        if ($or_width < $width || $or_height < $height) {
            if (!has_filter('image_resize_dimensions', 'image_crop_dimensions')) {
                function image_crop_dimensions($default, $orig_w, $orig_h, $new_w, $new_h, $crop) {
                    if (!$crop || !$new_w || !$new_h) return null;
                    $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);
                    $crop_w = round($new_w / $size_ratio);
                    $crop_h = round($new_h / $size_ratio);

					if(count($crop) > 1) {
						list($x, $y) = $crop;
					} else {
						$x = null;
						$y = null;
					}
					if('left' === $x) {
						$s_x = 0;
					} elseif('right' === $x) {
						$s_x = $orig_w - $crop_w;
					} else {
						$s_x = floor(($orig_w - $crop_w)/2);
					}

					if ('top' === $y) {
						$s_y = 0;
					} elseif('bottom' === $y) {
						$s_y = $orig_h - $crop_h;
					} else {
						$s_y = floor(($orig_h - $crop_h)/2);
					}
                    return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h);
                }

                add_filter('image_resize_dimensions', 'image_crop_dimensions', 10, 6);
            }
        }

        if ($cropPosition) {
            $crop = explode('-', $cropPosition);
        }

        if (is_wp_error($editor->resize($width, $height, $crop))) {
            return null;
        }

        if (is_wp_error($data = $editor->save())) {
            return null;
        }

        unset($editor);

        return str_replace(realpath($this->_wp_upload_dir), $this->_wp_upload_url, $data['path']);
    }

    /**
     * Returns WP_Image_Editor or NULL on failure.
     *
     * @param string $filepath Path to file.
     * @return WP_Image_Editor
     */
    protected function getEditor($filepath)
    {
        $editor = wp_get_image_editor($filepath);

        if (is_wp_error($editor)) {
            return null;
        }

        return $editor;
    }

    /**
     * Returns URL to the images if WordPress has already cropped
     * and resized image.
     * If uploads directory doesn't contain requested file - returns NULL.
     *
     * @param array $attachment Attachment metadata.
     * @param int $width Image width.
     * @param int $height Image height.
     * @return string|null
     */
    protected function getCroppedSizeUrl($attachment, $width, $height)
    {
        if (!is_array($attachment)) {
            return null;
        }

        if (!$width || !$height) {
            $dimensions = image_resize_dimensions($attachment['width'], $attachment['height'], $width, $height, true);
            if (!$dimensions) {
                return null;
            }

            $width = $dimensions[4];
            $height = $dimensions[5];
        }


        $filepath  = $this->getFilePath($attachment);
        $filename  = pathinfo($filepath, PATHINFO_FILENAME);
        $extension = pathinfo($filepath, PATHINFO_EXTENSION);

        // Will be something file: filename-300x300.jpg
        $filename = $filename . '-' . $width . 'x' . $height . '.' . $extension;

        if (is_file($file = dirname($filepath) . '/' . $filename)) {
            //update_option('crop_debug', str_replace(ABSPATH, get_bloginfo('wpurl') . '/', $file));
            return str_replace(realpath($this->_wp_upload_dir), $this->_wp_upload_url, $file);
        }

        return null;
    }

    /**
     * Returns URL to the placeholder with specified width, height and text.
     *
     * @param int    $width  Image width.
     * @param int    $height Image height.
     * @param string $text   Image text.
     * @return string
     */
    protected function getPlaceholderUrl($width, $height, $text = null)
    {
        $text = $text ? $text : 'Failed+to+load+image.';

        return sprintf(
            'http://placehold.it/%sx%s&text=%s',
            $width,
            $height,
            $text
        );
    }
	public function setAttachmentSettings($name, $value) {
    	if(class_exists('GridGalleryPro_Galleries_Attachment')) {
			$permittedOptionList = array('watermark');
			if(in_array($name, $permittedOptionList)) {
				$this->$name = $value;
			}
		}
		return '';
	}

	// return and prepare image settings for generate "thumbnail image name"
	public static function prepareWatermarkedImageParams($ggAreaSettings) {
		$ggSetting = array(
			'photo_width' => null,
			'photo_height' => null,
			'crop' => null,
			'crop_quality' => isset($ggAreaSettings['crop_quality']) ? $ggAreaSettings['crop_quality'] : null,
		);

		if(isset($ggAreaSettings['photo_width_unit']) && $ggAreaSettings['photo_width_unit'] == 0) {
			$ggSetting['photo_width'] = $ggAreaSettings['photo_width'];
		} else {
			if(isset($ggAreaSettings['area_width_unit']) && $ggAreaSettings['area_width_unit'] == 0) {
				$ggSetting['photo_width'] = intval(intval($ggAreaSettings['area_width']) / 100 * intval($ggAreaSettings['photo_width']));
			} else {
				$ggSetting['photo_width'] = null;
			}
		}
		if(isset($ggAreaSettings['photo_height_unit']) && $ggAreaSettings['photo_height_unit'] == 0) {
			$ggSetting['photo_height'] = $ggAreaSettings['photo_height'];
		} else {
			$ggSetting['photo_height'] = null;
		}

		if(isset($ggAreaSettings['grid'])) {
			if($ggAreaSettings['grid'] == 0 || $ggAreaSettings['grid'] == '3') {
				$ggSetting['crop']= 1;
			} else if($ggAreaSettings['grid'] == '1') {
				$ggSetting['photo_height'] = null;
			} else if($ggAreaSettings['grid'] == '2') {
				$ggSetting['photo_width'] = null;
			}
		}

		return $ggSetting;
	}

	// prepare settings model into array for prepareWatermarkedImageParams
	public static function prepareWmImgParamsFromGallerySett($gallerySettings) {

		$ggOldSettings = array(
			'photo_width' => isset($gallerySettings->data['area']['photo_width']) ? $gallerySettings->data['area']['photo_width'] : null,
			'photo_height' => isset($gallerySettings->data['area']['photo_height']) ? $gallerySettings->data['area']['photo_height'] : null,
			'photo_width_unit' => isset($gallerySettings->data['area']['photo_width_unit']) ? $gallerySettings->data['area']['photo_width_unit'] : null,
			'photo_height_unit' => isset($gallerySettings->data['area']['photo_height_unit']) ? $gallerySettings->data['area']['photo_height_unit'] : null,
			'grid' => isset($gallerySettings->data['area']['grid']) ? $gallerySettings->data['area']['grid'] : null,
			'area_width_unit' => isset($gallerySettings->data['area']['width_unit']) ? $gallerySettings->data['area']['width_unit'] : null,
			'area_width' => isset($gallerySettings->data['area']['width']) ? $gallerySettings->data['area']['width'] : null,
			'crop_quality' => isset($gallerySettings->data['thumbnail']['cropQuality']) ? $gallerySettings->data['thumbnail']['cropQuality'] : null,
		);

		return self::prepareWatermarkedImageParams($ggOldSettings);
	}

	public function replaceUrlToFilePath($url) {
		$filePath = null;
		if($url) {
			if(strpos($url,$this->_wp_upload_url) !== false){
				$filePath = str_replace($this->_wp_upload_url, realpath($this->_wp_upload_dir), $url);
			}elseif (strpos($url,$this->_no_ssl_upload_url) !== false){
				$filePath = str_replace($this->_no_ssl_upload_url, realpath($this->_wp_upload_dir), $url);
			}
		}
		return $filePath;
	}

	public function replacePathToUrl($path, $returnPath = false) {
    	$url = null;
    	if($path) {
    		$realPath = realpath($path);
    		$wpUploadRealPath = realpath($this->_wp_upload_dir);
    		if(strpos($realPath, $wpUploadRealPath) !== false) {
    			$url = str_replace($wpUploadRealPath, $this->_wp_upload_url, $realPath);
    			$url = str_replace('\\', '/', $url);
			}
		}
		if(!$url && $returnPath) {
    		$url = $path;
		}
		return $url;
	}
}