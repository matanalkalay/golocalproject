<?php
/*
Template Name: contact us section 8
*/

wp_enqueue_style('contact-us-bogrim', site_url('wp-content/themes/go_local/css/contact-us-bogrim.css'));
?>

<div class="section8">
	<div class="container">
		<div class="row">
			<div class="form-contact col-lg-12">
				<?php query_posts('cat=7'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				   <?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>
