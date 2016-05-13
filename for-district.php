<?php
/*
    Template Name: For District menu
*/
?>


   <?php if ( have_posts() ) :
	  while ( have_posts() ) : the_post(); 
?>
<?php endwhile; endif; ?>

<main class="main">
    <div class="main-content-section">
    <div class="row">
    	 <section id="main" class="secondary">
        <article class="large-8 medium-7 index_article left-sidebar-ct columns">
     
        <?php the_content(); ?>
	    </article>

        </section>
        </div>
    </div>
</main>

<!--===Footer section starts===-->
