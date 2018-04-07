<?php
/**
 * @copyright	Copyright (C) 2017. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		Plugins CK - Cédric KEIFLIN - http://www.wp-pluginsck.com
 */
defined('ABSPATH') or die;

class SlideshowckHelper {

	public static $default_settings;

	public function __construct() {
	}

	public static function getSettings() {
		if (empty(self::$default_settings)) {
			$default_settings = array(
				"height" => "62%",
				"width" => "auto",
				"loader" => "1",
				"navigation" => "1",
				"thumbnails" => "1",
				"pagination" => "1",
				"theme" => "default",
				"skin" => "camera_amber_skin",
				"imgalignment" => "default",
				"thumbnailheight" => "100",
				"captiontitle_color" => "#000000",
				"captiontitle_fontsize" => "18",
				"captiontitle_fontfamily" => "",
				"captiontitle_fontweight" => "normal",
				"captiontitle_fontweightnormal" => "normal",
				"captiontitle_fontweightbold" => "bold",
				"captiondesc_color" => "#6b6b6b",
				"captiondesc_fontsize" => "12",
				"captiondesc_fontfamily" => "",
				"captiondesc_fontweight" => "normal",
				"captiondesc_fontweightnormal" => "normal",
				"captiondesc_fontweightbold" => "bold",
				"caption_bgcolor1" => "#000000",
				"caption_bgcolor2" => "",
				"caption_opacity" => "0.8",
				"caption_margintop" => "",
				"caption_marginright" => "",
				"caption_marginbottom" => "",
				"caption_marginleft" => "",
				"caption_paddingtop" => "",
				"caption_paddingright" => "",
				"caption_paddingbottom" => "",
				"caption_paddingleft" => "",
				"caption_roundedcornerstl" => "",
				"caption_roundedcornerstr" => "",
				"caption_roundedcornersbr" => "",
				"caption_roundedcornersbl" => "",
				"caption_bordercolor" => "",
				"caption_borderwidth" => "",
				"caption_shadowcolor" => "",
				"caption_shadowblur" => "",
				"caption_shadowspread" => "",
				"caption_shadowoffsetx" => "",
				"caption_shadowoffsety" => "",
				"caption_shadowinset" => "",
				"caption_shadowinset0" => "0",
				"caption_shadowinset1" => "1",
				"effect" => "random",
				"captioneffect" => "moveFromLeft",
				"time" => "7000",
				"transperiod" => "1500",
				"portrait" => "0",
				"autoAdvance" => "1",
				"hover" => "1",
				"displayorder" => "normal",
				"fullpage" => "0",
				"imagetarget" => "_parent"
			);
			self::$default_settings = $default_settings;
		}
		return self::$default_settings;
	}

	/**
	 * Test if there is already a unit, else add the px
	 *
	 * @param string $value
	 * @return string
	 */
	public static function testUnit($value) {
		if ((stristr($value, 'px')) OR (stristr($value, 'em')) OR (stristr($value, '%')) OR (stristr($value, 'auto')) ) {
			return $value;
		}

		if ($value == '') {
			$value = 0;
		}

		return $value . 'px';
	}
	
	/**
	 * Convert a hexa decimal color code to its RGB equivalent
	 *
	 * @param string $hexStr (hexadecimal color value)
	 * @param boolean $returnAsString (if set true, returns the value separated by the separator character. Otherwise returns associative array)
	 * @param string $seperator (to separate RGB values. Applicable only if second parameter is true.)
	 * @return array or string (depending on second parameter. Returns False if invalid hex color value)
	 */
	public static function hex2RGB($hexStr, $opacity) {
		if ($opacity > 1) $opacity = $opacity/100;
		$hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
		$rgbArray = array();
		if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
			$colorVal = hexdec($hexStr);
			$rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
			$rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
			$rgbArray['blue'] = 0xFF & $colorVal;
		} elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
			$rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
			$rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
			$rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
		} else {
			return false; //Invalid hex color code
		}
		$rgbacolor = "rgba(" . $rgbArray['red'] . "," . $rgbArray['green'] . "," . $rgbArray['blue'] . "," . $opacity . ")";

		return $rgbacolor;
	}
}
