<?php
/* Template Name: תבנית בוגרים */
get_header(); ?>

<head>
<script type="text/javascript" src="<?php echo site_url('/wp-content/themes/go_local/lib/angular/angular.js' ); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('/wp-content/themes/go_local/lib/angular/angular-route.js' ); ?>"></script>
  <!-- AngularJS Animations File -->
  <script src="<?php echo site_url('wp-content/themes/go_local/lib/angular/angular-animate.js' ); ?>"></script>
  <!-- AngularJS Bootstrap JS File -->
  <script type="text/javascript" src="<?php echo site_url('wp-content/themes/go_local/lib/bootstrap/ui-bootstrap-tpls-2.5.0.js' ); ?>"></script>
  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('wp-content/themes/go_local/lib/bootstrap/bootstrap.css' ); ?>">
  <link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <!-- Our app.js File -->
  <script type="text/javascript" src="<?php echo site_url('wp-content/themes/go_local/js/seniorapp.js' ); ?>">
    </script>
<link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
</head>
<style type="text/css">
	/* go on then, styles go here.. knock yourself out! */

@import url(https://fonts.googleapis.com/css?family=Roboto);

.allSeniors {
    /*padding-bottom: 10%;*/
    padding-top: 5%;
    /*background-color: lightgray;*/
    background-color:#E8C433;
    opacity: 9%;
      /* Set a specific height */
      min-height: 500px;

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
}
.search-senior {
  text-align: center;
}
.search-senior input {
  width: 250px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    text-align: center;
    margin-bottom: 0%;
}

 .search-senior input:focus {
    width: 30%;
}
.search-senior select {
  width: 250px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    text-align: center;
    margin-bottom: 10%;
}

 .search-senior select:focus {
    width: 30%;
}

.top-area-profile img {
  border-radius: 50%;
  margin: 28px auto;
  display: block;
  width: 200px;
  border: 5px solid #fff;
}

aside {
  border-top: 0px solid #26A69A;
  border-bottom: 0px solid #00695C;
  border-radius: 50%;
  display: inline-block;
  height: 250px;
  width: 250px;
  background: url(https://s-media-cache-ak0.pinimg.com/736x/3a/1f/02/3a1f02c10700daa80655a302c5a27acf.jpg);
  background-size: cover;
  overflow: hidden;
  box-shadow: 0 0 100px 10px #fff;
  transition: all ease 0.3s;
}

aside:hover {
  border-top: 4px solid #26A69A;
  border-bottom: 4px solid #00695C;
  border-radius: 5px;
  height: 480px;
  width: 350px;
  box-shadow: 0 0 70px 10px #fff;
}

aside:hover .top-area-profile img {
  animation: profile_image 2000ms linear both;
  animation-delay: 0.5s;
}

.top-area-profile {
  text-align: center;
}

.top-area-profile h2 {
  position: relative;
  text-align: center;
  color: #fff;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.5);
  font-size: 25px;
  line-height: 25px;
  display: inline-block;
  padding: 10px;
  transition: all ease 0.250s;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #fff;
}

aside:hover .top-area-profile h2 {
  margin-top: 0px;
  outline: 0 solid #fff;
  border-top: 0px solid #fff;
  border-bottom: 1px solid #fff;
}

.top-area-profile h2 {
  text-align: center;
  color: #fff;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.5);
  font-size: 17px;
  font-weight: normal;
  line-height: 0px;
  margin: 0;
}

.profile-bio {
  margin-top: 20px;
  padding: 1px 20px 10px 20px !important;
  transition: all linear 1.5s;
  color: #fff;
  font-size: 14px;
  opacity: 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.42) 49%, rgba(0, 0, 0, 0.61) 100%);
}

aside:hover .profile-bio {
  opacity: 1;
}

.profile-bio p:first-child {
  text-align: center;
  font-size: 16px;
}

.profile-social-links {
  position: relative;
    margin-top: -120%;
    margin-right: 60%;
  list-style-type: none;
  opacity: 0;
  transition: all ease 0.5s;

}

aside:hover .profile-social-links {
  margin-left: -30px;
  opacity: 1;
}
.profile-social-links li {
  display: list-item;
    text-align: -webkit-match-parent;
    margin-bottom: 4px;
}
.profile-social-links li img {
  width: 30px;
  background: #fff;
  border-radius: 50%;
  padding: 5px;
}
.profile-social-links a:-webkit-any-link {
    color: -webkit-link;
    cursor: auto;
    text-decoration: underline;
}
.senior_profile {
  margin-bottom: 4%;
}
.allSeniors h2 {
  text-align: center;
  margin-bottom: 5%;
}
.style-p {
  margin-top: 1%;
  color: black;
  font-size: larger;
}
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic);


.heading-title {
    margin-bottom: 100px;
}
.text-center {
    text-align: center;
}
.heading-title h3 {
    margin-bottom: 0;
    letter-spacing: 2px;
    font-weight: normal;
}
.p-top-30 {
    padding-top: 30px;
}
.half-txt {
    width: 60%;
    margin: 0 auto;
    display: inline-block;
    line-height: 25px;
    color: #7e7e7e;
}
.text-uppercase {
    text-transform: uppercase;
}

.team-member, .team-member .team-img {
    position: relative;
}
.team-member {
    overflow: hidden;
}
.team-member, .team-member .team-img {
    position: relative;
}

.team-hover {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: 0;
    border: 20px solid rgba(0, 0, 0, 0.1);
    background-color: rgba(255, 255, 255, 0.90);
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
.team-member:hover .team-hover .desk {
    top: 35%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .desk {
    position: absolute;
    top: 0%;
    width: 100%;
    opacity: 0;
    -webkit-transform: translateY(-55%);
    -ms-transform: translateY(-55%);
    transform: translateY(-55%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    padding: 0 20px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member:hover .team-hover .s-link {
    bottom: 10%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .s-link {
    position: absolute;
    bottom: 0;
    width: 100%;
    opacity: 0;
    text-align: center;
    -webkit-transform: translateY(45%);
    -ms-transform: translateY(45%);
    transform: translateY(45%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    font-size: 35px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member .s-link a {
    margin: 0 10px;
    color: #333;
    font-size: 16px;
}
.team-title {
    position: static;
    padding: 20px 0;
    display: inline-block;
    letter-spacing: 2px;
    width: 100%;
}
.team-title h5 {
    margin-bottom: 0px;
    display: block;
    text-transform: uppercase;
}
.team-title span {
    font-size: 12px;
    text-transform: uppercase;
    color: #a5a5a5;
    letter-spacing: 1px;
}



/*PROFILE IMAGE ANIMATE */


</style>
<body>
		<?php
		require 'section4.php';
		    $args = array(
				'post_type' => array( 'senior' )
			);
			query_posts( $args );

      require 'senior.html';
		?>
 <?php require 'contact-us-bogrim.php'; ?>
<?php get_footer(); ?>
</body>
</html>
