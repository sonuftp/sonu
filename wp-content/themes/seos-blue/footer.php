<?php
/**
 * The template for displaying the footer
 */
?>
<footer>

	<details class="deklaracia">
	
		<summary>All rights reserved  &copy; <?php bloginfo('name'); ?></summary>
		
		<p><a href="http://wordpress.org/" title="<?php esc_attr_e( ' ', 'seos-blue' ); ?>"><?php printf( __( 'Powered by %s', 'seos-blue' ), 'WordPress' ); ?></a></p>
		
		<p><a title="Seos free wordpress themes" href="<?php echo esc_url(__('http://seosthemes.com/', 'seos-blue')); ?>" target="_blank">Theme by SEOS</a></p>	
	
	</details>
	   
	</div>
	
</footer>

<a href="#top"><div class="back-to-top-link"></div></a>

<?php wp_footer();?>

</body>

</html>
