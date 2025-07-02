<?php

/**
 * The main index file
 *
 * @package TheClinicApp
 */

get_header();
?>

<main class="container fade-in delay-2">
    <div class="row py-5">
        <div class="col-lg-8">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <div class="entry clear">
                            <?php if (function_exists('add_theme_support')) the_post_thumbnail(); ?>
                            <?php the_content(); ?>
                            <?php edit_post_link(); ?>
                            <?php wp_link_pages(); ?>
                        </div>
                        <footer class="post-footer">
                        </footer>
                    </article>
                <?php endwhile; ?>
                <nav class="navigation index">
                    <div class="alignleft"><?php next_posts_link('Older Entries'); ?></div>
                    <div class="alignright"><?php previous_posts_link('Newer Entries'); ?></div>
                </nav>
            <?php else : ?>
                <article>
                    <h2><?php _e('Sorry, nothing to display.', 'winterfox'); ?></h2>
                </article>
            <?php endif; ?>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
</main>

<?php
get_footer();
?>