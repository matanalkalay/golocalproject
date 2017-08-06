<?php
/*
Template Name: video section 4
*/
?>
<style type="text/css">
	.wp-playlist-light {
	    background: #42bcb0!important;
	    color: #000!important;
	    border: 1px solid #42bcb0!important;
	    border-radius: 10px!important;
	}
	.mejs-overlay-button {
	    background: #34e89e!important;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #0f3443, #34e89e)!important;  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #0f3443, #34e89e)!important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	    border: 1px solid #0f3443!important;
	    border-radius: 50px!important;
	}
	.mejs-overlay-button:before {
		content: "\f04b"!important;
		font-family: FontAwesome!important;
		font-size: 50px!important;
	    color: white!important;
	    padding: 28%!important;
	    position: relative!important;
	    top: 10%!important;
	    left: 5%!important;

	}
</style>
<body>
	<div class="section4">
		<div class="container">
			<div class="row">
				<div class="video-area col-sm-12">
					<?php 
					$catquery = new WP_Query( 'video=6&posts_per_page=1' ); 
					?>
					<ul>
					<?php 
						while($catquery->have_posts()) : $catquery->the_post(); 
					?>
					<li><p href="#" rel="bookmark">
					<?php the_content(); ?>
					</p></li>
					<?php endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</body>


		

