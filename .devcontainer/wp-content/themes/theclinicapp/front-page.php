<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>

<main id="main-content">
  <?php get_template_part('partials/hero'); ?>
  <?php get_template_part('partials/features-first'); ?>
  <?php get_template_part('partials/features-second'); ?>
  <?php get_template_part('partials/form-section'); ?>
  <?php get_template_part('partials/faq-section'); ?>
</main>

<?php get_footer(); ?>
