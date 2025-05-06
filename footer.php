<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VirtuGrow
 */

// Get Chat CTA content
$chat_cta = get_field('chat_cta', 'option');

// Get Connect With Us repeater
$connect_items = get_field('connect_with_us', 'option');

?>

<footer class="footer p__tb--t">
  <div class="l__container">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="footer__widget mb-4 mb-md-0">
          <a href="/wat-doen-wij/" style="text-decoration: none;"> <h3><?php echo esc_html__('Wat Doen Wij', 'virtugrow'); ?></h3>
  <?php
  wp_nav_menu(array(
    'theme_location' => 'footer-wat-doen-wij',
    'menu_class' => '',
    'container' => false,
    'fallback_cb' => false
  ));
  ?>
</div>

          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="footer__widget mb-4 mb-md-0">
          <a href="/webdevelopment/" style="text-decoration: none;"><h3><?php echo esc_html__('Web Development', 'virtugrow'); ?></h3></a>
  <?php
  wp_nav_menu(array(
    'theme_location' => 'footer-webdevelopment',
    'menu_class' => '',
    'container' => false,
    'fallback_cb' => false
  ));
  ?>
</div>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-5 col-sm-6">
          <div class="footer__widget mb-4 mb-md-0">
  <a href="/online-marketing/" style="text-decoration: none;"><h3><?php echo esc_html__('Online Marketing', 'virtugrow'); ?></h3></a>
  <?php
  wp_nav_menu(array(
    'theme_location' => 'footer-online-marketing',
    'menu_class' => '',
    'container' => false,
    'fallback_cb' => false
  ));
  ?>
</div>

          </div>
          <?php
          $connect_links = get_field('connect_with_us', 'option');
          ?>

          <?php if (!empty($connect_links)): ?>
            <div class="col-md-7 col-sm-6">
              <div class="footer__aside footer__widget">
                <h3 class="">Connect with us</h3>
                <ul>
                  <?php foreach ($connect_links as $item):
                    $link = $item['text_link'];
                    $icon = $item['icon'];
                    if (!empty($link)):
                      ?>
                      <li>
                        <span>
                          <?php if (!empty($icon)): ?>
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($link['title']); ?>"
                              width="26" height="26">
                          <?php endif; ?>
                        </span>
                        <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>">
                          <?php echo esc_html($link['title']); ?>
                        </a>
                      </li>
                    <?php endif; endforeach; ?>
                </ul>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="footer__link">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'footer-legal',
            'items_wrap' => '%3$s',
            'container' => false,
            'fallback_cb' => false,
            'walker' => new Footer_Legal_Walker()
          ));
          ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="l__container">
      <div class="row">
        <div class="col-md-6">
          <p>
            <?php echo esc_html(get_theme_mod('copyright_text', '© ' . date('Y') . ' ' . get_bloginfo('name') . '. All Rights Reserved.')); ?>
          </p>
        </div>

        <div class="col-md-6">
  <ul class="icon mr-3" style="margin-right: 30px;">
    <?php if ($facebook = get_field('facebook', 'option')): ?>
      <li>
        <a target="_blank" href="<?php echo esc_url($facebook['url']); ?>">
          <i class="fa-brands fa-facebook-f p-2"></i>
        </a>
      </li>
    <?php endif; ?>

    <?php if ($instagram = get_field('instagram', 'option')): ?>
      <li>
        <a target="_blank" href="<?php echo esc_url($instagram['url']); ?>">
          <i class="fa-brands fa-instagram p-2"></i>
        </a>
      </li>
    <?php endif; ?>

    <?php if ($linkedin = get_field('linkedin', 'option')): ?>
      <li>
        <a target="_blank" href="<?php echo esc_url($linkedin['url']); ?>">
          <i class="fa-brands fa-linkedin-in p-2"></i>
        </a>
      </li>
    <?php endif; ?>

    <?php if ($tiktok = get_field('tiktok', 'option')): ?>
      <li>
        <a target="_blank" href="<?php echo esc_url($tiktok['url']); ?>">
          <i class="fa-brands fa-tiktok p-2"></i>
        </a>
      </li>
    <?php endif; ?>

    <?php if ($youtube = get_field('youtube', 'option')): ?>
      <li>
        <a target="_blank" href="<?php echo esc_url($youtube['url']); ?>">
          <i class="fa-brands fa-youtube p-2"></i>
        </a>
      </li>
    <?php endif; ?>
  </ul>
