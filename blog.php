<?php
/*
Template Name: Blog page
*/
get_header();
?>
<?php
  // Start the loop.
  while ( have_posts() ) : the_post();
   // Include the page content template.
  ?>
  <style>
  .page_default_ct{
	  padding:30px 25px;
/*	  background:#ddd;*/
	  margin-bottom:40px;
	  margin-top:40px;
	  
  }
  </style>
  <div class="row page_default_ct">
   <?php the_content(); ?>
      
  </div>
<?php
   // End of the loop.
  endwhile;
  ?>
<?php //get_sidebar(); ?>
<?php get_footer();?>