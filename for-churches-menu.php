<?php
/*
	 Template Name: For Churches Menu
*/
 get_header();?>
 
   <?php if ( have_posts() ) :
	  while ( have_posts() ) : the_post(); 
             the_content(); 
   
                endwhile; endif; 
			
    ?>