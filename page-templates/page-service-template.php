<?php
/*
Template Name: Service Template
*/
get_header();

// Service Hero Section
$hero_subtitle = get_field('hero_subtitle');
$hero_description = get_field('hero_description');
$hero_cta_link = get_field('hero_cta_link');
$hero_main_image = get_field('hero_main_image');
$hero_icon_group = get_field('hero_icon_group');
$hero_icon_group = get_field('hero_icon_group');

$fallback_hero_icons = [
    [
        'hero_icon_title' => '6 Long',
        'hero_icon_desc' => 'Years of Experience',
        'hero_icon_image' => ['url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/calender_1.svg', 'alt' => 'Years of Experience']
    ],
    [
        'hero_icon_title' => '300+',
        'hero_icon_desc' => 'Happy Clients',
        'hero_icon_image' => ['url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/calender_1.svg', 'alt' => 'Happy Clients']
    ],
    [
        'hero_icon_title' => '400+',
        'hero_icon_desc' => 'Successful Projects',
        'hero_icon_image' => ['url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/calender_1.svg', 'alt' => 'Successful Projects']
    ],
    [
        'hero_icon_title' => '80+',
        'hero_icon_desc' => 'Team Member & Growing',
        'hero_icon_image' => ['url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/calender_1.svg', 'alt' => 'Team Member & Growing']
    ]
];

$icons_to_display = !empty($hero_icon_group) ? $hero_icon_group : $fallback_hero_icons;

// Service Info Section 
$service_infos = get_field('service_infos');

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
                                    <h4 class="sub-title-desc">
                                        <?php echo !empty($hero_subtitle)
                                            ? esc_html($hero_subtitle)
                                            : 'Een uiterst functionele en visueel aantrekkelijke website, ontworpen om aan uw behoeften te voldoen.'; ?>
                                    </h4>

                                    <p>
                                        <?php echo !empty($hero_description)
                                            ? esc_html($hero_description)
                                            : 'Digitale excellentie creëren: verbeter uw online aanwezigheid met innovatieve oplossingen voor websiteontwikkeling. Ontwerpen op maat, naadloze functionaliteit en toekomstbestendige technologie – uw reis naar succes begint hier!'; ?>
                                    </p>

                                    <button data-bs-toggle="modal"
                                        data-bs-target="<?php echo esc_url(!empty($hero_cta_link['url']) ? $hero_cta_link['url'] : '#enquiryModal'); ?>"
                                        data-id="34a938d8-134a-45af-94d2-abc7c8b13c4c"
                                        class="l__button l__button--border">
                                        <span><?php echo !empty($hero_cta_link['title'])
                                            ? esc_html($hero_cta_link['title'])
                                            : 'Laten we het gesprek beginnen'; ?></span>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                            <div class="right mt-4">
                                <?php
                                $default_hero_image_url = 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/Mask_group.svg';
                                $hero_image_url = !empty($hero_main_image['url']) ? esc_url($hero_main_image['url']) : $default_hero_image_url;
                                $hero_image_alt = !empty($hero_main_image['alt']) ? esc_attr($hero_main_image['alt']) : 'VirtuGrow Hero Image';
                                ?>

                                <img class="" src="<?php echo $hero_image_url; ?>" alt="<?php echo $hero_image_alt; ?>">



                                <?php if (!empty($icons_to_display)): ?>
                                    <div class="info">
                                        <?php foreach ($icons_to_display as $icon): ?>
                                            <div class="info__card">
                                                <?php if (!empty($icon['hero_icon_image']['url'])): ?>
                                                    <img src="<?php echo esc_url($icon['hero_icon_image']['url']); ?>" alt="alt="
                                                        <?php echo esc_attr(!empty($icon['hero_icon_image']['alt']) ? $icon['hero_icon_image']['alt'] : ''); ?>">
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
             <?php
// Fallback values
$fallback_service_infos = [
    [
        'service_info_image' => ['url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/thumb_1.svg', 'alt' => 'Tevredenheidsgarantie'],
        'service_info_title' => 'Tevredenheidsgarantie',
        'service_info_desc'  => 'Vergroot uw online aanwezigheid met expertise in websiteontwikkeling.',
    ],
    [
        'service_info_image' => ['url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/quality.svg', 'alt' => 'Werk van de beste kwaliteit'],
        'service_info_title' => 'Werk van de beste kwaliteit',
        'service_info_desc'  => 'Uitmuntendheid en innovatie kenmerken onze ontwikkeloplossingen.',
    ],
    [
        'service_info_image' => ['url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/Group_2.svg', 'alt' => 'Interactieve interface'],
        'service_info_title' => 'Interactieve interface',
        'service_info_desc'  => 'Uitmuntendheid en innovatie kenmerken onze ontwikkeloplossingen.',
    
    ],
];

// Use fallback if empty
$infos_to_display = !empty($service_infos) ? $service_infos : $fallback_service_infos;
?>

<div class="service__info overflow">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($infos_to_display as $info): ?>
            <div class="col wow fadeInUp" data-wow-duration="1s">
                <div class="service__info--card">
                    <div class="service__info--card-head">
                        <?php if (!empty($info['service_info_image']['url'])): ?>
                            <img src="<?php echo esc_url($info['service_info_image']['url']); ?>"
                                 alt="<?php echo esc_attr(!empty($info['service_info_image']['alt']) ? $info['service_info_image']['alt'] : ''); ?>">
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