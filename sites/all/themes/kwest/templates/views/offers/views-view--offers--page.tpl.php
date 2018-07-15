<div class="v320-1 v720-3-of-4 v1280-4-of-5">
    <div class="container padding-big">
        <div class="clip">
            <div class="grid padding big">
                <div class="v320-1 wysiwyg">
                    <?php
                        $terms = taxonomy_get_term_by_name(str_replace('-', ' ', arg(1)));
                        $term = array_pop($terms);
                    ?>
                    <h2><?php echo $term->name ?></h2>
                    <hr class="thick short">
                    <?php echo $term->description ?>
                </div>
                <div class="v320-1">
                    <div class="grid padding small">
                        <?php echo $rows ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
