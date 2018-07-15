<?php if ($path): ?>
    <?php $sizes = array(
        array(320, 568, '320 viewport-portrait'),
        array(320, 236, '320'),
        array(480, 354, '480'),
        array(720, 960, '720 viewport-portrait'),
        array(720, 532, '720'),
        array(960, 710, '960'),
        array(1280, 946, '1280'),
        array(1723, 1274, null, true),
    ) ?>
    <div class="slide-holder-background">
        <figure>
            <script type="image/media-set">
                <?php foreach ($sizes as $size):
                    $attr = (isset($size[2]) || isset($size[3])) ? 'data-src' : 'src';
                    $style = $size[0] . 'x' . $size[1];
                    $file = image_style_path($style, $path);
                    if (!file_exists($file)) {
                        $style_array = image_style_load($style);
                        /*if(!empty($style_watermark = image_style_load('watermark'))){
                            $style_array['effects'] = $style_array['effects'] + $style_watermark['effects'];
                        }*/
                        image_style_create_derivative($style_array, $path, $file);
                    }
                    $url = image_style_url($style, $path);
                    $info = image_get_info($file);
                    $viewports = isset($size[2]) ? $size[2] : false;
                    $fallback = isset($size[3]) ? $size[3] : false;
                ?>
                    <img
                        <?php echo $attr ?>="<?php echo $url ?>"
                        <?php if ($viewports): ?>data-viewports="<?php echo $viewports ?>"<?php endif ?>
                        <?php if ($fallback): ?>data-fallback<?php endif ?>
                        alt=""
                        width="<?php echo $info['width'] ?>"
                        height="<?php echo $info['height'] ?>"
                    >
                <?php endforeach ?>
            </script>
        </figure>
    </div>
<?php endif ?>
