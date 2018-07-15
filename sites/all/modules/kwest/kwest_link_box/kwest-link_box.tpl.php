<div class="v1280-1-of-4 link-box">
	<div class="img-box">
		<?php if(isset($link_image) && isset($link_image->uri)) { ?>
			<img src="<?php echo file_create_url($link_image->uri); ?>">
		<?php } ?>
	</div>
    <label><a href="<?php echo url($link_url); ?>"><?php echo $link_title; ?></a></label>
</div>
