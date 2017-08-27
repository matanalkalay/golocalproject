<?php
/*
Template Name: clients section 5
*/
  ?>
  <style type="text/css">
  .bx-wrapper .bx-viewport{ direction: ltr; }
  	.item{
	text-align: center;
}
.testimonials{
  background-color: white;
  margin-top: 5%;
  margin-bottom: 5%;
}
.item i{
  color: #EDA031;
  float: right;

}
.item p {
	color:;
	font-size: 20px;
	font-weight: 400;
	padding: 40px 0;
}
.testimonials .bx-wrapper .bx-pager, .testimonials .bx-wrapper .bx-controls-auto {
	display: none;
}
#bx-pager{
	text-align: center;
}
#bx-pager img{
  width: 60px;
  height: 60px;
  border-radius: 50%;
}

.item h5 {
	font-size: 14px;
	font-weight: 700;
	color:;
}
.item span {
	font-size: 13px;
	font-weight: 400;
	color: ;
	padding-bottom: 35px;
	display: inline-block;
}
.testimonials h1 {
	margin-right: 40%;
	display: inline-block;
    border-bottom: 3px solid #EDA031;
    padding-bottom: 2%;
    text-shadow: 2px 2px 5px #9E9E9E;
}
  </style>
  <?php 
 $args = array(
        'post_type' => array( 'clients' )
      );
      query_posts( $args );
 ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="testimonials" id="testimonials">
		<div class="container" >
			<h1><?php the_field('title_section'); ?></h1>
		    <ul class="bxslider">
		 		<li> 
	  				<div class="item">
	                	<i class="fa fa-quote-right fa-4x" aria-hidden="true"></i>
	                    <p><?php the_field('first_client_job'); ?></p>
	                    <h5><?php the_field('first_client_name'); ?></h5>
	                    <span><?php the_field('first_client_text'); ?></span>
	                </div>
			  	</li>
			  	<li>
  					<div class="item">
	                	<i class="fa fa-quote-right fa-4x" aria-hidden="true"></i>
	                    <p><?php the_field('secend_client_job'); ?></p>
	                    <h5><?php the_field('secend_client_job'); ?></h5>
	                    <span><?php the_field('secend_client_job'); ?></span>
	                </div>
				</li>
				<li>
  					<div class="item">
	                	<i class="fa fa-quote-right fa-4x" aria-hidden="true"></i>
	                    <p><?php the_field('third_client_job'); ?></p>
	                    <h5><?php the_field('third_client_job'); ?></h5>
	                    <span><?php the_field('third_client_job'); ?></span>
	                </div>
			    </li>
			    <li>
  					<div class="item">
	                	<i class="fa fa-quote-right fa-4x" aria-hidden="true"></i>
	                    <p><?php the_field('forth_client_job'); ?></p>
	                    <h5><?php the_field('forth_client_job'); ?></h5>
	                    <span><?php the_field('forth_client_job'); ?></span>
                	</div>
				</li>
				<li>
  					<div class="item">
	                	<i class="fa fa-quote-right fa-4x" aria-hidden="true"></i>
	                    <p><?php the_field('fifth_client_job'); ?></p>
	                    <h5><?php the_field('fifth_client_job'); ?></h5>
	                    <span><?php the_field('fifth_client_job'); ?></span>
	                </div>
  				</li>
			</ul>
			<div id="bx-pager">
  				<a data-slide-index="0" href=""><img src="<?php the_field('first_client_pic'); ?>" alt="" /></a>
			    <a data-slide-index="1" href=""><img src="<?php the_field('secend_client_pic'); ?>" alt="" /></a>
			    <a data-slide-index="2" href=""><img src="<?php the_field('third_client_pic'); ?>" alt="" /></a>
			    <a data-slide-index="3" href=""><img src="<?php the_field('forth_client_pic'); ?>" alt="" /></a>
			    <a data-slide-index="4" href=""><img src="<?php the_field('fifth_client_pic'); ?>" alt="" /></a>
			</div>

		</div> 
</div> 
<?php endwhile; // end of the loop. ?>
