<?php

    // check if the flexible content field has rows of data
    if( have_rows('ksc_page_builder') ):
    
        // loop through the rows of data
        while ( have_rows('ksc_page_builder') ) : the_row();
        
            // Front Page Spcific Items
        
                // Front Image Layout                    
                if( get_row_layout() == 'slider_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-slider', 'builder' )?>
                    
                <!-- End: Front Image Layout -->
                
                <!-- Front Intro Layout -->
                
                <?php elseif( get_row_layout() == 'intro_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-intro', 'builder' )?>
                <!-- End: Front Intro Layout -->
                

            <?php endif; ?>
    
        <?php endwhile; ?>
    
<?php endif; ?>
        
    