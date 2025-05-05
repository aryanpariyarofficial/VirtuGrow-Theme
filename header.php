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
    <?php get_template_part('partials/header', 'links');
    wp_head(); ?>

</head>
<?php
$home_link = get_field('home_link', 'option');
$wat_doen_wij_link = get_field('wat_doen_wij_link', 'option');
$pricing_link = get_field('pricing_link', 'option');
$our_work_link = get_field('our_work_link', 'option');
$over_ons_link = get_field('over_ons_link', 'option');
$contact_ons_link = get_field('contact_ons_link', 'option');
$menu_button_1 = get_field('menu_button_1', 'option');
$menu_button_2 = get_field('menu_button_2', 'option');

$mmi_webdev = get_field('mmi_webdev', 'option');
$mmi_online_marketing = get_field('mmi_online_marketing', 'option');
$mmi_zakelijke_telefonie = get_field('mmi_zakelijke_telefonie', 'option');
$mmi_ai_services = get_field('mmi_ai_services', 'option');

$submenu_webdevelopment = get_field('submenu_webdevelopment', 'option');
$submenu_online_marketing = get_field('submenu_online_marketing', 'option');
$submenu_zakelijke_telefonie = get_field('submenu_zakelijke_telefonie', 'option');
$submenu_ai_services = get_field('submenu_ai_services', 'option');
?>

