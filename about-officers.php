<?php
/*
 * Template Name: officers page  custom
 * Description: A clean Page Template with a photo on top and description * at the bottom.
 */


 
get_header(); ?>
 
        <div id="primary" class="content-area">
            <div id="content" class="site-content about-officers" role="main">
 
                <?php while ( have_posts() ) : the_post(); ?>
 
                    <?php get_template_part( 'content', 'about-officers' ); ?>
 
                    <?php //comments_template( '', true ); ?>
 
                <?php endwhile; // end of the loop. ?>
 
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
 
<?php //get_sidebar(); ?>
<?php get_footer(); ?>