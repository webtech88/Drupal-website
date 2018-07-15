<?php include '_header.tpl.php' ?>
<main>
    <?php if (isset($node->field_background[LANGUAGE_NONE][0]['uri'])): ?>
        <?php echo theme('kwest_background', array(
            'path' => $node->field_background[LANGUAGE_NONE][0]['uri'],
        )) ?>
    <?php endif ?>

    <div class="page-column">
        <header class="page-column-header v320-1 v960-4-of-5 text-center">
            <h1><?php echo $node->title ?></h1>
            <hr class="short thick">
        </header>
        <div class="page-content sidebar-background">
            <div class="grid clear">
                <?php echo render($page['content']) ?>
                <div class="v320-1 v720-1-of-4 v1280-1-of-5">
                    <div class="container padding inverted text-center">
                        <?php if ($sidebar = kwest_get_sidebar($page)): ?>
                            <?php if (!empty($sidebar['title'])): ?>
                                <div class="grid sidebar-contact-box">
                                    <div class="v320-1">
                                        <?php echo $sidebar['title'] ?>
                                        <?php echo $sidebar['body'] ?>
                                        <?php echo $sidebar['testimonials'] ?>
                                    </div>
                                </div>
                            <?php endif ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include '_footer.tpl.php' ?>
