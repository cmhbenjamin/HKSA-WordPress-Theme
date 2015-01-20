<?php
/**
 * Shape functions and definitions
 *
 * @package hksawp
 *
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 *
 */
if ( ! isset( $content_width ) )
    $content_width = 654; /* pixels */

if ( ! function_exists( 'shape_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 *
 */
function shape_setup() {

    /**
     * Custom template tags for this theme.
     */
    require( get_template_directory() . '/inc/template-tags.php' );

    /**
     * Custom functions that act independently of the theme templates
     */
    require( get_template_directory() . '/inc/tweaks.php' );

    /**
     * Make theme available for translation
     * Translations can be filed in the /languages/ directory
     * If you're building a theme based on Shape, use a find and replace
     * to change 'shape' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'shape', get_template_directory() . '/languages' );

    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for the Aside Post Format
     */
    add_theme_support( 'post-formats', array( 'aside' ) );
    add_theme_support( 'post-thumbnails', array( 'post' ) );

    /**
     * This theme uses wp_nav_menu() in one location.
     */
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'shape' ),
    ) );
}
endif; // shape_setup
add_action( 'after_setup_theme', 'shape_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 *
 */
function shape_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Primary Widget Area', 'shape' ),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );

    register_sidebar( array(
        'name' => __( 'Secondary Widget Area', 'shape' ),
        'id' => 'sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );

    // footer widget area

    register_sidebar( array(
        'name' => __( 'Footer Left Widget Area', 'shape' ),
        'id' => 'sidebar-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Middle Widget Area', 'shape' ),
        'id' => 'sidebar-4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Right Widget Area', 'shape' ),
        'id' => 'sidebar-5',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
}
add_action( 'widgets_init', 'shape_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function shape_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // optional, need to include jquery as well
    wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    }

    // add class "text" to <p> within article
    if (get_page_template_slug( $post->ID )=="about-page.php") {
        wp_enqueue_script( 'pclass_marker', get_template_directory_uri() . '/js/pclass_marker.js', array( 'jquery' ), '20120202' );
        wp_enqueue_script( 'fitvid', get_template_directory_uri() . '/js/jquery-fitvids.js', array( 'jquery' ), '20120202' );
    }

    //
    if (get_page_template_slug( $post->ID )=="about-officers.php") {
        wp_enqueue_script( 'officers_structure', get_template_directory_uri() . '/js/officers.js', array( 'jquery' ), '20120202' );
    }

    if(is_front_page()){
        wp_enqueue_script( 'front-page_center', get_template_directory_uri() . '/js/front-page.js', array( 'jquery' ), '20120202' );
    }
}
add_action( 'wp_enqueue_scripts', 'shape_scripts' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for previous versions.
 * Use feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * Hooks into the after_setup_theme action.
 *
 */
// function shape_register_custom_background() {
//     $args = array(
//         'default-color' => 'e9e0d1',
//     );

//     $args = apply_filters( 'shape_custom_background_args', $args );

//     if ( function_exists( 'wp_get_theme' ) ) {
//         add_theme_support( 'custom-background', $args );
//     } else {
//         define( 'BACKGROUND_COLOR', $args['default-color'] );
//         define( 'BACKGROUND_IMAGE', $args['default-image'] );
//         add_custom_background();
//     }
// }
// add_action( 'after_setup_theme', 'shape_register_custom_background' );

/**
 * Implement the Custom Header feature // disabled
 */
//require( get_template_directory() . '/inc/custom-header.php' );

/* function for nav page */
/*-------------------------------------------------------------------------------------------------*/

// return a list of image in the given post
function get_page_image($id){
    $args = array(
        'post_type' => 'attachment',
        'numberposts' => -1,
        'post_status' => null,
        'post_parent' => $id
    );

  return get_posts( $args );
}

//return a list of child post in the current post
function get_page_list($id){
    // $args = array(
    //     'sort_order' => 'ASC',
    //     'sort_column' => 'menu_order',
    //     'hierarchical' => 1,
    //     'exclude' => '',
    //     'include' => '',
    //     'meta_key' => '',
    //     'meta_value' => '',
    //     'authors' => '',
    //     'child_of' => $id,
    //     'parent' => $id,
    //     'exclude_tree' => '',
    //     'number' => '',
    //     'offset' => 0,
    //     'post_type' => 'page',
    //     'post_status' => 'publish'
    // );
    $children = get_pages('child_of='.$id.'&sort_order=asc&sort_column=menu_order&parent='.$id);
    return $children;
}
//for the nav-page
function child_page_menu($id){

    $pages=get_page_list($id);
    foreach ($pages as $page) {
        $photos=get_page_image($page->ID);
        $image='';
        if($photos){
            $image=wp_get_attachment_image_src( $photos[0]->ID, 'large' );
            //pick the first image on the list
        }
        //$image[0]= src, [1]= width, [2]=height

        //pick color
        // $colorList=array('85,98,112','78,205,196','199,244,100','255,107,107','196,77,88');
        $colorList=array('43,176,173','30,87,94','235,127,115','191,54,61'
                ,'30,145,138','134,160,144','233,87,85','202,66,65','190,187,93'
                ,'170,178,89','100,135,113','159,188,178','217,166,163','191,100,93','152,26,50');
        $num_color=sizeof($colorList);
        $color_choice=(rand(0,($num_color-1)*7669))%$num_color;
        $color=$colorList[$color_choice];

        echo '<li style="background-image:url('.$image[0].')">';
        echo '<a href="'.get_permalink($page->ID).'" title="">';
        echo '<div style="background-color:rgba('.$color.',0.85)">';
        echo $page->post_title;
        echo '</div>';
        echo '</a>';
        echo '</li>';
    }
}

add_action( 'display_child_page', 'child_page_menu' );
// remove gallery style
add_filter('use_default_gallery_style', '__return_false');

/* function for sponsors nav page */
/*-------------------------------------------------------------------------------------------------*/

//return a list of post of the same category
function get_category_posts($cat_name){
    $cat_id=get_cat_ID( $cat_name );
    $args = array(
    'posts_per_page'   => -1,
    'offset'           => 0,
    'category'         => $cat_id,
    'orderby'          => 'rand',
    'order'            => 'ASC',
    'include'          => '',
    'exclude'          => '',
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'post',
    'post_mime_type'   => '',
    'post_parent'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true );
    return get_posts($args);
}

function print_excerpt($post){

    $excerpt = $post->post_content;
    $charlength = 100;

    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
        if ( $excut < 0 ) {
            echo mb_substr( $subex, 0, $excut );
        } else {
            echo $subex;
        }
        //echo $subex;
        echo '[...]';
    } else {
        echo $excerpt;
    }
}

//compare tag_posts array function ( from more result to less)
function tag_posts_cmp($a, $b) {
    if (count($a) == count($b)) {
        return 0;
    }
    return (count($a) < count($b)) ? 1 : -1;
}

//for the nav-page
function show_category_menu($category){

    $posts=get_category_posts($category);
   // echo print_r($pages);
    //find all tags

    $tags_name=array();
    $tag_posts=array();
    //echo print_r($all_tags);
    foreach ($posts as $post) {
        $post_tag_list=wp_get_post_tags($post->ID);
        foreach($post_tag_list as $tag){
            if(!array_key_exists($tag->term_id, $tags_name)){
                $tags_name[$tag->term_id]=$tag->name;
                $tag_posts[$tag->term_id]=array();
            }
            array_push($tag_posts[$tag->term_id],$post);
        }
    }

    //sort tag post according to the size
    uasort($tag_posts,'tag_posts_cmp');

    foreach($tag_posts as $tag_id=>$tag_post){
        echo '<div>';
        echo '<h4>'.$tags_name[$tag_id].'</h4>';
        echo '<ul>' ;
        foreach ($tag_post as $post) {

            $image='';
            if ( has_post_thumbnail($post->ID) ){
                $image= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'thumbnail');
            }else{
                $photos=get_page_image($post->ID);
                if($photos){
                    $image=wp_get_attachment_image_src( $photos[0]->ID, 'full' );
                    //pick the first image on the list
                }
            }
            //$image[0]= src, [1]= width, [2]=height

            //pick color
            $colorList=array('43,176,173','30,87,94','235,127,115','191,54,61'
                ,'30,145,138','134,160,144','233,87,85','202,66,65','190,187,93'
                ,'170,178,89','100,135,113','159,188,178','217,166,163','191,100,93','152,26,50');

            $num_color=sizeof($colorList);
            $color_choice=(rand(0,($num_color-1)*7669))%$num_color;
            $color=$colorList[$color_choice];
            $alt = get_post_meta( get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true );

            echo '<a href="'.get_permalink($post->ID).'" title="'.$alt.'">';
            echo '<li style="background-image:url('.$image[0].')">';
            echo '<div style="background-color:rgba('.$color.',1)">';
                echo '<div>';
                    echo '<h3>'.$post->post_title.'</h3>';
                echo '</div>';
                echo '<p>';
                    echo 'discount:<br />';
                    print_excerpt($post);
                echo '</p>';
            echo '</div>';
            echo '</li>';
            echo '</a>';
        }
        echo "</ul>";
        echo '</div>';
    }
}

add_action( 'display_category_post', 'show_category_menu' );

/* function for front page backgorund*/
/*-------------------------------------------------------------------------------------------------*/
function front_page_image_src(){
    $image_page=get_page_by_title( "Front Page Images");
    if ($image_page ){
        //randomly pick an image
        $front_page_images=get_page_image($image_page->ID);
        //echo print_r($front_page_images);
        $picture_choice=rand(0,sizeof($front_page_images)-1);
        $image=wp_get_attachment_image_src( $front_page_images[$picture_choice]->ID, 'original' );
        return $image;
    }else
        return null;
}
add_action( 'front_page_image_src', 'front_page_image_src' );

?>
