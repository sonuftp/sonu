<?php

/**
 * Search Form template
 *
 * @file           searchform.php
 * @package        Luminescence-Lite 
 * @author         Styled Themes 
 * @copyright      2013 Styledthemes.com
 * @license        license.txt
 * @version        Release: 1.2.0
 */
 
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" name="s" id="lum-search" /><input type="submit" class="submit" name="submit" id="lum-searchsubmit" value="<?php esc_attr_e('Search', 'luminescence-lite'); ?>"  />
	</form>