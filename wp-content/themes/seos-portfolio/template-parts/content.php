<?php
/*
 * Template part for displaying posts.
 *
 */
?>
<?php if ( is_front_page() && is_home() ) : ?>

<div class="seos-home">
	<div class="animateblock top">
		<?php endif; ?>	
						
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php
					if ( is_single() ) {
						the_title( '<h1 class="entry-title">', '</h1>' );
					} else {
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					}
				 ?>
				<?php if ( !is_front_page() && !is_home() ) : ?>	
					<?php if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php seos_portfolio_posted_on(); ?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				<?php endif; ?>
				
			</header><!-- .entry-header -->
			
			<?php if ( is_front_page() && is_home() ) : ?>
					
			<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><div class="seos-center"><?php the_post_thumbnail(); ?></div></a>
			
			<div class="entry-content">
				<?php
					the_content( sprintf(
						wp_kses( __( 'Continue reading %s ', 'seos-portfolio' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'seos-portfolio' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			
			<footer class="entry-footer">
				<?php seos_portfolio_entry_footer(); ?>
			</footer><!-- .entry-footer -->
					<?php endif; ?>
					
			<?php if ( !is_front_page() && !is_home() ) : ?>		
			<div class="entry-content">
				<?php
					the_content( sprintf(
						wp_kses( __( 'Continue reading %s ', 'seos-portfolio' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'seos-portfolio' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			
			<footer class="entry-footer">
				<?php seos_portfolio_entry_footer(); ?>
			</footer><!-- .entry-footer -->
				<?php endif; ?>
				
		</article><!-- #post-## -->
		
		<?php if ( is_front_page() && is_home() ) : ?>
	</div>
</div>	
	<?php endif; ?>