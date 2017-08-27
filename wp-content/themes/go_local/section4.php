<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

      #section4 { 
      color: white;
      height: 621px;  

     }
    .plrx_enable {
      background-image: url("<?php echo site_url() . '/wp-content/uploads/2017/08/about_bkg_pic-p2-1.png';?>"); 
      /* Set a specific height */
      min-height: 500px; 

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .section-heading {
      margin-bottom: 4%;
    }
    #section4 .circle1 {
      margin-bottom: 0%!important;
    width: 100px;
      height: 100px;
      border-radius: 50%;
      display: inline-block;
      background: #fc4a1a;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #f7b733, #fc4a1a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      border: 1px solid #f7b733;
      float: right;
    }
    #section4 .circle2 {
      margin-bottom: 0%!important;
    width: 100px;
      height: 100px;
      border-radius: 50%;
      display: inline-block;
      background: #fc4a1a;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #f7b733, #fc4a1a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      border: 1px solid #f7b733;
      float: right;
    }
    #section4 .circle3 {
      margin-bottom: 0%!important;
    width: 100px;
      height: 100px;
      border-radius: 50%;
      display: inline-block;
      background: #fc4a1a;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #f7b733, #fc4a1a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      border: 1px solid #f7b733;
      float: right;
    }
    #section4 .service-heading {
      display: inline-block;
      float: right;
      margin-bottom: 8%;
      margin-top: 3%;
      margin-right: 6%;
      font-size: 178%;
      width: 60%;
      color: white;
      text-shadow: 2px 2px 12px #000000;
    }
    #section4 .sevice-col-wrapper {
    margin-bottom: -4%!important;
  }
  #section4 .circle1 i {
    margin-top: 35%;
      margin-right: 20%;
      font-size: -webkit-xxx-large;
  }
  #section4 .circle2 i {
    margin-top: 35%;
      margin-right: 13%;
      font-size: -webkit-xxx-large;
  }
  #section4 .circle3 i {
    margin-top: 35%;
      margin-right: 13%;
      font-size: -webkit-xxx-large;
  }
  #section4 img {
      position: absolute;
      opacity: 0.76;
      width: 100%;
    height: 620px;
    }

  </style>
</style>
<?php 
 $args = array(
        'post_type' => array( 'about_senior' )
      );
      query_posts( $args );
 ?>
<?php while ( have_posts() ) : the_post(); ?>
<section id="section4" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="plrx_enable">
<section id="section4"> 
<img src="<?php echo site_url() . '/wp-content/uploads/2017/08/about_bkg_p3.png';?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-right">
                <h2 class="section-heading"><?php the_field('title_senior_page'); ?></h2>
            </div>
        </div>
        <div class="row text-right servies wow fadeInRight" data-wow-duration="1s">
            <div class="col-xs-12 sevice1">
            <div class="col-xs-12 sevice-col-wrapper">
               <div class="col-xs-6 circle1">
              	 	<i class="fa fa-phone" aria-hidden="true"></i>
               </div>
                <h4 class="col-xs-6 service-heading"><?php the_field('senior_text1'); ?></h4>
            </div>
            </div>
            <div class="col-xs-12 sevice2">
			<div class="col-xs-12 sevice-col-wrapper">
                <div class="col-xs-6 circle2">
				<i class="fa fa-user-circle" aria-hidden="true"></i>               
				</div>
                <h4 class="col-xs-6 service-heading"><?php the_field('senior_text2'); ?></h4>   
            </div>
            </div>
            <div class="col-xs-12 sevice3">
			<div class="col-xs-12 sevice-col-wrapper">
               <div class="col-xs-6 circle3">
              	 	<i class="fa fa-commenting-o" aria-hidden="true"></i>
               </div>
                <h4 class="col-xs-6 service-heading"><?php the_field('senior_text3'); ?></h4> 
            </div>
        </div>
    </div>
</div>
</section>
</section>
<?php endwhile; // end of the loop. ?>








</body>
</html>