<body <?php body_class(); ?>>
    <header class="header" id="myHeader">
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
                                <?php if ($home_link): ?>
                                    <a href="<?php echo esc_url($home_link['url']); ?>" class="menu__inner--item--link">
                                        <span
                                            data-hover="<?php echo esc_html($home_link['title']); ?>"><?php echo esc_html($home_link['title']); ?></span>
                                    </a>
                                <?php endif; ?>
                            </li>
                            <li class="menu__inner--item nav-item mb-0 d-lg-none">
                                <div class="accordion accordion-flush" id="accordionParent">
                                    <div class="accordion-item">
                                        <?php if ($wat_doen_wij_link): ?>
                                            <a href="<?php echo esc_url($wat_doen_wij_link['url']); ?>"
                                                class="menu__inner--item--link accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                <span
                                                    data-hover="<?php echo esc_html($wat_doen_wij_link['title']); ?>"><?php echo esc_html($wat_doen_wij_link['title']); ?></span>
                                            </a>
                                        <?php endif; ?>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionParent">
                                            <!-- web development -->
                                            <div class="accordion-item-service">
                                                <h3><?php echo esc_html($submenu_webdevelopment['title']); ?></h3>
                                                <ul class="list">
                                                    <?php
                                                    $mmi_webdev = get_field('mmi_webdev', 'option');
                                                    if ($mmi_webdev):
                                                        foreach ($mmi_webdev as $item):
                                                            ?>
                                                            <li>
                                                                <a
                                                                    href="<?php echo esc_url($item['mmiwd_link']['url'] ?: '#'); ?>">
                                                                    <?php if ($item['mmiwd_image']): ?>
                                                                        <img src="<?php echo esc_url($item['mmiwd_image']['url']); ?>"
                                                                            alt="<?php echo esc_attr($item['mmiwd_image']['alt']); ?>">
                                                                    <?php endif; ?>
                                                                    <?php echo esc_html($item['mmiwd_title']); ?>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </ul>
                                            </div>
                                            <!-- online marketing -->
                                            <div class="accordion-item-service">
                                                <h3><?php echo esc_html($submenu_online_marketing['title']); ?></h3>
                                                <ul class="list">
                                                    <?php
                                                    $mmi_online_marketing = get_field('mmi_online_marketing', 'option');
                                                    if ($mmi_online_marketing):
                                                        foreach ($mmi_online_marketing as $itemo):
                                                            ?>
                                                            <li>
                                                                <a
                                                                    href="<?php echo esc_url($itemo['mmiom_link']['url'] ?: '#'); ?>">
                                                                    <?php if ($itemo['mmiom_image']): ?>
                                                                        <img src="<?php echo esc_url($itemo['mmiom_image']['url']); ?>"
                                                                            alt="<?php echo esc_attr($itemo['mmiom_image']['alt']); ?>">
                                                                    <?php endif; ?>
                                                                    <?php echo esc_html($itemo['mmiom_title']); ?>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </ul>
                                            </div>
                                            <!-- Zakelijke Telefonie -->
                                            <div class="accordion-item-service">
                                                <h3> <?php echo esc_html($submenu_zakelijke_telefonie['title']); ?></h3>
                                                <ul class="list">
                                                    <?php
                                                    $mmi_zakelijke_telefonie = get_field('mmi_zakelijke_telefonie', 'option');
                                                    if ($mmi_zakelijke_telefonie):
                                                        foreach ($mmi_zakelijke_telefonie as $itemz):
                                                            ?>
                                                            <li>
                                                                <a
                                                                    href="<?php echo esc_url($itemz['mmizt_link']['url'] ?: '#'); ?>">
                                                                    <?php if ($itemz['mmizt_image']): ?>
                                                                        <img src="<?php echo esc_url($itemz['mmizt_image']['url']); ?>"
                                                                            alt="<?php echo esc_attr($itemz['mmizt_image']['alt']); ?>">
                                                                    <?php endif; ?>

                                                                    <?php echo esc_html($itemz['mmizt_title']); ?>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </ul>
                                            </div>
                                            <!-- AI Services -->
                                            <div class="accordion-item-service">
                                                <h3> <?php echo esc_html($submenu_ai_services['title']); ?></h3>
                                                <ul class="list">
                                                    <?php
                                                    $mmi_ai_services = get_field('mmi_ai_services', 'option');
                                                    if ($mmi_ai_services):
                                                        foreach ($mmi_ai_services as $itema):
                                                            ?>
                                                            <li>
                                                                <a
                                                                    href="<?php echo esc_url($itema['mmiais_link']['url'] ?: '#'); ?>">
                                                                    <?php if ($itema['mmiais_image']): ?>
                                                                        <img src="<?php echo esc_url($itema['mmiais_image']['url']); ?>"
                                                                            alt="<?php echo esc_attr($itema['mmiais_image']['alt']); ?>">
                                                                    <?php endif; ?>

                                                                    <?php echo esc_html($itema['mmiais_title']); ?>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class=" menu__inner--item d-none d-lg-inline-block" style="position:static;">
                                <?php if ($wat_doen_wij_link): ?>
                                    <a href="<?php echo esc_url($wat_doen_wij_link['url']); ?>"
                                        class="menu__inner--item--link">
                                        <span
                                            data-hover="<?php echo esc_html($wat_doen_wij_link['title']); ?>"><?php echo esc_html($wat_doen_wij_link['title']); ?></span>
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                <?php endif; ?>
                                <div class="megamenu">
                                    <div class="menu__drop">
                                        <?php $mmitems = get_field('mmitems', 'option');
                                        if ($mmitems): ?>
                                            <div class="box" id="boxid">
                                                <?php foreach ($mmitems as $index => $item):
                                                    $mmi_title = $item['mmi_title'];
                                                    $mmi_desc = $item['mmi_desc'];
                                                    $mmi_link = $item['mmi_link'];
                                                    $active_class = ($index === 0) ? 'active' : '';
                                                    ?>
                                                    <h4 class="navlist <?php echo esc_attr($active_class); ?>">
                                                        <a href="<?php echo esc_url($mmi_link['url']); ?>"
                                                            target="<?php echo esc_attr($mmi_link['target']); ?>"
                                                            style="text-decoration: none; color: black;">
                                                            <?php echo esc_html($mmi_title); ?>
                                                            <p><?php echo esc_html($mmi_desc); ?></p>
                                                        </a>
                                                    </h4>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="textbox">
                                            <!-- WebDevelopment -->
                                            <div class="textboxcontainer active">
                                                <div class="row">
                                                    <?php
                                                    $mmi_webdev = get_field('mmi_webdev', 'option');
                                                    if ($mmi_webdev):
                                                        foreach ($mmi_webdev as $item):  ?>
                                                            <div class="col-md-6">
                                                                <a
                                                                    href="<?php echo esc_url($item['mmiwd_link']['url'] ?: '#'); ?>">
                                                                    <div class="textbox__type">
                                                                        <?php if ($item['mmiwd_image']): ?>
                                                                            <img src="<?php echo esc_url($item['mmiwd_image']['url']); ?>"
                                                                                alt="<?php echo esc_attr($item['mmiwd_image']['alt']); ?>">
                                                                        <?php endif; ?>
                                                                        <div>
                                                                            <?php if ($item['mmiwd_title']): ?>
                                                                                <h5><?php echo esc_html($item['mmiwd_title']); ?>
                                                                                </h5>
                                                                            <?php endif; ?>
                                                                            <?php if ($item['mmiwd_desc']): ?>
                                                                                <p><?php echo esc_html($item['mmiwd_desc']); ?></p>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </div>
                                            </div>
                                            <!-- Online Marketing -->
                                            <div class="textboxcontainer">
                                                <div class="row">
                                                    <?php
                                                    $mmi_online_marketing = get_field('mmi_online_marketing', 'option');
                                                    if ($mmi_online_marketing):
                                                        foreach ($mmi_online_marketing as $itemo):
                                                            ?>
                                                            <div class="col-md-6">
                                                                <a
                                                                    href="<?php echo esc_url($itemo['mmiom_link']['url'] ?: '#'); ?>">
                                                                    <div class="textbox__type">
                                                                        <?php if ($itemo['mmiom_image']): ?>
                                                                            <img src="<?php echo esc_url($itemo['mmiom_image']['url']); ?>"
                                                                                alt="<?php echo esc_attr($itemo['mmiom_image']['alt']); ?>">
                                                                        <?php endif; ?>
                                                                        <div>
                                                                            <?php if ($itemo['mmiom_title']): ?>
                                                                                <h5><?php echo esc_html($itemo['mmiom_title']); ?>
                                                                                </h5>
                                                                            <?php endif; ?>
                                                                            <?php if ($itemo['mmiom_desc']): ?>
                                                                                <p><?php echo esc_html($itemo['mmiom_desc']); ?></p>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </div>
                                            </div>
                                            <!-- Zakelijke Telefonie -->
                                            <div class="textboxcontainer">
                                                <div class="row">
                                                    <?php
                                                    $mmi_zakelijke_telefonie = get_field('mmi_zakelijke_telefonie', 'option');
                                                    if ($mmi_zakelijke_telefonie):
                                                        foreach ($mmi_zakelijke_telefonie as $itemz):
                                                            ?>
                                                            <div class="col-md-6">
                                                                <a
                                                                    href="<?php echo esc_url($itemz['mmizt_link']['url'] ?: '#'); ?>">
                                                                    <div class="textbox__type">
                                                                        <?php if ($itemz['mmizt_image']): ?>
                                                                            <img src="<?php echo esc_url($itemz['mmizt_image']['url']); ?>"
                                                                                alt="<?php echo esc_attr($itemz['mmizt_image']['alt']); ?>">
                                                                        <?php endif; ?>
                                                                        <div>
                                                                            <?php if ($itemz['mmizt_title']): ?>
                                                                                <h5><?php echo esc_html($itemz['mmizt_title']); ?>
                                                                                </h5>
                                                                            <?php endif; ?>
                                                                            <?php if ($itemz['mmizt_desc']): ?>
                                                                                <p><?php echo esc_html($itemz['mmizt_desc']); ?></p>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </div>
                                            </div>
                                            <!-- AI Services -->
                                            <div class="textboxcontainer">
                                                <div class="row">
                                                    <?php
                                                    $mmi_ai_services = get_field('mmi_ai_services', 'option');
                                                    if ($mmi_ai_services):
                                                        foreach ($mmi_ai_services as $itema):
                                                            ?>
                                                            <div class="col-md-6">
                                                                <a
                                                                    href="<?php echo esc_url($itema['mmiais_link']['url'] ?: '#'); ?>">
                                                                    <div class="textbox__type">
                                                                        <?php if ($itema['mmiais_image']): ?>
                                                                            <img src="<?php echo esc_url($itema['mmiais_image']['url']); ?>"
                                                                                alt="<?php echo esc_attr($itema['mmiais_image']['alt']); ?>">
                                                                        <?php endif; ?>
                                                                        <div>
                                                                            <?php if ($itema['mmiais_title']): ?>
                                                                                <h5><?php echo esc_html($itema['mmiais_title']); ?>
                                                                                </h5>
                                                                            <?php endif; ?>
                                                                            <?php if ($itema['mmiais_desc']): ?>
                                                                                <p><?php echo esc_html($itema['mmiais_desc']); ?>
                                                                                </p>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu__inner--item d-none d-lg-block">
                                <?php if ($pricing_link): ?>
                                    <a href="<?php echo esc_url($pricing_link['url']); ?>" class="menu__inner--item--link">
                                        <span
                                            data-hover="<?php echo esc_html($pricing_link['title']); ?>"><?php echo esc_html($pricing_link['title']); ?></span>
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                <?php endif; ?>
                                <div class="submenu megamenu__normal">
                                    <ul class="submenu__list">
                                        <?php
                                        $mmi_pricing = get_field('mmi_pricing', 'option');
                                        if ($mmi_pricing):
                                            foreach ($mmi_pricing as $itemp):
                                                $link = $itemp['mmip_link'];
                                                $desc = $itemp['mmip_desc'];
                                                ?>
                                                <li class="item">
                                                    <a href="<?php echo esc_url($link['url'] ?: '#'); ?>">
                                                        <?php echo esc_html($link['title']); ?>
                                                        <?php if ($desc): ?>
                                                            <span><?php echo esc_html($desc); ?></span>
                                                        <?php endif; ?>
                                                    </a>
                                                </li>
                                                <?php
                                            endforeach;
                                        endif;
                                        ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu__inner--item nav-item mb-0 d-lg-none">
                                <div class="accordion accordion-flush" id="accordionParent">
                                    <div class="accordion-item">
                                        <a href="<?php echo esc_url($pricing_link['url']); ?>"
                                            class="menu__inner--item--link accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            <span
                                                data-hover="<?php echo esc_html($pricing_link['title']); ?>"><?php echo esc_html($pricing_link['title']); ?></span>
                                        </a>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionParent">
                                            <ul class="">
                                                <?php
                                                $mmi_pricing = get_field('mmi_pricing', 'option');
                                                if ($mmi_pricing):
                                                    foreach ($mmi_pricing as $itemp):
                                                        $link = $itemp['mmip_link'];
                                                        ?>
                                                        <li class="">
                                                            <a class="nav-link"
                                                                href="<?php echo esc_url($link['url'] ?: '#'); ?>">
                                                                <?php echo esc_html($link['title']); ?>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu__inner--item">
                                <?php if ($our_work_link): ?>
                                    <a href="<?php echo esc_url($our_work_link['url']); ?>" class="menu__inner--item--link">
                                        <span
                                            data-hover="<?php echo esc_html($our_work_link['title']); ?>"><?php echo esc_html($our_work_link['title']); ?></span>
                                    </a>
                                <?php endif; ?>
                            </li>
                            <li class="menu__inner--item">
                                <?php if ($over_ons_link): ?>
                                    <a href="<?php echo esc_url($over_ons_link['url']); ?>" class="menu__inner--item--link">
                                        <span
                                            data-hover="<?php echo esc_html($over_ons_link['title']); ?>"><?php echo esc_html($over_ons_link['title']); ?></span>
                                    </a>
                                <?php endif; ?>
                            </li>
                            <li class="menu__inner--item">
                                <?php if ($contact_ons_link): ?>
                                    <a href="<?php echo esc_url($contact_ons_link['url']); ?>"
                                        class="menu__inner--item--link">
                                        <span
                                            data-hover="<?php echo esc_html($contact_ons_link['title']); ?>"><?php echo esc_html($contact_ons_link['title']); ?></span>
                                    </a>
                                <?php endif; ?>
                            </li>
                        </ul>
                        <div class="navbar__right d-none d-lg-flex">
                            <?php if ($menu_button_1): ?>
                                <div class="call d-none d-xl-flex">
                                    <i class="fa-solid fa-phone"></i>
                                    <a
                                        href="<?php echo esc_url($menu_button_1['url']); ?>"><?php echo esc_html($menu_button_1['title']); ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if ($menu_button_1): ?>
                                <button data-bs-toggle="modal" data-id=""
                                    data-bs-target="<?php echo esc_url($menu_button_2['url']); ?>"
                                    class="l__button l__button--border">Q<?php echo esc_html($menu_button_2['title']); ?></button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>