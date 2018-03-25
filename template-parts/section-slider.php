<?php
$k2_enable_section = get_theme_mod( 'k2_welcome_enable', true );
if ( $k2_enable_section || is_customize_preview() ) :
?>
<div id="welcome-section" class="welcome-section">

    <img src="<?php the_sub_field( 'slider_image' ); ?>">
    <div class="welcome-intro">
        
    </div><!-- welcome-intro -->
        
</div><!-- welcome-section -->
<?php endif ?>