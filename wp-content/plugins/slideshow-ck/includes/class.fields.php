<?php
/**
 * @copyright	Copyright (C) 2016. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		Plugins CK - Cédric KEIFLIN - http://www.wp-pluginsck.com
 */

defined('ABSPATH') or die;

class SlideshowckFields {

	private $name, $id, $value, $classname, $optionsgroup, $isfiles, $attribs;

	/*
	 * The plugin url from the main class
	 */
	public $pluginurl;

	/*
	 * The plugin options from the main class
	 */
	public $options;
	
	/*
	 * The plugin settings field name from the main class
	 */
	public $settings_field;
	
	/*
	 * The plugin default settings from the main class
	 */
	public $default_settings;

	function __construct() {
		// if (is_admin()) {
			if (isset($_GET['page']) && $_GET['page'] === 'slideshowck_edit') add_action('admin_init', array( $this, 'load_assets_files'));
		// }
	}

	public function load_assets_files() {
		// for the color field
		wp_enqueue_style('wp-color-picker');
		wp_enqueue_script('slideshow-ck-color-picker', $this->pluginurl . '/fields/color.js', array('jquery', 'jquery-ui-button', 'wp-color-picker'));
		// for the media manager
		wp_enqueue_media();
		wp_enqueue_script('slideshow-ck-media', $this->pluginurl . '/fields/media.js', array('jquery'));
		// for radio buttons
		wp_enqueue_style('slideshow-ck-radio', $this->pluginurl . '/fields/radio.css');
	}

	public function render($type, $name, $classname = '', $optionsgroup = '', $isfiles = false, $attribs = '', $value = null) {
		$function = 'get'.ucfirst($type);
		$this->name = $this->getName($name);
		$this->id = $this->getId($name);
		$this->value = $value !== null ? $value : $this->getValue($name);
		$this->classname = $classname;
		$this->optionsgroup = $optionsgroup;
		$this->isfiles = $isfiles;
		$this->attribs = $attribs;

		return $this->$function();
	}

	public function getName($name) {
		return sprintf('%s[%s]', $this->settings_field, $name);
	}

	public function getId($name) {
		return trim(preg_replace('#\W#', '_', $name), '_');
	}

	public function get($key, $default = null) {
		return $this->getValue($key, $default); 
	}

	public function getValue( $key, $default = null ) {
		if (isset($this->options[$key]) && $this->options[$key] != '') {
			return $this->options[$key];
		} else {
			if ($default == null && isset($this->default_settings[$key])) 
				return $this->default_settings[$key];
		}
		return $default;
	}

	private function getColor() {
		
		$class = $this->classname ? ' class="ck-color-picker '.$this->classname.'"' : ' class="ck-color-picker"';
		$html = '<input type="text" id="'.$this->id.'" name="'.$this->name.'" value="'.$this->value.'"'.$class.' data-default-color="'.$this->value.'" />';
		return $html;
	}

	private function getText() {
		$class = $this->classname ? ' class="'.$this->classname.'"' : '';
		$html = '<input type="text" id="'.$this->id.'" name="'.$this->name.'" value="'.$this->value.'"'.$class.' />';
		return $html;
	}

	private function getSelect() {
		$class = $this->classname ? ' class="'.$this->classname.'"' : '';
		$html = '<select id="'.$this->id.'" name="'.$this->name.'" '.$class.' '.$this->attribs.' >';
		$html .= $this->getOptions();
		$html .= '</select>';
		return $html;
	}

	private function getOptions() {
		if (!is_array($this->optionsgroup) && $this->optionsgroup != 'boolean') {
			$this->getArrayFromOptions();
		}

		if ($this->optionsgroup == 'boolean') {
			$this->optionsgroup = array(
				'1' => __('yes')
				, '0'=> __('no')
				);
		}
		$optionshtml = array();
		foreach ($this->optionsgroup as $val => $name) {
			if ( $this->isfiles == true ) {
				$val = $name;
			}
			if ((is_array($this->value) && in_array($val, $this->value)) || $val == $this->value) {
				$optionshtml[] = '<option value="'.$val.'" selected="selected">'.$name.'</option>';
			} else {
				$optionshtml[] = '<option value="'.$val.'">'.$name.'</option>';
			}
		}
		return implode('', $optionshtml);
	}
	
	private function getArrayFromOptions() {
		$this->optionsgroup = rtrim($this->optionsgroup, '</option>');
		$this->optionsgroup = explode('</option>', $this->optionsgroup);
		$optionsgroup = array();
		foreach ($this->optionsgroup as $option) {
			$option = explode('">', $option);
			$optionsgroup[str_replace( '<option value="', '', trim($option[0]))] = $option[1];
		}
		$this->optionsgroup = $optionsgroup;
	}
	
	private function getRadio() {
		if (!is_array($this->optionsgroup) && $this->optionsgroup != 'boolean') {
			$this->getArrayFromOptions();
		}

		if ($this->optionsgroup == 'boolean') {
			$this->optionsgroup = array(
				'1' => __('yes')
				, '0'=> __('no')
				);
		}

		$class = $this->classname ? ' class="'.$this->classname.'"' : '';
		$html = array();
		

		// Start the radio field output.
		$html[] = '<div id="' . $this->id . '-fieldset" class="ckradio-fieldset ckbutton-group" >';

		// Get the field options.
		$options = $this->optionsgroup;

		// Build the radio field output.
		foreach ($options as $value => $name) {
			if (stristr($name,"img:")) $name = '<img src="' . str_replace("img:","",$name) . '" style="margin:0; float:none;" />';
			// Initialize some option attributes.
			$checked = ((string) $value == (string) $this->value) ? ' checked="checked"' : '';
			$class = ' class="ckradio"';

			$html[] = '<input type="radio" id="' . $this->id . $value . '" name="' . $this->name . '" value="' . htmlspecialchars($value, ENT_COMPAT, 'UTF-8') . '"' . $checked . $class . ' data-name="' . $this->id . '" />';
			$html[] = '<label for="' . $this->id . $value . '" class="ckbutton">' . __($name, 'slideshow-ck') . '</label>';
		}

		// End the radio field output.
		$html[] = '</div>';

		return implode($html);
	}
	
	private function getMedia() {
		$class = $this->classname ? ' class="'.$this->classname.'"' : '';
		$html = '<input type="text" id="'.$this->id.'" name="'.$this->name.'" value="'.$this->value.'"'.$class.' />';
		$html .= '<a class="ckbutton" onclick="ckOpenMediaManager(this, \'' . get_site_url() . '/\');">'. __('Select') .'</a>';
		$html .= '<a class="ckbutton" onclick="document.getElementById(\''.$this->id.'\').value = \'\';">'. __('Clear') .'</a>';

		return $html;
	}
}
