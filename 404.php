<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package VirtuGrow
 */

get_header();
?>

<div style="min-height: 50vh" bis_skin_checked="1">

<section class="about m__tb--b">
    <div class="l__container " bis_skin_checked="1">
        <div class="about__banner overflow d-flex justify-content-center align-items-center" bis_skin_checked="1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/404-Error1.png" class="img-fluid" alt="">
        </div>
    </div>
</section>

</div>

  <section class="cta p__tb overflow">
    <div class="l__container  wow fadeInUp animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;" bis_skin_checked="1">
        <div class="row align-items-center" bis_skin_checked="1">
            <div class="col-lg-7 col-md-7" bis_skin_checked="1">
                <div class="cta__wrap mb-4 mb-md-0" bis_skin_checked="1">
                    <h2 class="heading">Let’s connect and  <span class="text-color-primary">turn your vision into reality.</span> </h2>

                    <div class="sub-heading" bis_skin_checked="1">We are available from 9:00 AM to 6:00 PM, Monday to Friday.</div>
                </div>
            </div>

            <div class="col-lg-5 col-md-5" bis_skin_checked="1">
                <div class="cta__wrap--one text-center" bis_skin_checked="1">
                    <h6 class="">Reach out now!</h6>
                    <p class="call-us"><a href="tel:0851234567">085 123 4567</a></p>
                    <div class="contact-us-button mt-20" bis_skin_checked="1">
                        <button data-bs-toggle="modal" data-id="" data-bs-target="#enquiryModal" class="l__button l__button--primary">
                            <span>Let's start conversation</span>
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
