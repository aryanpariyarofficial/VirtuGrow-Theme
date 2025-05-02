<?php
/*
Template Name: Contact Page
*/

get_header();

$iframe_link = get_field('iframe_code');
?>
<div style="min-height: 50vh">
    <div class="site-main">
        <div class="l__container">
            <section class="contact overflow">
                <div class="section__title text-center">
                    <h1 class="text-black"><?php echo get_the_title(); ?></h1>
                </div>
            </section>
        </div>
        <section class="contact__form">
            <div class="l__container">
                <div class="contact__form-- overflow">
                    <div class="row">
                        <div class="col-12">
                        </div>
                        <div class="col-lg-7">
                            <h2 class="title"><?php the_field('hero_title'); ?></h2>
                            <h6 class="subtitle"><?php the_field('hero_subtitle'); ?></h6>
                            <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
                        </div>
                        <div class="col-lg-5">
                            <div class="contact__form--img d-none d-lg-block">
                                <?php
                                $hero_image = get_field('hero_image');
                                if ($hero_image): ?>
                                    <img src="<?php echo esc_url($hero_image['url']); ?>"
                                        alt="<?php echo esc_attr($hero_image['alt']); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if (have_rows('contact_details')): ?>
                            <div class="contact__form--info">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-4">
                                    <?php while (have_rows('contact_details')):
                                        the_row();
                                        $icon = get_sub_field('icon_image');
                                        $title = get_sub_field('title_heading');
                                        $text_link = get_sub_field('text_link');
                                        ?>
                                        <div class="col">
                                            <div class="contact__form--info--">
                                                <div class="icon">
                                                    <?php if ($icon): ?>
                                                        <img src="<?php echo esc_url($icon['url']); ?>"
                                                            alt="<?php echo esc_attr($icon['alt']); ?>">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="content">
                                                    <?php if ($title): ?>
                                                        <h3><?php echo esc_html($title); ?></h3>
                                                    <?php endif; ?>

                                                    <?php if ($text_link): ?>
                                                        <h4>
                                                            <a href="<?php echo esc_url($text_link['url']); ?>"
                                                                target="<?php echo esc_attr($text_link['target'] ?: '_self'); ?>">
                                                                <?php echo esc_html($text_link['title']); ?>
                                                            </a>
                                                        </h4>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="sticky__social d-none d-sm-block">
                        <ul>
                            <?php if ($facebook = get_field('facebook', 'option')): ?>

                                <li>
                                    <a href="<?php echo esc_url($facebook['url']); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29"
                                            fill="none">
                                            <path
                                                d="M14.5 0C6.4923 0 0 6.53149 0 14.5875C0 21.8674 5.30173 27.9014 12.2349 29V18.8052H8.55151V14.5875H12.2349V11.3736C12.2349 7.71466 14.3999 5.697 17.7106 5.697C19.2971 5.697 20.9589 5.98149 20.9589 5.98149V9.56892H19.126C17.3278 9.56892 16.7651 10.6952 16.7651 11.8492V14.5846H20.7835L20.1411 18.8023H16.7651V28.9971C23.6983 27.9044 29 21.8689 29 14.5875C29 6.53149 22.5077 0 14.5 0Z"
                                                fill="#F6F6F6"></path>
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($instagram = get_field('instagram', 'option')): ?>

                                <li>
                                    <a href="<?php echo esc_url($instagram['url']); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27"
                                            fill="none">
                                            <path
                                                d="M26.913 7.96918C26.8979 6.8355 26.6853 5.7131 26.2848 4.65218C25.9375 3.7573 25.407 2.94458 24.7273 2.26596C24.0475 1.58734 23.2334 1.05774 22.3371 0.710999C21.288 0.317865 20.1798 0.10529 19.0595 0.0823263C17.6172 0.0179622 17.1599 0 13.4985 0C9.83713 0 9.36784 1.00371e-07 7.93597 0.0823263C6.81621 0.105458 5.70849 0.318031 4.65993 0.710999C3.76341 1.0575 2.94922 1.58702 2.26944 2.26567C1.58966 2.94432 1.05926 3.75716 0.712183 4.65218C0.317605 5.69867 0.105138 6.8048 0.0839627 7.92278C0.0194913 9.36423 0 9.82077 0 13.4761C0 17.1313 -1.11709e-08 17.5983 0.0839627 19.0293C0.106453 20.149 0.317859 21.2536 0.712183 22.3029C1.05985 23.1977 1.59064 24.0102 2.27064 24.6885C2.95065 25.3669 3.76492 25.8962 4.66143 26.2426C5.70711 26.6515 6.81503 26.8793 7.93747 26.9162C9.38133 26.9805 9.83863 27 13.5 27C17.1614 27 17.6307 27 19.0625 26.9162C20.1828 26.8942 21.2911 26.6821 22.3401 26.289C23.2362 25.9419 24.0501 25.4121 24.7298 24.7335C25.4095 24.055 25.9401 23.2425 26.2878 22.3478C26.6821 21.3 26.8935 20.1954 26.916 19.0742C26.9805 17.6343 27 17.1777 27 13.521C26.997 9.86567 26.997 9.40165 26.913 7.96918V7.96918ZM13.4895 20.3885C9.66021 20.3885 6.55808 17.2915 6.55808 13.4686C6.55808 9.64564 9.66021 6.54868 13.4895 6.54868C15.3278 6.54868 17.0909 7.27773 18.3908 8.57547C19.6907 9.8732 20.4209 11.6333 20.4209 13.4686C20.4209 15.3038 19.6907 17.0639 18.3908 18.3617C17.0909 19.6594 15.3278 20.3885 13.4895 20.3885V20.3885ZM20.6968 7.90631C20.4845 7.90651 20.2742 7.8649 20.078 7.78388C19.8819 7.70286 19.7036 7.58401 19.5535 7.43414C19.4034 7.28426 19.2843 7.1063 19.2031 6.91044C19.122 6.71459 19.0803 6.50467 19.0805 6.29272C19.0805 6.08091 19.1223 5.87119 19.2035 5.67551C19.2847 5.47983 19.4037 5.30203 19.5537 5.15226C19.7037 5.0025 19.8818 4.88369 20.0778 4.80264C20.2738 4.72159 20.4839 4.67987 20.6961 4.67987C20.9082 4.67987 21.1183 4.72159 21.3143 4.80264C21.5103 4.88369 21.6884 5.0025 21.8384 5.15226C21.9884 5.30203 22.1074 5.47983 22.1886 5.67551C22.2698 5.87119 22.3116 6.08091 22.3116 6.29272C22.3116 7.18483 21.5889 7.90631 20.6968 7.90631Z"
                                                fill="white"></path>
                                            <path
                                                d="M13.5 18C15.9853 18 18 15.9853 18 13.5C18 11.0147 15.9853 9 13.5 9C11.0147 9 9 11.0147 9 13.5C9 15.9853 11.0147 18 13.5 18Z"
                                                fill="white"></path>
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($linkedin = get_field('linkedin', 'option')): ?>
                                <li>
                                    <a href="<?php echo esc_url($linkedin['url']); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="27" height="27" x="0" y="0"
                                            viewBox="0 0 24 24" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <path
                                                    d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z"
                                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($tiktok = get_field('tiktok', 'option')): ?>
                                <li>
                                    <a href="<?php echo esc_url($tiktok['url']); ?>" target="_blank">
                                        <i class="fa-brands fa-tiktok p-2 customTiktokColor"
                                            style="color: white; font-size: 29px; height: 29; width: 29;"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($youtube = get_field('youtube', 'option')): ?>
                                <li>
                                    <a href="<?php echo esc_url($youtube['url']); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="27" height="27" x="0" y="0"
                                            viewBox="0 0 409.592 409.592" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <path
                                                    d="M403.882 107.206c-2.15-17.935-19.052-35.133-36.736-37.437a1316.32 1316.32 0 0 0-324.685 0C24.762 72.068 7.86 89.271 5.71 107.206c-7.613 65.731-7.613 129.464 0 195.18 2.15 17.935 19.052 35.149 36.751 37.437a1316.32 1316.32 0 0 0 324.685 0c17.684-2.284 34.586-19.502 36.736-37.437 7.614-65.71 7.614-129.449 0-195.18zM170.661 273.074V136.539l102.4 68.27-102.4 68.265z"
                                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <?php if (have_rows('contact_teams')): ?>
                        <div class="customer wow fadeInUp" data-wow-duration="1s">
                            <div class="row">
                                <?php while (have_rows('contact_teams')):
                                    the_row();
                                    $title = get_sub_field('contact_teams_title');
                                    $phone = get_sub_field('phone_link');
                                    $email = get_sub_field('email_link');
                                    ?>
                                    <div class="col-md-4">
                                        <div class="customer__card">
                                            <?php if (!empty($title)): ?>
                                                <h3><?php echo esc_html($title); ?></h3>
                                            <?php endif; ?>

                                            <?php if (!empty($phone['url']) && !empty($phone['title'])): ?>
                                                <p>
                                                    <a href="<?php echo esc_url($phone['url']); ?>">
                                                        <?php echo esc_html($phone['title']); ?>
                                                    </a>
                                                </p>
                                            <?php endif; ?>

                                            <?php if (!empty($email['url']) && !empty($email['title'])): ?>
                                                <a href="<?php echo esc_url($email['url']); ?>">
                                                    <span><?php echo esc_html($email['title']); ?></span>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
        </section>
        <div class="l__container">
            <section class="map p__tb--b wow zoomIn" data-wow-duration="1s">
                <?php if (!empty($iframe_link)): ?>
                    <iframe src="<?php echo esc_url($iframe_link['url']); ?>" width="600" height="450" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <?php endif; ?>
            </section>
        </div>
    </div>
</div>

<!-- Let's Connect -->
<?php get_template_part('partials/lets', 'connect') ?>
<!-- END OF Let's Connect -->

<?php get_footer(); ?>