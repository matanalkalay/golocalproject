<?php
/*
Template Name: projects section 7
*/
?>

<style type="text/css">
.head-project {
  position: relative;
    top: 70px;
}
.allProjets{
margin-top: 28%;
}
 h2{
text-align: center;
color: #4A4A4A;
}
li{
  list-style: none;
}
/**
* VARIABLES
**/

/**
* Title
**/


/**
* CARD
**/
.section7 {
  background-color: #15C0AB;
  margin-top: -2%;
}
.card{
  margin-left: 5%;
  width: 300px;
   display: inline-block;
  -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0);
   transform: translateX(-50%) translateY(-50%) translateZ(0);
  background-color:white;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  -webkit-transition: box-shadow 0.5s;
  transition: box-shadow 0.5s;
}
.card a {
  color: inherit;
  text-decoration: none;
}

.card:hover {
  box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);
}

/**
* DATE
**/

.card__thumb {
  height: 245px;
  overflow: hidden;
  background-color: #000;
  -webkit-transition: height 0.5s;
  transition: height 0.5s;
}
.card__thumb img {
  display: block;
  width: 100%;
  opacity: 1;
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transition: opacity 0.5s, -webkit-transform 0.5s;
  transition: opacity 0.5s, -webkit-transform 0.5s;
  transition: opacity 0.5s, transform 0.5s;
  transition: opacity 0.5s, transform 0.5s, -webkit-transform 0.5s;
}
.card:hover .card__thumb {
  height: 130px;
}

.card:hover .card__thumb img {
  opacity: 0.6;
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}

/**
* BODY
**/
.card__body {
  position: relative;
  height: 185px;
  padding: 20px;
  -webkit-transition: height 0.5s;
  transition: height 0.5s;
}
.card:hover .card__body {
  height: 300px;
}

.card__category {
  position: absolute;
  top: -25px;
  left: 0;
  height: 25px;
  padding: 0 15px;
  background-color: coral;
  color: #fff;
  text-transform: uppercase;
  font-size: 11px;
  line-height: 25px;
}

.card__title {
  margin: 0;
  padding: 0 0 10px 0;
  color: #000;
  font-size: 22px;
  font-weight: bold;
  text-transform: uppercase;
}

.card__subtitle {
  margin: 0;
  padding: 0 0 10px 0;
  font-size: 19px;
  color: coral;
}

.card__description {
  position: absolute;
  left: 20px;
  right: 20px;
  bottom: 56px;
  margin: 0;
  padding: 0;
  color: #666C74;
  line-height: 27px;
  opacity: 0;
  -webkit-transform: translateY(45px);
  transform: translateY(45px);
  -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: opacity 0.3s, transform 0.3s;
  transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}
.card:hover .card__description {
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
  -webkit-transition-delay: 0.2s;
          transition-delay: 0.2s;
}
.myButton {
  background-color:#ffffff;
  -moz-border-radius:28px;
  -webkit-border-radius:28px;
  border-radius:28px;
  border:1px solid #18ab29;
  display:inline-block;
  cursor:pointer;
  color:#000000;
  font-family:Arial;
  font-size:17px;
  padding:16px 31px;
  text-decoration:none;
  text-shadow:0px 1px 0px #2f6627;
}
.myButton:hover {
  background-color:#5cbf2a;
}
.myButton:active {
  position:relative;
  top:1px;
}

</style>
<body>
<div class="section7">
                 
                     <div class="head-project">
                     <h2>הפרויקטים שלנו</h2>
                     </div>
                       <div class="allProjets">

	         
                  <?php 
               
                      $args = array(
                      'post_type' => array( 'project' )
                    );
                    query_posts( $args );
                  ?>
               
                  <?php if ( have_posts() ) : ?>

                
                    <?php 
                    // Start the loop.
                     $i = 1; while (have_posts() && $i < 4) : the_post(); ?>
                   
      <article class="card">
 
  
                 <?php
                $project_img = get_field('project_img');
                $project_name = get_field('project_name');
                $client_name = get_field('client_name');
                $website_type = get_field('website_type');
                $developers_name = get_field('developers_name');
                $project_description = get_field('project_description');
                $kisor_web = get_field('kisor_web');
                ?>  
  <div class="card__thumb">
    <a href="#"> <img src="<?php echo $project_img['url']; ?>" alt="<?php echo $project_img['alt']; ?>" /></a>
  </div >

  <div class="card__body">
    <div class="card__category"><a href="#"><?php echo $website_type ?></a></div>
    <h2 class="card__title"><a href="#">שם האתר: <?php echo $project_name ?></a></h2>
    <div class="card__subtitle"><?php echo  $project_description ?></div>
    <p class="card__description">
      <p>שם הלקוח: <?php echo $client_name ?></p>
      <p>סוג האתר: <?php echo $website_type ?></p>
      <p>שמות המפתחים: <?php echo $developers_name ?></p>
    </p>
    <a href="<?php echo $kisor_web ?>" class="myButton">קישור לפרויקט</a>
  </div>
  </article>
               
  

      
 <?php $i++; endwhile; ?>
 
      </div>

 </div>

    
 
      <?php
 
    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'content', 'none' );
 
    endif;
    ?>


</body>