<?php
// FAQ Section
$faq_small_title = get_field('faq_small_title') ?: 'FAQs';
$faq_main_title  = get_field('faq_main_title') ?: '<h2>Veelgestelde <span>Vragen</span></h2>';
$faq_main_desc   = get_field('faq_main_desc') ?: 'Hier vindt u antwoorden op veelgestelde vragen over onze webontwikkelingsdiensten.';
$faq_main_image  = get_field('faq_main_image') ?: [
    'url' => 'https://virtugrow10.sg-host.com/wp-content/uploads/2025/05/faq.svg',
    'alt' => 'FAQ Image'
];

$fqs = get_field('faqs');

$fallback_faqs = [
    [
        'faq_title' => 'Welke soorten webontwikkelingsdiensten bieden jullie aan?',
        'faq_desc'  => 'Als een toonaangevend webdesign- en ontwikkelbedrijf in Nepal bieden wij onze webdesign- en ontwikkelingsdiensten aan voor een breed scala aan sectoren...'
    ],
    [
        'faq_title' => 'Welke soorten webontwikkelingsdiensten bieden jullie aan?',
        'faq_desc'  => 'Als een toonaangevend webdesign- en ontwikkelbedrijf in Nepal bieden wij onze webdesign- en ontwikkelingsdiensten aan voor een breed scala aan sectoren...'
    ],
    [
        'faq_title' => 'Welke soorten webontwikkelingsdiensten bieden jullie aan?',
        'faq_desc'  => 'Als een toonaangevend webdesign- en ontwikkelbedrijf in Nepal bieden wij onze webdesign- en ontwikkelingsdiensten aan voor een breed scala aan sectoren...'
    ],
    [
        'faq_title' => 'Welke soorten webontwikkelingsdiensten bieden jullie aan?',
        'faq_desc'  => 'Als een toonaangevend webdesign- en ontwikkelbedrijf in Nepal bieden wij onze webdesign- en ontwikkelingsdiensten aan voor een breed scala aan sectoren...'
    ],
    [
        'faq_title' => 'Welke soorten webontwikkelingsdiensten bieden jullie aan?',
        'faq_desc'  => 'Als een toonaangevend webdesign- en ontwikkelbedrijf in Nepal bieden wij onze webdesign- en ontwikkelingsdiensten aan voor een breed scala aan sectoren...'
    ],
    [
        'faq_title' => 'Welke soorten webontwikkelingsdiensten bieden jullie aan?',
        'faq_desc'  => 'Als een toonaangevend webdesign- en ontwikkelbedrijf in Nepal bieden wij onze webdesign- en ontwikkelingsdiensten aan voor een breed scala aan sectoren...'
    ],
    // Repeat more items as needed
];

$faq_items = !empty($fqs) ? $fqs : $fallback_faqs;
?>

<!-- FAQs -->
<section class="faq p__tb">
    <div class="l__container">
        <div class="row wow fadeInUp" data-wow-duration="1s">
            <div class="col-md-6">
                <aside>
                    <div class="section__title">
                        <h6><?php echo esc_html($faq_small_title); ?></h6>
                        <?php echo wp_kses_post($faq_main_title); ?>
                        <p class="d-none d-lg-inline-block"><?php echo esc_html($faq_main_desc); ?></p>
                    </div>
                    <img data-src="<?php echo esc_url($faq_main_image['url']); ?>"
                         class="lazy-load img-fluid wow zoomIn d-none d-md-block"
                         data-wow-duration="1s"
                         alt="<?php echo esc_attr($faq_main_image['alt']); ?>"
                         style="height: 500px;">
                </aside>
            </div>

            <div class="col-md-6">
                <div class="faq__accordion">
                    <ul class="accordion custom__accordion">
                        <?php foreach ($faq_items as $faq): ?>
                            <li class="accordion__item">
                                <h3 class="accordion__title" href="javascript:void(0)">
                                    <i class="fa-solid fa-chevron-down"></i>
                                    <?php echo esc_html($faq['faq_title']); ?>
                                </h3>
                                <div class="accordion__content" style="display: none">
                                    <p><?php echo wp_kses_post($faq['faq_desc']); ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
