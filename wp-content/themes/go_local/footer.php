<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package go_local
 */

?>

	</div><!-- #content -->

	
<footer>
<div class="container">
  <div class="row">
     <div class="infoFooter col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-youtube" aria-hidden="true"></i>
        <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12">רחוב חלקיקי האור 16,ירוחם </p> <p class="col-lg-12 col-md-12    col-sm-12 col-xs-12">info@golocal.co.il </p><p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 972-34532345</p> 
     </div>
     <div class="menuFooter col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <?php
	 $header_menu_name = is_user_logged_in() ? 'primary' : 'guest';
       if(has_nav_menu($header_menu_name)) {
		$header_menu = array(
      'theme_location' => $header_menu_name,
      'container' => '',
      'container_class' => '',
      'container_id' => '',
      'menu_class' => '',
      'echo' => true,
		);
		wp_nav_menu($header_menu);
      }
	?>
	</div>
<p>האתר פותח על ידי חניכי התוכנית: טל ריפטין ,לירון ציבוטרו ומתן אלקלעי</p>
   </div>
</div>
	
</footer>

<?php wp_footer(); ?>

</body>
</html>
