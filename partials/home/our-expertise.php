<?php
// Technology Section Fields
$technology_top_header = get_field('technology_top_header');
$technology_title = get_field('technology_title');
$technology_image = get_field('technology_image');
$tabs = get_field('tabs');
?>

<section class="technology overflow">
    <div class="l__container">
        <div class="row">
            <div class="col-xl-7 col-lg-6 ">
                <div class="p__tb technology__content wow fadeInUp" data-wow-duration="1s">
                    <div class="section__title clearfix">
                        <?php if (!empty($technology_top_header)): ?>
                            <h6 class="text-cetner"><?php echo esc_html($technology_top_header); ?></h6>
                        <?php endif; ?>

                        <?php if (!empty($technology_title)): ?>
                            <?php echo wp_kses_post($technology_title); ?>
                        <?php endif; ?>
                    </div>

                    <?php if ($tabs): ?>
                        <ul class="nav nav-pills technology__tab" id="pills-tab" role="tablist">
                            <?php foreach ($tabs as $index => $tab): ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>"
                                            data-bs-toggle="pill"
                                            data-bs-target="#pills-<?php echo $index; ?>-tab"
                                            type="button"
                                            role="tab">
                                        <?php echo esc_html($tab['tab_name']); ?>
                                    </button>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <?php foreach ($tabs as $index => $tab): ?>
                                <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>"
                                     id="pills-<?php echo $index; ?>-tab"
                                     role="tabpanel">
                                    <div class="technology__list">
                                        <div class="row row-cols-4 row-cols-sm-5 row-cols-md-6 row-cols-lg-5 row-cols-xl-6 g-4">
                                            <?php if (!empty($tab['images'])): ?>
                                                <?php foreach ($tab['images'] as $image): ?>
                                                    <div class="col">
                                                        <div class="technology__list--card">
                                                            <img class="lazy-load"
                                                                 data-src="<?php echo esc_url($image['url']); ?>"
                                                                 alt="<?php echo esc_attr($image['alt']); ?>">
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-xl-5 col-lg-6 ">
                <div class="technology__img d-none d-lg-block">
                    <span class="circle wow fadeInDown" data-wow-duration="1s"></span>
                    <?php if (!empty($technology_image)): ?>
                        <img class="lazy-load" src="<?php echo esc_url($technology_image['url']); ?>"
                             alt="<?php echo esc_attr($technology_image['alt']); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
