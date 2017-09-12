<?php
/* Template Name: תבנית בוגרים */

wp_enqueue_style('bootstrap-css', site_url('wp-content/themes/go_local/lib/bootstrap/bootstrap.css'));
wp_enqueue_style('ionicons', '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
wp_enqueue_style('senior-css', site_url('wp-content/themes/go_local/css/senior.css'));

wp_enqueue_script('angular-js', site_url('wp-content/themes/go_local/lib/angular/angular.js'));
wp_enqueue_script('angular-route', site_url('wp-content/themes/go_local/lib/angular/angular-route.js'), ['angular-js']);
wp_enqueue_script('angular-animate', site_url('wp-content/themes/go_local/lib/angular/angular-animate.js'), ['angular-js']);
wp_enqueue_script('seniorapp-module', site_url('wp-content/themes/go_local/js/seniorapp-module.js'), ['angular-js', 'angular-route', 'angular-animate']);
wp_enqueue_script('seniorapp-controller', site_url('wp-content/themes/go_local/js/seniorapp-controller.js'), ['seniorapp-module'], null, true);
wp_enqueue_script('ui-bootstrap-tpls', site_url('wp-content/themes/go_local/lib/bootstrap/ui-bootstrap-tpls-2.5.0.js'), ['seniorapp-module'], null, true);

get_header();
?>
    <script type="text/javascript">
        var configObj = {
            ajaxUrl: '<?= site_url('wp-json/wp/v2/senior') ?>'
        };
        myApp.constant('seniorAppConfig', configObj);
        // alert(configObj);
    </script>

	
    <?php
        include 'section4.php';
        $args = array(
            'post_type' => array( 'senior' )
        );
        query_posts( $args );

        include 'senior.html';
    ?>
    <?php include 'contact-us-bogrim.php' ?>

<?php get_footer() ?>

