<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package k2
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- WP_Head -->
<?php wp_head(); ?>
<!-- End WP_Head -->

<!-- Google Verification -->
<meta name="google-site-verification" content="bbkaiVB5obylUH25xJlblxEm2NEqiSPnpF9yHfmaP2c" />
<!-- End: Google Verification -->
</head>

<body>
    
	
	<!-- Header -->
	
	<header class="site-header" role="banner">
		
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">
			
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="logo_container col-xs-2">
                		    <a href="http://kingsski.club" style="text-decoration:none;">
                                <img style="max-height:35px;width:auto;" src="/wp-content/themes/k2/images/kings-header-logo.png">
                                <div><small style="color:#c3f216;"><strong>KINGS</strong> SKI CLUB</small></div>
                            </a>
                        </div><!-- /logo_container -->
					<div class="col-xs-10" style="text-align:right;">
	                	<div class="collapse navbar-collapse" id="ql_nav_collapse">
	                        <nav id="jqueryslidemenu" class="jqueryslidemenu navbar " role="navigation">
	                            <?php
	                            if ( is_front_page() ) {
	                                $menu_id = 'front-page';
	                            }else{
	                                $menu_id = 'primary';
	                            }
	                            wp_nav_menu( array(                     
	                                'theme_location'  => $menu_id,
	                                'menu_id' => 'primary-menu',
	                                'depth'             => 3,
	                                'menu_class'        => 'nav',
	                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                                'walker'            => new wp_bootstrap_navwalker()
	                            ));
	                            ?>
	                        </nav>
	                    </div><!-- /ql_nav_collapse -->
	                </div><!-- /col-md-7 -->
				</div>
			</div>
		
		</div>
	</header>
	
	<!-- End: Header -->
	
	<div class="clearfix"></div>
    
    <?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
<!--
    <div id="container" class="container">
        <div class="row">
-->
    <?php endif; ?>