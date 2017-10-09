<?php
/**
 * The Header template
 *
 * @package Seos-Portfolio 1.11
 * 
 */ 
 ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php if( get_theme_mod('seos_portfolio_custom_css') ) {?>
		<style type="text/css"> <?php echo get_theme_mod('seos_portfolio_custom_css'); ?></style>
	<?php } ?>
			
	<?php if ( get_theme_mod( 'shortcut_icon' ) ) : ?>
		<link rel="shortcut icon" href="<?php echo esc_url( get_theme_mod( 'shortcut_icon' ) ); ?>">	
	<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'seos-portfolio' ); ?></a>
	
	<?php  if ( is_front_page() or is_home() ) : ?>
	<?php if (!get_theme_mod( 'slider_activate' )) : ?>
	<header id="masthead" class="site-header">
		
	<?php if (get_theme_mod( 'slider_text' )) : ?>
		<p class="spf-read-more fadeInLeft">
		<a href="<?php echo get_theme_mod( 'slide_url' ); ?>"><?php echo get_theme_mod( 'slider_text' ); ?></a>
		</p>
		<?php else : ?>
		<p class="spf-read-more fadeInLeft">
			<a href="<?php echo get_theme_mod( 'slide_url' ); ?>">Read More</a>
		</p>
	<?php endif; ?>
	<?php endif; ?>
		
		<?php else : ?>

	<header id="masthead">

		<?php endif; ?>
	
		<div class="rgba">

			<div class="site-branding"  style=" background: url('<?php header_image(); ?>') no-repeat center center; height:<?php echo get_custom_header()->height; ?>px; max-width: 100%; background-size: cover; background-position: center;" >
	
				<?php  if ( is_front_page() && ! is_home() ) : ?>
					<h1 class="site-title"><a class="flip animated" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a class="flip animated" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<nav>
			
				<div class="nav-ico">
				
					<a href="#" id="menu-icon">
					
						<span class="menu-button"> </span>
						
						<span class="menu-button"> </span>
						
						<span class="menu-button"> </span>
						
					</a>
					
					<?php wp_nav_menu ( array('theme_location' => 'primary', 'container' => '' )); ?>
				
				</div>
				
			</nav><!-- #site-navigation -->
			
		</div>
			
	</header><!-- #masthead -->			
			
	<div id="content" class="site-content">