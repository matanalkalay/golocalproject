<?php
/*
Template Name: contact us section 8
*/
?>
<style type="text/css">
	.section8 {
		background-color: #00BFB6;
		height: 400px;
	}
	form {
		text-align: center;
		color: white; 
	}
	form input {
	border: 1px solid white;
    border-radius: 10px;
    padding: 1%;
    background-color:#00BFB6;
	}
	.section8 .wpcf7-submit {
	width: 16%;
    color: #00BFB6;
    background: white;
    box-shadow: 0px 0px 10px #242121;
    border-radius: 20px;
	}
</style>
<body>
	<div class="section8">
		<div class="container">
			<div class="row">
				<div class="form-contact col-lg-12">
					<?php query_posts('cat=7'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					   <?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</body>