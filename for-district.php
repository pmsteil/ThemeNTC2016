<?php
/*
    Template Name: For District menu
*/
get_header();
?>
<div class="row">
                  <div class="districts-popup">
                    <div class="head large-12">
                      <div class="churches-options">
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
</div>
</div>
</div>
</div>
<?php get_header(); ?>

     
        

<!--===Footer section starts===-->
