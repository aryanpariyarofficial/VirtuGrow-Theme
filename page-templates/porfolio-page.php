<?php
/*
Template Name: Portfolio Page
*/
get_header();

// ACF fields
$top_title = get_field('top_title');
$main_heading = get_field('main_heading');
$portfolio_items = get_field('portfolio_items'); // repeater with image, title, category
$categories = ['all' => 'All', 'website-development' => 'Website Development', 'online-marketing' => 'Online Marketing', 'zakelijke-telefonie' => 'Zakelijke Telefonie', 'ai-services' => 'AI Services'];
?>

<div style="min-height: 50vh">
<section>
    <div class="l__container">
        <div class="portfolio__page m__tb--b" style="background-size: contain; min-height: 500px;">
            <div class="section__title text-center m__tb--b">
                <?php if ($top_title): ?>
                    <h6><?php echo esc_html($top_title); ?></h6>
                <?php endif; ?>
                <?php if ($main_heading): ?>
                    <h1 class="title"><?php echo wp_kses_post($main_heading); ?></h1>
                <?php endif; ?>
            </div>

            <div class="tabs__head">
                <ul class="nav nav-pills">
                    <?php foreach ($categories as $key => $label): ?>
                        <li class="nav-item">
                            <a href="#" class="l__button l__button--border <?php echo $key === 'all' ? 'active' : ''; ?>" data-filter="<?php echo $key; ?>">
                                <?php echo $label; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="tab-content tabs__body px-3 px-lg-4">
                <div class="tab-pane fade show active">
                    <div class="tabs__body--content">
                        <div class="row">
                            <?php if ($portfolio_items): ?>
                                <?php foreach ($portfolio_items as $item): ?>
                                    <?php $category = sanitize_title($item['category']); ?>
                                    <div class="col-md-4 col-sm-6 graphics mb-3 portfolio-item" data-category="<?php echo $category; ?>">
                                        <div class="portfolio-item__inner">
                                            <div class="thumb">
                                                <img class="lazy-load" data-src="<?php echo esc_url($item['image']['url']); ?>" alt="<?php echo esc_attr($item['image']['alt']); ?>">
                                            </div>
                                            <div class="content">
                                                <h3><?php echo esc_html($item['title']); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="text-center">No portfolio items found. Please add some in the ACF repeater.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
</div>

<?php get_template_part('partials/lets', 'connect'); ?>
<?php get_footer(); ?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll('.nav-pills a');
    const items = document.querySelectorAll('.portfolio-item');
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            buttons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            const filter = this.getAttribute('data-filter');
            items.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
