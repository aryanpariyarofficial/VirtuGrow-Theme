<?php
/* Template Name: Search Engine Optimalisation */
get_header();

// Service Hero Section
$hero_subtitle = get_field('hero_subtitle');
$hero_description = get_field('hero_description');
$hero_cta_link = get_field('hero_cta_link');
$hero_main_image = get_field('hero_main_image');
$hero_icon_group = get_field('hero_icon_group');
// Service Info Section 
$service_infos = get_field('service_infos');
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
                <?php if ($service_infos): ?>
                    <div class="service__info overflow">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <?php foreach ($service_infos as $info): ?>
                                <div class="col wow fadeInUp" data-wow-duration="1s">
                                    <div class="service__info--card">
                                        <div class="service__info--card-head">
                                            <?php if (!empty($info['service_info_image'])): ?>
                                                <img src="<?php echo esc_url($info['service_info_image']['url']); ?>"
                                                    alt="<?php echo esc_attr($info['service_info_image']['alt']); ?>">
                                            <?php endif; ?>
                                            <?php if (!empty($info['service_info_title'])): ?>
                                                <h2 class="title"><?php echo esc_html($info['service_info_title']); ?></h2>
                                            <?php endif; ?>
                                        </div>
                                        <div class="service__info--content">
                                            <?php if (!empty($info['service_info_desc'])): ?>
                                                <p><?php echo esc_html($info['service_info_desc']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Excellence/Industry -->
        <?php get_template_part('partials/singleService/excellence', 'section') ?>
        <!-- END OF Other excellence -->

        <!-- Technology -->
        <?php get_template_part('partials/singleService/technology', 'section') ?>
        <!-- END OF technology -->

        <!-- why us -->
         <?php get_template_part('partials/singleService/why', 'us') ?>
        <!-- END  -->

         <!-- Recent Work -->
         <?php get_template_part('partials/singleService/recent', 'work') ?>
        <!-- END  -->
         <!-- Enquiry section -->
         <?php get_template_part('partials/singleService/enquiry', 'section') ?>
        <!-- END  -->

       <!-- Other Services -->
        <?php get_template_part('partials/other', 'services') ?>
        <!-- END OF Other Services -->

        <!-- partner -->
        <?php get_template_part('partials/partner', 'section') ?>
        <!-- END OF partner -->

       <!-- FAQ -->
       <?php get_template_part('partials/singleService/faq', 'section') ?>
        <!-- END -->
    </div>

    <script>
        var view = function (e) {
            $(".preview__content").html(`
            <div class="head">
                <img src="${$(e.target).attr("rel")}">
                <h4>${$(e.target).attr("data-title")}</h4>
            </div>
            <div class="body">
                <p>${$(e.target).attr("data-text")}</p>
            </div>
        `);
            // $(".preview-content").append($("<p>").html($(e.target).attr("data-text")));
        };
        $(".preview__content").removeClass("d-none");
        $("img.zoom").mouseover(view);
        view({
            target: $("img.zoom")[0],
        });
    </script>
</div>
<?php get_footer(); ?>