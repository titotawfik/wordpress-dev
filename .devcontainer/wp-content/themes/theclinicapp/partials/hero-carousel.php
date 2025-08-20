<?php

/**
 * Hero Carousel Partial
 *
 * @package mytheme
 */

$args = array(
    'post_type'      => 'hero_slides',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
);

$hero_query = new WP_Query($args);

if ($hero_query->have_posts()) : ?>
    <div id="heroCarousel" class="carousel carousel-dark slide carousel-fade py-3" data-bs-ride="carousel" data-bs-interval="5000">

        <!-- Indicators -->
        <div class="carousel-indicators">
            <?php
            $i = 0;
            while ($hero_query->have_posts()) : $hero_query->the_post(); ?>
                <button type="button"
                    data-bs-target="#heroCarousel"
                    data-bs-slide-to="<?php echo esc_attr($i); ?>"
                    class="<?php echo $i === 0 ? 'active' : ''; ?>"
                    aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                    aria-label="Slide <?php echo $i + 1; ?>">
                </button>
            <?php
                $i++;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>

        <!-- Carousel Items -->
        <div class="carousel-inner">
            <?php
            $i = 0;
            while ($hero_query->have_posts()) : $hero_query->the_post(); ?>
                <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                    <div class="carousel-content">
                        <div class="carousel-desc pb-3">
                            <?php echo wp_kses_post(get_the_content()); ?>
                        </div>
                    </div>
                </div>
            <?php
                $i++;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>

    </div>
<?php endif; ?>