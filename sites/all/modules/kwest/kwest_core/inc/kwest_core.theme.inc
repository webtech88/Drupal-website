<?php

// scroll help block theme
function theme_kwest_core_scroll_help(){
	$output = '';

	$scroll_down_text = variable_get('kwest_core_scroll_help_down');
	$scroll_up_text = variable_get('kwest_core_scroll_help_up');
	if (!empty($scroll_down_text)) {
		$output .= '<span class="scroll-bottom title">' .$scroll_down_text. '</span>';
	}
	if (!empty($scroll_up_text)) {
		$output .= l('<span>' .$scroll_up_text.'</span>', '#', array('attributes' => array('class'=> array('scroll-top')), 'html' => TRUE));
	}

	return $output;
}

// back link block theme
function theme_kwest_core_backlink(){
	$output = '';

	$back_link_text = variable_get('kwest_core_backlink_text');
	$prev_url = dirname(drupal_get_path_alias());
	$output .= l('<span>' .$back_link_text.'</span>', $prev_url, array('attributes' => array('id'=> array('back-link')), 'html' => TRUE));
	
	return $output;
}
