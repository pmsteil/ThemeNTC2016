<?php
/*
    Template Name: blank page with sidebar
*/
?>
<?php get_header(); ?>

   <?php if ( have_posts() ) :
	  while ( have_posts() ) : the_post(); 
?>
<?php endwhile; endif; ?>

<main class="main">
    <div class="main-content-section">
    <div class="row">
    	 <section id="main" class="secondary">
        <article class="large-8 medium-7 index_article left-sidebar-ct columns">
         <div class="breadcrumbs breadcrumbs_custom" typeof="BreadcrumbList" vocab="">
						 <?php if(function_exists('bcn_display'))
                            { 
                            bcn_display();
                            }?>
                    </div>
     
 <?php the_content(); ?>
	</article>

	 <aside class="large-4 medium-5 columns right-sidebar-ct">
          <?php get_sidebar( 'sidebarmain' ) ?>
        </aside>
        </section>
        </div>
    </div>
</main>

<!--===Footer section starts===-->
<?php get_footer(); ?>