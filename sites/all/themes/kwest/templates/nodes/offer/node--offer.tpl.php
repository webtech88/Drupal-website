<?php if (!$teaser): ?>
    
    <div class="v320-1 v720-3-of-4 v1280-4-of-5">
        
        <?php print render(block_get_blocks_by_region('node_top')); ?>
        
        <div class="container padding-big">
            <div class="clip">
                <div class="grid padding big">
                    <div class="v320-1 wysiwyg">
                        <h2>
                            <?php echo $title ?>
                            <span class="subtitle"><?php echo render($content['field_subtitle']) ?></span>
                        </h2>
                        <hr class="short thick">
                        <?php echo render($content['body']) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container padding small">
            <div class="grid">
                <div class="v320-1-of-2 text-left">
                    <?php if (!empty($content['field_related_offers'])): ?>
                        <h2 class="no-margin-bottom">
                            <span class="subtitle black"><?php echo t('Other offers') ?></span>
                        </h2>
                    <?php endif ?>
                </div>
                <!-- <div class="v320-1-of-2 text-right">
                    <?php /*echo l(t('Back'), 'offers/'. str_replace(' ', '-', strtolower($field_category[0]['taxonomy_term']->name)), array(
                        'attributes' => array(
                            'class' => array('button icon icon-arrow-left'),
                        ),
                    ))*/ ?>
                </div> -->
            </div>
        </div>
    </div>

    <div class="gallery related-offer clip v320-1 float-left">
        <div class="grid rtl middle">
            <div class="v320-hide v480-hide v720-1-of-4 v960-1-of-5">
                <figure class="sidebar-image triangle-color-inverted">
                    <?php echo render($content['field_image']) ?>
                </figure>
            </div>
            <div class="v320-1 v960-4-of-5">
                <div class="grid middle">
                    <?php echo render($content['field_related_offers']) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="v320-1 v720-1-of-4 v1280-1-of-5">
        <?php if(!empty($content['field_testimonials'])): ?>
            <div class="container padding inverted text-center">
                <?php echo render($content['field_testimonials']) ?>
            </div>
        <?php endif; ?>
    </div>
<?php else: ?>
    <div class="v320-1 v480-1-of-2">
        <figure class="tile-image-left triangle-color-inverted">
            <script type="image/media-set">
                <?php
                    $path = $node->field_image['und'][0]['uri'];
                    $url = url("node/{$node->nid}");
                ?>
                <a href="<?php echo $url ?>" data-viewports="320" style="display: block; width: 320px; height: 160px">
                    <img data-src="<?php echo image_style_url('320x160', $path) ?>" alt="" width="320" height="160">
                </a>
                <a href="<?php echo $url ?>" data-viewports="480 720 960 1280 1600 1920" style="display: block; width: 198px; height: 198px">
                    <img data-src="<?php echo image_style_url('gallery_thumbnail', $path) ?>" alt="" width="198" height="198">
                </a>
            </script>
        </figure>
    </div>
    <div class="v320-1 v480-1-of-2 text-center">
        <div class="tile container inverted">
            <div>
                <h3><?php echo $title ?></h3>
                <p><?php echo render($content['field_subtitle']) ?></p>
            </div>
        </div>
    </div>
<?php endif ?>
