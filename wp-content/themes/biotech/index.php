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

<ul id="slideshow">
<li ><img  src="<?php echo get_bloginfo('template_directory');?>/img/image1.jpg"/></li>
<li ><img  src="<?php echo get_bloginfo('template_directory');?>/img/image2.jpg"/>TEST</li>
<li ><img  src="<?php echo get_bloginfo('template_directory');?>/img/image3.jpg"/></li>

</ul>

<!--
<ul id="slideshow-second">
<li><div class="slideshow-text"><h2>TEXT SAMPLE</h2></div></li>

</ul>
-->


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
  <a href="http://bryndesign.com" target="_blank" class="grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2_dark.png" alt="">
    <h1>Last Grid Item</h1>
    <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
  </a>
  <div class="right-cover"></div>
  <div class="bottom-cover"></div>
</div>

<!--Visual Grid Section End-->


        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>


        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

        <?php else : ?>


        <?php endif; ?>


    </main><!-- #main -->
</div><!-- #primary -->



<?php get_footer(); ?>
