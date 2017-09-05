<?php
/*
Template Name: welcome section 1
*/
?>
<style type="text/css">

	.section1 {
	background-repeat: round;
    height: 500px;
    position: relative;
    /* Set a specific height */
	      min-height: 500px; 

	      /* Create the parallax scrolling effect */
	      background-attachment: fixed;
	      background-position: center;
	      background-repeat: no-repeat;
	      background-size: cover;
	}
	.addline-text {
		color: white;
    display: inline-block;
    position: absolute;
    top:140px ;
    right: 8%;
	}
	.button-section1 {
		display: inline-block;
	}
	.button-section1 button {
	padding-left: 40%;
    padding-right: 40%;
    border: 1px solid #EDA031;
    border-radius: 50px;
	}
	.addline-text h1 {
	text-shadow: 2px 2px #685a5a;
	}
</style>

<body>
<?php 
 $args = array(
        'post_type' => array( 'welcome' )
      );
      query_posts( $args );
 ?>
<?php while ( have_posts() ) : the_post(); ?>
		<div class="section1"  style="background-image: url(<?php echo site_url() . '/wp-content/uploads/2017/09/about_bkg_pic1-1.png';?>)">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="addline-text">
						<h1><b><?php the_field('first_line_welcome'); ?></b></h1><br>
						<h1><b><?php the_field('secend_line_welcome'); ?></b></h1><br>
						<h1><b><?php the_field('third_line_welcome'); ?></b></h1><br>
						<div class="button-section1">
						<button href="#" type="button" class="btn btn-warning btn-lg"><?php the_field('button_welcome'); ?></button> 
						</div>
					</div>
				</div>
			</div>
		</div>	
		</div>
		<?php endwhile; // end of the loop. ?>
</body>
		