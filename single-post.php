<?php get_header(); ?>

<div style="min-height: 50vh">
  <div class="site-main">
    <div class="l__container">
      <div class="blog blog__detail p__tb m__tb--b" style="background-size: contain;">
        <div class="row">
          <div class="col-lg-9 overflow">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="wow fadeInUp animated" data-wow-duration="1s">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <hr class="my-4">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
              </div>
            <?php endwhile; endif; ?>
          </div>

          <div class="col-lg-3">
            <aside>
              <form action="<?php echo home_url('/blog'); ?>" class="wow fadeInUp animated" data-wow-duration="1s">
                <div class="form">
                  <div class="form__group">
                    <input type="text" class="form-control" placeholder="Search...." name="s">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                  </div>
                </div>
              </form>

              <div class="category wow fadeInUp animated" data-wow-duration="1s">
                <h3>Categories</h3>
                <ul>
                  <?php wp_list_categories(['title_li' => '']); ?>
                </ul>
              </div>

              <div class="latest wow fadeInUp animated" data-wow-duration="1s">
                <h3>Latest Blogs</h3>
                <ul>
                  <?php
                  $latest_posts = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 5
                  ]);
                  if ($latest_posts->have_posts()) :
                    while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                    <li>
                      <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                          <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                      </a>
                      <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                    </li>
                  <?php endwhile; wp_reset_postdata(); endif; ?>
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Let's Connect -->
<?php get_template_part('partials/lets', 'connect') ?>
<!-- END OF Let's Connect -->
<?php get_footer(); ?>
