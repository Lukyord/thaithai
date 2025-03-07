<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_index = ($page == basename(dirname($_SERVER['PHP_SELF']), "/") || $page == 'index.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thai Thai</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="Thai Thai">
    <meta property="og:image" content="<?php echo $root; ?>assets/media/share.jpg">
    <meta property="og:type" content="website">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>assets/media/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>assets/media/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $root; ?>assets/media/favicon/favicon-96x96.png">
    <link rel="manifest" href="<?php echo $root; ?>assets/media/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $root; ?>assets/media/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#E73E16">
    <meta name="theme-color" content="#E73E16">

    <!-- CSS:WP -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/navigation_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/gallery_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/plugins/contact-form-7/styles.css" type="text/css" media="all">
    <!-- CSS:LIBRARY -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/animate.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/jquery-ui-effect.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/liMarquee/liMarquee.css">
    <!-- CSS:CONFIG -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/font.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-rwd.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-wp.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-default.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://use.typekit.net/tzn7ipj.css">
    <!-- JS:LIBRARY -->
    <script src="<?php echo $root; ?>assets/js/library/modernizr-custom.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-migrate-3.4.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery.easing.1.3.min.js"></script>

    <!-- web by ::* www.plaimanas.com -->
</head>

<?php /* echo (in_array($page, ['about.php', 'career.php', 'news-single.php', 'career-apply-form.php', "page.php"])) ? 'no-scrollbar' : '';  */ ?>

<body>
    <div id="page" class="<?php if ($page == '404.php') {
                                echo 'error-page';
                            } ?>">
        <header id="header">
            <div class="header-nav">
                <div class="header-brand">
                    <a class="brand" href="<?php echo $root; ?>index.php">
                        <img class="logo" src="<?php echo $root; ?>assets/media/design/logo.svg" alt="">
                    </a>
                </div>

                <h5 class="c-theme show-md">
                    From the roots of wisdom to the new
                </h5>
            </div>
        </header>