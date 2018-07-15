<?php if (!$teaser): ?>
    <div class="v320-1 v720-3-of-4 v1280-4-of-5">

        <?php print render(block_get_blocks_by_region('node_top')); ?>
        
        <div class="container padding-big">
            <div class="clip">
                <div class="grid padding big">
                    <div class="v320-1 wysiwyg">
                        <h2>
                            <?php echo $title ?>
                        </h2>
                        <hr class="short thick">
                        <?php echo render($content['body']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <h2><?php echo $title ?></h2>
    <hr class="short thick">

    <div class="teaser">
        <p class="date float-left">
            <?php echo format_date($created, 'custom', 'd <\s\p\a\n>M</\s\p\a\n>') ?>
        </p>
        <div class="clip wysiwyg">
            <?php echo render($content['body']) ?>
        </div>
    </div>

    <?php echo render($content['field_other_news']) ?>
<?php endif ?>
