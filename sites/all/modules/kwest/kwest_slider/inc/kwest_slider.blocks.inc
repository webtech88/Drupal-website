<?php

//hero banner blocks
function _kwest_slider($tid){
    $result = array('banners' => '', 'banners_count' => '');
    $slide_title = '';
    $slide_body = '';
    $slide_image = array();
    $slide_link = '';
    
	$select = db_select('node', 'n');
	$select->join('field_data_field_placement ', 'fp', 'fp.entity_id = n.nid');
	$select->fields('n', array('nid'));
	$select->condition('n.type', 'kwest_page_slider')->condition('n.status', 1)->condition('fp.field_placement_tid', $tid);
    $query = $select->orderBy('n.changed', 'DESC')->execute()->fetchColumn();

	if(!empty($query)){
        $node = node_load($query);
        if(!empty($node->field_slider['und'])){
            $result['banners_count'] = count($node->field_slider['und']);
            foreach($node->field_slider['und'] as $slider){
                if(function_exists('field_collection_item_load')){
                    $slider_fields = field_collection_item_load($slider['value']);
                    if(!empty($slider_fields)){
                        $slide_title = $slider_fields->field_title['und'][0]['value'];
                        $slide_body = $slider_fields->field_body['und'][0]['value'];
                        $slide_image = $slider_fields->field_image['und'][0];
                        $slide_link = $slider_fields->field_action['und'][0];
                        $uniqual_class = !empty($slider_fields->field_slider_class['und'][0]['value']) ? ' ' . $slider_fields->field_slider_class['und'][0]['value'] : '';
                    }
                }
                $result['banners'] .= '<div class="kwest-slider-block clearfix">';
                    $result['banners'] .= '<div class="unique-class' . $uniqual_class . '">';
                        $result['banners'] .= theme('kwest_slider_background', array('path' => $slide_image['uri']));
                        if(!empty($slide_title) || !empty($slide_body) || !empty($slide_link)){
                            $result['banners'] .= '<div class="promo-text">';
                                if(!empty($slide_title)){
                                    $result['banners'] .= '<h3 class="slide-title">' .$slide_title. '</h3>';
                                }
                                if(!empty($slide_body)){
                                    $result['banners'] .= '<div class="slide-text">' .$slide_body. '</div>';
                                }
                                if(!empty($slide_link)){
                                    $slide_link['attributes']['class'] = 'button slider-button' . ' ' . $slide_link['attributes']['class'];
                                    $result['banners'] .= '<div class="slide-link-holder">' .l($slide_link['title'], $slide_link['url'], array('attributes' => $slide_link['attributes'])). '</div>';
                                }
                            $result['banners'] .= '</div>';
                        }
                    $result['banners'] .= '</div>';
                $result['banners'] .= '</div>';
            }
        }
        /*if(!empty($node->field_slider_bg['und'])){
            $slider_bg_img = '<figure class="hero-block-bg">' .theme('image', array('path' => $node->field_slider_bg['und'][0]['uri'], 'alt' => $node->title, 'title' => $node->title)). '</figure>';
        }*/
	}

    $sliderAutoplay = variable_get('kwest_slider_autoplay_' .$tid);
    drupal_add_js(array(
        'sliderAutoplay' => $sliderAutoplay, 
    ), 'setting');
    $sliderAutoplayTimeout = variable_get('kwest_slider_autoplay_timeout_' .$tid);
    drupal_add_js(array(
        'sliderAutoplayTimeout' => $sliderAutoplayTimeout, 
    ), 'setting');

    $output =  theme('kwest_slider', $result);
	return $output;
}