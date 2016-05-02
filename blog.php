<?php
/*
Template Name: Blog page
*/
get_header();
?>
<?php
  // Start the loop.
  while ( have_posts() ) : the_post();
   the_content();
  ?>
  
<?php
   // End of the loop.
  endwhile;
  ?>
<?php get_sidebar('sidebarmain'); ?>

<?php get_footer();?> 