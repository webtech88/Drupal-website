<?php include '_header.tpl.php' ?>
<main>
    <?php echo theme('kwest_background', array(
        'path' => file_load(variable_get('interaction_background'))->uri,
    )) ?>

    <div class="page-column">
        <header class="page-column-header v320-1 v960-4-of-5 text-center">
            <h1><?php echo $title ?></h1>
            <hr class="short thick">
        </header>
        <div class="page-content">
            <div class="grid clear">
                <?php echo render($page['content']) ?>
                <div class="v320-1 v720-3-of-4 v960-1-of-5">
                    <?php if ($sidebar = kwest_get_sidebar($page)): ?>
                        <?php if (!empty($sidebar['title'])): ?>
                            <div class="grid sidebar-contact-box">
                                <div class="v320-1">
                                    <?php echo $sidebar['title'] ?>
                                    <?php echo $sidebar['body'] ?>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endif ?>
                    <?php echo render($page['sidebar']) ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include '_footer.tpl.php' ?>
