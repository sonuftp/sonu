<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Seos_Portfolio
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses seos_portfolio_header_style()
 */
function seos_portfolio_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'seos_portfolio_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1300,
		'height'                 => 140,
		'flex-height'            => false,
		'wp-head-callback'       => 'seos_portfolio_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'seos_portfolio_custom_header_setup' );

		register_default_headers( array(
			'img' => array(
			'url' => get_template_directory_uri() . '/images/header.jpg',
			'thumbnail_url' => get_template_directory_uri() . '/images/header.jpg',
			'description' => _x( 'Header Img', 'header image', 'seos-portfolio' )),
		));



if ( ! function_exists( 'seos_portfolio_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see seos_portfolio_custom_header_setup().
 */
function seos_portfolio_header_style() {
	$header_text_color = get_header_textcolor();

	/*
	 * If no custom options for text are set, let's bail.
	 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: HEADER_TEXTCOLOR.
	 */
	if ( HEADER_TEXTCOLOR === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;
