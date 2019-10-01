<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
			// get acf fields
			$fields = get_field_objects();
			if( $fields ) {
				// set field order
				if ( is_array($fields) || is_object($fields) ) {
					$order = array();
					foreach( $fields as $field_name => $field ) {
						$order[$field_name] = $field['menu_order'];
					}
					array_multisort( $order, SORT_ASC, $fields );
				}
				foreach( $fields as $field_name => $field ) {
					// get field value
					$values = $field['value'];
					// if field has value
					if ( $values && !empty($values) ) {
						// if field value is array
						if( is_array($values) ) {
							// link field type
							if ( $field['type'] == 'link' ) {
								$acf_value_url = $values['url'];
								$acf_value_title = $values['title'];
								$acf_value_target = $values['target'] ? $values['target'] : '_self';
							// file field type
							} elseif ( $field['type'] == 'file' ) {
								$acf_value_url = $values['url'];
								$acf_value_title = $values['title'];
							// image field type
							} elseif ( $field['type'] == 'image' ) {
								$acf_value_url = $values['url'];
								$acf_value_alt = $values['name'];
							// other field type
							} else {
								$acf_value = implode(" | ", $values);
							}
						// if field value is no array
						} else {
							// link field type
							if ( $field['type'] == 'link' ) {
								$acf_value_url = $values;
								$acf_value_title = $values;
								$acf_value_target = '_blank';
							// file field type
							} elseif ( $field['type'] == 'file' ) {
								$acf_value_url = $values;
								$acf_value_title = basename($values);
							// image field type
							} elseif ( $field['type'] == 'image' ) {
								$acf_value_url = $values;
								$acf_value_alt = basename($values);
							// other field type
							} else {
								$acf_value = $values;
							}
						}
						// list all fields and values
						$acf_label = $field['label'].': %s';
						$output .= '<p class="vsel-meta-acf-'.$field['name'].'">';
							if ( $field['type'] == 'textarea' ) {
								$output .= '<span class="acf-field-name">'.sprintf(esc_attr($acf_label), '</span><span class="acf-field-value">'.wp_kses_post($acf_value).'</span>' );
							} elseif ( $field['type'] == 'email' ) {
								$output .= '<span class="acf-field-name">'.sprintf(esc_attr($acf_label), '</span><span class="acf-field-value"><a href="mailto: '.esc_url($acf_value).'">'.esc_attr($acf_value).'</a></span>' );
							} elseif ( $field['type'] == 'url' ) {
								$output .= '<span class="acf-field-name">'.sprintf(esc_attr($acf_label), '</span><span class="acf-field-value"><a href="'.esc_url($acf_value).'" target="_blank">'.esc_attr($acf_value).'</a></span>' );
							} elseif ( $field['type'] == 'link' ) {
								$output .= '<span class="acf-field-name">'.sprintf(esc_attr($acf_label), '</span><span class="acf-field-value"><a href="'.esc_url($acf_value_url).'" target="'.esc_attr($acf_value_target).'">'.esc_attr($acf_value_title).'</a></span>' );
							} elseif ( $field['type'] == 'file' ) {
								$output .= '<span class="acf-field-name">'.sprintf(esc_attr($acf_label), '</span><span class="acf-field-value"><a href="'.esc_url($acf_value_url).'" target="_blank">'.esc_attr($acf_value_title).'</a></span>' );				
							} elseif ( $field['type'] == 'image' ) {
								$output .= '<img src="'.esc_url($acf_value_url).'" alt="'.esc_attr($acf_value_alt).'" />';
							} elseif ( ($field['type'] == 'text') || ($field['type'] == 'number') || ($field['type'] == 'range') || ($field['type'] == 'select') || ($field['type'] == 'checkbox') || ($field['type'] == 'radio') || ($field['type'] == 'date_picker') || ($field['type'] == 'time_picker') || ($field['type'] == 'date_time_picker') ) {
								$output .= '<span class="acf-field-name">'.sprintf(esc_attr($acf_label), '</span><span class="acf-field-value">'.esc_attr($acf_value).'</span>' );
							} else {
								$output .= '<span class="acf-field-name">'.esc_attr__( 'Field type not supported.', 'very-simple-event-list' ).'</span>';
							}
						$output .= '</p>';
					}
				}
			}
