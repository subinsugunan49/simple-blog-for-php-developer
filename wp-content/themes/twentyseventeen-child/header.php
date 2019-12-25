<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700|Playfair+Display:400,700" rel="stylesheet"> 
<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css">

</head>

<body <?php body_class(); ?>>
	


	<header class="header">
    	<div class="container fadeIn animate-on-load">
        	
        	<div class="header-right">
        		
                <div class="clr-mobile"></div>

                <h4>Menu .................................</h1>
				<nav class="main-nav">

                    <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'header',
                                   
                                )
                            );
                        ?>
				</nav>
            </div>
        </div>
        <div class="clr"></div>
    </header>