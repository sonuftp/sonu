<?php 

/**
 * Widget Positions
 *
 * @file           widgets.php
 * @package        Luminescence-Lite
 * @author         Styled Themes 
 * @copyright      2013 Styledthemes.com
 * @license        license.txt
 * @version        Release: 1.2.0
 */

 
/**
 * Registers our main widget area and the front page widget areas.
 */
 
function luminescence_lite_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Blog Sidebar', 'luminescence-lite' ),
		'id' => 'blogsidebar',
		'description' => __( 'This is the sidebar column that appears on the blog but not the pages.', 'luminescence-lite' ),
		'before_widget' => '<div id="%1$s" class="module %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="sidebar-heading">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar', 'luminescence-lite' ),
		'id' => 'pagesidebar',
		'description' => __( 'This is the sidebar column that appears on pages, but not part of the blog', 'luminescence-lite' ),
		'before_widget' => '<div id="%1$s" class="module %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="sidebar-heading">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Banner', 'luminescence-lite' ),
		'id' => 'banner',
		'description' => __( 'This is a showcase banner for images or media sliders that can display on your pages.', 'luminescence-lite' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );
	register_sidebar( array(
		'name' => __( 'Bottom 1', 'luminescence-lite' ),
		'id' => 'bottom1',
		'description' => __( 'This is the first bottom widget position located in a coloured background area just above the footer.', 'luminescence-lite' ),
		'before_widget' => '<div id="%1$s" class="module %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bottom 2', 'luminescence-lite' ),
		'id' => 'bottom2',
		'description' => __( 'This is the second bottom widget position located in a coloured background area just above the footer.', 'luminescence-lite' ),
		'before_widget' => '<div id="%1$s" class="module %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bottom 3', 'luminescence-lite' ),
		'id' => 'bottom3',
		'description' => __( 'This is the third bottom widget position located in a coloured background area just above the footer.', 'luminescence-lite' ),
		'before_widget' => '<div id="%1$s" class="module %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bottom 4', 'luminescence-lite' ),
		'id' => 'bottom4',
		'description' => __( 'This is the fourth bottom widget position located in a coloured background area just above the footer.', 'luminescence-lite' ),
		'before_widget' => '<div id="%1$s" class="module %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer', 'luminescence-lite' ),
		'id' => 'footer',
		'description' => __( 'This is a footer widget position at the very bottom of the page and outside the content container.', 'luminescence-lite' ),
		'before_widget' => '<div id="%1$s" class="module %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-heading">',
		'after_title' => '</h3>',
	) );	

}
add_action( 'widgets_init', 'luminescence_lite_widgets_init' );

/**
 * Count the number of widgets to enable resizable widgets
 */

// lets setup the bottom group 
function luminescence_lite_bottomgroup() {
	$count = 0;
	if ( is_active_sidebar( 'bottom1' ) )
		$count++;
	if ( is_active_sidebar( 'bottom2' ) )
		$count++;
	if ( is_active_sidebar( 'bottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'bottom4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'span12';
			break;
		case '2':
			$class = 'span6';
			break;
		case '3':
			$class = 'span4';
			break;
		case '4':
			$class = 'span3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}