<div class="v320-1 v720-1-of-2">
    <figure class="image-link text-center">
        <?php echo $fields['field_image']->content ?>
        <figcaption>
            <h2>
                <?php echo $fields['title']->content ?>
                <?php if ($fields['field_subtitle']->content): ?>
                    <br><small><?php echo $fields['field_subtitle']->content ?></small>
                <?php endif ?>
            </h2>
            <p><?php echo l('Learn more', "node/{$fields['nid']->content}", array(
                'attributes' => array(
                    'class' => 'button icon-arrow-right icon-right',
                ),
            )) ?></p>
        </figcaption>
    </figure>
</div>
