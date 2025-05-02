<div class="slider">
    <div class="l__container overflow">
        <div class="slider__items">
            <div class="banner__slide overflow">
                
                <div class="row justify-content-center align-items-center  flex-column-reverse flex-md-row">
                    <div class="col-md-7 col-lg-6">
                        <div class="slider__left">
                            <div class="section__title">
                            <?php
                            $hero_title = get_field('hero_title');
                            if (!empty($hero_title)) : ?>
            
            <h1 class="large__title"><?php echo esc_html($hero_title); ?></h1>
        <?php endif; ?>

                            </div>
                            
                            <div>
                                <?php
                                $hero_button_1 = get_field('hero_button_1');
                                if (!empty($hero_button_1)) : ?>
                                <button data-bs-toggle="modal" data-bs-target="<?php echo esc_url($hero_button_1['url']); ?>" data-id="" class="l__button l__button--border me-4 mb-4">
                                <!-- <button data-bs-toggle="modal" data-bs-target="#enquiryModal" data-id="" class="l__button l__button--border me-4 mb-4"> -->
                                    <span> <?php echo esc_html($hero_button_1['title']); ?></span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                                <?php endif; ?>

                                                                
                                <span class="d-block d-md-inline">
                                    <?php 
                                    $hero_button_2 = get_field('hero_button_2');
                                    if (!empty($hero_button_2)) : ?>
                                        <a href="<?php echo esc_url($hero_button_2['url']); ?>" target="<?php echo esc_attr($hero_button_2['target']); ?>" class="more-- ps-0">
                                        <?php echo esc_html($hero_button_2['title']); ?>
                                            <span><i class="fa-solid fa-chevron-right"></i></span>
                                        </a>
                                        <?php endif; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6">
                        <div class="slider__right mb-4 mb-md-0">
                            <?php
                            $hero_image = get_field('hero_image');
                            if (!empty($hero_image)) : ?>
                                <img class="lazy-load" data-src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" data-wow-duration="1s">
                            <?php endif; ?>
                   
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

