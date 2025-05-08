<?php
// Enquiry Section 
$enquiry_title = get_field('enquiry_title');
$enquiry_desc = get_field('enquiry_desc');
$enquiry_image = get_field('enquiry_image');
$enquiry_steps = get_field('enquiry-steps');
$enquiry_form_title = get_field('enquiry_form_title');
$enquiry_form_desc = get_field('enquiry_form_desc');
$enquiry_form_iframe = get_field('enquiry_form_ifram_code');
$single_service_enquiry_from = get_field('single_service_enquiry_from', 'option');
?>

<!-- Enquiry -->
<section class="service-enquiry overflow p__tb--t">
    <div class="l__container wow fadeInUp pt-3" data-wow-duration="1s">
        <div class="row">
            <div class="col-md-12">
                <div class="section__title text-center clearfix">
                    <?php if ($enquiry_title): ?>
                        <?php echo wp_kses_post($enquiry_title); ?>
                    <?php endif; ?>
                    <?php if ($enquiry_desc): ?>
                        <p><?php echo esc_html($enquiry_desc); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-lg-7">
                <div class="service-enquiry-step d-none d-md-block">
                    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5 justicy-content-center"
                        style="margin-bottom: 10rem;">
                        <?php if (!empty($enquiry_steps) && is_array($enquiry_steps)):
                            $counter = 1;
                            foreach ($enquiry_steps as $step): ?>
                                <div class="col">
                                    <div class="cards">
                                        <div class="icon">
                                            <?php if (!empty($step['es_image'])): ?>
                                                <img class="lazy-load" data-src="<?php echo esc_url($step['es_image']['url']); ?>"
                                                    alt="<?php echo esc_attr($step['es_image']['alt']); ?>" height="50" width="50">
                                            <?php endif; ?>
                                        </div>
                                        <div class="content">
                                            <span><?php echo esc_html($counter); ?></span>
                                            <p><?php echo !empty($step['es_desc']) ? esc_html($step['es_desc']) : ''; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php $counter++;
                            endforeach;
                        endif; ?>
                    </div>
                    <div class="img">
                        <?php if ($enquiry_image): ?>
                            <img class="lazy-load" data-src="<?php echo esc_url($enquiry_image['url']); ?>"
                                alt="<?php echo esc_attr($enquiry_image['alt']); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="form  mt-4 mt-lg-0">
                    <?php if ($enquiry_form_title): ?>
                        <h3>
                            <?php echo esc_html($enquiry_form_title); ?>
                            <?php if ($enquiry_form_desc): ?>
                                <p><?php echo esc_html($enquiry_form_desc); ?></p>
                            <?php endif; ?>
                        </h3>
                    <?php endif; ?>
                    <?php if (is_page('website-development')): ?>
                        <?php if ($enquiry_form_iframe): ?>
                            <?php echo $enquiry_form_iframe; ?>
                        <?php endif; ?>
                        <?php else: ?>
                        <?php if ($single_service_enquiry_from): ?>
                            <?php echo $single_service_enquiry_from; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                   
                </div>
            </div>
        </div>
    </div>
</section>