<?php

/**
 * The template for displaying the footer
 *
 * @package TheClinicApp
 */
?>

<footer class="footer-container bg-grey-900 py-5 mt-5" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="text-white fw-bold"><?php bloginfo('name'); ?></h5>
                <p class="text-gray-400"><?php echo  get_bloginfo('description'); ?></p>
            </div>
            <div class="col-md-4 mb-4">
                <h6 class="text-white fw-bold">Resources</h6>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',  
                        'container'      => false,           
                        'menu_class'     => 'footer-links list-unstyled text-gray-400'       
                    ));
                ?>
            </div>
            <div class="footer-bottom-container d-flex justify-content-between py-5">
                <div class="col-md-8 mb-4">
                    <p class="mb-0 text-gray-400">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <ul class="footer-social-links list-unstyled d-flex text-gray-400 float-md-end">
                        <li><a href="#" title="Visit our youtube" class="text-gray-400 me-3"><i class="fab fa-youtube fa-xl" aria-hidden="true"></i></a></li>
                        <li><a href="#" title="Visit X" class="text-gray-400 me-3"><i class="fab fa-x fa-xl" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>