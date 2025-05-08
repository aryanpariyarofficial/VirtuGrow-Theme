<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php if (is_front_page()): ?>
        <title>Home - <?php bloginfo('name'); ?></title>
        <meta name="title" content="IT Company in Netherland | Website, App & Digital Marketing Services">
        <meta name="description"
            content="Looking for the best IT company in Netherland for website development, App development, SEO, SMM and other services? We offer all IT & Marketing Services. Contact Us!">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:image"
            content="<?php echo get_template_directory_uri(); ?>/assets/images/website-ontwikkeling.webp">
        <meta property="og:title" content="IT Company in Netherland | Website, App & Digital Marketing Services">
        <meta property="og:description"
            content="Looking for the best IT company in Netherland for website development, App development, SEO, SMM and other services? We offer all IT & Marketing Services. Contact Us!">
        <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <?php else: ?>
        <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php endif; ?>


    <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assetss/images/favicon.svg"
        type="image/x-icon">
    <!-- fontawesome CSS -->

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assetss/css/fontawesome.css" rel="stylesheet"
        type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assetss/css/brands.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assetss/css/solid.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assetss/css/bootstrap.min.css">

    <!-- fancybox -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assetss/css/fancybox.css">

    <!-- owl-slider -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assetss/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assetss/css/owl.theme.default.min.css">

    <!-- aos animation -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assetss/css/animate.min.css">

    <!-- gohighlevel form preload  -->
    <link rel="preload" href="https://link.virtugrow.nl/js/form_embed.js" as="script">

    <!-- global css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assetss/css/style.css">


    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/api.js" async="" defer=""></script>