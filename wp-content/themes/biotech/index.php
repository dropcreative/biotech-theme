<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package biotech
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

<!--
        <?php if ( have_posts() ) : ?>

        <?php if ( is_home() && ! is_front_page() ) : ?>
        <header>
            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
        <?php endif; ?>
-->

<ul class="slideshow">
<li><img  src="<?php echo get_bloginfo('template_directory');?>/img/image1.jpg"/></li>

</ul>

<ul class="slideshow-second">
<li><div class="slideshow-text"><h2>TEXT SAMPLE</h2></div></li>

</ul>


<!--Visual Grid Section Start-->
<div class="grid-items-lines">
  <a href="javascript:void(0)" class="grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1_dark.png" alt="">
    <h1>Grid Item</h1>
    <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
  </a>
  <a href="javascript:void(0)" class="grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3_dark.png" alt="">
    <h1>Another Item</h1>
    <p>Lorem ipsum consectetur dolor sit amet, consectetur adipisicing elit.</p>
  </a>
  <a href="javascript:void(0)" class="grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2_dark.png" alt="">
    <h1>Another Grid Item</h1>
    <p>Lorem ipsum dolor sit amet, elit.</p>
  </a>
  <a href="javascript:void(0)" class="grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2_dark.png" alt="">
    <h1>Grid Item</h1>
    <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
  </a>
  <a href="javascript:void(0)" class="grid-item grid-item-big">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2_dark.png" alt="">
    <h1>Wider Grid Item</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, illum.</p>
  </a>
  <a href="javascript:void(0)" class="grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3_dark.png" alt="">
    <h1>A Grid Item</h1>
    <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
  </a>
  <a href="javascript:void(0)" class="grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1_dark.png" alt="">
    <h1>Item</h1>
    <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
  </a>
  <a href="javascript:void(0)" class="grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2_dark.png" alt="">
    <h1>Last Grid Item</h1>
    <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
  </a>
  <div class="right-cover"></div>
  <div class="bottom-cover"></div>
</div>

<!--Visual Grid Section End-->






<!--
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <?php

/*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
get_template_part( 'template-parts/content', get_post_format() );
        ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

        <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>
-->

    </main><!-- #main -->
</div><!-- #primary -->

<!--<?php get_sidebar(); ?>-->

<?php get_footer(); ?>
