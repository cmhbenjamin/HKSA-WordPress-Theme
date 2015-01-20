<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package hksawp
 */
?><!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
/*
* Print the <title> tag based on what is being viewed.
*/
global $page, $paged;

wp_title( '|', true, 'right' );

// Add the blog name.
bloginfo( 'name' );

// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
echo " | $site_description";

?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
     <div id="masthead" class="front-header" role="banner">

        <div class="front-title">
            <div>
            <nav role="navigation" class="site-navigation main-navigation">
                <h1 class="assistive-text"><?php _e( 'Menu', 'shape' ); ?></h1>
                <div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', 'shape' ); ?></a></div>
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) );
                // change “primary” in ‘theme_location’ => ‘primary’
                //to match the name of the additional menu).?>
            </nav><!-- .site-navigation .main-navigation -->
            </div>
            <div>
                <div id="front-logo" ></div>
                <!-- <h1>HK<br />SA</h1> -->
            </div>
        </div>
     </div><!-- #masthead .site-header -->
</div>
</body>
<!--<div id="main" class="front-main">-->

