<?php
/*
Template Name: Pricing Page
*/
?>
<?php get_header();

$top_title = get_field('top_title');
// Starter 
$starter_title = get_field('starter_title');
$starter_price = get_field('starter_price');
$starter_desc = get_field('starter_desc');
$starter_features = get_field('starter_features');
$select_plan_btn = get_field('select_plan_btn');
// Basic 
$basic_title    = get_field('basic_title');
$basic_price    = get_field('basic_price');
$basic_desc     = get_field('basic_desc');
$basic_features = get_field('basic_features');

// Standard 
$standard_title_best = get_field('standard_title_best');
$standard_title      = get_field('standard_title');
$standard_price      = get_field('standard_price');
$standard_desc       = get_field('standard_desc');
$standard_features   = get_field('standard_features');

// Premium 
$premium_title     = get_field('premium_title');
$premium_price     = get_field('premium_price');
$premium_desc      = get_field('premium_desc');
$premium_features  = get_field('premium_features');

//  note 
$note = get_field('note');

// Custom Form
$cp_small_title = get_field('cp_small_title');
$cp_main_title = get_field('cp_main_title');
$cp_form = get_field('cp_form');



$page_slug = get_post_field('post_name', get_the_ID());
?>

<div style="min-height: 50vh" bis_skin_checked="1">

    <section class="overflow">
        <div class="l__container" bis_skin_checked="1">
            <section class="section-packages seo-packages m__tb--b" style="background-size: contain;">

                <div class="section__title text-center p__tb--b " bis_skin_checked="1">
                    <?php if ($top_title): ?>
                        <h6><?php echo esc_html($top_title); ?></h6>
                    <?php endif; ?>
                    <h1 class="title"><?php the_title(); ?></h1>
                </div>
                <div class="package smm" bis_skin_checked="1">
                    <div class="row g-3" bis_skin_checked="1">
                        <div class="col-lg-3 col-md-6" bis_skin_checked="1">
                            <div class="package__price" bis_skin_checked="1">
                                <div class="package__price--head" bis_skin_checked="1">
                                    <?php if ($starter_title): ?>
                                        <h2 class="title"><?php echo esc_html($starter_title); ?></h2>
                                    <?php endif; ?>
                                    <?php if ($starter_price): ?>
                                        <?php echo wp_kses_post($starter_price); ?>
                                    <?php endif; ?>
                                    <?php if ($starter_desc): ?>
                                        <p class="text"><?php echo esc_html($starter_desc); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="package__price--body" bis_skin_checked="1">
                                    <div class="content" bis_skin_checked="1">
                                        <?php if ($starter_features): ?>
                                            <ul>
                                                <?php echo wp_kses_post($starter_features); ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="package__price--footer" bis_skin_checked="1">
                                    <?php if ($select_plan_btn): ?>
                                        <div class="text-center" bis_skin_checked="1">
                                            <button class="l__button l__button--primary" data-bs-toggle="modal"
                                                data-bs-target="<?php echo esc_url($select_plan_btn['url']); ?>"
                                                data-name="Starter"><?php echo esc_html($select_plan_btn['title']); ?></button>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" bis_skin_checked="1">
                            <div class="package__price" bis_skin_checked="1">
                                <div class="package__price--head" bis_skin_checked="1">
                                <?php if ($basic_title): ?>
                                        <h2 class="title"><?php echo esc_html($basic_title); ?></h2>
                                    <?php endif; ?>
                                    <?php if ($basic_price): ?>
                                        <?php echo wp_kses_post($basic_price); ?>
                                    <?php endif; ?>
                                    <?php if ($basic_desc): ?>
                                        <p class="text"><?php echo esc_html($basic_desc); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="package__price--body" bis_skin_checked="1">
                                    <div class="content" bis_skin_checked="1">
                                    <?php if ($basic_features): ?>
                                            <ul>
                                                <?php echo wp_kses_post($basic_features); ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="package__price--footer" bis_skin_checked="1">
                                <?php if ($select_plan_btn): ?>
                                        <div class="text-center" bis_skin_checked="1">
                                            <button class="l__button l__button--primary" data-bs-toggle="modal"
                                                data-bs-target="<?php echo esc_url($select_plan_btn['url']); ?>"
                                                data-name="Starter"><?php echo esc_html($select_plan_btn['title']); ?></button>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5 mb-md-0" bis_skin_checked="1">
                            <div class="package__price package__price--radius mt-5 mt-md-0" bis_skin_checked="1">
                            <?php if ($standard_title_best): ?>   
                            <div class="best-value" bis_skin_checked="1">
                                    <span class="ms-2">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/star.svg"
                                            alt="star">
                                    </span>
                                    <p><?php echo esc_html($standard_title_best); ?></p>
                                    <span class="ms-2">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/star.svg"
                                            alt="star">
                                    </span>
                                </div>
                                <?php endif; ?>
                                <div class="package__price--head" bis_skin_checked="1">
                                <?php if ($standard_title): ?>
                                        <h2 class="title"><?php echo esc_html($standard_title); ?></h2>
                                    <?php endif; ?>
                                    <?php if ($standard_price): ?>
                                        <?php echo wp_kses_post($standard_price); ?>
                                    <?php endif; ?>
                                    <?php if ($standard_desc): ?>
                                        <p class="text"><?php echo esc_html($standard_desc); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="package__price--body" bis_skin_checked="1">
                                    <div class="content" bis_skin_checked="1">
                                    <?php if ($standard_features): ?>
                                        <ul class="expandible">
                                        <?php echo wp_kses_post($standard_features); ?>
                                        </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="package__price--footer" bis_skin_checked="1">
                                <?php if ($select_plan_btn): ?>
                                        <div class="text-center" bis_skin_checked="1">
                                            <button class="l__button l__button--primary" data-bs-toggle="modal"
                                                data-bs-target="<?php echo esc_url($select_plan_btn['url']); ?>"
                                                data-name="Starter"><?php echo esc_html($select_plan_btn['title']); ?></button>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-4" bis_skin_checked="1">
                            <div class="package__price" bis_skin_checked="1">
                                <div class="package__price--head" bis_skin_checked="1">
                                <?php if ($premium_title): ?>
                                        <h2 class="title"><?php echo esc_html($premium_title); ?></h2>
                                    <?php endif; ?>
                                    <?php if ($premium_price): ?>
                                        <?php echo wp_kses_post($premium_price); ?>
                                    <?php endif; ?>
                                    <?php if ($premium_desc): ?>
                                        <p class="text"><?php echo esc_html($premium_desc); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="package__price--body" bis_skin_checked="1">
                                    <div class="content" bis_skin_checked="1">
                                    <?php if ($premium_features): ?>
                                        <ul class="expandible">
                                        <?php echo wp_kses_post($premium_features); ?>
                                        </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="package__price--footer" bis_skin_checked="1">
                                <?php if ($select_plan_btn): ?>
                                        <div class="text-center" bis_skin_checked="1">
                                            <button class="l__button l__button--primary" data-bs-toggle="modal"
                                                data-bs-target="<?php echo esc_url($select_plan_btn['url']); ?>"
                                                data-name="Starter"><?php echo esc_html($select_plan_btn['title']); ?></button>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="note mt-4" bis_skin_checked="1">
                    <?php if ($note): ?>
                        <p class=""><  <?php echo wp_kses_post($note); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="package__form p__tb">
        <div class="l__container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-lg-12" bis_skin_checked="1">
                    <div class="section__title text-center" bis_skin_checked="1">
                    <?php if ($cp_small_title): ?>
                <h6><?php echo esc_html($cp_small_title); ?></h6>
            <?php endif; ?>
            <?php if ($cp_main_title): ?>
                <h2><?php echo wp_kses_post($cp_main_title); ?></h2>
            <?php endif; ?>
                    </div>
                    <?php if ($cp_form): ?>
                <?php echo $cp_form; ?>
            <?php endif; ?>

                </div>

            </div>
        </div>
    </section>
</div>


 <!-- FAQ -->
 <?php get_template_part('partials/singleService/faq', 'section') ?>
        <!-- END -->


<script>



    document.addEventListener("DOMContentLoaded", () => {
        $("ul.expandible").each(function () {
            var $ul = $(this),
                $lis = $ul.find("li:gt(11)"),
                isExpanded = $ul.hasClass("expanded");
            $lis[isExpanded ? "show" : "hide"]();

            if ($lis.length > 0) {
                $ul.append(
                    $('<span class="showmore">' + (isExpanded ? "See Less" : "See More") + "</span>").click(function (event) {
                        var isExpanded = $ul.hasClass("expanded");
                        event.preventDefault();
                        $(this).html(isExpanded ? "See More" : "See Less");
                        $ul.toggleClass("expanded");
                        $lis.toggle();
                    })
                );
            }
        });


    })
</script>



<!-- Let's Connect -->
<?php get_template_part('partials/lets', 'connect') ?>
<!-- END OF Let's Connect -->

<?php get_footer(); ?>