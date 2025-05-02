<?php
$top_title = get_field('top_title2', 'option');
$main_heading = get_field('main_heading2', 'option');
$testimonials_code = get_field('testimonials_code1', 'option');
?>

<div class="p__tb">
    <section class="service-visitor">
        <div class="l__container">
            <div class="wow">
                <div class="section__title text-center clearfix">
                    <?php if ($top_title): ?>
                        <h6><?php echo esc_html($top_title); ?></h6>
                    <?php endif; ?>

                    <?php if ($main_heading): ?>
                        <?php echo wp_kses_post($main_heading); ?>
                    <?php endif; ?>
                </div>

                <?php if ($testimonials_code): ?>
                    <?php echo do_shortcode($testimonials_code); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
