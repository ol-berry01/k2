<!-- About Section -->
<div id="about-section" class="about-section wow fadeInUp">
	
	<div class="" style="width:100%;margin-top:75px;text-align:center;">
    	<h2 style="color:#c3f216;margin:0;"><?php the_sub_field( 'about_header' ); ?></h2>
    	<p class="lead"><?php the_sub_field( 'about_subHeader' ); ?></p>
    </div>
	
    <div class="about-wrap hidden-sm hidden-xs wow fadeInLeft">
        <img class="about-mockup" src="<?php the_sub_field( 'about_image' ); ?>" alt="">
    </div>
    
    <div class="about-services">
        <?php if( have_rows('about_feature') ): ?>
            <?php while( have_rows( 'about_feature' ) ): the_row(); ?>
                <div class="col-md-4 col-sm-6 service wow fadeIn">

                    <div class="service-text">
                        <h4><?php the_sub_field( 'aboutFeature_title' ); ?></h4>
                        <p><?php the_sub_field( 'aboutFeature_content' ); ?></p>
                        <!-- <a href="<i class="fa fa-angle-right"></i></a> -->
                    </div>
                    <div class="clearfix"></div>
                

                </div> 
            <?php endwhile; ?>
        <?php endif; ?>   
    </div>
       
    <div class="clearfix"></div>
    
    
</div><!-- End: About Section -->