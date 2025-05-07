<?php
get_header();
?>

<div style="min-height: 50vh">
<div class="site-main">
    <div class="l__container">
        <div class="blog blog__list pb-2 m__tb--b">
            <div class="section__title text-center clearfix overflow wow fadeInUp animated" data-wow-duration="1s">
                <?php
                // Get current category title and description
                $category = get_queried_object();
                ?>
                <h6><?php echo esc_html($category->name); ?></h6>
                <h1 class="title">Explore our <span><?php echo esc_html($category->name); ?></span> blogs</h1>
                <?php if (!empty($category->description)) : ?>
                    <p><?php echo esc_html($category->description); ?></p>
                <?php endif; ?>
            </div>

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 g-4">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
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
                    <p class="text-center">No blog posts found in this category.</p>
                <?php endif; ?>
            </div>

            <div class="p__tb--t">
                <?php
                echo paginate_links(array(
                    'total' => $wp_query->max_num_pages,
                    'current' => max(1, get_query_var('paged')),
                    'prev_text' => __('«'),
                    'next_text' => __('»'),
                    'type' => 'list',
                ));
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
