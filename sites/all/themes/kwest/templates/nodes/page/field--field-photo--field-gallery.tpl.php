<?php foreach ($items as $item): ?>
    <div class="v320-1 v480-1-of-3 v1280-1-of-4">
        <figure>
            <script type="image/media-set">
                <?php
                    $path = $item['#item']['uri'];
                    $url = url('node/' . arg(1) . '/gallery');
                ?>
                <a href="<?php echo $url ?>" class="zoom-thumb" data-viewports="320" style="display: block; width: 320px; height: 220px">
                    <img data-src="<?php echo image_style_url('320x160', $path) ?>" alt="" width="320" height="220">
                </a>
                <a href="<?php echo $url ?>" class="zoom-thumb" data-viewports="480 720 960 1280 1600 1920" style="display: block; width: 198px; height: 198px">
                    <img data-src="<?php echo image_style_url('gallery_thumbnail', $path) ?>" alt="" width="198" height="198">
                </a>
            </script>
        </figure>
    </div>
<?php endforeach ?>
