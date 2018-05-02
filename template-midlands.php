<?php
/*
Template Name: Midlands
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
    	   <h2 style="color:#c3f216;margin:0;"><strong>KINGS</strong> Midlands League</h2>
    	   <p class="lead">Information &amp; standings for clubs affiliated to the Midlands League</p>
           <p style="text-align:left;">The membership of the <strong>KINGS</strong> Midlands League comprises of some of the most successful clubs in <strong>KINGS</strong> history. Loughborough Sno and Brumski have a significant number of the last Mixed titles at both Regional and National events. Predominatly based around Ackers Adventure in Birmingham, while also occasioanlly venturing to Stoke, Gloucester and Swadlincote.</p>
        </div>

        <main id="main" class="site-main" role="main">


            <?php get_template_part( 'template-parts/section-standings-midlands', 'results-page' ); ?>


        </main><!-- #main -->


    </main><!-- #main -->

<?php get_footer(); ?>
