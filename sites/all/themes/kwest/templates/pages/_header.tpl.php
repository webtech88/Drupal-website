<header class="page-header">
    <p class="logo">
        <?php echo l(theme('image', array(
            'path' => drupal_get_path('theme', 'kwest') . '/static/images/logo.png',
            'alt' => 'K West',
        )), '<front>', array('html' => true)) ?>
    </p>

    <?php echo render($page['main_menu']) ?>
    <?php echo render($page['book_form']) ?>
</header>
