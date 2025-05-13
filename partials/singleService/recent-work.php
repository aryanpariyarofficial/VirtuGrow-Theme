<?php 
// Portfolio Section 
$portfolio_sub_title = get_field('portfolio_sub_title');
$portfolio_main_heading = get_field('portfolio_main_heading');
$portfolio_snapshot = get_field('portfolio_snapshot');

// Fallbacks
$fallback_sub_title = 'Onze Portfolio';
$fallback_main_heading = 'Enkele van onze recente <span>website-ontwikkelingen</span>';
$fallback_images = array_fill(0, 6, [
    'portfolio_snapshot_image' => [
        'url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/planjesocialmedia.nl_.png',
        'alt' => 'Portfolio website voorbeeld'
    ]
]);

$snapshots = !empty($portfolio_snapshot) ? $portfolio_snapshot : $fallback_images;
?>

<section class="work__section pt-5 p__tb--b overflow">
    <div class="l__container wow fadeInUp pt-3" data-wow-duration="1s">
        <div class="section__title text-center m__tb--b">
            <h6><?php echo esc_html($portfolio_sub_title ?: $fallback_sub_title); ?></h6>
            <h2 class="title"><?php echo wp_kses_post($portfolio_main_heading ?: $fallback_main_heading); ?></h2>
        </div>

        <div class="work__slide image-item">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-3 g-md-3 g-lg-4">
                <?php foreach ($snapshots as $item): ?>
                    <div class="col">
                        <div class="work__section--card" data-aos="fade-up" data-aos-duration="800"
                             data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="work__section--card-img">
                                <img class="lazy-load"
                                     data-src="<?php echo esc_url($item['portfolio_snapshot_image']['url']); ?>"
                                     alt="<?php echo esc_attr($item['portfolio_snapshot_image']['alt']); ?>">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>
