<div class="grid">
    <div class="v320-1">
        <h3 class="icon-block icon-quote">Testimonials</h3>
        <p><?php $item = array_shift($items); echo drupal_render($item) ?></p>
    </div>
    <?php foreach ($items as $item): ?>
        <div class="v320-1 v480-1-of-2 v960-1">
            <p class="icon-block icon-quote"><?php echo drupal_render($item) ?></p>
        </div>
    <?php endforeach?>
</div>
