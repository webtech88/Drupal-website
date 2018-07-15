<?php include '_header.tpl.php' ?>
<main>
    <?php if (isset($node->field_background[LANGUAGE_NONE][0]['uri'])): ?>
        <?php echo theme('kwest_background', array(
            'path' => $node->field_background[LANGUAGE_NONE][0]['uri'],
        )) ?>
    <?php endif ?>

    <div class="page-column">
        <div class="page-content">
            <div class="grid clear">
                <?php echo render($page['content']) ?>
            </div>
        </div>
    </div>
</main>
<?php include '_footer.tpl.php' ?>
