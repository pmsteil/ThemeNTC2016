<?php
/*
    Template Name: Wide page Blank
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

.secondary{
	border-radius:0px !important;
}
.secondary_wide h1,.secondary_wide p {
    color: #fff;
}
.secondary_wide{
	padding:0 5px;
}
</style> 

 <?php if ( have_posts() ) :
	  while ( have_posts() ) : the_post(); 
?>
<?php endwhile; endif; ?>

<main class="main">
    <div class="main-content-section">
        <section id="main" class="secondary_wide">
                 <h1><?php echo the_title(); ?></h1>
                <?php the_content(); ?>
           
       </section>
        
    </div>
</main>

<!--===Footer section starts===-->
<?php get_footer(); ?>