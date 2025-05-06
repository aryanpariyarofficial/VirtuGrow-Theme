<?php 
// Why with us 
$why_us_top_title = get_field('why_us_top_title');
$why_us_main_heading = get_field('why_us_main_heading');
$why_us_desc = get_field('why_us_desc');
$why_us_features = get_field('why_us_features');
?>
 <!-- why us -->
 <section class="choose pt-5 p__tb">
            <div class="l__container overflow pt-3">
                <div class="ttm-row">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-duration="1s">
                            <div class="section__title clearfix">
                                <?php if ($why_us_top_title): ?>
                                    <h6><?php echo esc_html($why_us_top_title); ?></h6>
                                <?php endif; ?>
                                <?php if ($why_us_main_heading): ?>
                                    <?php echo wp_kses_post($why_us_main_heading); ?>
                                <?php endif; ?>
                            </div>
                            <?php if ($why_us_desc): ?>
                                <div class="title-desc">
                                    <p><?php echo esc_html($why_us_desc); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if ($why_us_features):
                            foreach ($why_us_features as $feature): ?>

                                <div class="col-lg-4 col-md-6 col-sm-6 p-2 p-md-3">
                                    <div class="choose__card text-center wow fadeInUp" data-wow-duration="1s">
                                        <div class="choose__card--shape">
                                            <?php if ($feature['wuimage1']): ?>
                                                <img src="<?php echo esc_url($feature['wuimage1']['url']); ?>"
                                                    alt="<?php echo esc_attr($feature['wuimage1']['alt']); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <?php if ($feature['wuimage2']): ?>
                                            <div class="choose__card--img">
                                                <img class="lazy-load"
                                                    data-src="<?php echo esc_url($feature['wuimage2']['url']); ?>"
                                                    alt="<?php echo esc_attr($feature['wuimage2']['alt']); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="choose__card--content">
                                            <?php if ($feature['wutitle']): ?>
                                                <h3><?php echo esc_html($feature['wutitle']); ?></h3>
                                            <?php endif; ?>
                                            <?php if ($feature['wudesc']): ?>
                                                <p><?php echo esc_html($feature['wudesc']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;
                        endif; ?>
                    </div>
                </div>
            </div>
        </section>