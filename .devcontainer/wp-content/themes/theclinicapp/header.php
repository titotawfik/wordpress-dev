<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
// Get the site icon URL (default size: 512px)
$icon_url = get_site_icon_url(32);
?>

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T9S3X4DK');
  </script>
  <!-- End Google Tag Manager -->

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9S3X4DK"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Site Header -->
  <header class="header sticky-top bg-white py-3">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Logo (Text) -->
      <a href="<?php echo home_url(); ?>" class="navbar-brand d-flex align-items-center text-decoration-none">
        <span><?php if ($icon_url) {
                echo '<img src="' . esc_url($icon_url) . '" alt="Site Icon" widhth="32" height="32" class="me-1">';
              } ?></span><span class="site-title fs-5 fw-bold"><?php bloginfo('name'); ?></span>
      </a>

      <!-- Nav Menu -->
      <nav class="d-none d-md-block">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'header-menu',  // Change to your menu location
          'container'      => false,           // No container div
          'menu_class'     => 'nav',          // Class for ul
          'walker' => new Bootstrap_Navwalker() // Use custom walker
        ));
        ?>
      </nav>
      <div class="gap-2 d-sm-flex">
        <button class="border-0 switch-theme-btn" type="button" title="switch theme" id="theme-toggle"></button>
        <a href="https://app.theclinicapp.com/" target="_blank" class="btn btn-secondary me-md-2 d-none d-sm-flex">login</a>
        <a href="#signup" class="btn btn-success btn-lg">Start now</a>
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
        'menu_class'     => 'nav flex-column', // Class for ul
        'walker' => new Bootstrap_Navwalker() // Use custom walker
      ));
      ?>
    </div>
  </div>