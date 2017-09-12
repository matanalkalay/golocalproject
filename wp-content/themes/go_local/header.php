<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php echo get_bloginfo('name'); ?> - <?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<base href="<?= site_url() ?>">
</head>
<body <?php body_class('mybodyclass'); ?>>

<header>
<nav>
<div class="container">
	<div class="row">
		<!-- header -->
		<div class="header text-right">
			<div class='logo'>
				<a href="#"><img style="width: 200px;" src="<?php echo site_url('/wp-content/uploads/2017/09/logo-navbar.png' ); ?>"></a>
			</div>
			<div class="menu">
				
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
		</div>
	<!-- end  header-->
</div>
</div>	
</nav>
</header>

	