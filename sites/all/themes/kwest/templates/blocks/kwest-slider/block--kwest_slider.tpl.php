<?php

$block_delta = $block->delta;
$block_tid = str_replace('kwest_slider_', '', $block_delta);
$wrap_item = variable_get('kwest_slider_wrap_class_' .$block_tid, '');
$class = ($wrap_item) ? ' ' . $wrap_item : '';
?>
<div class="kwest-slider-holder owl-carousel clearfix contextual-links-region <?php print $class; ?>">
	<?php print render($title_prefix); ?>
	<?php print render($title_suffix); ?>
	<?php print $content ?>
</div>