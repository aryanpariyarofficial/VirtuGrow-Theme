<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VirtuGrow
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
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

    <!-- global css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assetss/css/style.css">


    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/api.js" async="" defer=""></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header" id="myHeader">
    <?php
$top_header_menu = get_field('top_header_menu', 'option'); // assuming it's in Theme Options

if ($top_header_menu) :

    $home = $top_header_menu['home'];
    $home_link = $top_header_menu['home_link'];

    $wat_doen_wij = $top_header_menu['wat_doen_wij'];
    $wat_doen_wij_link = $top_header_menu['wat_doen_wij_link'];

    $pricing = $top_header_menu['pricing'];
    $pricing_link = $top_header_menu['pricing_link'];

    $our_work = $top_header_menu['our_work'];
    $our_work_link = $top_header_menu['our_work_link'];

    $over_ons = $top_header_menu['over_ons'];
    $over_ons_link = $top_header_menu['over_ons_link'];

    $contact_ons = $top_header_menu['contact_ons'];
    $contact_ons_link = $top_header_menu['contact_ons_link'];
?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar__custom">
            <div class="l__container container-xxl">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                if ($logo): ?>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                <?php endif; ?>

                <div class="d-flex d-lg-none">
                    <a href="tel:0851304258" class="navbar-toggler ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/phone.png" alt="phone">
                    </a>
                    <a href="" data-bs-toggle="modal" data-id="" data-bs-target="#enquiryModal" class="navbar-toggler ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/enquiry.png"
                            alt="enquiry">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbarExample-expand-lg"
                        aria-controls="offcanvasNavbarExample-expand-lg">
                        <span class="navbar-toggler-icon" data-bs-target="#offcanvasNavbarExample-expand-lg">
                            <i class="fa-solid fa-bars"></i>
                        </span>
                    </button>
                </div>
                <div class="offcanvas offcanvas-start" data-bs-hideresize="true" tabindex="-1"
                    id="offcanvasNavbarExample-expand-lg" aria-labelledby="offcanvasNavbarExample-expand-lgLabel"
                    style="visibility: hidden" aria-hidden="true">
                    <div class="offcanvas-header">
                        <?php if ($logo): ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="offcanvas-title" id="offcanvasLabel">
                                <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>">
                            </a>
                        <?php endif; ?>

                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>



                    <div class="offcanvas-body">
                        
                        <ul class="navbar-nav justify-content-lg-center menu__inner flex-grow-1">
                            <li class="menu__inner--item">
                                <?php if (!empty($home) && !empty($home_link)) : ?>
                                <a href="<?php echo esc_url($home_link); ?>" class="menu__inner--item--link">
                                    <span data-hover="<?php echo esc_html($home); ?>"><?php echo esc_html($home); ?></span>
                                </a>
                                <?php endif; ?>
                            </li>
                            <li class="menu__inner--item menu__dropdown d-none d-lg-none">
                                <a href="#" class="menu__inner--item--link">
                                    <span data-hover="Wat Doen Wij">Wat Doen Wij</span>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </a>
                                <div class="submenu megamenu__normal">
                                    <div class="accordion custom__accordion">
                                        <div class="accordion__item">
                                            <a class="accordion__title" href="javascript:void(0)">
                                                WebDevelopment
                                                <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <div class="accordion__content menu__drop" style="display: none;">


                                                <div class="">
                                                    <a href="/services/website-design-in-nepal">
                                                        <div class="textbox__type">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Mask_group.svg"
                                                                alt="">
                                                            <div>
                                                                <h5>Website Development</h5>
                                                                <p>Specialized Custom Website Development Services</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>



                                                <div class="">
                                                    <a href="/services/mobile-app-development">
                                                        <div class="textbox__type">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Mask_group_D3xoMhf.svg"
                                                                alt="">
                                                            <div>
                                                                <h5>App Development</h5>
                                                                <p>Building Custom Apps for Seamless User Experience</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>



                                                <div class="">
                                                    <a href="/services/system-software-development">
                                                        <div class="textbox__type">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Mask_group_BKktSAc.svg"
                                                                alt="">
                                                            <div>
                                                                <h5>System/Software Development</h5>
                                                                <p>Cutting-edge System/Software Development Solutions
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>



                                                <div class="">
                                                    <a href="/services/ui-ux-design">
                                                        <div class="textbox__type">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Mask_group_kx0r4jm.svg"
                                                                alt="">
                                                            <div>
                                                                <h5>UI/UX</h5>
                                                                <p>Design UI/UX interfaces for effortless user
                                                                    interaction</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="accordion__item">
                                            <a class="accordion__title" href="/online-marketing">
                                                Online Marketing
                                                <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <div class="accordion__content menu__drop" style="display: none">


                                                <div class="">
                                                    <a href="/services/seo-in-nepal">
                                                        <div class="textbox__type">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Mask_group_n0wKmHg.svg"
                                                                alt="">
                                                            <div>
                                                                <h5>Search Engine Optimization (SEO)</h5>
                                                                <p>Enhance Search Engine Ranking with Effective SEO</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>



                                                <div class="">
                                                    <a href="/services/social-media-marketing">
                                                        <div class="textbox__type">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Mask_group_gAGxJ1v.svg"
                                                                alt="">
                                                            <div>
                                                                <h5>Social Media Marketing (SMM)</h5>
                                                                <p>Boost online presence, engage audience</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>



                                                <div class="">
                                                    <a href="/services/graphics-design">
                                                        <div class="textbox__type">
                                                            <img src="" alt="">
                                                            <div>
                                                                <h5>Graphic Design</h5>
                                                                <p>Bringing Ideas to Visual Life</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>



                                                <div class="">
                                                    <a href="/services/content-writing">
                                                        <div class="textbox__type">
                                                            <img src="" alt="">
                                                            <div>
                                                                <h5>Content Writing</h5>
                                                                <p>Creating Content that Resonates</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>



                                                <div class="">
                                                    <a href="/services/google-ads-ppc-marketing">
                                                        <div class="textbox__type">
                                                            <img src="" alt="">
                                                            <div>
                                                                <h5>Pay Per Click</h5>
                                                                <p>Optimized Pay-Per-Click Campaigns</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>



                                                <div class="">
                                                    <a href="/services/digital-marketing">
                                                        <div class="textbox__type">
                                                            <img src="" alt="">
                                                            <div>
                                                                <h5>Digital Marketing</h5>
                                                                <p>Designing Digital Paths That Echo with Audiences</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu__inner--item nav-item mb-0 d-lg-none">
                                <div class="accordion accordion-flush" id="accordionParent">
                                    <div class="accordion-item">
                                        <a href="#" class="menu__inner--item--link accordion-button collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <span data-hover="Wat Doen Wij">Wat Doen Wij</span>
                                        </a>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionParent">
                                            <!-- web development -->
                                            <div class="accordion-item-service">
                                                <h3>WebDevelopment</h3>
                                                <ul class="list">


                                                    <li>
                                                        <a href="/webshop-development">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Website_developlent.svg"
                                                                alt="">
                                                            Webshop development
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/website-development">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/App_Development.svg"
                                                                alt="">
                                                            Website Development
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/website-support">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Programmer-amico.svg"
                                                                alt="">
                                                            Website Support
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/webshop-training">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/UI_UX.svg"
                                                                alt="">
                                                            Webshop Training
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/hosting">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/UI_UX.svg"
                                                                alt="">
                                                            Hosting
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/domeinnaam-registratie">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/UI_UX.svg"
                                                                alt="">
                                                            Domeinnaam Registratie
                                                        </a>
                                                    </li>


                                                </ul>
                                            </div>
                                            <!-- online marketing -->
                                            <div class="accordion-item-service">
                                                <h3>Online Marketing</h3>
                                                <ul class="list">


                                                    <li>
                                                        <a href="/socialmedia-marketing">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/SEO_analytics_team-amico.svg"
                                                                alt="">
                                                            Socialmedia Marketing
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/search-engine-advertising">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Mobile_Marketing-pana.svg"
                                                                alt="">
                                                            Search Engine Advertising
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/search-engine-optimalisation">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Website_Creator-pana.svg"
                                                                alt="Graphic Design Service.">
                                                            Search Engine Optimalisation
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/social-media-planner">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Blog_post-bro.svg"
                                                                alt="">
                                                            Social Media Planner
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/marketings-rapport">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Revenue-pana.svg"
                                                                alt="">
                                                            Marketings Rapport
                                                        </a>
                                                    </li>





                                                </ul>
                                            </div>
                                            <!-- Zakelijke Telefonie -->
                                            <div class="accordion-item-service">
                                                <h3>Zakelijke Telefonie</h3>
                                                <ul class="list">


                                                    <li>
                                                        <a href="/socialmedia-marketing">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/SEO_analytics_team-amico.svg"
                                                                alt="">
                                                            Socialmedia Marketing
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/search-engine-advertising">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Mobile_Marketing-pana.svg"
                                                                alt="">
                                                            Search Engine Advertising
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/search-engine-optimalisation">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Website_Creator-pana.svg"
                                                                alt="Graphic Design Service.">
                                                            Search Engine Optimalisation
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/social-media-planner">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Blog_post-bro.svg"
                                                                alt="">
                                                            Social Media Planner
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/marketings-rapport">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Revenue-pana.svg"
                                                                alt="">
                                                            Marketings Rapport
                                                        </a>
                                                    </li>





                                                </ul>
                                            </div>
                                            <!-- AI Services -->
                                            <div class="accordion-item-service">
                                                <h3>AI Services</h3>
                                                <ul class="list">


                                                    <li>
                                                        <a href="/socialmedia-marketing">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/SEO_analytics_team-amico.svg"
                                                                alt="">
                                                            Socialmedia Marketing
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/search-engine-advertising">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Mobile_Marketing-pana.svg"
                                                                alt="">
                                                            Search Engine Advertising
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/search-engine-optimalisation">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Website_Creator-pana.svg"
                                                                alt="Graphic Design Service.">
                                                            Search Engine Optimalisation
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/social-media-planner">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Blog_post-bro.svg"
                                                                alt="">
                                                            Social Media Planner
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/marketings-rapport">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Revenue-pana.svg"
                                                                alt="">
                                                            Marketings Rapport
                                                        </a>
                                                    </li>





                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class=" menu__inner--item d-none d-lg-inline-block" style="position:static;">
                                <a href="/services" class="menu__inner--item--link">
                                    <span data-hover="Wat Doen Wij">Wat Doen Wij</span>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </a>
                                <div class="megamenu">
                                    <div class="menu__drop">
                                        <div class="box" id="boxid">
                                            <h4 class="navlist active">
                                                <a href="/webdevelopment" style="text-decoration: none; color: black;">
                                                    WebDevelopment
                                                    <p>We bouwen krachtige en gebruiksvriendelijke websites die
                                                        resultaat
                                                        opleveren.</p>
                                                </a>
                                            </h4>

                                            <h4 class="navlist">
                                                <a href="/online-marketing"
                                                    style="text-decoration: none; color: black;">
                                                    Online Marketing
                                                    <p>We verhogen uw online zichtbaarheid via SEO, SEA en social media.
                                                    </p>
                                                </a>
                                            </h4>
                                            <h4 class="navlist">
                                                <a href="/zakelijke-telefonie"
                                                    style="text-decoration: none; color: black;">
                                                    Zakelijke Telefonie
                                                    <p>Altijd bereikbaar met professionele VoIP- en
                                                        communicatiesystemen.
                                                    </p>
                                                </a>
                                            </h4>
                                            <!-- AI Services -->
                                            <h4 class="navlist">
                                                <a href="/ai-services" style="text-decoration: none; color: black;">
                                                    AI Services
                                                    <p>Altijd bereikbaar met professionele VoIP- en
                                                        communicatiesystemen.
                                                    </p>
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="textbox">

                                            <!-- WebDevelopment -->
                                            <div class="textboxcontainer active">
                                                <div class="row">

                                                    <!-- Webshop development -->
                                                    <div class="col-md-6">
                                                        <a href="/webshop-development">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Website_developlent.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>Webshop development
                                                                    </h5>
                                                                    <p>Wij creëren professionele en schaalbare webshops
                                                                        die uw online verkoop stimuleren en de
                                                                        klantervaring optimaliseren.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <!-- Website Development -->
                                                    <div class="col-md-6">
                                                        <a href="/website-development">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/App_Development.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>Website Development</h5>
                                                                    <p>Met onze op maat gemaakte websites krijgt u een
                                                                        modern en responsief design dat past bij uw merk
                                                                        en doelen.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <!-- Website Support -->
                                                    <div class="col-md-6">
                                                        <a href="/website-support">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Programmer-amico.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>Website Support</h5>
                                                                    <p>Onze website support zorgt ervoor dat uw site
                                                                        altijd veilig, snel en up-to-date blijft met
                                                                        technische ondersteuning op maat.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <!-- Webshop Training -->
                                                    <div class="col-md-6">
                                                        <a href="/webshop-training">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/UI_UX.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>Webshop Training</h5>
                                                                    <p>Wij bieden praktische webshoptrainingen zodat u
                                                                        zelf eenvoudig uw producten kunt beheren en
                                                                        verkopen.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- Hosting -->
                                                    <div class="col-md-6">
                                                        <a href="/hosting">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/UI_UX.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>Hosting</h5>
                                                                    <p>Snelle, betrouwbare en veilige hostingoplossingen
                                                                        om uw website altijd online en goed bereikbaar
                                                                        te houden.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- Domeinnaam Registratie -->
                                                    <div class="col-md-6">
                                                        <a href="/domeinnaam-registratie">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/UI_UX.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>Domeinnaam Registratie</h5>
                                                                    <p>Wij helpen u bij het registreren van uw perfecte
                                                                        domeinnaam zodat u direct professioneel online
                                                                        zichtbaar bent.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                </div>
                                            </div>
                                            <!-- Online Marketing -->
                                            <div class="textboxcontainer">
                                                <div class="row">

                                                    <!-- Socialmedia Marketing -->
                                                    <div class="col-md-6">
                                                        <a href="/socialmedia-marketing">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/SEO_analytics_team-amico.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>Socialmedia Marketing</h5>
                                                                    <p>We versterken uw merk op platforms zoals
                                                                        Facebook, Instagram en LinkedIn met doelgerichte
                                                                        campagnes.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <!-- Search Engine Advertising -->
                                                    <div class="col-md-6">
                                                        <a href="/search-engine-advertising">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Mobile_Marketing-pana.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>Search Engine Advertising</h5>
                                                                    <p>Trek direct verkeer aan via betaalde
                                                                        zoekadvertenties op Google en andere
                                                                        zoekmachines.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <!-- Search Engine Optimalisation -->
                                                    <div class="col-md-6">
                                                        <a href="/search-engine-optimalisation">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Website_Creator-pana.svg"
                                                                    alt="Graphic Design Service.">
                                                                <div>
                                                                    <h5>Search Engine Optimalisation</h5>
                                                                    <p>Verbeter uw vindbaarheid in zoekmachines met
                                                                        doordachte SEO-technieken en
                                                                        contentoptimalisatie.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <!-- Social Media Planner -->
                                                    <div class="col-md-6">
                                                        <a href="/social-media-planner">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Blog_post-bro.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>Social Media Planner</h5>
                                                                    <p>Plan en beheer al uw sociale media content
                                                                        overzichtelijk en efficiënt met één tool.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <!-- Marketings Rapport -->
                                                    <div class="col-md-6">
                                                        <a href="/marketings-rapport">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Revenue-pana.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>Marketings Rapport</h5>
                                                                    <p>Ontvang duidelijke en meetbare rapporten over de
                                                                        prestaties van uw marketingcampagnes.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Zakelijke Telefonie -->
                                            <div class="textboxcontainer">
                                                <div class="row">

                                                    <!-- 085 Nummer -->
                                                    <div class="col-md-6">
                                                        <a href="/085-nummer">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/SEO_analytics_team-amico.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5> 085 Nummer</h5>
                                                                    <p>Landelijke uitstraling met één centraal
                                                                        bereikbaar nummer.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <!-- Regionaal Nummer -->
                                                    <div class="col-md-6">
                                                        <a href="/regionaal-nummer">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Mobile_Marketing-pana.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>Regionaal Nummer</h5>
                                                                    <p>Boost online presence, engage audience</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <!-- AI Voicecalling -->
                                                    <div class="col-md-6">
                                                        <a href="/ai-voicecalling">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Website_Creator-pana.svg"
                                                                    alt="Graphic Design Service.">
                                                                <div>
                                                                    <h5> AI Voicecalling</h5>
                                                                    <p>Laat AI inkomende gesprekken efficiënt
                                                                        beantwoorden en afhandelen.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <!-- Zakelijke e-mail adressen -->
                                                    <div class="col-md-6">
                                                        <a href="/zakelijke-e-mail-adressen">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Blog_post-bro.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>Zakelijke e-mail adressen</h5>
                                                                    <p>Professionele uitstraling met gepersonaliseerde
                                                                        e-maildomeinen.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- AI Services -->
                                            <div class="textboxcontainer">
                                                <div class="row">

                                                    <!-- Ai Mogelijkheden -->
                                                    <div class="col-md-6">
                                                        <a href="/ai-mogelijkheden">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/SEO_analytics_team-amico.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5> Ai Mogelijkheden</h5>
                                                                    <p>Onze AI-mogelijkheden helpen bedrijven
                                                                        efficiënter werken en</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <!-- AI Klantenservice -->
                                                    <div class="col-md-6">
                                                        <a href="/ai-klantenservice">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Mobile_Marketing-pana.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>AI Klantenservice</h5>
                                                                    <p>Met AI-klantenservice bieden we snelle,
                                                                        nauwkeurige en 24/7
                                                                        ondersteuning om de klanttevredenheid te
                                                                        verbeteren.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <!-- AI Leadgenerator -->
                                                    <div class="col-md-6">
                                                        <a href="/ai-leadgenerator">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Website_Creator-pana.svg"
                                                                    alt="Graphic Design Service.">
                                                                <div>
                                                                    <h5>AI Leadgenerator</h5>
                                                                    <p>Onze AI-gedreven leadgenerator identificeert
                                                                        potentiële klanten
                                                                        automatisch, zodat uw verkoopteam zich kan
                                                                        richten op
                                                                        conversie.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <!-- AI Afsprakenmanager -->
                                                    <div class="col-md-6">
                                                        <a href="/ai-afsprakenmanager">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Blog_post-bro.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>AI Afsprakenmanager</h5>
                                                                    <p>De AI-afsprakenmanager plant en beheert
                                                                        automatisch
                                                                        klantafspraken, waardoor uw team tijd bespaart
                                                                        en niets over het
                                                                        hoofd ziet.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- AI Reputatie Manager -->
                                                    <div class="col-md-6">
                                                        <a href="/ai-reputatie-manager">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Blog_post-bro.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>AI Reputatie Manager</h5>
                                                                    <p>De AI-afsprakenmanager plant en beheert
                                                                        automatisch
                                                                        klantafspraken, waardoor uw team tijd bespaart
                                                                        en niets over het
                                                                        hoofd ziet.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- AI Automatiseringen -->
                                                    <div class="col-md-6">
                                                        <a href="/ai-automatiseringen">
                                                            <div class="textbox__type">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Blog_post-bro.svg"
                                                                    alt="">
                                                                <div>
                                                                    <h5>AI Automatiseringen</h5>
                                                                    <p>De AI-afsprakenmanager plant en beheert
                                                                        automatisch
                                                                        klantafspraken, waardoor uw team tijd bespaart
                                                                        en niets over het
                                                                        hoofd ziet.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu__inner--item d-none d-lg-block">
                                <a href="#" class="menu__inner--item--link">
                                    <span data-hover="Pricing">Pricing</span>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </a>
                                <div class="submenu megamenu__normal">
                                    <ul class="submenu__list">
                                        <!-- <li class="item">
                                            <a href="/pricing/seo/">
                                                SEO Package
                                                <span>Typically offer a range of services including keyword
                                                    research</span>
                                            </a>
                                        </li> -->
                                        <li class="item">
                                            <a href="/social-media-pricing">
                                                Social Media Package
                                                <span>Typically offer a range of services tailored to clients' needs,
                                                    including content creation</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu__inner--item nav-item mb-0 d-lg-none">
                                <div class="accordion accordion-flush" id="accordionParent">
                                    <div class="accordion-item">
                                        <a href="#" class="menu__inner--item--link accordion-button collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            <span data-hover="Pricing">Pricing</span>
                                        </a>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionParent">
                                            <ul class="">
                                                <!-- <li class="">
                                                    <a class="nav-link" href="/pricing/seo/">SEO Package</a>
                                                </li> -->
                                                <li class="">
                                                    <a class="nav-link" href="/social-media-pricing/"> Social Media
                                                        Package</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu__inner--item">
                                <a href="/our-work" class="menu__inner--item--link">
                                    <span data-hover="Our Work">Our Work</span>
                                </a>
                            </li>
                            <li class="menu__inner--item">
                                <a href="/over-ons" class="menu__inner--item--link">
                                    <span data-hover="Over Ons">Over Ons</span>
                                </a>
                            </li>
                            <li class="menu__inner--item">
                                <a href="/contact" class="menu__inner--item--link">
                                    <span data-hover="Contact ons">Contact ons</span>
                                </a>
                            </li>
                        </ul>
                        <div class="navbar__right d-none d-lg-flex">
                            <div class="call d-none d-xl-flex">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:0851234567">085 123 4567</a>
                            </div>
                            <button data-bs-toggle="modal" data-id="" data-bs-target="#enquiryModal"
                                class="l__button l__button--border">Quick Enquiry</button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
<?php endif; ?>
    </header>




    replace : $mmi_webdev to $mmi_ai_services
$item to #itemz
$mmiwd_image to $mmiais_image
$mmiwd_title to $mmiais_title
$mmiwd_link to $mmiais_link
$mmiwd_desc to $mmiais_desc



similary for this as well

 replace : $mmi_webdev to $mmi_zakelijke_telefonie
$item to #itemz
$mmiwd_image to $mmizt_image
$mmiwd_title to $mmizt_title
$mmiwd_link to $mmizt_link
$mmiwd_desc to $mmizt_desc