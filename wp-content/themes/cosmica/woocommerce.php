<?php  get_header(); ?>
	<div class="container">
		<div id="content-area" class="clearfix">
			<main class="main-content col-md-12 col-sm-12">
				<?php if ( have_posts() ) : ?>
				<?php woocommerce_content(); ?>
				<?php endif; ?>
				<div class="clearfix"></div>
			</main>
		</div> <!-- #content-area -->
	</div> <!-- .container --> 
<?php  get_footer();?>
