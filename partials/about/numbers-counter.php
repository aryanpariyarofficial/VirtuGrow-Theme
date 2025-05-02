<?php if (have_rows('about_stats')): ?>
    <section class="m__tb--t numbersCounter">
        <div class="l__container wow zoomIn" data-wow-duration="1s">
            <div class="infographic">
                <div class="row">
                    <?php while (have_rows('about_stats')):
                        the_row();
                        $icon = get_sub_field('icon');
                        $value = get_sub_field('value'); // e.g., "80+"
                        $label = get_sub_field('label');
                        $numeric_value = preg_replace('/[^0-9]/', '', $value);

                        ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="infographic__card">
                                <?php if (!empty($icon)): ?>
                                    <span>
                                        <img class="lazy-load" data-src="<?php echo esc_url($icon['url']); ?>"
                                            alt="<?php echo esc_attr($icon['alt']); ?>">
                                    </span>
                                <?php endif; ?>

                                <?php if (!empty($value)): ?>

                                    <div class="count" data-count="<?php echo esc_attr($numeric_value); ?>"></div>


                                <?php endif; ?>

                                <?php if (!empty($label)): ?>
                                    <h4><?php echo esc_html($label); ?></h4>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>