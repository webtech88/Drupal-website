<div class="v320-1 v720-3-of-4 v1280-4-of-5">

    <?php print render(block_get_blocks_by_region('node_top')); ?>
    
    <div class="container padding-big">
        <div class="clip">
            <div class="grid padding big">
                <div class="v320-1 wysiwyg">
                    <?php if ($content['field_subtitle']): ?>
                        <h2><?php echo render($content['field_subtitle']) ?></h2>
                        <hr class="short thick">
                    <?php endif ?>
                    <?php if ($node->nid == 217): ?>
                    <div class="blog-category">
                        <?php print render($category_block);  ?>
                    </div>
                    <?php endif ?>
                    <?php echo render($content['body']) ?>
                </div>
                <?php echo render($content['field_boxes']) ?>
                <?php echo render($content['field_action']) ?>
                <?php if ($node->field_view): ?>
                    <div class="v320-1 wysiwyg">
                        <?php echo render($content['field_view']) ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

<?php echo render($content['field_gallery']) ?>
<?php echo render($content['field_promo_boxes']) ?>
