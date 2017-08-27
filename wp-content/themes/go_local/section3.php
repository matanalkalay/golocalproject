<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		#section3 {
			/*background-color: #ED9C28;*/
			
			color: white;
			padding-bottom: 0%;
			
		}
		#section3 img {
			position: absolute;
			opacity: 0.76;
			width: 100%;
   			 height: 83%;
		}
		.plrx_enable {
		background-image: url("<?php echo site_url() . '/wp-content/uploads/2017/08/about_bkg_pic.png';?>");
		/* Set a specific height */
	      min-height: 500px; 

	      /* Create the parallax scrolling effect */
	      background-attachment: fixed;
	      background-position: center;
	      background-repeat: no-repeat;
	      background-size: cover;
		}
		.section-heading {
		display: inline-block;
	    padding-bottom: 2%;
	    text-shadow: 2px 2px 5px #9E9E9E;
	}
	.section-subheading {
		font-size: x-large;
	    margin-top: 5%;
	    margin-bottom: 5%;
	}
	.sevice-col-wrapper {
		margin-bottom: 10%;
	}
	.circle1 {
		margin-bottom: 10%;
		width: 100px;
	    height: 100px;
	    border-radius: 50%;
	    display: inline-block;
	}
	.circle1 i {
		font-size: -webkit-xxx-large;
	    color: white;
	    margin-top: 24%;
	}
	.circle2 {
		margin-bottom: 10%;
		width: 100px;
	    height: 100px;
	    border-radius: 50%;
	    display: inline-block;
	}
	.circle2 i {
		font-size: -webkit-xxx-large;
	    color: white;
	    margin-top: 24%;
	}
	.circle3 {
		margin-bottom: 10%;
		width: 100px;
	    height: 100px;
	    border-radius: 50%;
	    display: inline-block;
	}
	.circle3 i {
		font-size: -webkit-xxx-large;
	    color: white;
	    margin-top: 24%;
	}
	.service-heading {
		color: white;
    	margin-bottom: 10%;
    }
    .service-subheading {
    	color: white;
    }
/*@media (min-width: 412px) {
	#section3 {
		height: 1300px;
	}
	#section3 img {
		height: 74.5%;
	}
	.sevice-col-wrapper {
	    margin-bottom: 5%;
	    font-size: x-large;
	}
	.service-heading {
		font-size: x-large;
    	
    }
    .circle1 i {
	    font-size: 85px;
	}
	.circle2 i {
	    font-size: 85px;
	}
	.circle3 i {
	    font-size: 85px;
	}*/
    </style>
    </head>

<body>
<?php 
 $args = array(
        'post_type' => array( 'about_our_project')
      );
      query_posts( $args );
 ?>
<?php while ( have_posts() ) : the_post(); ?>
<section id="section3" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="plrx_enable">
<section id="section3"> 
<!-- <img src="<?php echo site_url() . '/wp-content/uploads/2017/08/about_bkg_p3.png';?>"> -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?php the_field('title_About_our_progrem'); ?></h2>
                <h3 class="section-subheading"><?php the_field('opening_About_our_progrem'); ?> </h3>
            </div>
        </div>
        <div class="row text-center servies wow fadeInRight" data-wow-duration="1s">
            <div class="col-md-4 sevice1">
            <div class="sevice-col-wrapper">
               <div class="circle1">
              	 	<i class="fa fa-phone" aria-hidden="true"></i>
               </div>
                <h4 class="service-heading"><?php the_field('first_title_About_our_progrem'); ?></h4>
                <p class="service-subheading"><?php the_field('first_text_about_our_progrem'); ?></p>
            </div>
            </div>
            <div class="col-md-4 sevice2">
			<div class="sevice-col-wrapper">
                <div class="circle2">
				<i class="fa fa-user-circle" aria-hidden="true"></i>               
				</div>
                <h4 class="service-heading"><?php the_field('sec_title_About_our_progrem'); ?></h4>
                <p class="service-subheading"><?php the_field('sec_text_About_our_progrem'); ?></p>
            </div>
            </div>
            <div class="col-md-4 sevice3">
			<div class="sevice-col-wrapper">
               <div class="circle3">
              	 	<i class="fa fa-commenting-o" aria-hidden="true"></i>
               </div>
                <h4 class="service-heading"><?php the_field('third_title_About_our_progrem'); ?></h4>
                <p class="service-subheading"><?php the_field('third_text_About_our_progrem'); ?></p> 
            </div>
        </div>
    </div>
</div>
</section>
</section>
<?php endwhile; // end of the loop. ?>