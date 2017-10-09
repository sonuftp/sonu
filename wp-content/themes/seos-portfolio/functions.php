<?php
/**
 * Seos Portfolio functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Seos_Portfolio
 */

/*********************************** Basic ************************************/
 
if ( ! function_exists( 'seos_portfolio_setup' ) ) :

function seos_portfolio_setup() {

	load_theme_textdomain( 'seos-portfolio', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	
	add_theme_support( 'woocommerce' );
			
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'seos-portfolio' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'seos_portfolio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => get_template_directory_uri() . '/images/background-image.png'
	) ) );
	
	function seos_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'seos_portfolio_content_width', 640 );
	}
	
	function seos_portfolio_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'seos-portfolio' ),
			'id'            => 'sidebar-1',
			'description'   => ' ',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
			
	}

	add_action( 'widgets_init', 'seos_portfolio_widgets_init' );

    $font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Lato:300,400,700' );
    add_editor_style( $font_url );
	
}
endif;
add_action( 'after_setup_theme', 'seos_portfolio_setup' );

/********************************** Include *************************************/

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/back-to-top.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer/customizer.php';
require get_template_directory() . '/inc/jetpack.php';
require get_template_directory() . '/css/home-page-image.php';

/******************************* Enqueue Scripts ****************************************/

function seos_portfolio_scripts() {

	wp_enqueue_script( 'seos-magazine-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'seos-magazine-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_style( 'seos_fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );	
	
	wp_enqueue_style( 'font-oswald', '//fonts.googleapis.com/css?family=Oswald:400,300,700', false, 1.0, 'screen' );
	
	wp_enqueue_style( 'font-Lobster', '//fonts.googleapis.com/css?family=Lobster', false, 1.0, 'screen' );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
    wp_enqueue_style( 'seos_bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	
	wp_enqueue_style( 'seos_style-css', get_stylesheet_uri() );
	
	wp_enqueue_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'seos_portfolio_scripts' );

/***********************************************************************************
 * Seos Portfolio Buy
***********************************************************************************/

		function seos_portfolio_support($wp_customize){
			class Seos_Portfolio_Customize extends WP_Customize_Control {
				public function render_content() { ?>
				<div class="seos_info"> 
					<button class="button media-button button-primary button-large media-button-select">
						<a href="<?php echo esc_url( 'http://seosthemes.com/seos-portfolio/' ); ?>" title="<?php esc_attr_e( 'Seos Portfolio Buy', 'seos-portfolio' ); ?>" target="_blank">
						<?php _e( 'Seos Portfolio how to use', 'seos-portfolio' ); ?>
						</a>
					</button>
				</div>
				<?php
				}
			}
		}
		add_action('customize_register', 'seos_portfolio_support');

		function customize_styles_seos_poerfolio( $input ) { ?>
			<style type="text/css">
				#customize-theme-controls #accordion-section-seos_portfolio_buy_section .accordion-section-title,
				#customize-theme-controls #accordion-section-seos_portfolio_buy_section > .accordion-section-title {
					background: #CE0000;
					color: #FFFFFF;
				}

				.seos_info button a {
					color: #FFFFFF;
				}	
			</style>
		<?php }
		
		add_action( 'customize_controls_print_styles', 'customize_styles_seos_poerfolio');

		if ( ! function_exists( 'seos_portfolio_buy' ) ) :
			function seos_portfolio_buy( $wp_customize ) {
			$wp_customize->add_section( 'seos_portfolio_buy_section', array(
				'title'			=> __('Seos Portfolio Premium', 'seos-portfolio'),
				'description'	=> __('	Learn more about Seos Portfolio Premium. ','seos-portfolio'),
				'priority'		=> 1,
			));
			$wp_customize->add_setting( 'seos_portfolio_setting', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			));
			$wp_customize->add_control(
				new Seos_Portfolio_Customize(
					$wp_customize,'seos_portfolio_setting', array(
						'label'		=> __('Seos Portfolio Premium', 'seos-portfolio'),
						'section'	=> 'seos_portfolio_buy_section',
						'settings'	=> 'seos_portfolio_setting',
					)
				)
			);
		}
		endif;
		 
		add_action('customize_register', 'seos_portfolio_buy');