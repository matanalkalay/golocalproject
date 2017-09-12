<?php
    wp_enqueue_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('section4-css', site_url('wp-content/themes/go_local/css/section4.css'));
?>
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
