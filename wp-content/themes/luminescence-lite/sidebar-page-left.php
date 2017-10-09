<?php
/**
 * Left Column for pages
 *
 * @file           sidebar-page-left.php
 * @package        Luminescence-Lite 
 * @author         Styled Themes 
 * @copyright      2013 Styledthemes.com
 * @license        license.txt
 * @version        Release: 1.2.0
 */
?>
<aside id="left-column" class="span4 equal" style="background-color: <?php echo get_theme_mod( 'sidebar_bg', '#1c2123' ); ?>; color: <?php echo get_theme_mod( 'sidebar_text', '#dbdbdb' ); ?>;">	
	<div id="equal-well" style="background-color: <?php echo get_theme_mod( 'sidebar_inner', '#23292a' ); ?>;">
    
		<?php get_template_part( 'partials/main-logo' ); ?>
			
		<?php get_template_part( 'partials/vertical-menu' ); ?>
		
		<?php if (!dynamic_sidebar('pagesidebar')) : ?>
			<div class="widget-wrapper">
				<h3 class="sidebar-heading">Page Left Column</h3>   
				<p>This is default content to showcase a page with a left sidebar column. Once you publish your first widget to this position, this sample content will be replaced by your widget. </p>
			</div>
		<?php endif; ?>
				
	</div>
	
</aside>		