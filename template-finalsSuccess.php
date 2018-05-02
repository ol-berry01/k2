<?php
/*
Template Name: Finals Success
*/
?>
<?php
/**
 * The template for displaying a Finals Registration form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package k2
 */

get_header(); ?>

	<main id="main" class="site-main" role="main" style="background:#333333;padding:20% 0;">
        <div class="" style="width:100%;text-align:center;">
    	   <h2 style="color:#c3f216;margin:0;"><strong>KINGS</strong> Finals Registration Successful</h2>
    	   <p class="lead">We've recievd your registration for Finals 2018.</p>
        </div>
        
        <div class="container">
            <div class="row wow fadeIn">
                <div class="col-sm-10 col-sm-offset-1">
                    <p>Your registration form has been successfully submitted to <strong>KINGS</strong> Ski Club for Finals 2018. You can keep up to date with all the news and updates for Finals via our Facebook page, Twitter &amp; Instagram feeds.</p>
                    
                    <p style="text-align:center;">
                        <a class="lead" href="https://www.facebook.com/KingsSkiClub/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
                        <a class="lead" href="https://twitter.com/kingsskiclub" target="_blank" style="margin:0 100px;"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                        <a class="lead" href="https://www.instagram.com/kingsski/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </p>
                    <div style="text-align:center;">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-kings">Return Home <i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.4em;position: relative;top: 0.06em;left: 0.1em;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-wrap hidden-sm hidden-xs wow fadeInLeft">


        </div>


    </main><!-- #main -->

<?php get_footer(); ?>
