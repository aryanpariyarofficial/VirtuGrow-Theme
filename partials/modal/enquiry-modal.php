<!-- Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <section class="banner">
                    <div class="banner__enquiry">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-6">
                                <div class="banner__enquiry--form">
                                    <div class="section__title">
                                        <span>Have a Project in Mind</span>
                                        <h2>tell us a bit more</h2>
                                    </div>
                                    <?php echo do_shortcode('[contact-form-7 id="44213e3" title="Inquiry From"]'); ?>
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1">
                                <div class="banner__enquiry--info d-none d-lg-block">
                                    <div class="banner__enquiry--info-card">
                                        <div class="section__title">
                                            <span>We would love to hear from you</span>
                                            <h2>get in touch</h2>
                                        </div>
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/call.svg" alt="">
                                                </span>
                                                <div>
                                                    <h6>Our Phone Number</h6>
                                                    <p>
                                                        <a href="tel:18003568933">085 123 4567</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/envolove.svg" alt="">
                                                </span>
                                                <div>
                                                    <h6>Our Email</h6>
                                                    <p>
                                                        <a href="mailto:info@virtugrow.nl"><span class="__cf_email__">info@virtugorw.nl</span></a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/location.svg" alt="">
                                                </span>
                                                <div>
                                                    <h6>Office Address</h6>
                                                    <p>Netherland</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<style>
/* Additional CSS to make CF7 form match your existing style */
.banner__enquiry--form .wpcf7-form {
    margin-top: 30px;
}

.banner__enquiry--form .wpcf7-form .form__group {
    margin-bottom: 20px;
}

.banner__enquiry--form .wpcf7-form-control {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    background: #fff;
    font-size: 14px;
}

.banner__enquiry--form .wpcf7-form-control:focus {
    border-color: #007bff;
    outline: 0;
    box-shadow: none;
}

.banner__enquiry--form .wpcf7-submit {
    background: #007bff;
    color: #fff;
    border: none;
    padding: 12px 30px;
    border-radius: 4px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.banner__enquiry--form .wpcf7-submit:hover {
    background: #0069d9;
}

.banner__enquiry--form .wpcf7-select {
    height: 45px;
}

.banner__enquiry--form .wpcf7-textarea {
    min-height: 120px;
}
</style>