<?php
/*
Template Name: orange section 6
*/
?>
<style type="text/css">
	body .section6 {
		background-color:#FFD24D;
		padding-top: 5%;
	}
	.button-area {
		text-align: center;
		margin-bottom: 5%;
	}
	button {
		background-color: #42BCB0;
		color: white;
	}
	button.btn-lg {
	padding: 15px 55px!important;
    font-size: 18px!important;
    line-height: 1.3333333!important;
    border-radius: 35px!important;
	}
	button.btn:hover {
    color: white!important;
    text-decoration: none!important;
} 
.text-area {
	font-size: large;
	float: right;
	margin-bottom: 5%;
}


</style>
<body>
<?php 
 $args = array(
        'post_type' => array( 'beforecontactus')
      );
      query_posts( $args );
 ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="section6">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-area"><?php the_field('text_orange'); ?></div>
				<div class="col-lg-6 button-area">
					<button href="<?php the_field('url_button_orange');?>" type="button" class="btn btn-lg"><?php the_field('button_orange'); ?></button>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; // end of the loop. ?>
</body>