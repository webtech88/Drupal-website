<?php
/**
 * @file
 * rooms.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function rooms_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'room_attributes';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'room_attributes';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['distinct'] = TRUE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'views_accordion';
  $handler->display->display_options['style_options']['grouping'] = array(
    0 => array(
      'field' => 'name',
      'rendered' => 1,
      'rendered_strip' => 0,
    ),
  );
  $handler->display->display_options['style_options']['row_class'] = 'icon-group-[name] icon-label-[field_icon_label] icon-index-[tid]';
  $handler->display->display_options['style_options']['use-grouping-header'] = 1;
  $handler->display->display_options['style_options']['collapsible'] = 1;
  $handler->display->display_options['style_options']['row-start-open'] = '0';
  $handler->display->display_options['style_options']['autoheight'] = 0;
  $handler->display->display_options['style_options']['disableifone'] = 1;
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Relationship: Content: Room icons (field_room_icons) */
  $handler->display->display_options['relationships']['field_room_icons_tid']['id'] = 'field_room_icons_tid';
  $handler->display->display_options['relationships']['field_room_icons_tid']['table'] = 'field_data_field_room_icons';
  $handler->display->display_options['relationships']['field_room_icons_tid']['field'] = 'field_room_icons_tid';
  $handler->display->display_options['relationships']['field_room_icons_tid']['required'] = TRUE;
  /* Relationship: Taxonomy term: Content using Room icons */
  $handler->display->display_options['relationships']['reverse_field_room_icons_node']['id'] = 'reverse_field_room_icons_node';
  $handler->display->display_options['relationships']['reverse_field_room_icons_node']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['relationships']['reverse_field_room_icons_node']['field'] = 'reverse_field_room_icons_node';
  $handler->display->display_options['relationships']['reverse_field_room_icons_node']['relationship'] = 'field_room_icons_tid';
  /* Relationship: Taxonomy term: Parent term */
  $handler->display->display_options['relationships']['parent']['id'] = 'parent';
  $handler->display->display_options['relationships']['parent']['table'] = 'taxonomy_term_hierarchy';
  $handler->display->display_options['relationships']['parent']['field'] = 'parent';
  $handler->display->display_options['relationships']['parent']['relationship'] = 'field_room_icons_tid';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Room icons */
  $handler->display->display_options['fields']['field_room_icons']['id'] = 'field_room_icons';
  $handler->display->display_options['fields']['field_room_icons']['table'] = 'field_data_field_room_icons';
  $handler->display->display_options['fields']['field_room_icons']['field'] = 'field_room_icons';
  $handler->display->display_options['fields']['field_room_icons']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_room_icons']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_room_icons']['group_rows'] = FALSE;
  $handler->display->display_options['fields']['field_room_icons']['delta_offset'] = '0';
  /* Field: Taxonomy term: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['relationship'] = 'parent';
  $handler->display->display_options['fields']['name']['label'] = '';
  $handler->display->display_options['fields']['name']['exclude'] = TRUE;
  $handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
  /* Field: Taxonomy term: Icon label (prefix) */
  $handler->display->display_options['fields']['field_icon_label']['id'] = 'field_icon_label';
  $handler->display->display_options['fields']['field_icon_label']['table'] = 'field_data_field_icon_label';
  $handler->display->display_options['fields']['field_icon_label']['field'] = 'field_icon_label';
  $handler->display->display_options['fields']['field_icon_label']['relationship'] = 'field_room_icons_tid';
  $handler->display->display_options['fields']['field_icon_label']['label'] = '';
  $handler->display->display_options['fields']['field_icon_label']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_icon_label']['hide_empty'] = TRUE;
  /* Field: Taxonomy term: Icon */
  $handler->display->display_options['fields']['field_icon']['id'] = 'field_icon';
  $handler->display->display_options['fields']['field_icon']['table'] = 'field_data_field_icon';
  $handler->display->display_options['fields']['field_icon']['field'] = 'field_icon';
  $handler->display->display_options['fields']['field_icon']['relationship'] = 'field_room_icons_tid';
  $handler->display->display_options['fields']['field_icon']['label'] = '';
  $handler->display->display_options['fields']['field_icon']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_icon']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_icon']['settings'] = array(
    'image_style' => 'room_icons',
    'image_link' => '',
  );
  /* Field: Taxonomy term: Icon short text */
  $handler->display->display_options['fields']['field_icon_short_text']['id'] = 'field_icon_short_text';
  $handler->display->display_options['fields']['field_icon_short_text']['table'] = 'field_data_field_icon_short_text';
  $handler->display->display_options['fields']['field_icon_short_text']['field'] = 'field_icon_short_text';
  $handler->display->display_options['fields']['field_icon_short_text']['relationship'] = 'field_room_icons_tid';
  $handler->display->display_options['fields']['field_icon_short_text']['label'] = '';
  $handler->display->display_options['fields']['field_icon_short_text']['element_label_colon'] = FALSE;
  /* Field: Content: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  $handler->display->display_options['fields']['nid']['exclude'] = TRUE;
  /* Field: Taxonomy term: Term ID */
  $handler->display->display_options['fields']['tid']['id'] = 'tid';
  $handler->display->display_options['fields']['tid']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['fields']['tid']['field'] = 'tid';
  $handler->display->display_options['fields']['tid']['relationship'] = 'field_room_icons_tid';
  $handler->display->display_options['fields']['tid']['label'] = '';
  $handler->display->display_options['fields']['tid']['exclude'] = TRUE;
  $handler->display->display_options['fields']['tid']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['tid']['separator'] = '';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Contextual filter: Content: Nid */
  $handler->display->display_options['arguments']['nid']['id'] = 'nid';
  $handler->display->display_options['arguments']['nid']['table'] = 'node';
  $handler->display->display_options['arguments']['nid']['field'] = 'nid';
  $handler->display->display_options['arguments']['nid']['default_action'] = 'default';
  $handler->display->display_options['arguments']['nid']['default_argument_type'] = 'node';
  $handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['nid']['specify_validation'] = TRUE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'room' => 'room',
  );

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $export['room_attributes'] = $view;

  return $export;
}
