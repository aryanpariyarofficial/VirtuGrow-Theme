<?php
// Technology Section
$small_title = get_field('technology_small_title');
$main_title = get_field('technology_main_title');
$section_image = get_field('technology_image');
$technologies = get_field('technologies');

// Fallbacks
$fallback_small_title = 'Technology Stack';
$fallback_main_title = 'Technology we Work with in <span> Website Development';
$fallback_section_image = [
    'url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/technology-stack.svg',
    'alt' => 'Technology Stack'
];

$fallback_technologies = [
    [
        'technologies_title' => 'Frontend',
        'technologies_image' => [
            [
                'url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/04/icons8-wordpress-96.png',
                'alt' => 'WordPress',
                'title' => 'WordPress',
                'description' => 'Frontend Tech'
            ]
        ]
    ],
    [
        'technologies_title' => 'Backend',
        'technologies_image' => [
            [
                'url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/04/icons8-postgresql-100.png',
                'alt' => 'PostgreSQL',
                'title' => 'PostgreSQL',
                'description' => 'Backend Tech'
            ]
        ]
    ],
    [
        'technologies_title' => 'Automation',
        'technologies_image' => [
            [
                'url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/04/8wJAHt_dUJ0Q6XpWn8J5aev4ElJ3prQYVQ.jpg',
                'alt' => 'Automation',
                'title' => 'Automation Tools',
                'description' => 'Automation Tech'
            ]
        ]
    ],
];

$display_technologies = !empty($technologies) ? $technologies : $fallback_technologies;
$display_image = !empty($section_image) ? $section_image : $fallback_section_image;
?>

<!-- technology -->
<section class="tech pt-5 p__tb">
    <div class="l__container overflow pt-3">
        <div class="section__title text-center m__tb--b wow fadeInUp" data-wow-duration="1s">
            <h6><?php echo esc_html($small_title ?: $fallback_small_title); ?></h6>
            <h2 class="title"><?php echo wp_kses_post($main_title ?: $fallback_main_title); ?></h2>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="left">
                    <?php foreach ($display_technologies as $tech): ?>
                        <div class="tech__collect wow fadeInUp" data-wow-duration="1s">
                            <h3><?php echo esc_html($tech['technologies_title']); ?></h3>
                            <div class="row row-cols-3 row-cols-md-5 row-cols-lg-5 row-cols-xl-6 p-0 g-4 thumbs">
                                <?php if (!empty($tech['technologies_image'])): ?>
                                    <?php foreach ($tech['technologies_image'] as $image): ?>
                                        <div class="col">
                                            <div class="thumbs-card">
                                                <div class="thumbs-card-img">
                                                    <img src="<?php echo esc_url($image['url']); ?>"
                                                        rel="<?php echo esc_url($image['url']); ?>"
                                                        data-toggle="modal"
                                                        data-target="#techModal"
                                                        data-title="<?php echo esc_attr($image['title']); ?>"
                                                        data-text="<?php echo esc_attr($image['description']); ?>"
                                                        class="zoom"
                                                        alt="<?php echo esc_attr($image['alt']); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-5 col-md-7 d-none d-lg-block">
                <div class="right d-none d-md-block wow zoomIn" data-wow-duration="1s">
                    <img class="lazy-load img-fluid"
                        data-src="<?php echo esc_url($display_image['url']); ?>"
                        alt="<?php echo esc_attr($display_image['alt']); ?>">
                </div>
            </div>
        </div>
    </div>
</section>
