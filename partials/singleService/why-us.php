<?php 
// Why with us 
$why_us_top_title = get_field('why_us_top_title');
$why_us_main_heading = get_field('why_us_main_heading');
$why_us_desc = get_field('why_us_desc');
$why_us_features = get_field('why_us_features');

// Fallbacks
$fallback_top_title = 'Waarom voor ons kiezen';
$fallback_main_heading = 'Wij helpen u uw bedrijf uit <span>te breiden met technologie</span>';
$fallback_desc = 'Wij hebben een team van hooggekwalificeerde websiteontwerpers en -ontwikkelaars die u kunnen voorzien van de website van uw keuze. Als een toonaangevend webontwikkelingsbedrijf in Nepal bieden wij uitzonderlijke en responsieve ontwerp- en ontwikkelingsdiensten voor websites. Enkele van onze extra voordelen zijn:';

$fallback_features = array_fill(0, 4, [
    'wuimage1' => [
        'url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/service-shape.svg',
        'alt' => 'Decoratieve vorm'
    ],
    'wuimage2' => [
        'url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/Process-pana_YTnpnnd.svg',
        'alt' => 'Illustratie van Proces'
    ],
    'wutitle' => 'Robuuste functionaliteit',
    'wudesc' => 'Wij creëren hoogwaardige websites met geavanceerde functies en soepele prestaties voor een uitzonderlijke gebruikerservaring.'
]);

$features_to_display = !empty($why_us_features) ? $why_us_features : $fallback_features;
?>

<section class="choose pt-5 p__tb">
    <div class="l__container overflow pt-3">
        <div class="ttm-row">
            <div class="row">
                <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="section__title clearfix">
                        <h6><?php echo esc_html($why_us_top_title ?: $fallback_top_title); ?></h6>
                        <h2 class="title"><?php echo wp_kses_post($why_us_main_heading ?: $fallback_main_heading); ?></h2>
                    </div>
                    <div class="title-desc">
                        <p><?php echo esc_html($why_us_desc ?: $fallback_desc); ?></p>
                    </div>
                </div>

                <?php foreach ($features_to_display as $feature): ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 p-2 p-md-3">
                        <div class="choose__card text-center wow fadeInUp" data-wow-duration="1s">
                            <div class="choose__card--shape">
                                <img src="<?php echo esc_url($feature['wuimage1']['url']); ?>" 
                                     alt="<?php echo esc_attr($feature['wuimage1']['alt']); ?>">
                            </div>
                            <div class="choose__card--img">
                                <img class="lazy-load" data-src="<?php echo esc_url($feature['wuimage2']['url']); ?>" 
                                     alt="<?php echo esc_attr($feature['wuimage2']['alt']); ?>">
                            </div>
                            <div class="choose__card--content">
                                <h3><?php echo esc_html($feature['wutitle']); ?></h3>
                                <p><?php echo esc_html($feature['wudesc']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
