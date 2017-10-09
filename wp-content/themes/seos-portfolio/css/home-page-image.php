<?php
function seos_portfolio_home_image () { ?>

<style> 
.site-header {
    background: url('<?php  if (get_theme_mod( 'slider_img' )) { echo esc_url((get_theme_mod( 'slider_img' ))); }else { echo get_template_directory_uri() . '/images/header.jpg';} ?>') no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
    height: 100%;
  	width: 100%;
	font-family: "Lobster", cursive;
	color: #FFFFFF;
	text-align: center;
}
</style>
<?php
}

add_action('wp_head','seos_portfolio_home_image');