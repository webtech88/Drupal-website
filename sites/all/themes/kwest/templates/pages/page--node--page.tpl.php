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
        <div class="page-content<?php if ($node->field_gallery || $node->field_promo_boxes):?> sidebar-background<?php endif ?>">
            <div class="grid clear">
                <?php echo render($page['content']) ?>
                <?php if (!empty($page['sidebar'])): ?>
                    <div class="v320-1 v720-1-of-4 v1280-1-of-5">
                        <?php echo render($page['sidebar']) ?>
                        <?php $sidebar = kwest_get_sidebar($page); ?>
                        <div class="container padding inverted text-center">
                            <?php if (!empty($sidebar['title'])): ?>
                                <div class="grid sidebar-contact-box">
                                    <div class="v320-1">
                                        <?php echo $sidebar['title'] ?>
                                        <?php echo $sidebar['body'] ?>
                                    </div>
                                </div>
                            <?php endif ?>
                            <?php echo $sidebar['testimonials'] ?>
                        </div>
                    </div>
                <?php elseif ($sidebar = kwest_get_sidebar($page)): ?>
                    <div class="v320-1 v720-1-of-4 v1280-1-of-5">
                        <div class="container padding inverted text-center">
                            <?php if (!empty($sidebar['title'])): ?>
                                <div class="grid sidebar-contact-box">
                                    <div class="v320-1">
                                        <?php echo $sidebar['title'] ?>
                                        <?php echo $sidebar['body'] ?>
                                    </div>
                                </div>
                            <?php endif ?>
                            <?php echo $sidebar['testimonials'] ?>
                        </div>
                        <?php echo $sidebar['image'] ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</main>
<?php include '_footer.tpl.php' ?>
