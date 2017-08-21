<?php 
/* Template Name: תבנית בוגרים */ 
 
get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
 
		<?php 
		    $args = array(
				'post_type' => array( 'senior' )
			);
			query_posts( $args );
		?>
 
		<?php if ( have_posts() ) : ?>
 
			
 
			<?php 
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
 
					
								<?php
 
								$senior_image = get_field('senior_img');
								$senior_name = get_field('senior_name');
								$senior_class = get_field('senior_class');
								$senior_city = get_field('senior_city');
								
 
								?>
 <div>
 <img src="<?php echo $senior_image['url']; ?>" alt="<?php echo $senior_image['alt']; ?>" />
								<?php echo $senior_image; ?>
								<?php echo $senior_name; ?>
								<?php echo $senior_class; ?>
								<?php echo $senior_city; ?>
								<a href="<?php echo $senior_projects; ?> " >djskla</a>
								
					</div>
					</div><!-- .entry-content -->
 
			<?php
 
			// End the loop.
			endwhile;
 
			?>
 
			</div>
 
			<?php
 
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );
 
		endif;
		?>
 
		</main><!-- .site-main -->
	</div><!-- .content-area -->
 

<?php get_footer(); ?>