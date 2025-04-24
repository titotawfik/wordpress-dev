<?php
// Get forth_features group field
$forth_features = get_field('forth_features'); // 'forth_features' is the group field name
$media = extract_first_media_with_type($forth_features['media_file']);

if ($forth_features):
?>
    <!-- Features forth block the Billing & Analytics section -->
    <section class="billing-section bg-teal--gradient min-vh-100 d-flex align-items-center py-5 fade-on-scroll" id="billing">
        <div class="container">
            <div class="row align-items-center">
                <!-- Content Section -->
                <div class="col-lg-6 order-lg-2 fade-in delay-5">
                    <?php if (!empty($forth_features['heading'])): ?>
                        <h3 class="fw-bold mb-3"><?php echo esc_html($forth_features['heading']); ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($forth_features['description'])): ?>
                        <p class="lead text-secondary mb-4 col-lg-9"><?php echo esc_html($forth_features['description']); ?></p>
                    <?php endif; ?>

                    <?php if (!empty($forth_features['feature_title_1'])): ?>
                        <!-- Feature 1 -->
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-money-bills far fa-xl"></i>
                            </div>
                            <div class="feature-content">
                                <h5 class="feature-title"><?php echo esc_html($forth_features['feature_title_1']); ?></h5>
                                <p class="feature-description"><?php echo esc_html($forth_features['feature_description_1']); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($forth_features['feature_title_2'])): ?>
                        <!-- Feature 2 -->
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-sharp fa-solid fa-clipboard far fa-xl"></i>
                            </div>
                            <div class="feature-content">
                                <h5 class="feature-title"><?php echo esc_html($forth_features['feature_title_2']); ?></h5>
                                <p class="feature-description"><?php echo esc_html($forth_features['feature_description_2']); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($forth_features['feature_title_3'])): ?>
                        <!-- Feature 3 -->
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-chart-line fas fa-xl"></i>
                            </div>
                            <div class="feature-content">
                                <h5 class="feature-title"><?php echo esc_html($forth_features['feature_title_3']); ?></h5>
                                <p class="feature-description"><?php echo esc_html($forth_features['feature_description_3']); ?></p>
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