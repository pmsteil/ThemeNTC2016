<?php
/*
    Template Name: Bishop Landing
*/
?>
<?php get_header('stripe'); ?>
<style>
.stripe_heder_wrapper h1 {
    color: #e2ccab;
    font-size: 32px;
    text-align: center;
}
.stripe_heder_wrapper {
    background: #003366;
    padding-top: 31px;
    padding-bottom: 31px;
}
.stripe_footer_wrapper {
    background: #003366;
}
</style>

 <?php if ( have_posts() ) :
	  while ( have_posts() ) : the_post(); 
?>
<?php endwhile; endif; ?>
<main class="main">
    <div class="main-content-section">
        <div class="row">
        <section id="main" class="secondary1">
       <?php the_content(); ?>
       </section>
        </div>
    </div>
</main>

<!--===Footer section starts===-->
<?php get_footer('stripe'); ?>