<?php if (!$teaser): ?>
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

        <?php echo render($content['field_gallery']) ?>

        <div class="v320-1 sub-content float-left">
            <div class="container padding-big">
                <div class="wysiwyg">
                    <div class="clip">
                        <?php echo render($content['field_room_action_buttons_fields']) ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="room-attrs">
          <?php echo views_embed_view('room_attributes', 'block', $node->nid); ?>
        </div>

        <div class="v320-1 sub-content float-left">
            <div class="container padding-big">
                <div class="wysiwyg">
                    <div class="clip">
                        <div class="grid sizing-options">
                            <?php echo render($content['field_smaller_rooms']) ?>
                            <?php echo render($content['field_bigger_rooms']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
<?php else: ?>
    <figure class="image-link margin-top margin-bottom text-center">
        <?php echo render($content['field_image']) ?>
        <figcaption>
            <h2><?php echo $title ?></h2>
            <p><?php echo l('Learn more', "node/{$node->nid}", array(
                'attributes' => array(
                    'class' => array('button', 'icon-arrow-right', 'icon-right'),
                ),
            )) ?></p>
        </figcaption>
    </figure>
<?php endif ?>
