<?php
/*
Template Name: about us section 2
*/
?>
<style type="text/css">
	.section2 {
		background-image: url("<?php echo site_url() . '/wp-content/uploads/2017/08/about_bkg_pic.png';?>"); 
		padding-bottom: 9%;
		/* Set a specific height */
	      min-height: 500px; 

	      /* Create the parallax scrolling effect */
	      background-attachment: fixed;
	      background-position: center;
	      background-repeat: no-repeat;
	      background-size: cover;
	}
	.title-text {
		color: white;
	    border-bottom: 1px solid white;
	    display: inline-block;
	    margin-right: 50%;
	}
	.box-text {
	    background-image: url(http://localhost:8080/golocalproject/wp-content/uploads/2017/08/Rectangle-3.png);    
	    background-size: cover;
	    color: white;
	    margin-top: 5%;
	    margin-bottom: 5%;
	    border-radius: 38px;
	    padding: 3%;
	    font-size: larger;
	}
	.just-text {
		color: white;
    	font-size: medium;
    	margin-bottom: 2%;
	}
	.section2 img {
		position: absolute;
		opacity: 0.76;
		width: 100%;
		height: 613px;
	}
</style>
<body>
<?php 
 $args = array(
        'post_type' => array( 'aboutus' )
      );
      query_posts( $args );
 ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="section2">				
	<img src="<?php echo site_url() . '/wp-content/uploads/2017/08/about_bkg_copy.png';?>">	
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title-text">
						<h1 id="section2"><?php the_field('title_abutus'); ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="row">
						<div class="col-sm-12">
							<div class="box-text">
								<p><b><?php the_field('bold_line'); ?></b><p> אודיפו <?php the_field('sec_aboutus'); ?></p></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="just-text">
								<p><?php the_field('third_section_aboutus'); ?></p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; // end of the loop. ?>
</body>