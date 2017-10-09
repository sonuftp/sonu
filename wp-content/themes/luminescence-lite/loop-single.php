<?php
/**
 * The loop for the single full posts
 *
 * @file           loop-single.php
 * @package        Luminescence-Lite 
 * @author         Styled Themes 
 * @copyright      2013 Styledthemes.com
 * @license        license.txt
 * @version        Release: 1.2.0
 */
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', get_post_format() ); ?>
	<?php luminescence_lite_post_nav(); ?>
	<?php comments_template(); ?>

<?php endwhile; ?>