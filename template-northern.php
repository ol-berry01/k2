<?php
/*
Template Name: Northern
*/
?>
<?php
/**
 * The template for displaying the Northern League page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package k2
 */

get_header(); ?>

	<main id="main" class="site-main wow fadeIn" role="main" style="background:#333333;padding:100px;">
        <div class="" style="width:100%;text-align:center;">
    	   <h2 style="color:#c3f216;margin:0;"><strong>KINGS</strong> Northern League</h2>
    	   <p class="lead">Information &amp; standings for clubs affiliated to the Northern League</p>
           <p style="text-align:left;">The <strong>KINGS</strong> Northern League has some of the club's most enthusiatic, vocal &amp; competitive clubs in <strong>KINGS</strong>. Newcastle, SKUM, Leeds and Sheffield have some of the largest memberships and bring that presence to all events. Rossendale host's the majority of <strong>KINGS</strong> Northern League events, with a visit up to Silksworth (Sunderland) is also on the calendar.</p>
        </div>

        <main id="main" class="site-main" role="main">


            <?php get_template_part( 'template-parts/section-standings-northern', 'results-page' ); ?>


        </main><!-- #main -->


    </main><!-- #main -->

<?php get_footer(); ?>
