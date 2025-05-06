<?php
// FAQ Section  
$faq_small_title = get_field('faq_small_title');
$faq_main_title  = get_field('faq_main_title');
$faq_main_desc   = get_field('faq_main_desc');
$faq_main_image  = get_field('faq_main_image');
$fqs             = get_field('faqs');
?>
<!-- FAQs -->
<section class="faq p__tb">
    <div class="l__container">
        <div class="row wow fadeInUp" data-wow-duration="1s">
            <div class="col-md-6">
                <aside>
                    <div class="section__title">
                        <?php if ($faq_small_title): ?>
                            <h6><?php echo esc_html($faq_small_title); ?></h6>
                        <?php endif; ?>
                        <?php if ($faq_main_title): ?>
                            <?php echo wp_kses_post($faq_main_title); ?>
                        <?php endif; ?>
                        <?php if ($faq_main_desc): ?>
                            <p class=" d-none d-lg-inline-block"><?php echo esc_html($faq_main_desc); ?></p>
                        <?php endif; ?>

                    </div>
                    <?php if ($faq_main_image): ?>
                        <img data-src="<?php echo esc_url($faq_main_image['url']); ?>"
                            class="lazy-load img-fluid wow zoomIn d-none d-md-block" data-wow-duration="1s"
                            alt="<?php echo esc_attr($faq_main_image['alt']); ?>" style="height: 500px;">
                    <?php endif; ?>
                </aside>
            </div>
            <div class="col-md-6">
                <div class="faq__accordion">
                    <?php if (!empty($fqs)): ?>
                        <ul class="accordion custom__accordion">
                            <?php foreach ($fqs as $faq): ?>
                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <h3 class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            <?php echo esc_html($faq['faq_title']); ?>
                                        </h3>
                                        <div class="accordion__content" style="display: none">
                                            <p></p>
                                            <?php echo wp_kses_post($faq['faq_desc']); ?>
                                            <p></p>
                                        </div>
                                    </li>
                                </div>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>