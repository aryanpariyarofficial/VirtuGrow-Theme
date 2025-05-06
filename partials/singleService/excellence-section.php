<?php // Industry Section
$industry_top_title = get_field('industry_top_title');
$industry_main_heading = get_field('industry_main_heading');
$industry_cards = get_field('industry_cards');
?>
 <!-- excellence -->
 <section class="industry pt-5 p__tb">
            <div class="l__container overflow pt-3">
                <div class="section__title text-center clearfix wow fadeInUp" data-wow-duration="1s">
                    <?php if (!empty($industry_top_title)): ?>
                        <h6><?php echo esc_html($industry_top_title); ?></h6>
                    <?php endif; ?>
                    <?php if (!empty($industry_main_heading)): ?>
                        <?php echo wp_kses_post($industry_main_heading); ?>
                    <?php endif; ?>
                </div>
                <div class="excellence">
                    <?php if ($industry_cards): ?>
                        <div class="row g-0 excellence__first">
                            <?php foreach ($industry_cards as $card): ?>
                                <div class="col-md-6 col-sm-6">
                                    <div class="excellence__card wow fadeInUp" data-wow-duration="1s">
                                        <?php if (!empty($card['industry_card_image'])): ?>
                                            <div class="excellence__card--img d-none d-md-block">
                                                <img class="lazy-load"
                                                    data-src="<?php echo esc_url($card['industry_card_image']['url']); ?>"
                                                    alt="<?php echo esc_attr($card['industry_card_image']['alt']); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="excellence__card--content">
                                            <?php if (!empty($card['industry_card_title'])): ?>
                                                <h3><?php echo esc_html($card['industry_card_title']); ?></h3>
                                            <?php endif; ?>
                                            <?php if (!empty($card['industry_card_desc'])): ?>
                                                <p><?php echo esc_html($card['industry_card_desc']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>