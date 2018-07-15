<div class="block-holder contextual-links-region">
    <?php print render($title_prefix); ?>
        <?php if ($block->subject): ?>
            <h3><?php print $block->subject ?></h3>
        <?php endif;?>
    <?php print render($title_suffix); ?>
	<div class="scroll-help">
		<?php print $content ?>
	</div>
</div>
