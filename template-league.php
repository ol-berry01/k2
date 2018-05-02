<?php
/*
Template Name: League
?>
<?php
*/
/**
 * The template for displaying a League page, including description events and league standings.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package k2
 */

get_header(); ?>

	<main id="main" class="site-main wow fadeIn" role="main" style="background:#333333;padding:100px;">

        <?php get_template_part( 'template-parts/section-league-description', 'league' ); ?>

        
        <?php get_template_part( 'template-parts/section-league-events', 'league' ); ?>
        
        
        <?php get_template_part( 'template-parts/section-league-standings', 'league' ); ?>
        
    <main id="main" class="site-main" role="main">
    
<?php get_footer(); ?>