<?php include '_header.tpl.php' ?>
<main>
    <div class="background">
        <figure>
            <?php echo theme_image(array(
                'path' => path_to_theme() . '/static/images/map.gif',
                'width' => '1920',
                'height' => '1222',
                'attributes' => array(),
            )) ?>
        </figure>
    </div>

    <div class="page-column">
        <header class="page-column-header v320-1 v960-4-of-5 text-center">
            <h1>Contact</h1>
            <hr class="short thick">
        </header>
        <div class="page-content sidebar-background">
            <div class="grid clear">
                <div class="v320-1 v720-3-of-4 v1280-4-of-5">
                    <div class="container padding-big">
                        <?php echo render($page['content']) ?>
                    </div>
                </div>
                <div class="v320-1 v720-1-of-4 v1280-1-of-5">
                    <div class="container padding inverted text-center">
                        <div class="grid sidebar-contact-box">
                            <div class="v320-1">
                                <h3 class="icon-block icon-location">K&nbsp;West<br>Hotel &amp; Spa</h3>
                                <p>
                                    Richmond Way,<br>
                                    London W14 0AX<br>
                                    Tel: <a href="tel:+4402080086600">+44(0)20 8008 6600</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include '_footer.tpl.php' ?>
