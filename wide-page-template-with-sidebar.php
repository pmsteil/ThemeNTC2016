<?php
/*
    Template Name: Wide page with sidebar
*/
?>
<?php get_header(); ?>
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
	    padding-top: 12px;
    padding-bottom: 6px;
}
.footer-l-img {
    float: left;
    margin-right: 20px;
}
.bishopaddress.stripe-footer-lrft-ct p {
    color: #e2ccab;
}
.bishopaddress.stripe-footer-lrft-ct p span strong {
    font-size: 16px;
    text-transform: capitalize;
}
.footer-l-img img {
    border: 1px solid #e2ccab;
}
.fb {
    text-align: right;
	 margin-bottom: 8px;
}
.twit {
    text-align: right;
}
.dropdown_ct_list li:last-child a.drop-p-bg {
    width: 170px;
    background: url(http://dev.northtexasumc.org/wp-content/uploads/2016/05/btn-for-districts-blue.png) no-repeat !important;
}
.secondary{
	border-radius:0px !important;
}
</style> 

 <?php if ( have_posts() ) :
	  while ( have_posts() ) : the_post(); 
?>
<?php endwhile; endif; ?>

<main class="main">
    <div class="main-content-section">
        <section id="main" class="secondary">
             <article class="large-8 medium-7 index_article left-sidebar-ct columns">
                 <h1><?php echo the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
            <aside class="large-4 medium-5 columns right-sidebar-ct">
          	<?php //get_sidebar( 'sidebarmain' ) ?>
            <div id="sidecontent" class="right-sidebar-inner-ct medium-side-top">
              <div class="sidebox">
                <?php get_sidebar( 'sidebarmain' ) ?>
              </div>
            </div>
        </aside>
       </section>
       
    </div>
</main>

<!--===Footer section starts===-->
<?php get_footer(); ?>