<?php
$top_title = get_field('top_title');
$main_heading = get_field('main_heading');
?>

<section class="service__design p__tb--t overflow">
    <div class="l__container wow fadeInUp" data-wow-duration="1s">
        <div class="section__title text-center clearfix">
            <?php if ($top_title): ?>
                <h6><?php echo esc_html($top_title); ?></h6>
            <?php endif; ?>

            <?php if ($main_heading): ?>
                <?php echo wp_kses_post($main_heading); ?>
            <?php endif; ?>
        </div>

        <?php if (have_rows('features')): ?>
        <div class="row g-3 g-md-4 g-lg-5">
            <?php while (have_rows('features')): the_row();
                $icon = get_sub_field('icon');
                $title = get_sub_field('title');
            ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                <div class="service__design--card">
                    <?php if (!empty($icon)): ?>
                        <img class="lazy-load" class="newImg" data-src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                    <?php endif; ?>
                    <?php if (!empty($title)): ?>
                        <h3><?php echo esc_html($title); ?></h3>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
