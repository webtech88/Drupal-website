<div class="block-holder back-link-holder contextual-links-region">
    <?php print render($title_prefix); ?>
        <?php if ($block->subject): ?>
            <h3><?php print $block->subject ?></h3>
        <?php endif;?>
    <?php print render($title_suffix); ?>
	<div class="back-link">
		<?php print $content ?>
	</div>
</div>
