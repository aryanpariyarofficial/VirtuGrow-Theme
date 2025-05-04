<?php
/* Template Name: Website Development */
get_header();

// Service Hero Section
$hero_subtitle = get_field('hero_subtitle');
$hero_description = get_field('hero_description');
$hero_cta_link = get_field('hero_cta_link');
$hero_main_image = get_field('hero_main_image');
$hero_icon_group = get_field('hero_icon_group');
// Service Info Section 
$service_infos = get_field('service_infos');

// Industry Section
$industry_top_title = get_field('industry_top_title');
$industry_main_heading = get_field('industry_main_heading');
$industry_cards = get_field('industry_cards');



// other service
$top_title_small = get_field('top_title_small', 'option');
$main_heading_big = get_field('main_heading_big', 'option');
$other_services = get_field('other_services_card', 'option');
?>


<div style="min-height: 50vh">
    <div class="site-main">
        <section class="service__banner-">
            <div class="l__container">
                <div class="service__banner--content overflow">
                    <div class="row flex-column-reverse flex-md-row">
                        <div class="col-lg-7 col-md-6">
                            <div class="left">
                                <div class="section__title clearfix">
                                    <h1 class="title"><?php the_title(); ?></h1>
                                </div>
                                <div class="title-desc">
                                    <?php if (!empty($hero_subtitle)): ?>
                                        <h4 class="sub-title-desc"><?php echo esc_html($hero_subtitle); ?></h4>
                                    <?php endif; ?>
                                    <?php if (!empty($hero_description)): ?>
                                        <p><?php echo esc_html($hero_description); ?></p>
                                    <?php endif; ?>
                                    <?php if (!empty($hero_cta_link)): ?>
                                        <button data-bs-toggle="modal"
                                            data-bs-target="<?php echo esc_url($hero_cta_link['url']); ?>"
                                            data-id="34a938d8-134a-45af-94d2-abc7c8b13c4c"
                                            class="l__button l__button--border">
                                            <span><?php echo esc_html($hero_cta_link['title']); ?></span>
                                            <i class="fa-solid fa-chevron-right"></i></button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                            <div class="right mt-4">
                                <?php if (!empty($hero_main_image)): ?>
                                    <img class="" src="<?php echo esc_url($hero_main_image['url']); ?>"
                                        alt="<?php echo esc_attr($hero_main_image['alt']); ?>">
                                <?php endif; ?>
                                <?php if ($hero_icon_group): ?>
                                    <div class="info">
                                        <?php foreach ($hero_icon_group as $icon): ?>
                                            <div class="info__card">
                                                <?php if (!empty($icon['hero_icon_image'])): ?>
                                                    <img src="<?php echo esc_url($icon['hero_icon_image']['url']); ?>"
                                                        alt="<?php echo esc_attr($icon['hero_icon_image']['alt']); ?>">
                                                <?php endif; ?>
                                                <?php if (!empty($icon['hero_icon_title'])): ?>
                                                    <h4><?php echo esc_html($icon['hero_icon_title']); ?></h4>
                                                <?php endif; ?>
                                                <!-- <h6>Years of Experience</h6> -->
                                                <?php if (!empty($icon['hero_icon_desc'])): ?>
                                                    <h6><?php echo esc_html($icon['hero_icon_desc']); ?></h6>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($service_infos): ?>
                    <div class="service__info overflow">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <?php foreach ($service_infos as $info): ?>
                                <div class="col wow fadeInUp" data-wow-duration="1s">
                                    <div class="service__info--card">
                                        <div class="service__info--card-head">
                                            <?php if (!empty($info['service_info_image'])): ?>
                                                <img src="<?php echo esc_url($info['service_info_image']['url']); ?>"
                                                    alt="<?php echo esc_attr($info['service_info_image']['alt']); ?>">
                                            <?php endif; ?>
                                            <?php if (!empty($info['service_info_title'])): ?>
                                                <h2 class="title"><?php echo esc_html($info['service_info_title']); ?></h2>
                                            <?php endif; ?>
                                        </div>
                                        <div class="service__info--content">
                                            <?php if (!empty($info['service_info_desc'])): ?>
                                                <p><?php echo esc_html($info['service_info_desc']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- excellence -->
        <section class="industry  p__tb">
            <div class="l__container overflow">
                <div class="section__title text-center clearfix wow fadeInUp" data-wow-duration="1s">
                    <?php if (!empty($industry_top_title)): ?>
                        <h6><?php echo esc_html($industry_top_title); ?></h6>
                    <?php endif; ?>
                    <?php if (!empty($industry_main_heading)): ?>
                        <?php echo wp_kses_post($industry_main_heading); ?>
                    <?php endif; ?>
                </div>
                <div class="excellence">
                    <?php if ($industry_cards): ?>
                        <div class="row g-0 excellence__first">
                            <?php foreach ($industry_cards as $card): ?>
                                <div class="col-md-6 col-sm-6">
                                    <div class="excellence__card wow fadeInUp" data-wow-duration="1s">
                                        <?php if (!empty($card['industry_card_image'])): ?>
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
                    <?php endif; ?>
                </div>
            </div>
        </section>



        <!-- technology -->
        <section class="tech p__tb">
            <div class="l__container overflow">
                <div class="section__title text-center m__tb--b wow fadeInUp" data-wow-duration="1s">
                    <h6>Technology Stack</h6>
                    <h2 class="title">Technology we Work with in <span>Website Development</span></h2>
                </div>
                <div class="row ">
                    <div class="col-lg-7 ">
                        <div class="left">

                            <div class="tech__collect wow fadeInUp" data-wow-duration="1s">

                                <h3>Frontend</h3>
                                <div class="row row-cols-3 row-cols-md-5 row-cols-lg-5 row-cols-xl-6 p-0 g-4 thumbs">

                                    <div class="col">
                                        <div class="thumbs-card">
                                            <div class="thumbs-card-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/icons8-html-5.svg"
                                                    rel="/media/wd-tech/icons8-html-5.svg" data-toggle="modal"
                                                    data-target="#techModal" data-title="HTML"
                                                    data-text="HTML, or HyperText Markup Language, is the fundamental language used to create web pages. It provides a set of tags to structure content, such as headings, paragraphs, links, and images, enabling developers to design and build websites."
                                                    class="zoom" alt="None">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="thumbs-card">
                                            <div class="thumbs-card-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/icons8-css.svg"
                                                    rel="/media/wd-tech/icons8-css.svg" data-toggle="modal"
                                                    data-target="#techModal" data-title="CSS"
                                                    data-text="CSS, or Cascading Style Sheets, is a styling language for HTML documents. It defines how elements are displayed on web pages, controlling layout, colors, fonts, and more for consistent and attractive presentation."
                                                    class="zoom" alt="None">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="thumbs-card">
                                            <div class="thumbs-card-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/icons8-react-js.svg"
                                                    rel="/media/wd-tech/icons8-react-js.svg" data-toggle="modal"
                                                    data-target="#techModal" data-title="React JS"
                                                    data-text="React is a JavaScript library for building dynamic user interfaces. Developed by Facebook, it simplifies UI development by enabling the creation of reusable components. React's virtual DOM and declarative syntax enhance rendering performance, making it popular for building interactive web applications."
                                                    class="zoom" alt="None">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="thumbs-card">
                                            <div class="thumbs-card-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/icons8-next.js-96.png"
                                                    rel="/media/wd-tech/icons8-next.js-96.png" data-toggle="modal"
                                                    data-target="#techModal" data-title="Next JS"
                                                    data-text="Next.js is an open-source React framework for building server-rendered web applications with features like code splitting and server-side rendering, facilitating fast and scalable development."
                                                    class="zoom" alt="None">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="thumbs-card">
                                            <div class="thumbs-card-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/icons8-typescript-96.png"
                                                    rel="/media/wd-tech/icons8-typescript-96.png" data-toggle="modal"
                                                    data-target="#techModal" data-title="TypeScript" data-text="1"
                                                    class="zoom" alt="None">
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div class="tech__collect wow fadeInUp" data-wow-duration="1s">

                                <h3>Backend</h3>
                                <div class="row row-cols-3 row-cols-md-5 row-cols-lg-5 row-cols-xl-6 p-0 g-4 thumbs">

                                    <div class="col">
                                        <div class="thumbs-card">
                                            <div class="thumbs-card-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/icons8-node-js.svg"
                                                    rel="/media/wd-tech/icons8-node-js.svg" data-toggle="modal"
                                                    data-target="#techModal" data-title="Node JS"
                                                    data-text="Node.js is a runtime environment for executing JavaScript code on the server side, ideal for web development. Its event-driven architecture allows for scalable and efficient handling of network requests, making it popular for building web servers and real-time web applications."
                                                    class="zoom" alt="None">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="thumbs-card">
                                            <div class="thumbs-card-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/icons8-python.svg"
                                                    rel="/media/wd-tech/icons8-python.svg" data-toggle="modal"
                                                    data-target="#techModal" data-title="Python"
                                                    data-text="Python is a popular choice in web development due to its simplicity, readability, and robust ecosystem of libraries. It's widely used for backend development, powering frameworks like Django and Flask. With its clean syntax and extensive support for web-related tasks, Python enables developers to build scalable and efficient web applications with ease."
                                                    class="zoom" alt="None">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="thumbs-card">
                                            <div class="thumbs-card-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/icons8-php-logo.svg"
                                                    rel="/media/wd-tech/icons8-php-logo.svg" data-toggle="modal"
                                                    data-target="#techModal" data-title="PHP"
                                                    data-text="PHP, a popular server-side scripting language for web development, is known for its ease of use and flexibility. It powers CMS platforms like WordPress and is the foundation for frameworks like Laravel, which streamline web development with built-in features and robust tools for creating dynamic, scalable web applications."
                                                    class="zoom" alt="None">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="thumbs-card">
                                            <div class="thumbs-card-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/icons8-wordpress-96.png"
                                                    rel="/media/wd-tech/icons8-wordpress-96.png" data-toggle="modal"
                                                    data-target="#techModal" data-title="Wordpress" data-text="1"
                                                    class="zoom" alt="wordpress">
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div class="tech__collect wow fadeInUp" data-wow-duration="1s">

                                <h3>Infrastructure</h3>
                                <div class="row row-cols-3 row-cols-md-5 row-cols-lg-5 row-cols-xl-6 p-0 g-4 thumbs">

                                    <div class="col">
                                        <div class="thumbs-card">
                                            <div class="thumbs-card-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/icons8-amazon-web-services_2.svg"
                                                    rel="/media/wd-tech/icons8-amazon-web-services_2.svg"
                                                    data-toggle="modal" data-target="#techModal" data-title="AWS"
                                                    data-text="AWS, or Amazon Web Services, is a leading cloud computing platform by Amazon. It offers a vast array of services for computing, storage, networking, and more, enabling businesses to scale and deploy applications easily without hefty upfront investments."
                                                    class="zoom" alt="None">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="thumbs-card">
                                            <div class="thumbs-card-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/icons8-google-cloud_2.svg"
                                                    rel="/media/wd-tech/icons8-google-cloud_2.svg" data-toggle="modal"
                                                    data-target="#techModal" data-title="Google Cloud"
                                                    data-text="Google Cloud is a suite of cloud computing services by Google, offering solutions for computing, storage, machine learning, networking, and more. It empowers businesses to build, deploy, and scale applications on Google's infrastructure."
                                                    class="zoom" alt="None">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="thumbs-card">
                                            <div class="thumbs-card-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/icons8-docker-96.png"
                                                    rel="/media/wd-tech/icons8-docker-96.png" data-toggle="modal"
                                                    data-target="#techModal" data-title="Docker" data-text="docker"
                                                    class="zoom" alt="docker">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="thumbs-card">
                                            <div class="thumbs-card-img">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/icons8-digitalocean-100.png"
                                                    rel="/media/wd-tech/icons8-digitalocean-100.png" data-toggle="modal"
                                                    data-target="#techModal" data-title="Digital Ocean"
                                                    data-text="ocean" class="zoom" alt="digital-ocean">
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7 d-none d-lg-block">
                        <div class="right d-none d-md-block wow zoomIn" data-wow-duration="1s">
                            <img class="lazy-load img-fluid"
                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/technology-stack.svg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- roadmap -->
        <section class="roadmap p__tb overflow">
            <div class="l__container wow fadeInUp" data-wow-duration="1s">
                <div class="section__title">
                    <h2>Roadmap</h2>
                </div>
                <div class="row p-2">
                    <div class="col-xl-3 col-lg-4 col-md-4 d-none d-md-block">
                        <div class="roadmap__box--img wow zoomIn" data-wow-duration="1s">
                            <div class="roadmap__box--img-circular">
                                <div class="circular">
                                    <img class="lazy-load"
                                        data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/circular.png"
                                        alt="">
                                    <div class="number">

                                        <span class="text">01</span>

                                        <span class="text">02</span>

                                        <span class="text">03</span>

                                        <span class="text">04</span>

                                    </div>
                                </div>
                                <div class="box">
                                    <div class="block">

                                        <div class="img">
                                            <span number="01" class="icon">
                                                <img class="lazy-load"
                                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/data_d2TfRmt.svg"
                                                    alt="Requirement Analysis">
                                            </span>
                                            <img class="lazy-load"
                                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/block-1.png"
                                                alt="Requirement Analysis">
                                        </div>

                                        <div class="img">
                                            <span number="02" class="icon">
                                                <img class="lazy-load"
                                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/roadmap_L7njilk.svg"
                                                    alt="Planning Concept">
                                            </span>
                                            <img class="lazy-load"
                                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/block-2.png"
                                                alt="Planning Concept">
                                        </div>

                                        <div class="img">
                                            <span number="03" class="icon">
                                                <img class="lazy-load"
                                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/ui_Cg09jeq.svg"
                                                    alt="Design (UI/UX) Concept">
                                            </span>
                                            <img class="lazy-load"
                                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/block-3.png"
                                                alt="Design (UI/UX) Concept">
                                        </div>

                                        <div class="img">
                                            <span number="04" class="icon">
                                                <img class="lazy-load"
                                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/coding_RwTIxUX.svg"
                                                    alt="Development Concept">
                                            </span>
                                            <img class="lazy-load"
                                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/block-4.png"
                                                alt="Development Concept">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-8 col-md-8">
                        <div class="roadmap__box wow fadeInUp" data-wow-duration="1s">
                            <div class="roadmap__box--content">

                                <div class="content">
                                    <h3 class="title"><span>1.</span>Requirement Analysis</h3>
                                    <p class="text">We conduct a thorough analysis of your requirements to establish the
                                        foundation for your website</p>
                                </div>

                                <div class="content">
                                    <h3 class="title"><span>2.</span>Planning</h3>
                                    <p class="text">We make detailed plans and customized strategies to ensure a secure
                                        roadmap to success</p>
                                </div>

                                <div class="content">
                                    <h3 class="title"><span>3.</span>Design (UI/UX)</h3>
                                    <p class="text">In this phase, we craft UI/UX aligned with your vision using best
                                        technology, ensuring best user experience</p>
                                </div>

                                <div class="content">
                                    <h3 class="title"><span>4.</span>Development</h3>
                                    <p class="text">After designing UI/UX, we implement concepts with cutting-edge
                                        programming languages and standards</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-8 col-md-8">
                        <div class="roadmap__box wow fadeInUp" data-wow-duration="1s">
                            <div class="roadmap__box--content">

                                <div class="content">
                                    <h3 class="title"><span>5.</span>System Testing and QA</h3>
                                    <p class="text">We ensure reliability through rigorous System Testing and QA for a
                                        seamless user experience and robust website</p>
                                </div>

                                <div class="content">
                                    <h3 class="title"><span>6.</span>Deployment</h3>
                                    <p class="text">After ensuring website quality, we launch it from prototype to
                                        fully-fledged, live for your entire audience</p>
                                </div>

                                <div class="content">
                                    <h3 class="title"><span>7.</span>Maintenance & Monitoring</h3>
                                    <p class="text">After deployment, we provide ongoing monitoring and support to
                                        ensure your website runs smoothly</p>
                                </div>

                                <div class="content">
                                    <h3 class="title"><span>8.</span>Knowledge Transfer</h3>
                                    <p class="text">We provide training on website operations, troubleshooting,
                                        implementation, and user data access post-launch</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 d-none d-md-block">
                        <div class="roadmap__box--img right wow zoomIn" data-wow-duration="1s">
                            <div class="roadmap__box--img-circular">
                                <div class="circular">
                                    <img class="lazy-load"
                                        data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/circular-1.png"
                                        alt="">
                                    <div class="number">

                                        <span class="text">05</span>

                                        <span class="text">06</span>

                                        <span class="text">07</span>

                                        <span class="text">08</span>

                                    </div>
                                </div>
                                <div class="box">
                                    <div class="block">

                                        <div class="img">
                                            <span number="05" class="icon">
                                                <img class="lazy-load"
                                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/rpa_HK0v4dQ.svg"
                                                    alt="System Testing and QA Concept">
                                            </span>
                                            <img class="lazy-load"
                                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/block-5.png"
                                                alt="System Testing and QA Concept">
                                        </div>

                                        <div class="img">
                                            <span number="06" class="icon">
                                                <img class="lazy-load"
                                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/deployment_ah821rk.svg"
                                                    alt="Deployment Concept">
                                            </span>
                                            <img class="lazy-load"
                                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/block-6.png"
                                                alt="Deployment Concept">
                                        </div>

                                        <div class="img">
                                            <span number="07" class="icon">
                                                <img class="lazy-load"
                                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/optimize_2JNTKWh.svg"
                                                    alt="None">
                                            </span>
                                            <img class="lazy-load"
                                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/block-7.png"
                                                alt="None">
                                        </div>

                                        <div class="img">
                                            <span number="08" class="icon">
                                                <img class="lazy-load"
                                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/learning_pyJ9nNc.svg"
                                                    alt="Knowledge Transfer Concept.">
                                            </span>
                                            <img class="lazy-load"
                                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/block-8.png"
                                                alt="Knowledge Transfer Concept.">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- why us -->
        <section class="choose p__tb">
            <div class="l__container overflow">
                <div class="ttm-row">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-duration="1s">
                            <div class="section__title clearfix">
                                <h6>Why choose us</h6>
                                <h2 class="title">We help you expand <span>your business</span> through tech</h2>
                            </div>
                            <div class="title-desc">
                                <p>We have a team of highly skilled website designers and developers who can provide you
                                    with the website of your choice. As a leading website development company in Nepal,
                                    we offer exceptional and responsive website design and development services. Some of
                                    our additional perks are as follows:</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 p-2 p-md-3">
                            <div class="choose__card text-center wow fadeInUp" data-wow-duration="1s">
                                <div class="choose__card--shape">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/service-shape.svg"
                                        alt="">
                                </div>
                                <div class="choose__card--img">
                                    <img class="lazy-load"
                                        data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Process-pana_YTnpnnd.svg"
                                        alt="Robust Functionality">
                                </div>
                                <div class="choose__card--content">
                                    <h3>Robust Functionality</h3>
                                    <p>We create high-quality websites with advanced features and seamless performance
                                        for an exceptional user experience.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 p-2 p-md-3">
                            <div class="choose__card text-center wow fadeInUp" data-wow-duration="1s">
                                <div class="choose__card--shape">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/service-shape.svg"
                                        alt="">
                                </div>
                                <div class="choose__card--img">
                                    <img class="lazy-load"
                                        data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Business_deal-pana_rZcao7n.svg"
                                        alt="Client-Centric Approach">
                                </div>
                                <div class="choose__card--content">
                                    <h3>Client-Centric Approach</h3>
                                    <p>Our client-centric website solutions address unique needs, reflecting your vision
                                        with meticulous design precision.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 p-2 p-md-3">
                            <div class="choose__card text-center wow fadeInUp" data-wow-duration="1s">
                                <div class="choose__card--shape">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/service-shape.svg"
                                        alt="">
                                </div>
                                <div class="choose__card--img">
                                    <img class="lazy-load"
                                        data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Website_designer-pana_UCpp5If.svg"
                                        alt="Innovative Website Design">
                                </div>
                                <div class="choose__card--content">
                                    <h3>Innovative Website Design</h3>
                                    <p>Infusing creativity, we transform concepts into reality with user-friendly
                                        interfaces, and robust functionality.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 p-2 p-md-3">
                            <div class="choose__card text-center wow fadeInUp" data-wow-duration="1s">
                                <div class="choose__card--shape">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/service-shape.svg"
                                        alt="">
                                </div>
                                <div class="choose__card--img">
                                    <img class="lazy-load"
                                        data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/Agreement-pana_qPYSx40.svg"
                                        alt="Timely Website Delivery">
                                </div>
                                <div class="choose__card--content">
                                    <h3>Timely Website Delivery</h3>
                                    <p>We value time, ensuring your website projects meet deadlines seamlessly and
                                        establish a swift online presence.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




        <!-- recent work -->
        <section class="work__section p__tb--b overflow">
            <div class="l__container wow fadeInUp" data-wow-duration="1s">
                <div class="section__title text-center m__tb--b">
                    <h6>Our Portfolio</h6>
                    <h2 class="title">Some of our Recent <span>Website Development</span></h2>
                </div>
                <div class="work__slide image-item">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-3 g-md-3 g-lg-4">

                        <div class="col">
                            <div class="work__section--card" data-aos="fade-up" data-aos-duration="800"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="replaceCurrentImage('/media/wd-recent-works/wd-recent-works/Oriflame-Nepal.webp')">
                                <div class="work__section--card-img">
                                    <img class="lazy-load"
                                        data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/planjesocialmedia.nl_.png"
                                        alt="Social media planner">
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="work__section--card" data-aos="fade-up" data-aos-duration="800"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="replaceCurrentImage('/media/wd-recent-works/wd-recent-works/Oriflame-Nepal.webp')">
                                <div class="work__section--card-img">
                                    <img class="lazy-load"
                                        data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/planjesocialmedia.nl_.png"
                                        alt="Social media planner">
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="work__section--card" data-aos="fade-up" data-aos-duration="800"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="replaceCurrentImage('/media/wd-recent-works/wd-recent-works/Oriflame-Nepal.webp')">
                                <div class="work__section--card-img">
                                    <img class="lazy-load"
                                        data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/planjesocialmedia.nl_.png"
                                        alt="Social media planner">
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="work__section--card" data-aos="fade-up" data-aos-duration="800"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="replaceCurrentImage('/media/wd-recent-works/wd-recent-works/Oriflame-Nepal.webp')">
                                <div class="work__section--card-img">
                                    <img class="lazy-load"
                                        data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/planjesocialmedia.nl_.png"
                                        alt="Social media planner">
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="work__section--card" data-aos="fade-up" data-aos-duration="800"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="replaceCurrentImage('/media/wd-recent-works/wd-recent-works/Oriflame-Nepal.webp')">
                                <div class="work__section--card-img">
                                    <img class="lazy-load"
                                        data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/planjesocialmedia.nl_.png"
                                        alt="Social media planner">
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="work__section--card" data-aos="fade-up" data-aos-duration="800"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="replaceCurrentImage('/media/wd-recent-works/wd-recent-works/Oriflame-Nepal.webp')">
                                <div class="work__section--card-img">
                                    <img class="lazy-load"
                                        data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/planjesocialmedia.nl_.png"
                                        alt="Social media planner">
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </section>



        <!-- enquiry -->


        <section class="service-enquiry overflow p__tb--t">
            <div class="l__container wow fadeInUp" data-wow-duration="1s">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section__title text-center clearfix">
                            <h2 class="title">Time is <span>Running</span> out!</h2>
                            <p>Don't miss the chance to unleash the full potential of your business with Softbenz
                                Website Development.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-lg-7">
                        <div class="service-enquiry-step d-none d-md-block">
                            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5 justicy-content-center"
                                style="margin-bottom: 10rem;">
                                <div class="col">
                                    <div class="cards">
                                        <div class="icon">
                                            <img class="lazy-load"
                                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/rocket_launch_FILL0_wght400_GRAD0_opsz48_1_2.svg"
                                                alt="website fast Concept." height="50" width="50">
                                        </div>
                                        <div class="content">
                                            <span>1</span>
                                            <p>Is your website fast?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="cards">
                                        <div class="icon">
                                            <img class="lazy-load"
                                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/shield-check_1.svg"
                                                alt="Website Secure Concept." height="50" width="50">
                                        </div>
                                        <div class="content">
                                            <span>2</span>
                                            <p>Is your website Secure?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="cards">
                                        <div class="icon">
                                            <img class="lazy-load"
                                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/mobile_friendly_FILL0_wght400_GRAD0_opsz48_1.svg"
                                                alt="Website Mobile Friendly Concept." height="50" width="50">
                                        </div>
                                        <div class="content">
                                            <span>3</span>
                                            <p>Is your Website Mobile Friendly?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="cards">
                                        <div class="icon">
                                            <img class="lazy-load"
                                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/developer_mode_tv_FILL0_wght400_GRAD0_opsz48_1.svg"
                                                alt="Better UX Design Concept." height="50" width="50">
                                        </div>
                                        <div class="content">
                                            <span>4</span>
                                            <p>Does Your Website have good UX?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="cards">
                                        <div class="icon">
                                            <img class="lazy-load"
                                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/seo_1.svg"
                                                alt="SEO Optimization of Website Concept." height="50" width="50">
                                        </div>
                                        <div class="content">
                                            <span>5</span>
                                            <p>Is your Website optimized for SEO?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img">
                                <img class="lazy-load"
                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/objects.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5">
                        <div class="form  mt-4 mt-lg-0">
                            <h3>
                                Check Your Website Quality for Free
                                <p>Send us your website url</p>
                            </h3>

                            <iframe src="https://link.virtugrow.nl/widget/form/EOfAu2sJs51X0r4WyqyW"
                                style="width:100%;height:100%;border:none;border-radius:0px"
                                id="inline-EOfAu2sJs51X0r4WyqyW" data-layout="{'id':'INLINE'}"
                                data-trigger-type="alwaysShow" data-trigger-value=""
                                data-activation-type="alwaysActivated" data-activation-value=""
                                data-deactivation-type="neverDeactivate" data-deactivation-value=""
                                data-form-name="Check Your Website Quality for Free" data-height="400"
                                data-layout-iframe-id="inline-EOfAu2sJs51X0r4WyqyW" data-form-id="EOfAu2sJs51X0r4WyqyW"
                                title="Check Your Website Quality for Free">
                            </iframe>
                            <script src="https://link.virtugrow.nl/js/form_embed.js"></script>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  other service -->
        <section class="service-other p__tb overflow">
            <div class="l__container wow fadeInUp" data-wow-duration="1s">
                <div class="section__title text-center clearfix">
                    <?php if (!empty($top_title_small)): ?>
                        <h6><?php echo esc_html($top_title_small); ?></h6>
                    <?php endif; ?>
                    <!-- <h6>other services</h6> -->
                    <?php if (!empty($main_heading_big)): ?>
                        <?php echo wp_kses_post($main_heading_big); ?>
                    <?php endif; ?>
                    <!-- <h2 class="title">One Solution For All Your <span>Digital needs</span></h2> -->
                </div>

                <?php if ($other_services): ?>
                    <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 gy-lg-5 gy-4 gx-4">

                        <?php foreach ($other_services as $service):
                            $osc_image = $service['other_service_card_image'];
                            $osc_title = $service['other_service_card_title'];
                            $osc_desc = $service['other_service_card_desc'];
                            $osc_link = $service['other_service_card_link'];
                            ?>


                            <div class="col">
                                <div class="service__home--card  pe-lg-4 pe-auto  text-center text-md-start">
                                    <?php if (!empty($osc_link)): ?>
                                        <a href="<?php echo esc_url($osc_link['url']); ?>"
                                            target="<?php echo esc_attr($osc_link['target']); ?>">
                                        <?php endif; ?>
                                        <?php if (!empty($osc_image)): ?>
                                            <div class="service__home--card-icon">
                                                <img class="lazy-load" data-src="<?php echo esc_url($osc_image['url']); ?>"
                                                    alt="<?php echo esc_attr($osc_image['alt']); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="service__home--card-content">
                                            <?php if (!empty($osc_title)): ?>
                                                <h3><?php echo esc_html($osc_title); ?></h3>
                                            <?php endif; ?>
                                            <!-- <h3>App Development</h3> -->
                                            <?php if (!empty($osc_desc)): ?>
                                                <p><?php echo esc_html($osc_desc); ?></p>
                                            <?php endif; ?>
                                            <!-- <p>Innovative and user-friendly mobile application designed to engage users.</p> -->
                                        </div>
                                        <?php if (!empty($osc_link)): ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>



        <!-- partner -->
        <?php get_template_part('partials/partner', 'section') ?>
        <!-- END OF partner -->


        <!-- FAQs -->
        <section class="faq p__tb">
            <div class="l__container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-md-6">
                        <aside>
                            <div class="section__title">
                                <h6>FAQs</h6>
                                <h2 class="title">Frequently <span>Asked </span>Questions</h2>
                                <p class=" d-none d-lg-inline-block">Welcome to our FAQ section! Here you'll find quick
                                    answers to the most common questions about
                                    our products and services.</p>
                            </div>
                            <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/faq.svg"
                                class="lazy-load img-fluid wow zoomIn d-none d-md-block" data-wow-duration="1s" alt=""
                                style="height: 500px;">
                        </aside>
                    </div>
                    <div class="col-md-6">
                        <div class="faq__accordion">
                            <ul class="accordion custom__accordion">

                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <h3 class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            What types of website development services do you offer?
                                        </h3>
                                        <div class="accordion__content" style="display: none">
                                            <p></p>
                                            <p style="text-align: justify;">As a leading website design and development
                                                company in Nepal, We offer our website design and development services
                                                to a wide variety of industries. Some of the key types of website
                                                development services that we offer include E-Commerce, Travel and
                                                Trekking, E-Learning and others. Along with these categories of
                                                websites, we will develop websites as per your requirements, ranging
                                                from simple informative websites to complex ones.</p>
                                            <p></p>
                                        </div>
                                    </li>
                                </div>


                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <h3 class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            How much does it cost to develop my website?
                                        </h3>
                                        <div class="accordion__content" style="display: none">
                                            <p></p>
                                            <p style="text-align: justify;">The cost to develop a website varies based
                                                on its features, type, and complexity. The more features you want in a
                                                website, the higher the cost. Regardless, we assure you that you can get
                                                the best value for the cost. If you wish to know the cost of developing
                                                the website from start to finish, <strong><a
                                                        href="../../../../contact">feel free to contact us</a></strong>.
                                            </p>
                                            <p></p>
                                        </div>
                                    </li>
                                </div>


                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <h3 class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            How long does it take to build a website?
                                        </h3>
                                        <div class="accordion__content" style="display: none">
                                            <p></p>
                                            <p style="text-align: justify;">The specific time required to build a
                                                website depends on the features, complexity, and functionality of the
                                                website. Websites with higher complexity and more features take longer
                                                to make when compared with informative websites with basic features.
                                                However, in general, it takes a minimum of 3 to 4 weeks to develop an
                                                informative basic website, as we shall be developing each website from
                                                scratch. For more details, please do contact us.</p>
                                            <p></p>
                                        </div>
                                    </li>
                                </div>


                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <h3 class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            What is the process of website development?
                                        </h3>
                                        <div class="accordion__content" style="display: none">
                                            <p></p>
                                            <p style="text-align: justify;">The specific process of website development
                                                can change depending on your needs and requirements. However, in
                                                general, our working process is as follows:</p>
                                            <ul style="text-align: justify;">
                                                <li><strong>Requirement Gathering:</strong> understand and document what
                                                    you require from our website design and development services.</li>
                                                <li><strong>Plan and Resources:</strong> We then create a strategic plan
                                                    while setting goals, timelines, and budgets. Additionally, we also
                                                    allocate necessary tools, personnel, and materials.</li>
                                                <li><strong>Design and Develop: </strong>After developing a thorough
                                                    plan, we create the visual and functional aspects of websites
                                                    through collaboration between designers and developers.</li>
                                                <li><strong>Quality Assurance:</strong> Then, we identify and correct
                                                    mistakes to ensure that your website is free of errors.</li>
                                                <li><strong>Deployment:</strong> Once all forms of errors are
                                                    eliminated, we deploy the website.</li>
                                                <li><strong>Support and Maintenance:</strong> After developing the
                                                    website, we provide ongoing assistance and updates to ensure that
                                                    your website runs smoothly and securely.</li>
                                            </ul>
                                            <p style="text-align: justify;">For further details regarding our working
                                                procedure, please check out our page, "<strong><a title="How We Work"
                                                        href="../../../../work">How We Work</a></strong>."�</p>
                                            <p></p>
                                        </div>
                                    </li>
                                </div>


                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <h3 class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            Do you also provide website redesign services?
                                        </h3>
                                        <div class="accordion__content" style="display: none">
                                            <p></p>
                                            <p style="text-align: justify;">Yes, we provide website redesign services,
                                                especially if the website is developed by following the standard
                                                procedure from scratch. However, if your website is developed using a
                                                third-party website, it may be a bit troublesome.</p>
                                            <p></p>
                                        </div>
                                    </li>
                                </div>


                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <h3 class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            Do you develop dynamic websites?
                                        </h3>
                                        <div class="accordion__content" style="display: none">
                                            <p></p>
                                            <p style="text-align: justify;">Developing dynamic websites is the standard
                                                procedure of our website development. In this form of website
                                                development, you can easily change the contents and images to fit your
                                                needs. We can also develop static websites as per your requirements.</p>
                                            <p></p>
                                        </div>
                                    </li>
                                </div>


                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <h3 class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            Do you develop SEO-friendly websites?
                                        </h3>
                                        <div class="accordion__content" style="display: none">
                                            <p></p>
                                            <p style="text-align: justify;">At Softbenz, we provide <strong><a
                                                        title="SEO services"
                                                        href="../../../../services/seo-in-nepal">SEO
                                                        services</a></strong> alongside our web development services,
                                                ensuring that developing SEO-friendly websites is our standard practice.
                                                Our goal is to enhance your online presence by integrating optimized
                                                content and technical SEO strategies into every project we undertake.
                                            </p>
                                            <p></p>
                                        </div>
                                    </li>
                                </div>


                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <h3 class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            Do you offer support services and maintenance after development?
                                        </h3>
                                        <div class="accordion__content" style="display: none">
                                            <p></p>
                                            <p style="text-align: justify;">Offering continuous support and maintenance
                                                services is a necessity as it allows us to quickly and efficiently
                                                resolve any challenges that may arise, keeping your website running
                                                smoothly and up-to-date. By providing this level of service, we ensure
                                                that your online presence remains strong and effective, adapting to any
                                                new requirements or changes in the digital landscape.</p>
                                            <p></p>
                                        </div>
                                    </li>
                                </div>


                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <h3 class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            How do you ensure the security of the websites you develop?
                                        </h3>
                                        <div class="accordion__content" style="display: none">
                                            <p></p>
                                            <p style="text-align: justify;">We develop our websites from scratch.
                                                Therefore, we can ensure the security of the website by following the
                                                standard web development process and active quality assurance (QA)
                                                participation. Our team meticulously reviews every line of code to
                                                prevent vulnerabilities and ensure robust protection against potential
                                                threats. Additionally, we stay updated with the latest security
                                                practices and implement them to safeguard your website from emerging
                                                risks.</p>
                                            <p></p>
                                        </div>
                                    </li>
                                </div>


                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <h3 class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            Do you provide domain and hosting services?
                                        </h3>
                                        <div class="accordion__content" style="display: none">
                                            <p></p>
                                            <p style="text-align: justify;">We provide domain and hosting services from
                                                reputed companies. Therefore, we can assure you that our domain and
                                                hosting services are of the highest quality. Our partnerships with these
                                                trusted providers ensure reliable performance, enhanced security, and
                                                excellent customer support for your online presence. Additionally, we
                                                offer seamless integration and management of these services to give you
                                                a hassle-free experience.</p>
                                            <p></p>
                                        </div>
                                    </li>
                                </div>


                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <h3 class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            Do you provide content writing and graphical banners for websites?
                                        </h3>
                                        <div class="accordion__content" style="display: none">
                                            <p>If you require content writing and graphical banners along with the
                                                development of your website, we provide content writing and graphical
                                                banners tailored to your needs. Our team ensures that the content and
                                                graphic design are engaging and the visuals are appealing, enhancing the
                                                overall impact of your website. Additionally, we work closely with you
                                                to align these elements with your brand identity and marketing goals.
                                            </p>
                                        </div>
                                    </li>
                                </div>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <script>
        var view = function (e) {
            $(".preview__content").html(`
            <div class="head">
                <img src="${$(e.target).attr("rel")}">
                <h4>${$(e.target).attr("data-title")}</h4>
            </div>
            <div class="body">
                <p>${$(e.target).attr("data-text")}</p>
            </div>
        `);
            // $(".preview-content").append($("<p>").html($(e.target).attr("data-text")));
        };
        $(".preview__content").removeClass("d-none");
        $("img.zoom").mouseover(view);
        view({
            target: $("img.zoom")[0],
        });
    </script>

</div>

<?php get_footer(); ?>