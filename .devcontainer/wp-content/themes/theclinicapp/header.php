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
    <header class="header sticky-top bg-white shadow-sm py-3">
      <div class="container d-flex align-items-center justify-content-between">
        <!-- Logo (Text) -->
        <a href="<?php echo home_url(); ?>" class="navbar-brand d-flex align-items-center text-decoration-none">
          <span class="site-title fs-4 fw-bold text-primary">TheClinicApp</span>
        </a>
    
        <!-- Nav Menu -->
        <nav class="d-none d-md-block">
          <ul class="nav">
            <li class="nav-item"><a href="#services" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#getstarted" class="nav-link">Get Started</a></li>
          </ul>
        </nav>
    
        <!-- Mobile Menu Toggle -->
        <button class="btn toggle-mob d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
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
        <ul class="nav flex-column">
          <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="#getstarted" class="nav-link">Get Started</a></li>
        </ul>
      </div>
    </div>
    