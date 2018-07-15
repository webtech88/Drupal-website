<div class="grid rtl middle">
    <?php if (!empty($content['field_title'])): ?>
        <div class="v320-1 v720-3-of-4 v960-4-of-5 gallery-items">
            <div class="grid">
                <?php echo render($content['field_photo']) ?>
            </div>
        </div>
        <div class="v320-1 v720-1-of-4 v960-1-of-5 text-center">
            <div class="container padding no-padding-top">
                <h3 class="icon-block icon-camera"><?php echo render($content['field_title']) ?></h3>
                <p><?php echo render($content['field_subtitle']) ?></p>
            </div>
        </div>
    <?php else: ?>
        <div class="v320-1 no-triangle gallery-items">
            <div class="grid">
                <?php echo render($content['field_photo']) ?>
            </div>
        </div>
    <?php endif ?>
</div>
