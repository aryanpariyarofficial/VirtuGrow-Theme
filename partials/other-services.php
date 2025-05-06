<?php
// other service
$top_title_small = get_field('top_title_small', 'option');
$main_heading_big = get_field('main_heading_big', 'option');
$other_services = get_field('other_services_card', 'option');
?>
  <!--  other service -->
  <section class="service-other p__tb overflow">
            <div class="l__container wow fadeInUp" data-wow-duration="1s">
                <div class="section__title text-center clearfix">
                    <?php if (!empty($top_title_small)): ?>
                        <h6><?php echo esc_html($top_title_small); ?></h6>
                    <?php endif; ?>
                    <!-- <h6>other services</h6> -->
                    <?php if (!empty($main_heading_big)): ?>
                        <?php echo wp_kses_post($main_heading_big); ?>
                    <?php endif; ?>
                    <!-- <h2 class="title">One Solution For All Your <span>Digital needs</span></h2> -->
                </div>

                <?php if ($other_services): ?>
                    <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 gy-lg-5 gy-4 gx-4">

                        <?php foreach ($other_services as $service):
                            $osc_image = $service['other_service_card_image'];
                            $osc_title = $service['other_service_card_title'];
                            $osc_desc = $service['other_service_card_desc'];
                            $osc_link = $service['other_service_card_link'];
                            ?>


                            <div class="col">
                                <div class="service__home--card  pe-lg-4 pe-auto  text-center text-md-start">
                                    <?php if (!empty($osc_link)): ?>
                                        <a href="<?php echo esc_url($osc_link['url']); ?>"
                                            target="<?php echo esc_attr($osc_link['target']); ?>">
                                        <?php endif; ?>
                                        <?php if (!empty($osc_image)): ?>
                                            <div class="service__home--card-icon">
                                                <img class="lazy-load" data-src="<?php echo esc_url($osc_image['url']); ?>"
                                                    alt="<?php echo esc_attr($osc_image['alt']); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="service__home--card-content">
                                            <?php if (!empty($osc_title)): ?>
                                                <h3><?php echo esc_html($osc_title); ?></h3>
                                            <?php endif; ?>
                                            <!-- <h3>App Development</h3> -->
                                            <?php if (!empty($osc_desc)): ?>
                                                <p><?php echo esc_html($osc_desc); ?></p>
                                            <?php endif; ?>
                                            <!-- <p>Innovative and user-friendly mobile application designed to engage users.</p> -->
                                        </div>
                                        <?php if (!empty($osc_link)): ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>