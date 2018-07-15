<?php foreach ($items as $item): ?>
    <?php if ($item['#image_style'] == '240x'): ?>
        <figure class="float-right margin-left margin-bottom v320-2-of-5">
            <?php echo drupal_render($item) ?>
        </figure>
    <?php else: ?>
        <figure class="margin-bottom">
            <?php echo drupal_render($item) ?>
        </figure>
    <?php endif ?>
<?php endforeach ?>
