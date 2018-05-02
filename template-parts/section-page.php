<?php

    // check if the flexible content field has rows of data
    if( have_rows('ksc_page_builder') ):
    
        // loop through the rows of data
        while ( have_rows('ksc_page_builder') ) : the_row();
        
            // Front Page Spcific Items
        
                // Front Slider Layout                    
                if( get_row_layout() == 'slider_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-slider', 'builder' )?>
                    
                <!-- End: Slider Layout -->
                
                <!-- Intro Layout -->
                
                <?php elseif( get_row_layout() == 'intro_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-intro', 'builder' )?>
                    
                <!-- End: Intro Layout -->

                <!-- Image Layout -->
                
                <?php elseif( get_row_layout() == 'break_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-break', 'builder' )?>

                <!-- End: Image Layout -->

                <!-- Image Layout -->
                
                <?php elseif( get_row_layout() == 'qualified_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-qualified', 'builder' )?>

                <!-- End: Image Layout -->

                <!-- general_purpose -->

                <?php elseif( get_row_layout() == 'general_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-general', 'builder' )?>

                <!-- general_purpose -->

                <!-- general_purpose -->

                <?php elseif( get_row_layout() == 'results_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-individuals', 'builder' )?>

                <!-- general_purpose -->
                

            <?php endif; ?>
    
        <?php endwhile; ?>
    
<?php endif; ?>
        
    