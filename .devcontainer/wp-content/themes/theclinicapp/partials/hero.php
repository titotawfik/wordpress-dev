<?php
// Get hero group field
$hero = get_field('hero'); // 'hero' is the group field name
$media = $hero['media_file'];
if ($hero):
?>
    <!-- Hero Section -->
    <section class="min-vh-100 d-flex align-items-center hero-section bg-light" id="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 py-5">
                    <?php if (!empty($hero['title'])): ?>
                        <h1 class=""><?php echo esc_html($hero['title']); ?></h1>
                    <?php endif; ?>
            
                   <?php /*
                    <?php if (!empty($hero['description'])): ?>
                        <p class="lead py-lg-2 text-grey-600"><?php echo esc_html($hero['description']); ?></p>
                    <?php endif; ?>
                    */ ?>
                     <?php get_template_part('partials/home-carousel'); ?>
                    <?php if (!empty($hero['monthly_price'])): ?>
                   <div class="mb-4">
                        <h2 class="fw-bold mb-0"><?php echo esc_html($hero['monthly_price']); ?></h2>
                        <p class="my-0 mb-0"><?php echo esc_html($hero['includes']); ?></p>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($hero['primary_button_text']) && !empty($hero['primary_button_url'])): ?>
                    <div class="gap-3 d-grid d-sm-flex">
                            <a href="<?php echo esc_url($hero['primary_button_url']); ?>" class="btn btn-success me-md-2 cta-btn">
                                <?php echo esc_html($hero['primary_button_text']); ?>
                                <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                    <?php endif; ?>

                    <?php
                    /*
                    <?php if (!empty($hero['secondary_button_text']) && !empty($hero['secondary_button_url'])): ?>
                        <a href="<?php echo esc_url($hero['secondary_button_url']); ?>" class="btn btn-outline-secondary cta-btn fade-in delay-3">
                            <?php echo esc_html($hero['secondary_button_text']); ?>
                        </a>
                    <?php endif; ?>
                    */
                    ?>
                    </div>
                </div>

                <div class="col-lg-7 mb-4">

                    <?php
                    echo '<div class="media-wrapper">';
                    echo ($media);
                    echo '</div>';

                    // if (!empty($media['html'])) {

                    //     if ($media['type'] === 'iframe') {
                    //         echo '<div class="media-wrapper iframe-embed ratio ratio-16x9 shadow-lg">';
                    //     } else {
                    //         echo '<div class="media-wrapper shadow-lg">';
                    //     }
                    //     echo $media['html'];
                    //     echo '</div>';
                    // }

                    ?>

                    <?php if (!empty($hero['trust_badge_text'])): ?>
                        <div class="text-center mt-1">
                            <p class="py-3 badge bg-dark"><?php echo esc_html($hero['trust_badge_text']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>
<?php endif; ?>