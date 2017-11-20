<?php
/*
Template Name: Southern
*/
?>
<?php
/**
 * The template for displaying the Midlands League page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package k2
 */

get_header(); ?>

	<main id="main" class="site-main wow fadeIn" role="main" style="background:#333333;padding:100px;">
        <div class="" style="width:100%;text-align:center;">
    	   <h2 style="color:#c3f216;margin:0;"><strong>KINGS</strong> Southern League</h2>
    	   <p class="lead">Information &amp; standings for clubs affiliated to the Southern League</p>
           <p style="text-align:left;">The membership of the <strong>KINGS</strong> Southern League is made up by clubs from the South of England and London. This includes Kings College London, where <strong>KINGS</strong> was founded. The Southern League races at Brentwood Park Ski &amp; Snowboard Centre and Southampton Ski Centre.</p>
        </div>

        <main id="main" class="site-main" role="main">


            <?php get_template_part( 'template-parts/section-standings-southern', 'results-page' ); ?>


        </main><!-- #main -->


    </main><!-- #main -->

<?php get_footer(); ?>
