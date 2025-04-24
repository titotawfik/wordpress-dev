<?php
// Get third_features group field
$third_features = get_field('third_features'); // 'third_features' is the group field name
$media = extract_first_media_with_type($third_features['media_file']);
if ($third_features):
?>
    <!-- Features third block the patient recored section -->
    <section class="patient-recored-section min-vh-100 d-flex align-items-center py-5 fade-on-scroll" id="patient-recored">
        <div class="container">
            <div class="row align-items-center">
                <!-- Content Section -->
                <div class="col-lg-6 fade-in delay-5">
                    <?php if (!empty($third_features['heading'])): ?>
                        <h3 class="fw-bold mb-3"><?php echo esc_html($third_features['heading']); ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($third_features['description'])): ?>
                        <p class="lead text-secondary mb-4 col-lg-9"><?php echo esc_html($third_features['description']); ?></p>
                    <?php endif; ?>

                    <?php if (!empty($third_features['feature_title_1'])): ?>
                        <!-- Feature 1 -->
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-sharp fa-solid fa-clipboard far fa-xl"></i>
                            </div>
                            <div class="feature-content">
                                <h5 class="feature-title"><?php echo esc_html($third_features['feature_title_1']); ?></h5>
                                <p class="feature-description"><?php echo esc_html($third_features['feature_description_1']); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($third_features['feature_title_2'])): ?>
                        <!-- Feature 2 -->
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="far fa-xl fa-solid fa-shield"></i>
                            </div>
                            <div class="feature-content">
                                <h5 class="feature-title"><?php echo esc_html($third_features['feature_title_2']); ?></h5>
                                <p class="feature-description"><?php echo esc_html($third_features['feature_description_2']); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($third_features['feature_title_3'])): ?>
                        <!-- Feature 3 -->
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-xl fa-regular fa-chart-column"></i>
                            </div>
                            <div class="feature-content">
                                <h5 class="feature-title"><?php echo esc_html($third_features['feature_title_3']); ?></h5>
                                <p class="feature-description"><?php echo esc_html($third_features['feature_description_3']); ?></p>
                            </div>
                        </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($media['html'])): ?>
                <div class="col-lg-6 mb-4 fade-in delay-5">
                    <div class="media-container pe-lg-4">
                        <?php if ($media['type'] === 'iframe'): ?>
                            <div class="media-wrapper iframe-embed ratio ratio-16x9 shadow-lg">
                            <?php else: ?>
                                <div class="media-wrapper shadow-lg">
                                <?php endif; ?>
                                <?php echo $media['html']; ?>
                                </div>
                            </div>
                    </div>
                <?php endif; ?>
                </div>
            </div>
    </section>
<?php endif; ?>