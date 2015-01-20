<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package hksawp
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
       <!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
    </header><!-- .entry-header -->

    <div id="nav-page" class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'shape' ), 'after' => '</div>' ) ); ?>
        <?php edit_post_link( __( 'Edit', 'shape' ), '<span class="edit-link">', '</span>' ); ?>

      <?php /* list the children of this page */?>
      <ul class="page-nav">
        <?php do_action('display_child_page',$post->ID); ?>
      </ul>
      <?php /* list the children of this page */ ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->