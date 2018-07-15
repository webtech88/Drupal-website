<?php foreach ($items as $item): ?>
    <div class="v320-1 wysiwyg"><p>
        <?php echo l($item['#element']['title'], $item['#element']['url'], array(
            'query' => (!empty($item['#element']['query'])) ? $item['#element']['query'] : '',
            'fragment' => (!empty($item['#element']['fragment'])) ? $item['#element']['fragment'] : '',
            'attributes' => array(
                'class' => 'button icon-arrow-right icon-right',
                'title' => $item['#element']['title'],
                'target' => '_blank',
            ),
        )); ?>
    </p></div>
<?php endforeach ?>
