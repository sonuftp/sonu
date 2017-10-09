<?php

/**
 * Blog intro content
 *
 * @file           content.php
 * @package        Luminescence-Lite 
 * @author         Styled Themes 
 * @copyright      2013 Styledthemes.com
 * @license        license.txt
 * @version        Release: 1.1.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
    
		<?php if ( has_post_thumbnail() && ! post_password_required() ) {           
            echo '<div class="entry-thumbnail clearfix">' . do_action ('luminescence_lite_show_feat', 'luminescence_lite_show_feat');
            echo '<div class="entry-date-box"><span class="entry-month">';
            echo get_the_time(__('M', 'luminescence-lite')) . '</span>';
            echo '<span class="entry-date">';
            echo get_the_time(__('d', 'luminescence-lite')) . '</span>';
            echo '<span class="entry-year">';
            echo get_the_time(__('Y', 'luminescence-lite')) . '</span>';
            echo '</div></div>';            
        } else {           
            echo '<div class="entry-thumbnail clearfix" style="min-height:2em;"><div class="entry-date-box"><span class="entry-month">';
            echo get_the_time(__('M', 'luminescence-lite')) . '</span>';
            echo '<span class="entry-date">';
            echo get_the_time(__('d', 'luminescence-lite')) . '</span>';
            echo '<span class="entry-year">';
            echo get_the_time(__('Y', 'luminescence-lite')) . '</span>';
            echo '</div></div>';
        }  ?> 

		<?php if ( is_single() ) : ?>
			<h1 class="entry-title">
            <?php if(the_title( '', '', false ) !='') the_title(); else _e('Untitled', 'luminescence-lite'); ?> </h1>
		<?php else : ?>
			<h1 class="entry-title">				
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php if(the_title( '', '', false ) !='') the_title(); else _e('Untitled', 'luminescence-lite'); ?> </a>
			</h1>
			
		<?php endif; // is_single() ?>

		<div class="entry-meta">
        <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
					<span class="featured-post">
						<?php _e( '( Featured Article )', 'luminescence-lite' ); ?>
					</span>
				<?php endif; ?>
			<?php //edit_post_link( __( 'Edit', 'luminescence-lite' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->


	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    
	<?php elseif ( is_single() ) : ?>
    
		<div class="entry-content">
    		<?php the_content() ; ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'luminescence-lite' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
    	</div>
    
    <?php else: ?>
    
    	<div class="entry-content">
			
			<?php 
			$excon = get_theme_mod( 'excerpt_content', 'excerpt' );
	$excerpt = get_theme_mod( 'excerpt_limit', '50' );
		 switch ($excon) {
			case "content" :
				the_content(__('Continue Reading...', 'luminescence-lite'));
			break;
			case "excerpt" : 
				echo '<p>' . luminescence_lite_excerpt($excerpt) . '</p>' ;
				echo '<p class="more-link"><a href="' . get_permalink() . '">' . __('Continue Reading...', 'luminescence-lite') . '</a>' ;
			break;
		}           
	
			?>
            
            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'luminescence-lite' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		</div><!-- .entry-content -->
    
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if (is_single()) : ?>
		<?php edit_post_link(__('Edit', 'luminescence-lite')); ?>
		<div class="entry-footer-meta">
			<?php the_tags(__('<span class="meta-tagged">Tagged with:</span>', 'luminescence-lite') . ' ', ', ', '<br />'); ?> 
			<?php printf(__('<span class="meta-posted">Posted in: %s</span>', 'luminescence-lite'), get_the_category_list(', ')); ?> <br />
			
		</div> 

		 <?php luminescence_lite_paging_nav(); ?>

		
	<?php endif; ?>
	</footer><!-- .entry-meta -->
              
</article><!-- end of #post-<?php the_ID(); ?> -->

<div class="entry-shadow">
	<img src="<?php echo get_template_directory_uri() ; ?>/images/post-shadow.png" alt="spacer"/>
</div>