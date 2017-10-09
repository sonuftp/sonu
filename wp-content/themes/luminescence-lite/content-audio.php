<?php
/**
 * Displays audio post format content
 *
 * @file           content-audio.php
 * @package        Luminescence-Lite 
 * @author         Styled Themes 
 * @copyright      2013 Styledthemes.com
 * @license        license.txt
 * @version        Release: 1.2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?>  <?php edit_post_link( __( '[ Edit ]', 'luminescence-lite' ), '<span class="edit-link">', '</span>' ); ?>
        </h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>  <?php edit_post_link( __( '[ Edit ]', 'luminescence-lite' ), '<span class="edit-link">', '</span>' ); ?>
		</h1>
		<?php endif; // is_single() ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="audio-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'luminescence-lite' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'luminescence-lite' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		</div><!-- .audio-content -->
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
<div class="entry-shadow">
	<img src="<?php echo get_template_directory_uri() ; ?>/images/post-shadow.png" alt="spacer"/>
</div>