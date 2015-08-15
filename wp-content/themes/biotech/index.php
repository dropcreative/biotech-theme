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

        <?php if ( have_posts() ) : ?>

        <?php if ( is_home() && ! is_front_page() ) : ?>
        <header>
            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
        <?php endif; ?>

<ul class="slideshow">
<li><img  src="<?php echo get_bloginfo('template_directory');?>/img/image1.jpg"/></li>

</ul>

<ul class="slideshow-second">
<li><div class="slideshow-text"><h2>TEXT SAMPLE</h2></div></li>

</ul>

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

<!--
        <ul id="slippry-demo">
            <li><a href="#slide1"><img src="<?php echo get_bloginfo('template_directory');?>/img/image1.jpg" alt="" class="active-slide"></li>
           <li><a href="#slide1"><img src="<?php echo get_bloginfo('template_directory');?>/img/image2.jpg" alt="" ></li>
          <li><a href="#slide1"><img src="<?php echo get_bloginfo('template_directory');?>/img/image3.jpg" alt=""></li>
            <li><a href="#slide1"><img src="<?php echo get_bloginfo('template_directory');?>/img/image4.jpg" alt="" ></li>
-->


            <!--
<header>
<label for="slide-1-trigger">Slide 1</label>
<label for="slide-2-trigger">Slide 2</label>
<label for="slide-3-trigger">Slide 3</label>
<label for="slide-4-trigger">Slide 4</label>
</header>
-->
            <!--
<input id="slide-1-trigger" class="slide-check" type="radio" name="slides"  checked>
<section class="slide slide-one" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/img/image1.jpg')">
<h1>Headline One</h1>
</section>
<input id="slide-2-trigger" class="slide-check" type="radio" name="slides">
<section class="slide slide-two" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/img/image2.jpg')" >
<h1>Headline Two</h1>
</section>
<input id="slide-3-trigger" class="slide-check" type="radio" name="slides">
<section class="slide slide-three" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/img/image3.jpg')" >
<h1>Headline 3</h1>
</section>
<input id="slide-4-trigger" class="slide-check" type="radio" name="slides">
<section class="slide slide-four" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/img/image4.jpg')" >
<h1>Headline four</h1>
</section>
-->

<!--        </ul>-->


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

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
