<?php
/**
 *
 * @package hksawp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <h1 class="entry-title"><?php the_title(); ?></h1>

        <?php if ( has_post_thumbnail() ) : //display featured images?>
            <?php $feature_image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'large'); ?>
            <?php $alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true )?>
            <div class="featured-image" title=<?php echo $alt ?> style="background-image:url('<?php echo $feature_image_src[0] ?>');" ></div>
        <?php else :?>
            <?php //no featured images?>
        <?php endif; ?>

    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'shape' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
    <div class="entry-meta">
            <?php shape_posted_on(); ?>
    </div><!-- .entry-meta -->
    <footer class="entry-meta">
        <?php
            /* translators: used between list items, there is a space after the comma */
            $category_list = get_the_category_list( __( ', ', 'shape' ) );

            /* translators: used between list items, there is a space after the comma */
            $tag_list = get_the_tag_list( '', ', ' );

            if ( ! shape_categorized_blog() ) {
                // This blog only has 1 category so we just need to worry about tags in the meta text
                if ( '' != $tag_list ) {
                    $meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'shape' );
                } else {
                    $meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'shape' );
                }

            } else {
                // But this blog has loads of categories so we should probably display them here
                if ( '' != $tag_list ) {
                    $meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'shape' );
                } else {
                    $meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'shape' );
                }

            } // end check for categories on this blog

            printf(
                $meta_text,
                $category_list,
                $tag_list,
                get_permalink(),
                the_title_attribute( 'echo=0' )
            );
        ?>

        <?php edit_post_link( __( 'Edit', 'shape' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->