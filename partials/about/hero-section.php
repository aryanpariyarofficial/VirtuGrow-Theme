<?php
// Fetch ACF fields from the "About page Setting" group
$title = get_field('title');
$content = get_field('content');
$image = get_field('image');
?>
<section class="about">
    <div class="l__container ">
        <div class="about__banner overflow">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="left">
                        <div class="section__title clearfix">
                            <?php if (!empty($title)): ?>
                                <?php echo wp_kses_post($title); ?>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($content)): ?>
                            <div class="title-desc">
                                <p><?php echo wp_kses_post($content); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <?php if (!empty($image)): ?>
                        <div class="right">
                            <img class="lazy-load" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>