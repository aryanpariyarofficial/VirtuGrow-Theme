<?php
// Industry Section Fields
$industry_top_title = get_field('industry_top_title');
$industry_main_heading = get_field('industry_main_heading');
$industry_cards = get_field('industry_cards');

// Fallback values
$fallback_industry_cards = [
    [
        'industry_card_image' => ['url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/E_Commerce-06.svg', 'alt' => 'E-commerce'],
        'industry_card_title' => 'E-commerce',
        'industry_card_desc'  => 'We herdefiniëren de online winkelervaring door middel van innovatieve oplossingen voor e-commerce websiteontwikkeling, met meer dan zes jaar ervaring in websiteontwikkeling.',
    ],
    [
        'industry_card_image' => ['url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/Travel_and_trekking.svg', 'alt' => 'Reizen en Trekking'],
        'industry_card_title' => 'Reizen en Trekking',
        'industry_card_desc'  => 'We hechten veel waarde aan ervaring. Daarom bieden we u de beste websiteontwikkelingsdiensten voor reizen en trekking.',
    ],
    [
        'industry_card_image' => ['url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/E_learning.svg', 'alt' => 'E-learning'],
        'industry_card_title' => 'E-learning',
        'industry_card_desc'  => 'We zijn gespecialiseerd in het versterken van onderwijs met digitale oplossingen. We richten ons op de ontwikkeling van innovatieve e-learning websites die technologie en onderwijs naadloos combineren.',
    ],
    [
        'industry_card_image' => ['url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/others.svg', 'alt' => 'Informatief en overig'],
        'industry_card_title' => 'Informatief en overig',
        'industry_card_desc'  => 'Onze diensten voor websiteontwerp en -ontwikkeling beperken zich niet tot de bovengenoemde categorieën. Wij zijn uw vertrouwde partner voor websiteontwerp en -ontwikkeling op maat in Nederland.',
    ],
];

// Use fallbacks if empty
$cards_to_display = !empty($industry_cards) ? $industry_cards : $fallback_industry_cards;
?>

<!-- excellence -->
<section class="industry pt-5 p__tb">
    <div class="l__container overflow pt-3">
        <div class="section__title text-center clearfix wow fadeInUp" data-wow-duration="1s">
            <h6><?php echo !empty($industry_top_title) ? esc_html($industry_top_title) : 'Branches die we bedienen'; ?></h6>
            <h2 class="title"><?php echo !empty($industry_main_heading) ? wp_kses_post($industry_main_heading) : 'Trots op uitmuntende kwaliteit,<span> elke keer weer'; ?></h2>
        </div>

        <div class="excellence">
            <div class="row g-0 excellence__first">
                <?php foreach ($cards_to_display as $card): ?>
                    <div class="col-md-6 col-sm-6">
                        <div class="excellence__card wow fadeInUp" data-wow-duration="1s">
                            <?php if (!empty($card['industry_card_image']['url'])): ?>
                                <div class="excellence__card--img d-none d-md-block">
                                    <img class="lazy-load"
                                        data-src="<?php echo esc_url($card['industry_card_image']['url']); ?>"
                                        alt="<?php echo esc_attr($card['industry_card_image']['alt']); ?>">

                                </div>
                            <?php endif; ?>
                            <div class="excellence__card--content">
                                <?php if (!empty($card['industry_card_title'])): ?>
                                    <h3><?php echo esc_html($card['industry_card_title']); ?></h3>
                                <?php endif; ?>
                                <?php if (!empty($card['industry_card_desc'])): ?>
                                    <p><?php echo esc_html($card['industry_card_desc']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
