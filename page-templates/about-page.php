<?php
/*
Template Name: About Page
*/
?>
<?php get_header(); ?>
<div style="min-height: 50vh"> 

<!-- Hero section -->
<?php get_template_part('partials/about/hero', 'section') ?>
<!-- END OF Hero Section -->

<!-- Our Services -->
<?php get_template_part('partials/about/numbers', 'counter') ?>
<!-- END OF Our Services -->

<!-- Our Expertise -->
<?php get_template_part('partials/about/why', 'us') ?>
<!-- END OF Our Expertise -->

<!-- work process -->
<?php get_template_part('partials/about/whowe', 'are') ?>
<!-- END OF work Process -->

<!-- partner -->
<?php get_template_part('partials/partner', 'section') ?>
<!-- END OF partner -->

<!-- Testimonials -->
<?php get_template_part('partials/testimonials', 'section') ?>
<!-- END OF Testimonials -->

</div>

 <!-- Let's Connect -->
<?php get_template_part('partials/lets', 'connect') ?>
<!-- END OF Let's Connect -->

      <?php get_footer(); ?>