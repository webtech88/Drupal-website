<span><?php echo l($element['#title'], $element['#href'], array_merge_recursive(
    $element['#localized_options'],
    array(
        'attributes' => array(
            'data-ga-category' => 'Social',
            'data-ga-action' => $element['#title'],
            'data-ga-label' => 'footer'
        )
    )
)) ?></span>
