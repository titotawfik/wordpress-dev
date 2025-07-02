<?php get_header(); ?>
        
        <main class="main container fade-in delay-2">
            <div class="row py-5">
                <div class="col-lg-12">
                     <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="single__blog__post text-center margin__top">
                                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')));  ?>" class="wp-block-button__link"><svg style="margin-right:8px;" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.9549 18.5408L5.41418 13H21C21.5523 13 22 12.5523 22 12C22 11.4478 21.5523 11 21 11H5.41418L10.9549 5.4593C11.3454 5.06878 11.3454 4.43561 10.9549 4.04509C10.5644 3.65457 9.93123 3.65457 9.54071 4.04509L2.29286 11.2929C1.90234 11.6835 1.90234 12.3166 2.29286 12.7071L9.54071 19.955C9.93123 20.3455 10.5644 20.3455 10.9549 19.955C11.3454 19.5645 11.3454 18.9313 10.9549 18.5408Z" fill="#22355d"/></svg> Back to blog</a>
                                    <h1><?php the_title(); ?></h1>
                                </div>
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
            </div>
            <div class="more__posts">
                <div class="row">
                    <div class="col-lg-6">
                    <?php
                        $prev = get_previous_post();
                        $next = get_next_post();
                    ?>
                    <?php 

                        if ( ! empty( $prev ) ): ?>
                        <a href="<?php echo get_permalink( $prev->ID ); ?>" class="post__link  previouslink">
                            <div class="contents">
                                <span class="menu__type"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></span>
                                <h3 class="post__title"><?php echo apply_filters( 'the_title', $prev->post_title ); ?></span>
                            </div>
                            <?php echo get_the_post_thumbnail($prev->ID, 'game-image'); ?>
                        </a>
                    <?php endif; ?>
                    </div>
                    <div class="col-lg-6">
                    <?php 

                    if ( ! empty( $next ) ): ?>
                    <a href="<?php echo get_permalink( $next->ID ); ?>" class="post__link  nextlink">
                        <div class="contents">
                            <span class="menu__type"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
                            <h3 class="post__title"><?php echo apply_filters( 'the_title', $next->post_title ); ?></span>
                        </div>
                        <?php echo get_the_post_thumbnail($next->ID, 'game-image'); ?>
                    </a>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            
        </main>

<?php get_footer(); ?>