<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Site Header -->
  <header class="header sticky-top bg-white py-3 fade-in delay-1">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Logo (Text) -->
      <a href="<?php echo home_url(); ?>" class="navbar-brand d-flex align-items-center text-decoration-none">
        <span class="site-title fs-5 fw-bold">TheClinicApp</span>
      </a>

      <!-- Nav Menu -->
      <nav class="d-none d-md-block">
      <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',  // Change to your menu location
            'container'      => false,           // No container div
            'menu_class'     => 'nav'          // Class for ul
        ));
      ?>
      </nav>
      <div class="gap-2 d-sm-flex">
        <button class="border-0 switch-theme-btn" type="button" title="switch theme" id="theme-toggle"></button>
        <a href="#" class="btn btn-outline-secondary me-md-2 d-none d-sm-flex">login</a>
        <a href="#signup" class="btn btn-primary">Sign Up</a>
      </div>
      <!-- Mobile Menu Toggle -->
      <button title="toggle menu" class="btn toggle-mob d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
        <span class="navbar-toggler-icon">
          <i class="fa-duotone fa-solid fa-bars"></i>
        </span>
      </button>
    </div>
  </header>

  <!-- Offcanvas Mobile Menu -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title visually-hidden" id="mobileMenuLabel">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
      </button>
    </div>
    <div class="offcanvas-body">
    <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',  // Change to your menu location
            'container'      => false,           // No container div
            'menu_class'     => 'nav flex-column' // Class for ul
        ));
      ?>
    </div>
  </div>