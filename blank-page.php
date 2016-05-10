<?php
/*
    Template Name: blank page
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
       <?php the_content(); ?>
       </section>
        </div>
    </div>
</main>

<!--===Footer section starts===-->
<?php get_footer(); ?>