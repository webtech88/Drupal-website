<div class="clip margin-top">
    <div class="grid padding medium">
        <?php foreach ($items as $i => $item): $link = $item['#element'] ?>
            <?php dpm($link) ?>
            <div><p>
            <?php echo l($link['title'], $link['url'], array(
                'query' => $link['query'],
                'fragment' => $link['fragment'],
                'attributes' => array(
                    'rel' => 'nofollow',
                    'class' => 'button icon-right icon-arrow-right',
                    'target' => '_blank',
                    'data-ga-category' => 'Reservations',
                    'data-ga-action' => "Books from {$element['#object']->title}",
                    'data-ga-label' => 'Book Now Button',
                )
            )) ?>
            </p></div>
        <?php endforeach ?>
    </div>
</div>
