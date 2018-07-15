<?php include '_header.tpl.php' ?>
<main>
    <?php if(!empty($page['background'])): ?>
        <div class="background-slider">
            <?php echo render($page['background']); ?>
        </div>
    <?php endif; ?>
    <?php echo render($page['content']) ?>
</main>
<?php include '_footer.tpl.php' ?>
