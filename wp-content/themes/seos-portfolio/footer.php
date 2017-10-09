<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seos_Portfolio
 */

?>

	</div><!-- #content -->
		
	<footer id="colophon" class="site-footer" role="contentinfo">	
			<details class="site-infos">
				<summary><?php _e('All rights reserved', 'seos-portfolio'); ?> &copy; <?php bloginfo('name'); ?></summary>
				<p><a href="http://wordpress.org/"><?php printf( __( 'Powered by %s', 'seos-portfolio' ), 'WordPress' ); ?></a></p>
				<p><a href="<?php echo esc_url(__('http://seosthemes.com/', 'seos-portfolio')); ?>" target="_blank"><?php _e('Theme by SEOS', 'seos-portfolio'); ?></a></p>	
			</details> <!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php seos_portfolio_back_to_top(); ?>

<?php wp_footer(); ?>

</body>
</html>
