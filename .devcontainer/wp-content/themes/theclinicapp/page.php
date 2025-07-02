<?php get_header(); ?>
                
<main class="main container fade-in delay-2">
    <div class="row py-5">
        <div class="col-lg-12">
                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <h1 class="text-center"><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                        
                        
                    </div>
                <?php endwhile; ?>

                <?php else : ?>
                    <div>
                        <h2><?php _e( 'Sorry, nothing to display.', 'ninthfloor' ); ?></h2>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>