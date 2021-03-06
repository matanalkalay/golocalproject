<?php
/*
Template Name: three column section 3
*/
?>
<style type="text/css">
	.section3 {

		padding-top: 5%;
	}
	#section3 {
	    padding-bottom: 5%;background: linear-gradient(180deg,rgba(255,164,79,0)0%,#ffb719 100%);
}
	.section-heading {
		display: inline-block;
	    border-bottom: 3px solid #22B59A;
	    padding-bottom: 2%;
	    text-shadow: 2px 2px 5px #9E9E9E;
	}
	.section-subheading {
		font-size: inherit;
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
	    background: linear-gradient(138.51deg, #00862C 0%, #7DCA47 100%);
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
	    background: linear-gradient(321.73deg, #5ACCB9 0%, #009788 100%);
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
	    background: #fc4a1a;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #f7b733, #fc4a1a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	    border: 1px solid #f7b733;
	    border-radius: 50%;
	    display: inline-block;
	}
	.circle3 i {
		font-size: -webkit-xxx-large;
	    color: white;
	    margin-top: 24%;
	}
	.service-heading {
		color: #546E7A;
    	margin-bottom: 10%;
	}
	@media screen and (max-width: 768px){
		.section-subheading {
		    font-size: x-large;
		    margin-top: 5%;
		    margin-bottom: 5%;
		}
		.service-heading {
		    color: #546E7A;
		    margin-bottom: 10%;
		    font-size: x-large;
		}
		.text-muted {
		    color: #777;
		    font-size: x-large;
		}
	}
</style>
<body>
<?php 
 $args = array(
        'post_type' => array( 'abouttheproject' )
      );
      query_posts( $args );
 ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="section3" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="plrx_enable">
<section id="section3"> 

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?php the_field('title_abouttheproject'); ?></h2>
                <h3 class="section-subheading text-muted"><?php the_field('sec_line_abouthteproject'); ?></h3>
            </div>
        </div>
        <div class="row text-center servies wow fadeInRight" data-wow-duration="1s">
            <div class="col-md-4 sevice1">
            <div class="sevice-col-wrapper">
               <div class="circle1">
              	 	<i class="fa fa-phone" aria-hidden="true"></i>
               </div>
                <h4 class="service-heading"><?php the_field('title1_collouns_ap'); ?></h4>
                <p class="text-muted"><?php the_field('text1_couloun_ap'); ?></p>
            </div>
            </div>
            <div class="col-md-4 sevice2">
			<div class="sevice-col-wrapper">
                <div class="circle2">
				<i class="fa fa-user-circle" aria-hidden="true"></i>               
				</div>
                <h4 class="service-heading"><?php the_field('title2_collouns_ap'); ?></h4>
                <p class="text-muted"><?php the_field('title2_collouns_ap'); ?></p>
            </div>
            </div>
            <div class="col-md-4 sevice3">
			<div class="sevice-col-wrapper">
               <div class="circle3">
              	 	<i class="fa fa-commenting-o" aria-hidden="true"></i>
               </div>
                <h4 class="service-heading"><?php the_field('title3_collouns_ap'); ?></h4>
                <p class="text-muted"><?php the_field('title3_collouns_ap'); ?> 
            </div>
        </div>
    </div>
</section>
<?php endwhile; // end of the loop. ?>
</body>
