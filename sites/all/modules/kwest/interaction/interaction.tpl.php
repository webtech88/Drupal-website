<div class="v320-1 v720-3-of-4 v960-3-of-5 v1280-4-of-5">
    <div class="container padding-big">
        <div class="wysiwyg">
            <h2><?php echo t('K west in social media') ?></h2>
            <hr class="short thick">
            <div class="grid padding">
                <?php if ($facebook_status): ?>
                    <div class="v320-1 v720-1-of-2">
                        <div class="social-widget">
                            <iframe src="//www.facebook.com/plugins/likebox.php?<?php echo http_build_query(array(
                                'href' => "https://www.facebook.com/{$facebook_id}",
                                'width' => null,
                                'height' => 590,
                                'colorscheme' => 'dark',
                                'header' => 'true',
                                'stream' => 'true',
                            )) ?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:590px;" allowTransparency="true"></iframe>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($twitter_status): ?>
                    <div class="v320-1 v720-1-of-2">
                        <div class="social-widget">
                            <a class="twitter-timeline" height="590" data-dnt="true" href="https://twitter.com/<?php echo $twitter_id ?>" data-widget-id="<?php echo $twitter_widget_id ?>">Tweets by @<?php echo $twitter_id ?></a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($pinterest_status): ?>
                    <div class="v320-1">
                        <div class="social-widget">
                            <a data-pin-do="embedBoard" href="http://www.pinterest.com/<?php echo $pinterest_user_id ?>/<?php echo $pinterest_gallery_id ?>/"></a>
                            <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
