<style type="text/css">
    li.friends {margin: -50px -20px 10px; text-align: center}
    li.friends img {max-width: 100%}
    li.friends a:hover {padding-left: 0 !important}
    li.friends a:after {display: none !important}
    .mobile li.friends {margin: -20px -10px 0}
</style>
<div class="scrollbar-wrapper">
    <div class="scrollbar-clip">
        <div class="scrollbar-offset">
            <div class="scrollable">
                <ul>
                    <li class="friends">
                        <a href="http://friends.k-west.co.uk/?utm_source=KWestHomepage&amp;utm_medium=Button&amp;utm_campaign=Friends" rel="nofollow" target="_blank">
                            <img src="<?php echo base_path(), drupal_get_path('theme', 'kwest') ?>/kwest_friends.png">
                        </a>
                    </li>
                    <?php echo $tree ?>
                </ul>
            </div>
        </div>
    </div>
</div>
