<?php
$top_title = get_field('top_title');
$main_heading = get_field('main_heading');
$short_description = get_field('short_description');
$steps_list = get_field('steps_list');
?>

<section class="process p__tb--t overflow">
    <div class="l__container  wow fadeInUp" data-wow-duration="1s">
        <div class="section__title text-center m__tb--b">
            <?php if ($top_title): ?>
                <h6><?php echo esc_html($top_title); ?></h6>
            <?php endif; ?>

            <?php if ($main_heading): ?>
                <?php echo wp_kses_post($main_heading); ?>
            <?php endif; ?>

            <?php if ($short_description): ?>
                <p class="d-none d-lg-inline-block">
                    <?php echo esc_html($short_description); ?>
                    
                </p>
            <?php endif; ?>
        </div>

        <div class="process__content">
            <?php if ($steps_list): ?>
                <?php foreach ($steps_list as $index => $step): ?>
                    <div class="process__content--card wow fadeInUp" data-wow-duration="1s">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="d-flex align-items-center">
                                    <small>
                                        <?php echo sprintf('%02d', $index + 1); ?><span class="d-md-none">.</span>
                                    </small>
                                    <h3 class="d-md-none ms-2">
                                        <?php echo esc_html($step['step_title']); ?>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h3 class="d-none d-md-block">
                                    <?php echo esc_html($step['step_title']); ?>
                                </h3>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <?php echo esc_html($step['step_description']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

           </div>
    </div>
</section>
