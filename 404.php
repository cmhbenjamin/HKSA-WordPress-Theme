<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package hksawp
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <article id="post-0" class="post error404 not-found">
                <header class="entry-header">
                    <h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'shape' ); ?></h1>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe watch a dancing video of our president?', 'shape' ); ?></p>
                    <iframe width="1280" height="720" src="//www.youtube.com/embed/ag_SYemqFUk" frameborder="0" allowfullscreen></iframe>
                </div><!-- .entry-content -->
            </article><!-- #post-0 .post .error404 .not-found -->

        </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->
<?//php get_sidebar(); ?>
<?php get_footer(); ?>