<?php
/*
Template Name: Western
*/
?>
<?php
/**
 * The template for displaying the Western League page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package k2
 */

get_header(); ?>

	<main id="main" class="site-main wow fadeIn" role="main" style="background:#333333;padding:100px;">
        <div class="" style="width:100%;text-align:center;">
    	   <h2 style="color:#c3f216;margin:0;"><strong>KINGS</strong> Western League</h2>
    	   <p class="lead">Information &amp; standings for clubs affiliated to the Western League</p>
           <p style="text-align:left;">The <strong>KINGS</strong> &#91;Great&#93; Western League is the club's largest league and often overruns at regional events. Bath, Bristol, Caridff, Exeter &amp; UWE have all been previous league champions and it remains very open at every round. Rounds are held along the M4 and M5, with Pembrey, Cardiff and Gloucester all hosting events.</p>
        </div>

        <main id="main" class="site-main" role="main">


            <?php get_template_part( 'template-parts/section-standings-western', 'results-page' ); ?>


        </main><!-- #main -->


    </main><!-- #main -->

<?php get_footer(); ?>
