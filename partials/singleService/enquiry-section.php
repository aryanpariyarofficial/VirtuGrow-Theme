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

// Fallbacks
$default_title = 'De tijd dringt!';
$default_desc = 'Mis de kans niet om het volledige potentieel van uw bedrijf te benutten met VirtuGrow Website Development.';
$default_image = [
    'url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/objects.png',
    'alt' => 'VirtuGrow Website Audit'
];
$default_steps = array_fill(0, 5, [
    'es_image' => [
        'url' => 'http://virtugrow10.sg-host.com/wp-content/uploads/2025/05/rocket_launch_FILL0_wght400_GRAD0_opsz48_1_2.svg',
        'alt' => 'Speed Check'
    ],
    'es_desc' => 'Is your website fast?'
]);

$steps = !empty($enquiry_steps) ? $enquiry_steps : $default_steps;
$image = !empty($enquiry_image) ? $enquiry_image : $default_image;
?>

<section class="service-enquiry overflow p__tb--t">
    <div class="l__container wow fadeInUp pt-3" data-wow-duration="1s">
        <div class="row">
            <div class="col-md-12">
                <div class="section__title text-center clearfix">
                    <h2><?php echo wp_kses_post($enquiry_title ?: $default_title); ?></h2>
                    <p><?php echo esc_html($enquiry_desc ?: $default_desc); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-lg-7">
                <div class="service-enquiry-step d-none d-md-block">
                    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5 justicy-content-center"
                        style="margin-bottom: 10rem;">
                        <?php
                        $counter = 1;
                        foreach ($steps as $step):
                            ?>
                            <div class="col">
                                <div class="cards">
                                    <div class="icon">
                                        <img class="lazy-load" data-src="<?php echo esc_url($step['es_image']['url']); ?>"
                                            alt="<?php echo esc_attr($step['es_image']['alt']); ?>" height="50" width="50">
                                    </div>
                                    <div class="content">
                                        <span><?php echo $counter++; ?></span>
                                        <p><?php echo esc_html($step['es_desc']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="img">
                        <img class="lazy-load" data-src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-lg-5">
                <div class="form mt-4 mt-lg-0">
                    <?php
                    // Fallback values
                    $default_form_title = 'Controleer gratis de kwaliteit van uw website';
                    $default_form_desc = 'Stuur ons de URL van uw website';

                    // Use fallback if field is empty
                    $form_title = !empty($enquiry_form_title) ? $enquiry_form_title : $default_form_title;
                    $form_desc = !empty($enquiry_form_desc) ? $enquiry_form_desc : $default_form_desc;
                    ?>

                    <h3><?php echo esc_html($form_title); ?>
                        <p><?php echo esc_html($form_desc); ?></p>
                    </h3>


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