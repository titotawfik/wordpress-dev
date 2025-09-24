<?php

/**
 * The template for displaying the footer
 *
 * @package TheClinicApp
 */
?>

<footer class="footer-container bg-grey-600 py-5 border-top-grey" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-8 mb-4">
                <h5 class="text-grey-100 fw-bold">About  <?php bloginfo('name'); ?></h5>
                <p class="text-grey-100 pe-2 text-justify"><?php echo  get_bloginfo('description'); ?></p>
            </div>
            <div class="col-lg-2 col-md-4 mb-4">
                <!-- Footer 1 the company: -->
                <div class="widget-footer widget-html widget-company">
                <?php
                    if ( is_active_sidebar( 'footer-1' ) ) {
                        dynamic_sidebar( 'footer-1' );
                    }
                ?>
                </div>        
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <!-- Footer 2 the services pages list: -->
                <div class="widget-footer widget-navlist widget-navlist-services">
                <?php
                    if ( is_active_sidebar( 'footer-2' ) ) {
                        dynamic_sidebar( 'footer-2' );
                    }
                ?>
                </div>        
            </div>
             <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="text-white fw-bold">Resources</h6>
                <?php
                    
                   wp_nav_menu(array(
                        'theme_location' => 'footer-menu',  
                        'container'      => false,           
                        'menu_class'     => 'footer-links list-unstyled'       
                    )); 
                ?>
            </div>
            <div class="footer-bottom-container d-flex justify-content-between py-5">
                <div class="col-md-8 mb-4">
                    <p class="mb-0 text-grey-100">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <ul class="footer-social-links list-unstyled d-flex text-grey-100 float-md-end">
                        <li><a href="https://www.youtube.com/@TheClinicApp" target="_blank" title="Visit our youtube" class="text-grey-100 me-3"><i class="fab fa-youtube fa-xl" aria-hidden="true"></i></a></li>
                        <!-- <li><a href="#" title="Visit X" class="text-gray-400 me-3"><i class="fab fa-x fa-xl" aria-hidden="true"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </div>

</footer>

<?php wp_footer(); ?>
<script>
  const iframe = document.getElementById('signuptrail');
  window.addEventListener('message', (event) => {
      // Optional: Verify the origin
  if (event.origin !== "https://trial.theclinicapp.com") return;
  if (event.data.type === 'setHeight') {
    const scrollY = window.scrollY; // Save scroll position
    iframe.style.height = event.data.height + 'px';
    window.scrollTo({ top: scrollY }); // Restore it
  }
});
</script>
</body>

</html>