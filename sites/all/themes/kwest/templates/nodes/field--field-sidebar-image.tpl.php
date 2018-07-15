<?php foreach ($items as $item): ?>
    <figure class="sidebar-image triangle-color-inverted">
        <?php echo drupal_render($item) ?>
    </figure>
<?php endforeach ?>
