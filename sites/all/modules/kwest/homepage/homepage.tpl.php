<?php /*echo theme('kwest_background', array(
    'path' => file_load(variable_get('kwest_homepage_background'))->uri,
))*/ ?>

<div class="page-column vertical-middle homepage-column">
    <div class="page-content dark-background">
        <div class="grid clear bottom">
            <div class="v320-1 v720-1-of-2 v960-2-of-5">
                <div class="container padding-big">
                    <div class="wysiwyg">
                        <h2><?php echo variable_get('kwest_homepage_header', 'Welcome') ?></h2>
                        <hr class="short thick white">
                        <?php $body = variable_get('kwest_homepage_body') ?>
                        <p><?php echo $body['value'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
