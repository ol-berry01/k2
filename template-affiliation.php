<?php
/*
Template Name: Affiliation
*/
?>
<?php
/**
 * The template for displaying a Afiiliation form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package k2
 */

get_header(); ?>

	<main id="main" class="site-main" role="main" style="background:#333333;padding:100px;">
        <div class="" style="width:100%;text-align:center;">
    	   <h2 style="color:#c3f216;margin:0;"><strong>KINGS</strong> Affiliation Form</h2>
    	   <p class="lead">Register with us</p>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php echo do_shortcode( '[contact-form-7 id="35" title="Affiliation"]' ); ?>
                </div>
                <div class="col-sm-4">
                    <h3 style="color:#c3f216;margin-top:1em;"><strong>KINGS</strong> Rounds</h3>
                    <p class="lead">2017 - 2018 Season</p>
                    <ul style="list-style:none;-webkit-padding-start: 5px;">
                        <li><span style="color:#c3f216;margin-top:0.5em;">Round 1</span> - 21st October</li>
                        <li><span style="color:#c3f216;margin-top:0.5em;">Round 2</span> - 18th November</li>
                        <li><span style="color:#c3f216;margin-top:0.5em;">Round 3</span> - 2nd December</li>
                        <li><span style="color:#c3f216;margin-top:0.5em;">Round 4</span> - 10th January</li>
                        <li><span style="color:#c3f216;margin-top:0.5em;">Finals</span> - 28th April</li>
                    </ul>
                </div>
            </div>
        </div>


    </main><!-- #main -->

<?php get_footer(); ?>
