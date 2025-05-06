<?php 
// Technology Section
$small_title = get_field('technology_small_title');
$main_title = get_field('technology_main_title');
$section_image = get_field('technology_image');
$technologies = get_field('technologies');

?>
<!-- technology -->
<section class="tech pt-5 p__tb">
            <div class="l__container overflow pt-3">
                <div class="section__title text-center m__tb--b wow fadeInUp" data-wow-duration="1s">
                    <?php if ($small_title): ?>
                        <h6><?php echo esc_html($small_title); ?></h6>
                    <?php endif; ?>
                    <?php if ($main_title): ?>
                        <?php echo wp_kses_post($main_title); ?>
                    <?php endif; ?>
                </div>
                <div class="row ">
                    <div class="col-lg-7 ">
                        <div class="left">
                            <?php if ($technologies): ?>
                                <?php foreach ($technologies as $tech): ?>
                                    <div class="tech__collect wow fadeInUp" data-wow-duration="1s">
                                        <h3><?php echo esc_html($tech['technologies_title']); ?></h3>
                                        <div class="row row-cols-3 row-cols-md-5 row-cols-lg-5 row-cols-xl-6 p-0 g-4 thumbs">
                                            <?php if (!empty($tech['technologies_image'])): ?>
                                                <?php foreach ($tech['technologies_image'] as $image): ?>
                                                    <div class="col">
                                                        <div class="thumbs-card">
                                                            <div class="thumbs-card-img">
                                                                <img src="<?php echo esc_url($image['url']); ?>"
                                                                    rel="<?php echo esc_url($image['url']); ?>" data-toggle="modal"
                                                                    data-target="#techModal"
                                                                    data-title="<?php echo esc_attr($image['title']); ?>"
                                                                    data-text="<?php echo esc_attr($image['description']); ?>"
                                                                    class="zoom" alt="<?php echo esc_attr($image['alt']); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7 d-none d-lg-block">
                        <?php if ($section_image): ?>
                            <div class="right d-none d-md-block wow zoomIn" data-wow-duration="1s">
                                <img class="lazy-load img-fluid" data-src="<?php echo esc_url($section_image['url']); ?>"
                                    alt="<?php echo esc_attr($section_image['alt']); ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>