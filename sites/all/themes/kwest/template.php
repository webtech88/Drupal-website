<?php
function kwest_preprocess_page(&$vars) {
    $scripts = drupal_add_js();
    unset($scripts['misc/drupal.js']);
    unset($scripts['misc/jquery.js']);
    unset($scripts['misc/jquery.once.js']);
    $vars['scripts'] = drupal_get_js('header', $scripts);

    if (!empty($vars['node']) && !empty($vars['node']->type) && arg(2) != 'gallery')
        $vars['theme_hook_suggestions'][] = 'page__node__' . $vars['node']->type;

    $status = drupal_get_http_header('status');
    if ($status == '404 Not Found')
        $vars['theme_hook_suggestions'][] = 'page__404';

    if (arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
        $term = taxonomy_term_load(arg(2));
        $vars['theme_hook_suggestions'][] = 'page__vocabulary__' . $term->vocabulary_machine_name;

        if ($term->vid = '11') {
            $vars['category_block'] = module_invoke('views', 'block_view', 'blog-block_1');
        }
        else {
            $vars['category_block'] = '';
        }

        // blog background

        $node = node_load(217);
        if (isset($node->field_background[LANGUAGE_NONE])) {
            $vars['background_image_url'] = theme('kwest_background', array(
              'path' => $node->field_background[LANGUAGE_NONE][0]['uri'],
            ));
        }
    }
        }

function kwest_preprocess_node(&$vars) {
    $node = menu_get_object();
    if ($node->nid == '217' || $node->type == 'blog_entry') {
        $vars['category_block'] = module_invoke('views', 'block_view', 'blog-block_1');
    }
    else {
        $vars['category_block'] = '';
    }
}


function kwest_form($variables) {
	$element = $variables['element'];
	if (isset($element['#action']))
		$element['#attributes']['action'] = drupal_strip_dangerous_protocols($element['#action']);

	element_set_attributes($element, array('method', 'id'));

	if (empty($element['#attributes']['accept-charset']))
		$element['#attributes']['accept-charset'] = "UTF-8";

	return '<form' . drupal_attributes($element['#attributes']) . '>' . $element['#children'] . '</form>';
}


function kwest_form_element($variables) {
	$element = &$variables['element'];

	// This function is invoked as theme wrapper, but the rendered form element
	// may not necessarily have been processed by form_builder().
	$element += array(
		'#title_display' => 'before',
	);

	$output = '';

	// If #title is not set, we don't display any label or required marker.
	if (!isset($element['#title'])) {
		$element['#title_display'] = 'none';
	}
	$prefix = isset($element['#field_prefix']) ? '<span class="field-prefix">' . $element['#field_prefix'] . '</span> ' : '';
	$suffix = isset($element['#field_suffix']) ? ' <span class="field-suffix">' . $element['#field_suffix'] . '</span>' : '';

	switch ($element['#title_display']) {
	case 'before':
	case 'invisible':
		$output .= ' ' . theme('form_element_label', $variables);
		$output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
		break;

	case 'after':
		$output .= ' ' . $prefix . $element['#children'] . $suffix;
		$output .= ' ' . theme('form_element_label', $variables) . "\n";
		break;

	case 'none':
	case 'attribute':
		// Output no label and no required marker, only the children.
		$output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
		break;
	}

	if (!empty($element['#description']))
		$output .= '<div class="description">' . $element['#description'] . "</div>\n";

	return $output;
}


function kwest_viewreference_formatter_default($vars) {
    if ($view = viewreference_get_view($vars['element'], array('embed')))
        return $view['embed'];
    return '';
}


function kwest_theme($existing, $type, $theme, $path) {
    if ($type != 'theme')
        return array();
    return array(
        'kwest_background' => array(
            'variables' => array('path' => null),
            'template' => 'templates/kwest-background',
        ),
    );
}


function kwest_get_sidebar($page) {
    $nids = element_children($page['content']['system_main']['nodes']);
    $content = $page['content']['system_main']['nodes'][current($nids)];

    $sidebar = array();

    $sidebar['title'] = render($content['field_sidebar_title']);
    $sidebar['body'] = render($content['field_sidebar_body']);

    if (empty($sidebar['title']) && $parent = kwest_get_parent_page($content['#node'])) {
        $field_sidebar_title = field_view_field('node', $parent, 'field_sidebar_title');
        $sidebar['title'] = render($field_sidebar_title);
        $field_sidebar_body = field_view_field('node', $parent, 'field_sidebar_body');
        $sidebar['body'] = render($field_sidebar_body);
    }

    $sidebar['testimonials'] = render($content['field_testimonials']);
    $sidebar['image'] = render($content['field_sidebar_image']);

    return $sidebar;
}

function kwest_get_parent_page($node) {
    $parts = explode('/', url("node/{$node->nid}"));
    array_shift($parts);
    array_pop($parts);

    $path = drupal_get_normal_path(implode('/', $parts));
    $parent = menu_get_object('node', 1, $path);
    return $parent;
}



 function kwest_views_load_more_pager($vars) {

    global $pager_page_array, $pager_total;

    $tags = $vars['tags'];
    $element = $vars['element'];
    $parameters = $vars['parameters'];

    $pager_classes = array('pager', 'pager-load-more', 'button','icon-arrow-right', 'icon-right');

    $li_next = theme('pager_next',
      array(
        'text' => (isset($tags[3]) ? $tags[3] : t($vars['more_button_text'])),
        'element' => $element,
        'interval' => 1,
        'parameters' => $parameters,
      )
    );
    if (empty($li_next)) {
      $li_next = empty($vars['more_button_empty_text']) ? '&nbsp;' : t($vars['more_button_empty_text']);
      $pager_classes[] = 'pager-load-more-empty';
    }
    // Compatibility with tao theme's pager
    elseif (is_array($li_next) && isset($li_next['title'], $li_next['href'], $li_next['attributes'], $li_next['query'])) {
      $li_next = l($li_next['title'], $li_next['href'], array('attributes' => $li_next['attributes'], 'query' => $li_next['query']));
    }

    if ($pager_total[$element] > 1) {
      $items[] = array(
        'class' => array('pager-next'),
        'data' => $li_next,
      );
      return theme('item_list',
        array(
          'items' => $items,
          'title' => NULL,
          'type' => 'ul',
          'attributes' => array('class' => $pager_classes),
        )
      );
    }

}

