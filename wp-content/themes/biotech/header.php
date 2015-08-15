<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biotech
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'biotech' ); ?></a>

            <div class="social-container">
                <div class="half">
                    <a> <i class="ion-stats-bars"></i></a>
                    <a> <i class="ion-happy-outline"></i></a>
                </div>
                <div class="second-half">
                    <a>  <i class="ion-social-youtube-outline"></i></a>
                    <a> <i class="ion-social-linkedin-outline"></i></a>
                    <a>  <i class="ion-social-twitter-outline"></i></a>
                </div>

            </div>

            <header class="main-navigation" role="banner">
                <div class="navigation-wrapper">
                    <div class="nav-logo">
                        <a href="#" class="logo">
                            <img src="<?php echo get_bloginfo('template_directory');?>/img/logo.png" alt="Logo Image">
                        </a>
                    </div>
                    <div class="mobile-nav-wrapper">
                    <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">Menu</a>
                    </div>
                    <nav role="navigation">
                        <ul id="js-navigation-menu" class="nav">
                            </li>
                        <li class="nav-link"><a href="javascript:void(0)">Contact</a>
                        </li>
                        <li class="nav-link hover-menu">
                            <a href="javascript:void(0)">More</a>
                            <ul class="submenu">
                                <li class="hover-menu">
                                    <a href="javascript:void(0)" class="hover-menu-item">Item</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-link hover-menu"><a href="javascript:void(0)">Testimonials</a>
                            <ul class="submenu">
                                <li class="hover-menu">
                                    <a href="javascript:void(0)" class="hover-menu-item">Meip In-Specie Distribution</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-link hover-menu">
                            <a href="javascript:void(0)">Home</a>
                            <ul class="submenu">
                                <li class="hover-menu">
                                    <a href="javascript:void(0)" class="hover-menu-item">Item</a>
                                </li>
                            </ul>

                        </ul>
                    </nav>
                </div>
            </header>


        <!--
<nav id="site-navigation" class="main-navigation" role="navigation">
<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'biotech' ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav>
-->
        <!-- #site-navigation -->

        <!--
<div class="site-branding">
<?php if ( is_front_page() && is_home() ) : ?>
<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<?php else : ?>
<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
<?php endif; ?>
<p class="site-description"><?php bloginfo( 'description' ); ?></p>
</div>
-->
        <!-- .site-branding -->

        </header><!-- #masthead -->

    <div id="content" class="site-content">
