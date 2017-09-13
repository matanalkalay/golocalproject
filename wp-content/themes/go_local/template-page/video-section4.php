<?php
/*
Template Name: video section 4
*/
?>
<style type="text/css">
.section4 {
	/*background-color: #42BCB0;*/
	background-image: url("<?php echo site_url() . '/wp-content/uploads/2017/09/video_bkg_pic.png';?>");
    padding: 5%;
    /* Set a specific height */
	      min-height: 500px; 

	      /* Create the parallax scrolling effect */
	      background-attachment: fixed;
	      background-position: center;
	      background-repeat: no-repeat;
	      background-size: cover;
}
	.wp-playlist-light {
	    background: black!important;
	    color: #000!important;
	    border: 1px solid black!important;
	    border-radius: 10px!important;
	}
	.mejs-overlay-button {
		background: #fc4a1a!important;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a)!important;  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #f7b733, #fc4a1a)!important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	    border: 1px solid #f7b733!important;
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
	@media screen and (max-width: 768px) {
		.section4 {
		    /* background-color: #42BCB0; */
		    /*background-image: url(http://localhost/golocalproject/wp-content/uploads/2017/09/video_bkg_pic.png);*/
		    padding: 2%;
		    min-height: 285px!important;
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		    min-height: 500px;
		}
		.wp-playlist .mejs-container {
			margin: 0;
		    width: 100%;
		    height: 178px!important;
		}
		.mejs-overlay-button:before {
		    content: "\f04b"!important;
		    font-family: FontAwesome!important;
		    font-size: 25px!important;
		    color: white!important;
		    padding: 28%!important;
		    position: relative!important;
		    top: 10%!important;
		    left: 5%!important;
		}
		.mejs-overlay-button {
		    position: absolute;
		    top: 60%!important;
		    left: 60%!important;
		    width: 50px!important;
		    height: 50px!important;
		    margin: -50px 0 0 -50px;
		}
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


		

