<?php
/*
Template Name: video section 4
*/
?>
<style type="text/css">
.section4 {
	background-color: #42BCB0;
    padding: 5%;
}
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
					<?php query_posts('cat=6'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					   <?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</body>


		

