<?php
    if (isset($style)) {
        $file = image_style_path($style, $path);
        if (!file_exists($file)) {
            $style = image_style_load($style);
            image_style_create_derivative($style, $path, $file);
        }
    }

    $attributes = array(
        'data-src' => file_create_url($path),
    );

    if (isset($width))
        $attributes['width'] = $width;
    if (isset($height))
        $attributes['height'] = $height;
    if (isset($title))
        $attributes['title'] = $title;
    if (isset($alt))
        $attributes['alt'] = $alt;
?>
<img <?php echo drupal_attributes($attributes) ?>>
