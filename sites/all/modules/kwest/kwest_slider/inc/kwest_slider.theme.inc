<?php

// kwest slider block
function theme_kwest_slider($result = array()){
    $output = '';

    if(!empty($result['banners'])){
        drupal_add_css(drupal_get_path('module', 'kwest_slider'). '/css/kwest-slider.css');
        if($result['banners_count'] > 1){
            drupal_add_css(drupal_get_path('module', 'kwest_slider'). '/css/plugins/owl.carousel.min.css');
            drupal_add_js(drupal_get_path('module', 'kwest_slider'). '/js/plugins/owl.carousel.min.js', array('scope' => 'footer', 'weight' => 100));
            drupal_add_js(drupal_get_path('module', 'kwest_slider'). '/js/kwest-slider.js', array('weight' => 1));
        }
        $output .= $result['banners'];
    }
    
    return $output;
}
