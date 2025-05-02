<?php
$top_title = get_field('top_title1', 'option');
$main_heading = get_field('main_heading1', 'option');
$partners_logos = get_field('partners_logos1', 'option');
?>

<section class="partner partner__home p__tb overflow">
    <div class="l__container">
        <div class="section__title text-center">
            <?php if ($top_title): ?>
                <h6><?php echo esc_html($top_title); ?></h6>
            <?php endif; ?>

            <?php if ($main_heading): ?>
                <?php echo wp_kses_post($main_heading); ?>
            <?php endif; ?>
        </div>

        <?php if ($partners_logos): ?>
            <div class="owl-carousel owl-theme home__partner--slider">
                <?php
                $chunks = array_chunk($partners_logos, 6);
                foreach ($chunks as $chunk):
                ?>
                    <div class="item">
                        <div class="row row-cols-3 row-cols-sm-3 row-cols-md-6 row-cols-lg-6 g-xl-5 g-4 justify-content-center align-items-center">
                            <?php foreach ($chunk as $logo): ?>
                                <div class="col">
                                    <div class="partner__card text-center">
                                        <img class="lazy-load"
                                             data-src="<?php echo esc_url($logo['url']); ?>"
                                             alt="<?php echo esc_attr($logo['alt'] ?: 'Partner Logo'); ?>">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
