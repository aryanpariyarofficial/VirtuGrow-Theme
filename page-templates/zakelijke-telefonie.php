<?php
/*
Template Name: Zakelijke Telefonie Services
*/
get_header();

$hero_top_title = get_field('hero_top_title');
$hero_main_title = get_field('hero_main_title');
$hero_content = get_field('hero_content');
$hero_image = get_field('hero_image');


// For Zakelijke Telefonie
$top_title3   = get_field('top_title3');
$main_title3  = get_field('hero_main3');
$desc3       = get_field('desc3');
$service_cards3 = get_field('service_cards3');


?>

<div style="min-height: 50vh">


    <section class="banner">
        <div class="l__container">
            <div class="banner__career overflow">
                <div class="row flex-column-reverse flex-md-row pt-3">
                    <div class="col-md-6">
                        <div class="banner__career--content">
                            <div class="section__title">
                                <?php if (!empty($hero_top_title)): ?>
                                    <h6><?php echo esc_html($hero_top_title); ?></h6>
                                    <!-- <h6>What we provide</h6> -->
                                <?php endif; ?>
                                <?php if (!empty($hero_main_title)): ?>
                                    <?php echo wp_kses_post($hero_main_title); ?>

                                <?php endif; ?>
                            </div>
                            <?php if (!empty($hero_content)): ?>
                                <p><?php echo wp_kses_post($hero_content); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php if (!empty($hero_image)): ?>
                            <div class="banner__career--img">
                                <img src="<?php echo esc_url($hero_image['url']); ?>"
                                    alt="<?php echo esc_attr($hero_image['alt']); ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </section>



    <div class="service overflow p__tb--b">
    

<!-- For Zakelijke Telefonie -->
<div class="l__container">
    <div class="section__title text-center m__tb--b servicePageBorder">
        <?php if (!empty($top_title3)) : ?>
            <h6><?php echo esc_html($top_title3); ?></h6>
        <?php endif; ?>

        <?php if (!empty($main_title3)) : ?>
            <?php echo wp_kses_post($main_title3); ?>
        <?php endif; ?>

        <?php if (!empty($desc3)) : ?>
            <p class="d-none d-lg-inline-block"><?php echo esc_html($desc3); ?></p>
        <?php endif; ?>
    </div>

    <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 gy-5 gx-4 wow fadeInUp" data-wow-duration="1s">
    <?php if (have_rows('service_cards3')) : ?>
        <?php while (have_rows('service_cards3')) : the_row(); ?>
            <?php 
                $image3 = get_sub_field('image3');
                $title3 = get_sub_field('title3');
                $online_desc3  = get_sub_field('online_desc3');
                $link3  = get_sub_field('link3');
            ?>
            <div class="col">
                <div class="service__home--card pe-lg-4 pe-auto text-center text-lg-start">
                    <a href="<?php echo esc_url($link3['url']); ?>" target="<?php echo esc_attr($link3['target']); ?>">
                        <div class="service__home--card-icon">
                            <?php if (!empty($image3)) : ?>
                                <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="service__home--card-content">
                            <?php if (!empty($title3)) : ?>
                                <h2><?php echo esc_html($title3); ?></h2>
                            <?php endif; ?>
                            <?php if (!empty($online_desc3)) : ?>
                                <p><?php echo esc_html($online_desc3); ?></p>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p class="text-center">No services available right now.</p>
    <?php endif; ?>
</div>



</div>

    </div>



</div>

<!-- Let's Connect -->
<?php get_template_part('partials/lets', 'connect') ?>
<!-- END OF Let's Connect -->

<?php get_footer(); ?>