</div>




      </div>
    </div>
  </div>
</footer>

<!-- Whatsapp chat -->

<script src="https://widgets.leadconnectorhq.com/loader.js"
  data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js"
  data-widget-id="67e802fb0a5b9e5d5462ded8">
  </script>

<!-- whatsapp chat end -->

<!-- start modal -->
<?php get_template_part('partials/modal/enquiry', 'modal') ?>
<?php get_template_part('partials/modal/subscription', 'modal') ?>
<!-- End modal -->

<!-- Jquery -->
<script data-cfasync="false"
  src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/js/email-decode.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/js/jquery-3.min.js"></script>

<!-- bootstrap -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/js/bootstrap.bundle.min.js"></script>

<!-- fancybox -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/js/fancybox.js"></script>

<!-- owcarousel -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/js/owl.carousel.min.js"></script>

<!-- aos animation -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/js/wow.js"></script>

<!-- main js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/js/main.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/js/sweetalert.js"></script>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assetss/css/intlTelInput.css">
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assetss/js/intlTelInput-jquery.min.js"></script>
<script src="https://link.virtugrow.nl/js/form_embed.js"></script>

<script>
  // Enquiry Model
  var dialCode = "";

  var intLinput = $("#enqPhone");
  var entPhoneNo = "";
  intLinput
    .intlTelInput({
      initialCountry: "auto",
      separateDialCode: true,
      geoIpLookup: function (success, failure) {
        fetch("https://ipapi.co/json")
          .then(function (res) {
            return res.json();
          })
          .then(function (data) {
            success(data.country_code);
            dialCode = data.country_calling_code;
          })
          .catch(function () {
            failure();
          });
      },
      hiddenInput: "phone",
    })
    .on("countrychange", function (e, countryData) {
      dialCode = intLinput.intlTelInput("getSelectedCountryData").dialCode;
      var phNo = intLinput.val();
      if (phNo.startsWith("+")) {
        entPhoneNo = phNo.replace(dialCode, `${dialCode}-`);
      } else {
        entPhoneNo = `+${dialCode}-${phNo}`;
      }
    });

  intLinput.on("keyup", (e) => {
    var phNo = intLinput.val();
    if (phNo.startsWith("+")) {
      entPhoneNo = phNo.replace(dialCode, `${dialCode}-`);
    } else {
      entPhoneNo = `+${dialCode}-${phNo}`;
    }
  });
  // Enquiry Model

  var sintLinput = $("#seoPhone");

  sintLinput
    .intlTelInput({
      initialCountry: "auto",
      separateDialCode: true,
      geoIpLookup: function (success, failure) {
        fetch("https://ipapi.co/json")
          .then(function (res) {
            return res.json();
          })
          .then(function (data) {
            success(data.country_code);
            dialCode = data.country_calling_code;
          })
          .catch(function () {
            failure();
          });
      },
      hiddenInput: "phone",
    })
    .on("countrychange", function (e, countryData) {
      dialCode = sintLinput.intlTelInput("getSelectedCountryData").dialCode;
      var phNo = sintLinput.val();
      if (phNo.startsWith("+")) {
        phNo = phNo.replace(dialCode, `${dialCode}-`);
        $("input[name=phone]").val(`${phNo}`);
      } else {
        $("input[name=phone]").val(`+${dialCode}-${phNo}`);
      }
    });

  sintLinput.on("keyup", (e) => {
    var phNo = sintLinput.val();
    if (phNo.startsWith("+")) {
      phNo = phNo.replace(dialCode, `${dialCode}-`);
      $("input[name=phone]").val(`${phNo}`);
    } else {
      $("input[name=phone]").val(`+${dialCode}-${phNo}`);
    }
  });
</script>

