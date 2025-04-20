<?php
// Get secondary_feature group field
$secondary_feature = get_field('secondary_feature'); // 'secondary_feature' is the group field name
if ($secondary_feature):
?>
<!-- Features Second block the Appointment section -->
<section class="appointment-section bg-light-blue min-vh-100 d-flex align-items-center py-5 fade-on-scroll" id="getstarted">
    <div class="container">
        <div class="row align-items-center">
            <!-- Content Section -->
            <div class="col-lg-6 fade-in delay-5 order-lg-2">
                <?php if(!empty($secondary_feature['heading'])): ?>
                    <h3 class="fw-bold mb-3"><?php echo esc_html($secondary_feature['heading']); ?></h3>
                <?php endif; ?>
                <?php if(!empty($secondary_feature['description'])): ?>
                <p class="lead text-secondary mb-4 col-lg-9"><?php echo esc_html($secondary_feature['description']); ?></p>
                <?php endif; ?>
                
                <?php if (!empty($secondary_feature['feature_title_1'])): ?>
                <!-- Feature 1 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="far fa-xl fa-calendar-check"></i>
                    </div>
                    <div class="feature-content">
                        <h5 class="feature-title"><?php echo esc_html($secondary_feature['feature_title_1']); ?></h5>
                        <p class="feature-description"><?php echo esc_html($secondary_feature['feature_description_1']); ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php if (!empty($secondary_feature['feature_title_2'])): ?>
                <!-- Feature 2 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="far fa-xl fa-clock"></i>
                    </div>
                    <div class="feature-content">
                        <h5 class="feature-title"><?php echo esc_html($secondary_feature['feature_title_2']); ?></h5>
                        <p class="feature-description"><?php echo esc_html($secondary_feature['feature_description_2']); ?></p>
                    </div>
                </div>
                <?php endif;?>
                <?php if (!empty($secondary_feature['feature_title_3'])): ?>
                <!-- Feature 3 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-xl fa-users"></i>
                    </div>
                    <div class="feature-content">
                        <h5 class="feature-title"><?php echo esc_html($secondary_feature['feature_title_3']); ?></h5>
                        <p class="feature-description"><?php echo esc_html($secondary_feature['feature_description_3']); ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if (!empty($secondary_feature['video_url'])): ?>
            <!-- Video Section -->
            <div class="col-lg-6 mb-4 fade-in delay-5">
                <div class="video-container pe-lg-4">
                    <div class="ratio ratio-16x9 shadow-lg">
                        <iframe src="<?php echo esc_url($secondary_feature['video_url']); ?>" title="<?php echo esc_html($secondary_feature['video_title']); ?>" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>
<?php endif; ?>