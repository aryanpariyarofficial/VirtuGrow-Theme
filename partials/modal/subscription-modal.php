<!-- Modal -->
<div class="modal fade subscription__form" id="seoSubscription" tabindex="-1" aria-labelledby="seoSubscriptionLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content modalbox overflow-hidden">
            <div class="modal-body modalbody p-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-side left-side-img d-none d-md-block">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/images/subscription.svg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-side">
                            <div class="close-button">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form onsubmit="event.preventDefault();handlePricingContact(this);">
                                <input type="hidden" name="csrfmiddlewaretoken" value="a3e4nx1VuuUBhKL9E6twzWEHixJNqlNmfyg7EheHMYc1t5lWmWAB4I3s9b72zubl">
                                <h5 class="normal">Subscription Form</h5>
                                <p>Please Fill Out the Following Details</p>

                                <div class="mb-3">
                                    <input type="text" placeholder="Enter Your Name/Business Name *" name="name" required="">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Phone No. <span>*</span></label>
                                    <input type="number" class="form-control mobile_code" id="seoPhone" required="" placeholder="Enter your phone">
                                </div>

                                <div class="mb-3">
                                    <input type="email" placeholder="Enter Your Email" name="email" required="">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="packages" name="package" placeholder="Selected Package" value="" required="">
                                </div>
                                <button type="submit" class="l__button l__button--primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>