<script>
  // When the user scrolls the page, execute myFunction
  window.onscroll = function () {
    myFunction();
  };

  // Get the header
  var header = document.getElementById("myHeader");

  // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function myFunction() {
    if (window.pageYOffset > 100) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }

  function emailHandle(form) {
    let formData = new FormData(form);
    fetch("/api/email-subscribe/", {
      method: "POST",
      body: formData,
    })
      .then((r) => r.json())
      .then((r) => {
        form.reset();
        Swal.fire(r);
      });
  }
  var a = Math.floor(Math.random() * 10 + 1),
    b = Math.floor(Math.random() * 10 + 1);

  document.addEventListener("DOMContentLoaded", () => {
    document
      .querySelectorAll("button[data-bs-toggle='modal']")
      .forEach((e) => {
        $(e).on("click", () => {
          let sid = $(e).attr("data-id");
          if (sid) {
            $("select[name=service]").val(sid);
            $("select[name=service]").attr("disabled", "");
          } else {
            $("select[name=service]").removeAttr("disabled");
          }

          let sname = $(e).attr("data-name");
          if (sname) {
            let pv = $("input[name=package]").val();
            pv = pv.split("-")[0];
            $("input[name=package]").val(pv + " - " + sname);
          }
        });
      });

    $("#enquiryModal").on("shown.bs.modal", () => {
      a = Math.floor(Math.random() * 10 + 1);
      b = Math.floor(Math.random() * 10 + 1);

      $("#chll").attr("placeholder", `${a} + ${b} = `);
      console.log($(this));
      $("#chlld").removeClass("d-none");
    });

    $("#enqForm").on("submit", () => {
      $("select").removeAttr("disabled");
      event.preventDefault();
      let form = document.getElementById("enqForm");
      if (form.checkValidity()) {
        let fd = new FormData(form);
        fd.append("service_title", "");
        fd.set("phone", entPhoneNo);
        fetch("/api/enquiry/", { method: "POST", body: fd })
          .then((r) => r.json())
          .then((r) => {
            form.reset();
            Swal.fire(r);
            $("#enquiryModal").modal("hide");
            //    $('input[name=phone]').removeAttr("type");
            //  $('input[name=phone]').addAttribute("type", "hidden");
          });
      }
      /*
       */
    });
  });

  function validateChallenge(event) {
    var value = $("#chll").val();
    var el = document.getElementById("chll");

    if (+value == a + b) {
      el.setCustomValidity("");
      document.getElementById("enqForm").checkValidity();
      return true;
    } else {
      el.setCustomValidity("Value Is Incorrect!");
      return false;
    }
  }
</script>


<script>
  function phoneNlHandle(form) {
    let formData = new FormData(form);
    fetch("/api/phone-subscribe/", { method: "POST", body: formData })
      .then((r) => r.json())
      .then((r) => {
        form.reset();
        Swal.fire(r);
      });
  }

  var counted = 0;
  $(window).scroll(function () {

    var oTop = $('.numbersCounter').offset().top - window.innerHeight;
    if (counted == 0 && $(window).scrollTop() > oTop) {
      $('.count').each(function () {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        },

          {

            duration: 3000,
            easing: 'swing',
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum);
              //alert('finished');
            }

          });
      });
      counted = 1;
    }
  });
</script>


<script>
  function handlePricingContact(target) {
    let formData = new FormData(target);
    fetch("/api/pricing-contact/", {
      method: "POST",
      body: formData,
    })
      .then((r) => r.json())
      .then((r) => {
        target.reset();
        Swal.fire(r);
        $("#seoSubscription").modal("hide");
      });
  }

  document.addEventListener("DOMContentLoaded", function () {
    let lazyloadImages = document.querySelectorAll("img.lazy-load");
    let lazyloadThrottleTimeout;

    function lazyload() {
      if (lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }
      lazyloadThrottleTimeout = setTimeout(function () {
        let scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function (img) {
          if (img.offsetTop < window.innerHeight + scrollTop) {
            if (!img.src) {
              console.log("Not Found");
              img.src = img.dataset.src;
              img.classList.remove("lazy");
            }
          }
        });
        if (lazyloadImages.length == 0) {
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }
    lazyload();
    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  });
  window.onerror = function (msg, url, line, col, error) {
    // Catch the error and do whatever is necessary
    return true; // Prevent the original error message from appearing in the console
  };

  document.addEventListener('DOMContentLoaded', function () {
    // Select all input and textarea elements
    const elements = document.querySelectorAll('input, textarea');

    elements.forEach(function (element) {
      // Add input event listener to each element
      element.addEventListener('input', function (e) {
        // Replace any non-Latin characters with an empty string
        this.value = this.value.replace(/[^\x00-\x7F]/g, '');
      });

      // Add keydown event listener to each element
      element.addEventListener('keydown', function (e) {
        // Allow only Latin characters
        if (!/^[\x00-\x7F]*$/.test(e.key)) {
          e.preventDefault();
        }
      });
    });
  });

</script>
<?php wp_footer(); ?>

</body>

</html>