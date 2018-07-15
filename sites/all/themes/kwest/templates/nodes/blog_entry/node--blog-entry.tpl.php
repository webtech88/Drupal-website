<?php if (!$teaser): ?>

    <?php print render(block_get_blocks_by_region('node_top')); ?>
    
    <h2><?php echo $title ?></h2>
    <hr class="short thick">
<?php endif ?>

<div class="teaser">
    <?php
        if ($content['field_style']['#items'][0]['value'] !== 'right')
            echo render($content['field_image']);
    ?>
    <p class="date float-left">
        <?php echo format_date($created, 'custom', 'd <\s\p\a\n>M</\s\p\a\n>') ?>
    </p>
    <div class="clip wysiwyg">
        <?php
            if ($content['field_style']['#items'][0]['value'] === 'right') {
                $content['field_image'][0]['#image_style'] = '240x';
                echo render($content['field_image']);
            }
        ?>
        <?php if (!$teaser): ?>
            <?php echo render($content['body']) ?>
        <?php else: ?>
            <p>
                <?php echo strip_tags(render($content['body'])) ?>
                <?php echo l('Read more', "node/{$nid}", array(
                    'attributes' => array(
                        'class' => 'icon-link icon-arrow-right icon-right'
                    ),
                )) ?>
            </p>
        <?php endif ?>

        <div class="blog-category node-blog-entry">
            <div class="blog-post">
              <?php print render($category_block);  ?>
            </div>
        </div>

    </div>
    <?php
        $addthis_id = variable_get('kwest_addthis_profile_id', '');
        if ($addthis_id):
    ?>
        <div class="grid padding">
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $addthis_id ?>" async="async"></script>
            <div class="v320-1 addthis_sharing_toolbox"></div>
        </div>
    <?php endif ?>
</div>

<?php if (!$teaser): ?>
    <?php echo render($content['field_other_news']) ?>
<?php endif ?>
