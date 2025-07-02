<?php get_header(); ?>
<!-- BLOG PAGE -->
       
        <section class="page-template container min-vh-100 fade-in delay-2">
            <div class="row py-5">
                <div class="col-lg-12">
                    <h1><?php echo get_category_parents( $cat, false, '' ); ?></h1>
                    <div class="d-grid">
                     <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                                <div class="col-lg-4 offset-lg-4 pt-3">
                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                        <div class="entry clear blog__post">
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <div class="post__meta">
                                                <span class="postcategory"><?php the_category(' / '); ?></span>
                                                <span class="dateposted"><?php the_time('F j, Y'); ?></span>
                                            </div>
                                            <?php // if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                                            <?php wp_link_pages(); ?>
                                        </div>

                                    </article>
                                </div>
                        <?php endwhile; ?>
                            <div class="col-lg-12">
                                <nav class="navigation index">
                                    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
                                    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
                                </nav>
                            </div>
                        <?php else : ?>
                            <article>
                                <h2><?php _e( 'Sorry, nothing to display.', 'winterfox' ); ?></h2>
                            </article>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>