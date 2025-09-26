<?php

/**
 * The template for displaying the footer
 *
 * @package TheClinicApp
 */
?>

<footer class="footer-container bg-grey-600 pt-5 pb-1 border-top-grey" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 text-white widget-footer widget-about">
                <?php if(is_active_sidebar('footer-1')): ?>
                    <?php dynamic_sidebar('footer-1'); ?>
                <?php else: ?>
                    <h6 class="text-white fw-bold">About <?php bloginfo('name'); ?></h6>
                    <p class="text-white pe-2 text-justify"><?php echo get_bloginfo('description'); ?></p>
                <?php endif; ?>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 text-white widget-footer widget-navlist widget-navlist-services">
                <?php
                    if ( is_active_sidebar( 'footer-2' ) ) {
                        dynamic_sidebar( 'footer-2' );
                    } else {
                    echo '<h6 class="text-white fw-bold">Software For</h6>';
                    wp_nav_menu(array(
                    'theme_location' => 'services-menu',
                    'container'      => false,
                    'menu_class'     => 'footer-links',
                ));
                }
                ?>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 text-white widget-footer widget-navlist widget-navlist-features">
                <?php
                    if ( is_active_sidebar( 'footer-3' ) ) {
                        dynamic_sidebar( 'footer-3' );
                    } else {
                    echo '<h6 class="text-white fw-bold">Software Features</h6>';
                    wp_nav_menu(array(
                    'theme_location' => 'features-menu',
                    'container'      => false,
                    'menu_class'     => 'footer-links',
                ));
                }
                ?>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 widget-footer widget-html widget-company">
                <?php
                    if ( is_active_sidebar( 'footer-4' ) ) {
                        dynamic_sidebar( 'footer-4' );
                    } 
                ?>
            </div>
        </div>
    </div>

    <div class="footer-bottom-container border-top-grey pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <p class="mb-0 text-grey-100">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                </div>
                <div class="col-md-4 mb-4">
                <?php

                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container'      => false,
                    'menu_class'     => 'footer-links d-flex justify-content-evenly',
                ));
                ?>
            </div>
                <div class="col-md-4 mb-4">
                    <ul class="footer-social-links list-unstyled d-flex text-grey-100 float-md-end">
                        <li><a href="https://www.youtube.com/@TheClinicApp" target="_blank" title="Visit our youtube" class="text-grey-100 me-3"><i class="fab fa-youtube fa-xl" aria-hidden="true"></i></a></li>
                        <!-- <li><a href="#" title="Visit X" class="text-gray-400 me-3"><i class="fab fa-x fa-xl" aria-hidden="true"></i></a></li> -->
                    </ul>
                </div>
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
            window.scrollTo({
                top: scrollY
            }); // Restore it
        }
    });
</script>
</body>

</html>