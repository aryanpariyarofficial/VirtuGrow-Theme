<?php
$emf_small_title = get_field('emf_small_title', 'option');
$emf_main_title = get_field('emf_main_title', 'option');
$emf_iframe_code = get_field('emf_iframe_code', 'option');
$emc_contact_st = get_field('emc_contact_st', 'option');
$emc_contact_mt = get_field('emc_contact_mt', 'option');
$emc_contacts = get_field('emc_contacts', 'option');

//  if ($emf_iframe_code):  echo wp_kses_post($emf_iframe_code); endif; 
?>
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
                                        <?php if ($emf_small_title): ?>
                                            <span><?php echo esc_html($emf_small_title); ?></span>
                                        <?php endif; ?>
                                        <?php if ($emf_main_title): ?>
                                            <h2><?php echo esc_html($emf_main_title); ?></h2>
                                        <?php endif; ?>
                                    </div>
                                   <?php if ($emf_iframe_code): 
                                    echo $emf_iframe_code; 
                                endif; ?>

                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1">
                                <div class="banner__enquiry--info d-none d-lg-block">
                                    <div class="banner__enquiry--info-card">
                                        <div class="section__title">
                                            <?php if ($emc_contact_st): ?>
                                                <span><?php echo esc_html($emc_contact_st); ?></span>
                                            <?php endif; ?>
                                            <?php if ($emc_contact_mt): ?>
                                                <h2><?php echo esc_html($emc_contact_mt); ?></h2>
                                            <?php endif; ?>
                                        </div>
                                        <?php if ($emc_contacts): ?>
                                            <ul>
                                                <?php foreach ($emc_contacts as $contact): ?>
                                                    <li>
                                                        <?php if (!empty($contact['emf_c_image'])): ?>
                                                            <span class="icon">
                                                                <img src="<?php echo esc_url($contact['emf_c_image']['url']); ?>"
                                                                    alt="<?php echo esc_attr($contact['emf_c_image']['alt']); ?>">
                                                            </span>
                                                        <?php endif; ?>
                                                        <div>
                                                            <?php if (!empty($contact['emf_c_title'])): ?>
                                                                <h6><?php echo esc_html($contact['emf_c_title']); ?></h6>
                                                            <?php endif; ?>
                                                            <?php if (!empty($contact['emf_c_link'])): ?>
                                                                <p>
                                                                    <a
                                                                        href="<?php echo esc_url($contact['emf_c_link']['url']); ?>"><?php echo esc_html($contact['emf_c_link']['title']); ?></a>
                                                                </p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
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