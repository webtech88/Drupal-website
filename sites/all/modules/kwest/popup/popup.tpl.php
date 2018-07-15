<?php if($popup && count($popup) > 0): ?>
	<?php $popup = current($popup); ?>
	<section id="popup">
		<div class="popup-content" class="clearfix">
			<?php echo $popup->body['und'][0]['value']; ?>
		</div>
	</section>
<?php endif; ?>
