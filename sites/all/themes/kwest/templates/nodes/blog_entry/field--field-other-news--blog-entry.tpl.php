<h2>Other news</h2>
<hr class="short thick">
<?php foreach ($items as $i => $item): ?>
    <?php echo drupal_render($item) ?>
    <?php if ($i + 1 < count($items)): ?>
        <hr class="short light">
    <?php endif ?>
<?php endforeach ?>
