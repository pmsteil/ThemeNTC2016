<?php
/*
    Template Name: page
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
        <h1> <?php echo the_title(); ?> </h1>
       <?php echo $htm =  apply_filters('the_content',get_the_content()); ?>
	</article>

	 <aside class="large-4 medium-5 columns right-sidebar-ct">
     	<div id="sidecontent" class="right-sidebar-inner-ct medium-side-top">
            <div class="sidebox">
          <?php get_sidebar( 'sidebarmain' ) ?>
          </div>
         </div>
        </aside>
        </section>
        </div>
    </div>
</main>

<!--===Footer section starts===-->
<?php get_footer(); ?>