<?php
/*
Template Name: Blogs
*/
get_header();
?>

<div style="min-height: 50vh">
<div class="site-main">
    <div class="l__container">
        <div class="blog blog__list pb-2 m__tb--b">
            <div class="section__title text-center clearfix overflow wow fadeInUp animated" data-wow-duration="1s">
                <h6>Our blogs</h6>
                <h1 class="title">our latest &amp; <span>popular blogs</span></h1>
            </div>

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 g-4">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                );
                $blog_query = new WP_Query($args);

                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                ?>
                    <div class="col wow fadeInUp animated" data-wow-duration="1s">
                        <div class="blog__card">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="blog__card--img">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium_large', ['class' => 'lazy-load']); ?>
                                            <?php else : ?>
                                                <img class="lazy-load" src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/default-thumb.jpg" alt="<?php the_title_attribute(); ?>">
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="blog__card--content p-3">
                                        <a href="<?php the_permalink(); ?>">
                                            <h3 class="title"><?php the_title(); ?></h3>
                                        </a>
                                        <p class="text"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="more">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php else : ?>
                    <p class="text-center">No blog posts found.</p>
                <?php endif; ?>
            </div>

            <div class="p__tb--t">
                <?php
                echo paginate_links(array(
                    'total' => $blog_query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => __('«'),
                    'next_text' => __('»'),
                    'type' => 'list',
                ));
                ?>
            </div>

            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
