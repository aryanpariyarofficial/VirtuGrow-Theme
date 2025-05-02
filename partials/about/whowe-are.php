<?php
$top_title = get_field('top_title');
$main_heading = get_field('main_heading');
$left_content = get_field('left_content');
?>

<section class="who p__tb--t overflow">
    <div class="l__container">
        <div class="row wow fadeInUp" data-wow-duration="1s">
            <div class="col-md-6 col-lg-6">
                <div class="who__area">
                    <div class="section__title">
                        <?php if (!empty($top_title)): ?>
                            <h6><?php echo esc_html($top_title); ?></h6>
                        <?php endif; ?>

                        <?php if (!empty($main_heading)): ?>
                            <?php echo wp_kses_post($main_heading); ?>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($left_content)): ?>
                        <div class="content">
                            <?php echo wp_kses_post($left_content); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- RIGHT CARDS FROM ACF REPEATER -->
            <div class="col-md-6 col-lg-6 ps-2 ps-md-0">
                <?php if (have_rows('right_cards')): ?>
                    <?php while (have_rows('right_cards')): the_row(); 
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $desc  = get_sub_field('desc');
                    ?>
                        <div class="mission__card">
                            <?php if (!empty($icon)): ?>
                                <div class="mission__card--img text-center">
                                    <img class="lazy-load" data-src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                                </div>
                            <?php endif; ?>

                            <div class="mission__card--content">
                                <?php if (!empty($title)): ?>
                                    <h3 class="text-center text-sm-start"><?php echo esc_html($title); ?></h3>
                                <?php endif; ?>

                                <?php if (!empty($desc)): ?>
                                    <p><?php echo esc_html($desc); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
