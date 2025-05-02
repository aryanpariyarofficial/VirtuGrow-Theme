<?php
$top_title = get_field('top_title3');
$main_heading = get_field('main_heading3');
$short_description = get_field('short_description3');

$latest_blogs = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 2,
]);
?>

<section class="blog__home p__tb overflow">
    <div class="l__container wow fadeInUp" data-wow-duration="1s">
        <div class="section__title text-center clearfix">
            <?php if ($top_title): ?>
                <h6><?php echo esc_html($top_title); ?></h6>
            <?php endif; ?>
            <?php if ($main_heading): ?>
                <?php echo wp_kses_post($main_heading); ?>
            <?php endif; ?>
            <?php if ($short_description): ?>
                <p class=" d-none d-lg-inline-block">
                    <?php echo esc_html($short_description); ?>
                    <a href="/blog" class="more">See all</a>
                </p>
            <?php endif; ?>
        </div>

        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 g-4">
            <?php if ($latest_blogs->have_posts()) : while ($latest_blogs->have_posts()) : $latest_blogs->the_post(); ?>
                <div class="col">
                    <div class="blog__card">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="blog__card--img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img class="lazy-load" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__card--content p-3">
                                    <span class="date"><?php echo get_the_date('M d, Y'); ?></span>
                                    <a href="<?php the_permalink(); ?>">
                                        <h3 class="title"><?php the_title(); ?></h3>
                                    </a>
                                    <p class="text"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="more">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>

        <div class="text-center mt-4 d-lg-none">
            <a href="/blog" class="l__button l__button--primary">
                <span>See all</span>
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        </div>
    </div>
</section>
