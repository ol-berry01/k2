<!-- About Section -->
<div id="about-section" class="about-section wow fadeInUp">
	
	<div class="" style="width:100%;margin-top:75px;text-align:center;">
    	<h2 style="color:#c3f216;margin:0;">New <strong>KINGS</strong> Website</h2>
    	<p class="lead">The UK's Largest Ski &amp; Snowboard Racing League</p>
    </div>
	
    <div class="about-wrap hidden-sm hidden-xs wow fadeInLeft">
    	
        <img class="about-mockup" src="/wp-content/themes/k2/images/kings-about-logo.jpg" alt="">
    </div>
    
    <div class="about-services">

    	<?php

			$widget_args = array(
				'title' => 'New Website!',
				'text' => 'Update date and mobile friendly so you can view upcoming fixtures league standings more easily on your mobile devices.', 
				);
			the_widget( 'k2_Service', $widget_args, array( 'before_widget' => '', 'after_widget' => '' ) );

			$widget_args = array(
				'title' => 'Smarter Features',
				'text' => "Register your teams online before the event, book your members equipment hire and send messages directly to your league head.",
				);
			the_widget( 'k2_Service', $widget_args, array( 'before_widget' => '', 'after_widget' => '' ) );

			$widget_args = array(
				'title' => 'Get More From KINGS',
				'text' => "We're working with new partners to offer exclusive deals to our members, all will be exclusively available via our new website.",
				);
			the_widget( 'k2_Service', $widget_args, array( 'before_widget' => '', 'after_widget' => '' ) );

			$widget_args = array(
				'title' => 'Race Tech',
				'text' => 'Current developments mean that there will be even more information available to racers on the day, more news on these updates soon!',
				);
			the_widget( 'k2_Service', $widget_args, array( 'before_widget' => '', 'after_widget' => '' ) );

		?>
       
        <div class="clearfix"></div>
		
		<?php $k2_about_link_title = get_theme_mod( 'k2_about_link_title', esc_html__( 'Learn More', 'k2' ) ); ?>
		<?php if ( !empty( $k2_about_link_title ) || is_customize_preview() ) { ?>
        <a href="<?php echo esc_url( get_theme_mod( 'k2_about_link_url', '#' ) ); ?>" class="btn-ql alternative-white wow fadeIn" data-wow-delay="1400ms">More About the Club</a>
        <?php } ?>

    </div>
    
    
</div><!-- End: About Section -->
