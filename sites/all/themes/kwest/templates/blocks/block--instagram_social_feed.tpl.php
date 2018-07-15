<div class="v320-1 v720-3-of-4 v960-4-of-5">
    <div class="container">
        <div class="v320-1">
            <div class="social-widget instagram-widget">
                <?php print render($title_prefix); ?>
                    <?php if ($block->subject): ?>
                        <h3><?php print $block->subject ?></h3>
                    <?php endif;?>
                <?php print render($title_suffix); ?>
                <?php print $content ?>
            </div>
        </div>
    </div>
</div>