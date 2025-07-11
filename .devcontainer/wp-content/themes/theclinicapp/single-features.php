<?php get_header(); ?>
        
        <main class="main">
            <section class="row">
                <div class="col-lg-12">
                     <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="single__post__header">
                                    <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                                </div>
                                <div class="single__blog__post">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                            <nav class="navigation index">
                                <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
                                <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
                            </nav>
                        <?php else : ?>
                            <article>
                                <h2><?php _e( 'Sorry, nothing to display.', 'ninthfloor' ); ?></h2>
                            </article>
                            
                    <?php endif; ?>
                </div>
            </section>

            <nav class="container more__posts">
                <div class="row mb-5">
                    <div class="col-sm-6 d-flex justify-content-start">
                    <?php
                        $prev = get_previous_post();
                        $next = get_next_post();
                    ?>
                    <?php 

                        if ( ! empty( $prev ) ): ?>
                        <a href="<?php echo get_permalink( $prev->ID ); ?>" class="post__link  previouslink nav-link">
                            <div class="contents">
                                <h3 class="post__title">
                                    <span class="menu__type"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></span>
                                    <?php echo apply_filters( 'the_title', $prev->post_title ); ?>
                                </h3>
                            </div>
                            <?php echo get_the_post_thumbnail($prev->ID, 'game-image'); ?>
                        </a>
                    <?php endif; ?>
                    </div>

                    <div class="col-sm-6 d-flex justify-content-end">
                    <?php 

                    if ( ! empty( $next ) ): ?>
                    <a href="<?php echo get_permalink( $next->ID ); ?>" class="post__link  nextlink nav-link">
                        <div class="contents">
                            <h3 class="post__title"><?php echo apply_filters( 'the_title', $next->post_title ); ?>
                                <span class="menu__type"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
                            </h3>
                        </div>
                        <?php echo get_the_post_thumbnail($next->ID, 'game-image'); ?>
                    </a>
                    <?php endif; ?>
                    </div>
                </div>
            </nav>
            <div class="mt-5">
                <?php get_template_part('partials/price'); ?>
            </div>
            <div class="mt-5">
                <?php get_template_part('partials/form-section'); ?>
            </div>
        </main>

<?php get_footer(); ?>