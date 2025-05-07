<?php
/*
Template Name: Other About Page
*/
get_header();

// Service Hero Section
$hero_subtitle = get_field('hero_subtitle');
$hero_description = get_field('hero_description');
$hero_cta_link = get_field('hero_cta_link');
$hero_main_image = get_field('hero_main_image');
$hero_icon_group = get_field('hero_icon_group');
// Service Info Section 


$page_slug = get_post_field('post_name', get_the_ID());

?>

<div style="min-height: 50vh">
    <div class="site-main">
        <section class="service__banner-">
            <div class="l__container">
                <div class="service__banner--content overflow">
                    <div class="row flex-column-reverse flex-md-row">
                        <div class="col-lg-7 col-md-6">
                            <div class="left">
                                <div class="section__title clearfix">
                                    <h1 class="title"><?php the_title(); ?></h1>
                                </div>
                                <div class="title-desc">
                                    <?php if (!empty($hero_subtitle)): ?>
                                        <h4 class="sub-title-desc"><?php echo esc_html($hero_subtitle); ?></h4>
                                    <?php endif; ?>
                                    <?php if (!empty($hero_description)): ?>
                                        <p><?php echo esc_html($hero_description); ?></p>
                                    <?php endif; ?>
                                    <?php if (!empty($hero_cta_link)): ?>
                                        <button data-bs-toggle="modal"
                                            data-bs-target="<?php echo esc_url($hero_cta_link['url']); ?>"
                                            data-id="34a938d8-134a-45af-94d2-abc7c8b13c4c"
                                            class="l__button l__button--border">
                                            <span><?php echo esc_html($hero_cta_link['title']); ?></span>
                                            <i class="fa-solid fa-chevron-right"></i></button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                            <div class="right mt-4">
                                <?php if (!empty($hero_main_image)): ?>
                                    <img class="" src="<?php echo esc_url($hero_main_image['url']); ?>"
                                        alt="<?php echo esc_attr($hero_main_image['alt']); ?>">
                                <?php endif; ?>
                                <?php if ($hero_icon_group): ?>
                                    <div class="info">
                                        <?php foreach ($hero_icon_group as $icon): ?>
                                            <div class="info__card">
                                                <?php if (!empty($icon['hero_icon_image'])): ?>
                                                    <img src="<?php echo esc_url($icon['hero_icon_image']['url']); ?>"
                                                        alt="<?php echo esc_attr($icon['hero_icon_image']['alt']); ?>">
                                                <?php endif; ?>
                                                <?php if (!empty($icon['hero_icon_title'])): ?>
                                                    <h4><?php echo esc_html($icon['hero_icon_title']); ?></h4>
                                                <?php endif; ?>
                                                <?php if (!empty($icon['hero_icon_desc'])): ?>
                                                    <h6><?php echo esc_html($icon['hero_icon_desc']); ?></h6>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- why us -->
        <?php
        $unique_title = get_field('unique_title');
        $unique_features = get_field('unique_features');
        ?>

        <section class="choose choose-two overflow p__tb" style="background-color: transparent;">
            <div class="l__container wow fadeInUp animated" data-wow-duration="1s">
                <div class="section__title text-center clearfix">
                    <?php if ($unique_title): ?>
                        <h2 class="title"><?php echo wp_kses_post($unique_title); ?></h2>
                    <?php endif; ?>
                </div>

                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 g-3">
                    <?php if ($unique_features): ?>
                        <?php foreach ($unique_features as $feature): ?>
                            <div class="col">
                                <div class="choose__card text-center">
                                    <div class="choose__card--shape">
                                        <img class="lazy-load" data-src="/static/site-assets/images/service-shape.svg" alt="">
                                    </div>
                                    <div class="choose__card--img choose__card--img-two">
                                        <?php if (!empty($feature['uf_image'])): ?>
                                            <img class="lazy-load" data-src="<?php echo esc_url($feature['uf_image']['url']); ?>"
                                                alt="<?php echo esc_attr($feature['uf_image']['alt']); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="choose__card--content choose__card--content-two">
                                        <?php if (!empty($feature['uf_title'])): ?>
                                            <h3><?php echo esc_html($feature['uf_title']); ?></h3>
                                        <?php endif; ?>
                                        <?php if (!empty($feature['uf_desc'])): ?>
                                            <p><?php echo esc_html($feature['uf_desc']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-center">No unique features added yet.</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>




        <!-- goal -->
        <?php
        $values_title = get_field('values_title');
        $values_image = get_field('values_image');
        $core_values = get_field('core_values');
        ?>

        <div class="goal__ads">
            <section class="goal p__tb">
                <div class="l__container wow fadeInUp animated" data-wow-duration="1s">
                    <div class="section__title text-center">
                        <?php if ($values_title): ?>
                            <h2><?php echo esc_html($values_title); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-5 d-none d-md-block">
                            <div class="goal__img">
                                <?php if ($values_image): ?>
                                    <img class="lazy-load" data-src="<?php echo esc_url($values_image['url']); ?>"
                                        alt="<?php echo esc_attr($values_image['alt']); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <ul class="goal__list">
                                <?php if ($core_values): ?>
                                    <?php foreach ($core_values as $value): ?>
                                        <li>
                                            <div class="goal__list--card">
                                                <div class="goal__list--card-img">
                                                    <?php if (!empty($value['cv_image'])): ?>
                                                        <img class="lazy-load"
                                                            data-src="<?php echo esc_url($value['cv_image']['url']); ?>"
                                                            alt="<?php echo esc_attr($value['cv_image']['alt']); ?>">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="goal__list--card-content">
                                                    <?php if (!empty($value['cv_title'])): ?>
                                                        <h3><?php echo esc_html($value['cv_title']); ?></h3>
                                                    <?php endif; ?>
                                                    <?php if (!empty($value['cv_desc'])): ?>
                                                        <p><?php echo esc_html($value['cv_desc']); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="text-center">No core values added yet.</p>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <!-- Testimonilas -->
        <?php get_template_part('partials/testimonials', 'section') ?>
        <!-- END OF Testimonials -->
         
        <!-- why us -->
        <?php
        $why_us_main_heading = get_field('why_us_main_heading');
        $why_us_desc = get_field('why_us_desc');
        $why_us_image = get_field('why_us_image');
        ?>

        <section class="choose p__tb">
            <div class="l__container overflow">
                <div class="ttm-row">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-duration="1s">
                            <div class="section__title clearfix">
                                <?php if ($why_us_main_heading): ?>
                                    <h2 class="title"><?php echo esc_html($why_us_main_heading); ?></h2>
                                <?php endif; ?>
                            </div>
                            <div class="title-desc">
                                <?php if ($why_us_desc): ?>
                                    <p><?php echo esc_html($why_us_desc); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 p-2 p-md-3">
                            <div class="choose__card text-center wow fadeInUp" data-wow-duration="1s">
                                <?php if ($why_us_image): ?>
                                    <img class="lazy-load" data-src="<?php echo esc_url($why_us_image['url']); ?>"
                                        alt="<?php echo esc_attr($why_us_image['alt']); ?>">
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- partner -->
        <?php get_template_part('partials/lets', 'connect') ?>
        <!-- END OF partner -->


    </div>


</div>
<?php get_footer(); ?>