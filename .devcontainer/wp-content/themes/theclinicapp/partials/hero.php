<?php
// Get hero group field
$hero = get_field('hero'); // 'hero' is the group field name
$media = extract_first_media_with_type($hero['media_file']);
if ($hero):
?>
    <!-- Hero Section -->
    <section class="min-vh-100 d-flex align-items-center fade-on-scroll hero-section" id="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mb-4 order-lg-2 fade-in delay-2">

                    <?php
                    if (!empty($media['html'])) {

                        if ($media['type'] === 'iframe') {
                            echo '<div class="media-wrapper iframe-embed ratio ratio-16x9 shadow-lg">';
                        } else {
                            echo '<div class="media-wrapper shadow-lg">';
                        }
                        echo $media['html'];
                        echo '</div>';
                    }

                    ?>

                    <?php if (!empty($hero['trust_badge_text'])): ?>
                        <div class="text-center mt-1">
                            <p class="py-3 badge bg-dark"><?php echo esc_html($hero['trust_badge_text']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-lg-5 py-lg-5">
                    <?php if (!empty($hero['title'])): ?>
                        <h1 class="fade-in delay-2"><?php echo esc_html($hero['title']); ?></h1>
                    <?php endif; ?>

                    <?php if (!empty($hero['description'])): ?>
                        <p class="lead py-lg-3 text-grey-600 fade-in delay-3"><?php echo esc_html($hero['description']); ?></p>
                    <?php endif; ?>

                    <div class="gap-3 d-grid d-sm-flex">
                        <?php if (!empty($hero['primary_button_text']) && !empty($hero['primary_button_url'])): ?>
                            <a href="<?php echo esc_url($hero['primary_button_url']); ?>" class="btn btn-primary me-md-2 cta-btn fade-in delay-3">
                                <?php echo esc_html($hero['primary_button_text']); ?>
                                <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        <?php endif; ?>

                        <?php if (!empty($hero['secondary_button_text']) && !empty($hero['secondary_button_url'])): ?>
                            <a href="<?php echo esc_url($hero['secondary_button_url']); ?>" class="btn btn-outline-secondary cta-btn fade-in delay-3">
                                <?php echo esc_html($hero['secondary_button_text']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>