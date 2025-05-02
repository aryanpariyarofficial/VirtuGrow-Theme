<?php get_header(); ?>
<div style="min-height: 50vh">

<!-- Hero Slider -->
<?php get_template_part('partials/home/hero', 'section') ?>
<!-- END OF Hero Slider -->

<!-- Our Services -->
<?php get_template_part('partials/home/our', 'services') ?>
<!-- END OF Our Services -->

<!-- Our Expertise -->
<?php get_template_part('partials/home/our', 'expertise') ?>
<!-- END OF Our Expertise -->

<!-- work process -->
<?php get_template_part('partials/home/work', 'process') ?>
<!-- END OF work Process -->

<!-- Who we are -->
   <?php //get_template_part('partials/home/whowe', 'are') ?>
<!-- END OF Who we are -->

<!-- Testimonials -->
   <?php get_template_part('partials/testimonials', 'section') ?>
<!-- END OF Testimonials -->

<!-- partner -->
<?php get_template_part('partials/partner', 'section') ?>
<!-- END OF partner -->

<!-- blog section -->
<?php get_template_part('partials/home/blog', 'section') ?>
<!-- end of blog section -->

</div>

<!-- Let's Connect -->
<?php get_template_part('partials/lets', 'connect') ?>
<!-- END OF Let's Connect -->

<?php get_footer(); ?>