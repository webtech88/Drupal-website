<div class="teaser">
    <?php if (isset($fields['field_image'])): ?>
        <figure class="margin-bottom">
            <?php echo $fields['field_image']->content ?>
        </figure>
    <?php endif ?>

    <p class="date float-left"><?php echo $fields['created']->content ?></p>

    <div class="clip wysiwyg">
        <h3><?php echo $fields['title']->content ?></h3>
        <p><?php echo $fields['body']->content ?></p>
    </div>
</div>
