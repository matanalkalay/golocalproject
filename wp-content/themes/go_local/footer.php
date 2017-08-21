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
  <div class="rights-reserved col-xs-12 col-lg-2">
        <p>All Rights Reserved Golocal 2017</p>
  </div>
     <div class="menuFooter col-xs-12 col-lg-8">
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
  <div class="infoFooter col-xs-12 col-lg-2">
        <i class="fa fa-facebook-official" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-linkedin" aria-hidden="true"></i>
     </div>
   </div>
</div>
	
</footer>

<?php wp_footer(); ?>

</body>
</html>
