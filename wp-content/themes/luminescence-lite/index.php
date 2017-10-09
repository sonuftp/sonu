<?php

/**
 * Index layout template
 *
 * @file           index.php
 * @package        Luminescence-Lite 
 * @author         Styled Themes 
 * @copyright      2013 Styledthemes.com
 * @license        license.txt
 * @version        Release: 1.2.0
 */

get_header(); ?>

    <div id="content-right" class="span8 equal">
        <div class="content-inner">
            <?php 
            
            get_template_part( 'partials/mobile-logo' );
            get_template_part( 'partials/social-bar' ); 
            get_template_part( 'partials/horizontal-menu' );
            get_template_part( 'sidebar', 'header' );
            ?>
            <div id="content" class="site-content" role="main">
                <?php 				
                if ( is_home() || is_category() ){	
                    get_template_part( 'loop', 'blog' ); 
                } elseif ( is_archive() ){
                    get_template_part( 'loop', 'archive' );
                } elseif ( is_single() ){ 
                    get_template_part( 'loop', 'single' );
                } elseif ( is_search() ){ 
                    get_template_part( 'loop', 'search' );
                }else{
                    // get all the posts
                    if ( have_posts() ) : while ( have_posts() ) : the_post();				
                    // get the article layout
                        get_template_part( 'content', get_post_format() );					
                    endwhile;
                    // get the pagination
                        luminescence_lite_paging_nav();
                        else :
                    // if no posts
                    get_template_part( 'content', 'none' );					
                    endif; 
                }
            	?>	
            </div>
        </div>
    </div>
    <?php get_sidebar( 'blog-left'); ?>	

<?php get_footer(); ?>