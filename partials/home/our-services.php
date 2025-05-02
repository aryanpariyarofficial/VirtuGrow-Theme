<?php
// Services Section Fields
$services_top_header = get_field('services_top_header');
$services_title = get_field('services_title');
$services_desc = get_field('services_desc');


// Service Cards from Repeater
$service_cards = get_field('services_card');
?>

<section class="service__home overflow p__tb">
    <div class="l__container wow fadeInUp" data-wow-duration="1s">
        <div class="section__title text-center clearfix">
            <?php if (!empty($services_top_header)): ?>
                <h6><?php echo esc_html($services_top_header); ?></h6>
            <?php endif; ?>

            <?php if (!empty($services_title)): ?>
                <?php echo wp_kses_post($services_title); ?>
            <?php endif; ?>

            <?php if (!empty($services_desc)): ?>
                <p class="d-none d-lg-inline-block">
                    <?php echo esc_html($services_desc); ?>
                    <a href="/services" class="more">See all</a>

                </p>
            <?php endif; ?>
        </div>

        <?php if (!empty($service_cards)): ?>
            <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-xl-5 gy-4 gx-4">
                <?php foreach ($service_cards as $card): ?>
                    <div class="col">
                        <div class="service__home--card pe-lg-4 pe-auto text-center text-md-start">
                            <a href="<?php echo !empty($card['link']['url']) ? esc_url($card['link']['url']) : '#'; ?>">
                                <div class="service__home--card-icon">
                                    <?php if (!empty($card['image'])): ?>
                                        <img src="<?php echo esc_url($card['image']['url']); ?>" class="lazy-load"
                                            alt="<?php echo esc_attr($card['image']['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="service__home--card-content">
                                    <?php if (!empty($card['title'])): ?>
                                        <h3><?php echo esc_html($card['title']); ?></h3>
                                    <?php endif; ?>
                                    <?php if (!empty($card['desc'])): ?>
                                        <p><?php echo esc_html($card['desc']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="text-center mt-4 d-lg-none">
            <a href="/services" class="l__button l__button--primary">
                <span>See all</span>
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        </div>
    </div>
</section>