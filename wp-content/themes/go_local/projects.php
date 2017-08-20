<?php 
/* Template Name: תבנית פרוייקטים */ 
 
get_header(); ?>
 
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
 
    <?php 
        $args = array(
        'post_type' => array( 'project' )
      );
      query_posts( $args );
    ?>
 
    <?php if ( have_posts() ) : ?>
 
      <div class="hentry project_wrapper">
 
      <?php 
      // Start the loop.
      while ( have_posts() ) : the_post(); ?>
 
          <div class="entry-content project">
                <?php
 
                $project_img = get_field('project_img');
                $project_name = get_field('project_name');
                $client_name = get_field('client_name');
                $website_type = get_field('website_type');
                $developers_name = get_field('developers_name');
                ?>
        <div class="container">
        <div class="row">
         <div class="singleProject"> 
                <div class="project_img">
                  <img src="<?php echo $project_img['url']; ?>" alt="<?php echo $project_img['alt']; ?>" />
                </div>
 
                <div class="project_name">
                  <?php echo $project_name ?>
                </div>
 
                <div class="client_name">
                  <?php echo $client_name ?>
                </div>

                <div class="website_type">
                  <?php echo $website_type ?>
                </div>

                <div class="developers_name">
                  <?php echo $developers_name ?>
                </div>
 
          </div><!-- .entry-content -->
</div>
 </div>
 </div>

      <?php
 
      // End the loop.
      endwhile;
 
      ?>
 
      </div>
 
      <?php
 
    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'content', 'none' );
 
    endif;
    ?>
 
    </main><!-- .site-main -->
  </div><!-- .content-area -->
 
<?php get_footer(); ?>