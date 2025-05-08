<?php
$smf_image = get_field('smf_image', 'option');
$smf_iframe_code = get_field('smf_iframe_code', 'option');
?>
<!-- Modal -->
<div class="modal fade subscription__form" id="seoSubscription" tabindex="-1" aria-labelledby="seoSubscriptionLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content modalbox overflow-hidden">
            <div class="modal-body modalbody p-0">
                <div class="row">
                    <div class="col-md-6">
                        <?php if (!empty($smf_image)): ?>
                            <div class="left-side left-side-img d-none d-md-block">
                                <img src="<?php echo esc_url($smf_image['url']); ?>"
                                    alt="<?php echo esc_attr($smf_image['alt']); ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <div class="right-side">
                            <div class="close-button">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <?php if (!empty($smf_iframe_code)): ?>
                                <?php echo $smf_iframe_code; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>