<?php
/*
    Template Name: Ntc
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
        <!-- left column -->
        <article class="large-8 medium-7 index_article left-sidebar-ct columns">
          <div id="maincontent">
            <div id="District-Page">
            <div class="breadcrumbs breadcrumbs_custom" typeof="BreadcrumbList" vocab="">
						  <?php if(function_exists('bcn_display'))
                            { 
                            bcn_display();
                            }?>
                    </div>
              <?php the_content(); ?>
            </div>
          </div>
          
          <br>
          <br>
        </article>
        <!-- right column --> 
        
        <aside class="large-4 medium-5 columns right-sidebar-ct">
          <?php //get_sidebar( 'sidebarmain' ) ?>
          <sidebar id="sidebarmain" name="Main" description="Main sidebar that appears on the default page template">
            <div id="sidecontent" class="right-sidebar-inner-ct medium-side-top">
              <div class="sidebox">
                <?php get_sidebar( 'sidebarmain' ) ?>
              </div>
            </div>
           
          </sidebar>
        </aside>
      </section>
    </div>
  </div>
</main>

<!--===Footer section starts===-->
<?php get_footer(); ?>