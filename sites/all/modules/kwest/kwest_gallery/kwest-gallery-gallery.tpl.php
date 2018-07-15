<div class="gallery-fader">
    <div class="gallery-images container inverted">
        <ul class="grid no-wrap clip">
            <?php foreach ($photos as $photo): ?>
                <li class="v320-1">
                    <figure>
                        <?php echo theme('kwest_gallery_item', array('path' => $photo['uri'])) ?>
                        <figcaption class="container inverted padding">
							<?php echo $photo['title'] ?>
                        </figcaption>
                    </figure>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="gallery-thumbnails container inverted">
        <div class="gallery-controls">
            <nav>
                <button class="button alt-text-color icon-arrow-left fader-previous"><?php echo t('Previous') ?></button>
                <button class="button alt-text-color icon-arrow-right fader-next"><?php echo t('Next') ?></button>
            </nav>
            <div class="container inverted padding">
                <div class="grid">
                    <div class="v320-1 v720-1-of-6">
                        <h3 class="no-margin-bottom gallery-item-index">1/<?php echo $count ?></h3>
                    </div>
                    <div class="v320-1 v720-5-of-6">
                        <h3 class="no-margin-bottom gallery-item-caption"><?php echo $photos[0]['title'] ?></h3>
                    </div>
                </div>
            </div>
            <button class="button alt-text-color go-back" title="Go back" onclick="window.history.back();return false;">Back</button>
        </div>
    </div>
</div>
