<?php
/*
	 Template Name: For Churches Menu
*/
 get_header();?>
 <div class="breadcrumbs breadcrumbs_custom" typeof="BreadcrumbList" vocab="">
						  <?php if(function_exists('bcn_display'))
                            { 
                            bcn_display();
                            }?>
                    </div>
 
   <?php if ( have_posts() ) :
	  while ( have_posts() ) : the_post(); 
             the_content(); 
   
                endwhile; endif; 
		
    ?>