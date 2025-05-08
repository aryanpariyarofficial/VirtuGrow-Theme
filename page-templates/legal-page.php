<?php
/*
Template Name: Legal Page
*/
get_header();


$content = get_field('content');



$page_slug = get_post_field('post_name', get_the_ID());

?>

<div style="min-height: 50vh">
    <div class="site-main">
        <div class="l__container">
            <div class="career__detail p__tb--b m__tb--b" style="background-size: contain;">
                <div class="section__title text-center">
                    <h1 class="title"><?php the_title(); ?><span></span></h1>
                </div>
                <?php if (!empty($content)): ?>
                    <div class="row">
                        <?php echo wp_kses_post($content); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- partner -->
    <?php get_template_part('partials/lets', 'connect') ?>
    <!-- END OF partner -->

</div>

<?php get_footer(); ?>