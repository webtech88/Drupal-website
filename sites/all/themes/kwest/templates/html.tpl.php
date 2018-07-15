<!DOCTYPE html>
<html lang="<?php echo $language->language ?>">
    <head>
        <?php echo $head ?>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1">
        <meta name="robots" content="NOODP,NOYDIR">
        <?php if ($google_site_verification_code = variable_get('google_site_verification_code', '')): ?>
            <meta name="google-site-verification" content="<?php echo $google_site_verification_code ?>">
        <?php endif ?>
        <?php if ($domain_verification_code = variable_get('domain_verification_code', '')): ?>
            <meta name="p:domain_verify" content="<?php echo $domain_verification_code ?>">
        <?php endif ?>
        <title><?php echo $head_title ?></title>
        <?php echo $styles ?>
        <!--[if lte IE 7]>
            <link rel="stylesheet" href="<?php echo base_path(), path_to_theme() ?>/static/styles/ie7.css">
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="<?php echo base_path(), path_to_theme() ?>/static/scripts/libs/html5shiv.js"></script>
            <script src="<?php echo base_path(), path_to_theme() ?>/static/scripts/libs/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            .sg-b-h {z-index: 1000 !important}
        </style>
    </head>
    <body>
        <script>document.body.className += ' js';</script>

        <!--[if lte IE 7]>
            <div id="upgrade">
                <p class="logo"><img src="<?php echo base_path(), path_to_theme() ?>/static/images/logo.png"></p>
                <p>This website is not optimized for Internet Explorer 7 and older.</p>
                <p>Please change or update your browser.</p>
            </div>
        <![endif]-->

        <?php echo $page_top ?>
        <?php echo $page ?>
        <?php echo $scripts ?>
        <?php echo $page_bottom ?>
        <script type="text/javascript">
            (function() {
                var jQuery = require('jquery');
                jQuery(function() {
                    jQuery('link[href*=opentable]').remove();
                });
            })();
        </script>

        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=<?php echo variable_get('google_tagmanager_id'); ?>"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','<?php echo variable_get('google_tagmanager_id'); ?>');</script>
        <!-- End Google Tag Manager -->

        <?php /*
        <script type="text/javascript">
            (function(d,e,j,h,f,c,b){d.SurveyGizmoBeacon=f;d[f]=d[f]||function(){(d[f].q=d[f].q||[]).push(arguments)};c=e.createElement(j),b=e.getElementsByTagName(j)[0];c.async=1;c.src=h;b.parentNode.insertBefore(c,b)})(window,document,'script','//d2bnxibecyz4h5.cloudfront.net/runtimejs/intercept/intercept.js','sg_beacon');
            sg_beacon('init','MzMzNDkwLTdENzg1NzhCRjE4MjQwOEM5NkUwMEMwQjE0OUY0NzY5');
        </script>
        */ ?>
        
        <!-- Lead Forensics tracking -->
        <script type="text/javascript" src="https://secure.leadforensics.com/js/112333.js" ></script>
        <noscript><img alt="" src="https://secure.leadforensics.com/112333.png" style="display:none;" /></noscript>
        <!-- End Lead Forensics tracking -->
  </body>
</html>
