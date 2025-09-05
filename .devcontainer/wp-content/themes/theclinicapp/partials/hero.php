<?php
// Get hero group field
$hero = get_field('hero'); // 'hero' is the group field name
$media = $hero['media_file'];
if ($hero):
?>
    <!-- Hero Section -->
    <section class="min-vh-100 d-flex align-items-center hero-section bg-grey-200" id="hero-section">
        <div class="container">
            <div class="row">
                <?php if (!empty($hero['title'])): ?>
                    <h1 class="py-4"><?php echo esc_html($hero['title']); ?></h1>
                <?php endif; ?>
                <div class="col-xl-5 col-lg-6">
                    <?php get_template_part('partials/hero-carousel'); ?>

                    <?php if (!empty($hero['monthly_price'])): ?>
                        <div class="mb-2 mt-3">
                            <h2 class="fw-bold mb-0"><?php echo esc_html($hero['monthly_price']); ?></h2>
                            <p class="my-0 mb-0"><?php echo esc_html($hero['includes']); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($hero['api_logos'])): ?>
                        <div class="lead api_logos d-flex justify-content-between align-items-center flex-wrap"><?php echo ($hero['api_logos']); ?></div>
                    <?php endif; ?>

                    <?php if (!empty($hero['primary_button_text']) && !empty($hero['primary_button_url'])): ?>
                        <div class="mt-4 gap-3 d-grid d-sm-flex justify-content-sm-center justify-content-lg-start">
                            <a href="<?php echo esc_url($hero['primary_button_url']); ?>" class="btn btn-lg w-100 btn-success me-md-2 cta-btn">
                                <?php echo esc_html($hero['primary_button_text']); ?>
                                <!-- <i class="fa-solid fa-arrow-right ms-2"></i> -->
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

                <div class="col-xl-7 col-lg-6 mb-4 d-flex flex-column flex-fill justify-content-center align-items-center">

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
                            <p class="py-3 badge bg-grey-600"><?php echo esc_html($hero['trust_badge_text']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>
<?php endif; ?>