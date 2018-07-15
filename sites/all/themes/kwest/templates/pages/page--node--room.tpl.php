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
                                    </div>
                                </div>
                            <?php endif ?>
                        <?php endif ?>
                        <div class="grid">
                            <div class="v320-1">
                                <h3 class="icon-block icon-like no-margin-bottom">Why<br>you would<br>enjoy it?</h3>
                            </div>
                            <?php foreach ($node->field_reasons[LANGUAGE_NONE] as $i => $reason): ?>
                                <div class="v320-1 v480-1-of-2 v720-1">
                                    <p>
                                        <span class="number"><?php echo $i + 1 ?></span>
                                        <?php echo $reason['safe_value'] ?>
                                    </p>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include '_footer.tpl.php' ?>
