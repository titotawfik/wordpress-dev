<?php
// Get first_features group field
$first_features = get_field('first_features'); // 'first_features' is the group field name
if ($first_features):
?>
    <!-- Features Section -->
    <div id="features-section" class="features-section py-5 bg-light">
        <div class="container ">
            <?php if(!empty($first_features['heading'])): ?>
            <!-- Header Section -->
            <section class="header-section text-center fade-on-scroll ">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <h2 class="fw-bold mb-3 text-grey-900 fade-in delay-4"><?php echo esc_html($first_features['heading']); ?></h2>
                        <p class="lead text-grey-600 mb-5 fade-in delay-4"><?php echo esc_html($first_features['description']); ?></p>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <!-- Features Section items -->
            <section class="features-section-items fade-on-scroll">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <?php if(!empty($first_features['feature_title_1'])): ?>
                    <!-- Feature 1 -->
                    <div class="col fade-in delay-5">
                        <div class="card feature-card p-4 shadow-sm h-100">
                            <div class="card-body">
                                <h4 class="card-title text-grey-900 fw-bold mb-3"><?php echo esc_html($first_features['feature_title_1']); ?></h4>
                                <p class="card-text text-grey-600"><?php echo esc_html($first_features['feature_description_1']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($first_features['feature_title_2'])): ?>
                    <!-- Feature 2 -->
                    <div class="col fade-in delay-5">
                        <div class="card feature-card p-4 shadow-sm h-100">
                            <div class="card-body">
                                <h4 class="card-title text-grey-900 fw-bold mb-3"><?php echo esc_html($first_features['feature_title_2']); ?></h4>
                                <p class="card-text text-grey-600"><?php echo esc_html($first_features['feature_description_2']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($first_features['feature_title_3'])): ?>
                    <!-- Feature 3 -->
                    <div class="col fade-in delay-5">
                        <div class="card feature-card p-4 shadow-sm h-100">
                            <div class="card-body">
                                <h4 class="card-title text-grey-900 fw-bold mb-3"><?php echo esc_html($first_features['feature_title_3']); ?></h4>
                                <p class="card-text text-grey-600"><?php echo esc_html($first_features['feature_description_3']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($first_features['feature_title_4'])): ?>
                    <!-- Feature 4 -->
                    <div class="col fade-in delay-5">
                        <div class="card feature-card p-4 shadow-sm h-100">
                            <div class="card-body">
                                <h4 class="card-title text-grey-900 fw-bold mb-3"><?php echo esc_html($first_features['feature_title_4']); ?></h4>
                                <p class="card-text text-grey-600"><?php echo esc_html($first_features['feature_description_4']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($first_features['feature_title_5'])): ?>
                    <!-- Feature 5 -->
                    <div class="col fade-in delay-5">
                        <div class="card feature-card p-4 shadow-sm h-100">
                            <div class="card-body">
                                <h4 class="card-title text-grey-900 fw-bold mb-3"><?php echo esc_html($first_features['feature_title_5']); ?></h4>
                                <p class="card-text text-grey-600"><?php echo esc_html($first_features['feature_description_5']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($first_features['feature_title_6'])): ?>
                    <!-- Feature 6 -->
                    <div class="col fade-in delay-5">
                        <div class="card feature-card p-4 shadow-sm h-100">
                            <div class="card-body">
                                <h4 class="card-title text-grey-900 fw-bold mb-3"><?php echo esc_html($first_features['feature_title_6']); ?></h4>
                                <p class="card-text text-grey-600"><?php echo esc_html($first_features['feature_description_6']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </section>

            <?php if(!empty($first_features['image'])): ?>
            <!-- Figure Section -->
            <figure class="text-center mt-5 fade-on-scroll ">
                <img src="<?php echo esc_url($first_features['image']['url']); ?>" alt="<?php echo esc_html($first_features['image']['alt']); ?>" class="img-fluid rounded-3 shadow-lg fade-in delay-5" loading="lazy" />
                <div class="row justify-content-center mt-2 fade-in delay-5">
                    <figcaption class="col-lg-6 text-grey-600 fs-6"><?php echo esc_html($first_features['image']['description']); ?></figcaption>
                </div>
            </figure>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>