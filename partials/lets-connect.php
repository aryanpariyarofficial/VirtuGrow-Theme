<?php
$main_heading = get_field('main_heading', 'option');
$desc = get_field('desc', 'option');
$text = get_field('text', 'option');
$phone_number = get_field('phone_number', 'option');
$cta_button = get_field('cta_button', 'option');
?>

<section class="cta p__tb overflow">
    <div class="l__container  wow fadeInUp" data-wow-duration="1s">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="cta__wrap mb-4 mb-md-0">
                    <?php if ($main_heading): ?>
                        <?php echo wp_kses_post($main_heading); ?>
                    <?php endif; ?>

                    <?php if ($desc): ?>
                        <div class="sub-heading"> <?php echo esc_html($desc); ?></div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-5 col-md-5">
                <div class="cta__wrap--one text-center">
                    <?php if ($text): ?>

                        <h6 class=""><?php echo esc_html($text); ?></h6>
                    <?php endif; ?>
                    <p class="call-us">
                        <?php if ($phone_number): ?>
                            <a
                                href="<?php echo esc_url($phone_number['url']); ?>"><?php echo esc_html($phone_number['title']); ?></a>
                        <?php endif; ?>
                    </p>

                    <?php if ($cta_button): ?>
                        <div class="contact-us-button mt-20">
                            <button data-bs-toggle="modal" data-id=""
                                data-bs-target="<?php echo esc_url($cta_button['url']); ?>"
                                class="l__button l__button--primary">
                                <span><?php echo esc_html($cta_button['title']); ?></span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>