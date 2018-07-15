<?php

/**
 * @file
 * Default theme implementation for field collection items.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) field collection item label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-field-collection-item
 *   - field-collection-item-{field_name}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>

<?php

if (isset($content['field_action_buttons']['#items'][0]['url']) && $content['field_action_buttons']['#items'][0]['title']) {
  $link_url = $content['field_action_buttons']['#items'][0]['url'];
  $link_title = $content['field_action_buttons']['#items'][0]['title'];
  $link = $content['field_action_buttons']['#items'][0];
  $node = menu_get_object();

  if (isset($content['field_fc_rooms_google_code']['#items'][0]['value'])) {
    $google_code = $content['field_fc_rooms_google_code']['#items'][0]['value'];
    $google_code =  str_replace('"', '', $google_code); // Prevent for errors when somebody add " char.
  }
  else {
    $google_code = '';
  }

  if(!isset($link['query'])) {
    $link['query'] = '';
  }
  if(!isset($link['fragment'])) {
    $link['fragment'] = '';
  }
  
  // @TODO - do something with google code.

  echo '<div><p>' . l($link_title, $link_url, array(
      'query' => $link['query'],
      'fragment' => $link['fragment'],
      'attributes' => array(
        'rel' => 'nofollow',
        'class' => 'button icon-right icon-arrow-right',
        'target' => '_blank',
        'data-ga-category' => 'Reservations',
        'data-ga-action' => "Books from {$node->title}",
        'data-ga-label' => 'Book Now Button',
        'onclick' => $google_code,
      )
    )) . '</p></div>';

}
?>
