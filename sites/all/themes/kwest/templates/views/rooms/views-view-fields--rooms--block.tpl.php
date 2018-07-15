<figure class="image-link margin-top margin-bottom text-center">
    <?php echo $fields['field_image']->content ?>
    <figcaption>
        <h2><?php echo $fields['title']->content ?></h2>
        <p><?php echo l('Learn more', "node/{$fields['nid']->content}", array(
            'attributes' => array(
                'class' => 'button icon-arrow-right icon-right',
            ),
        )) ?></p>
    </figcaption>
</figure>
