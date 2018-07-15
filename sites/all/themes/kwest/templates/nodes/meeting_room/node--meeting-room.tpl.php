<div class="v320-1 v720-3-of-4 v1280-4-of-5">

    <?php print render(block_get_blocks_by_region('node_top')); ?>

    <div class="container padding-big">
        <div class="clip">
            <div class="grid padding big">
                <div class="v320-1 wysiwyg">
                    <h2>
                        <?php echo $title ?>
                        <span class="subtitle"><?php echo render($content['field_size_price']) ?></span>
                    </h2>
                    <hr class="short thick">
                    <?php echo render($content['body']) ?>
                    <?php echo render($content['field_benefits']) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo render($content['field_gallery']) ?>
