<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>
    <main id="main-content" class="search-page min-vh-100 container py-5 text-center">
        <div class="row search-container">
             <div class="d-grid">
                 <div class="col-lg-12">
                 </div>
             </div>
         </div>

        <section class="row py-5 text-center">
            <div class="d-grid">
                <div class="col-lg-6 offset-lg-3">
                     <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry clear">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <span class="posttype tooltip" data-tooltip="Content type"><?php echo get_post_type( $post_id ); ?></span>
                                </div>
                            </article>
                            <hr/>
                        <?php endwhile; ?>
                        <div class="d-grid">
                            <div class="col-lg-12">
                                <nav class="nav index">
                                    <div class="align-left"><?php next_posts_link( 'Older results' ); ?></div>
                                    <div class="align-right"><?php previous_posts_link( 'Newer results' ); ?></div>
                                </nav>
                            </div>
                        </div>
                        <?php else : ?>
                            <article>
                                <h4><div class="alert alert-warning" role="alert"><?php _e( 'Search returned 0 results', 'winterfox' ); ?></div></h4>
                            </article>
                    <?php endif; ?>
                </div>
            </div>    
        </section>

    </main>

<?php get_footer(); ?>
