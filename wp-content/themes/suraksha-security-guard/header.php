<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage suraksha-security-guard
 * @since 1.0
 * @version 0.3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'suraksha-security-guard' ) ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<div class="top-header">
	<div class="container">		
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="social-icons">
					<?php if( get_theme_mod( 'suraksha_security_guard_facebook_url' ) != '') { ?>
		              <a href="<?php echo esc_url( get_theme_mod( 'suraksha_security_guard_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
		            <?php } ?>
		            <?php if( get_theme_mod( 'suraksha_security_guard_twitter_url' ) != '') { ?>
		              <a href="<?php echo esc_url( get_theme_mod( 'suraksha_security_guard_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
		            <?php } ?>
		            <?php if( get_theme_mod( 'suraksha_security_guard_insta_url' ) != '') { ?>
		              <a href="<?php echo esc_url( get_theme_mod( 'suraksha_security_guard_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
		            <?php } ?>
		            <?php if( get_theme_mod( 'suraksha_security_guard_pinterest_url' ) != '') { ?>
		              <a href="<?php echo esc_url( get_theme_mod( 'suraksha_security_guard_pinterest_url','' ) ); ?>"><i class="fab fa-pinterest-p"></i></a>
		            <?php } ?>
		            <?php if( get_theme_mod( 'suraksha_security_guard_whatsapp_url' ) != '') { ?>
		              <a href="<?php echo esc_url( get_theme_mod( 'suraksha_security_guard_whatsapp_url','' ) ); ?>"><i class="fab fa-whatsapp"></i></a>
		            <?php } ?>
		            <?php if( get_theme_mod( 'suraksha_security_guard_linkedin_url' ) != '') { ?>
		              <a href="<?php echo esc_url( get_theme_mod( 'suraksha_security_guard_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
		            <?php } ?>		     	            
				</div>		
			</div>
			<div class="col-lg-6 col-md-6">				
				<div class="top">
					<?php if( get_theme_mod( 'suraksha_security_guard_location' ) != '') { ?>
				        <i class="fas fa-phone"></i><span class="col-org"><?php echo esc_html( get_theme_mod('suraksha_security_guard_location',__('0123456789','suraksha-security-guard')) ); ?></span>
				    <?php } ?>
					<?php if( get_theme_mod( 'suraksha_security_guard_mail' ) != '') { ?>	
				        <i class="fas fa-envelope"></i><span class="col-org"><?php echo esc_html( get_theme_mod('suraksha_security_guard_mail',__('support@securitygaurd.com','suraksha-security-guard')) ); ?></span>
				    <?php } ?>			   		
				</div>					
			</div>
		</div>							
	</div>
</div>

<div id="header">
	<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','suraksha-security-guard'); ?></a></div>    
    <div class="menu-section">
		<div class="container">
			<div class="main-top">
				<div class="row padd0">
					<div class="col-lg-3 col-md-3">
						<div class="logo">
					        <?php if( has_custom_logo() ){ suraksha_security_guard_the_custom_logo();
					           }else{ ?>
					          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					          <?php $description = get_bloginfo( 'description', 'display' );
					          if ( $description || is_customize_preview() ) : ?> 
					            <p class="site-description"><?php echo esc_html($description); ?></p>       
					        <?php endif; }?>
					    </div>
					</div>
					<div class="nav col-lg-8 col-md-8">
						<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>	
					</div>
					<div class="search-box col-lg-1 col-md-1">
          				<span><i class="fas fa-search"></i></span>
        			</div>        			
			     	<div class="clearfix"></div>   
				</div>
				<div class="serach_outer">
			        <div class="closepop"><i class="far fa-window-close"></i></div>
			        <div class="serach_inner">
			          <?php get_search_form(); ?>
			        </div>
		      	</div>   	
			</div>
		</div>
	</div>
</div>