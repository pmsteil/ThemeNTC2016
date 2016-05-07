<?php
/*
    Template Name: Bishop
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