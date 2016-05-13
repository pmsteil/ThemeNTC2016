<?php
/*
    Template Name: For District menu
*/
?>

<style>
.districts-popup {
    border: 1px solid #42290e;
    border-radius: 7px;
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
    font-size: 12px;
    line-height: 1.166;
    padding: 31px 0 0;
    overflow: hidden;
    color: #fff;
    background: #65421c url(../images/bg-districts.jpg);
    box-shadow: 0 0 20px rgba(0,0,0,0.25) inset;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
}
ul.dropdown_ct_list {
    text-align: center;
}
.large-12 {
    width: 100%;
}
.districts-popup {
    font-size: 12px;
    line-height: 1.166;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
}
.districts-popup .head h2 {
    color: #FFFFFF;
    font-size: 28px;
    font-weight: normal;
    line-height: 1.2;
    margin: 0;
}
.Districts-main-title {
    margin-bottom: 20px !important;
}
.districts-popup .head .district-title {
    margin-bottom: 10%;
    text-align: center;
}
.districts-popup .head .district-img {
    text-align: center;
}
.districts-popup .head .district-super {
    text-align: center;
}
.districts-popup .head .district-charge {
    text-align: center;
}
ul.Superintendent-lists {
    text-align: left;
    padding-left: 18% !important;
    display: block !important;
}
.churches-options ul {
    padding: 0;
    margin: 0;
}
.districts-popup .district-btn {
    border-radius: 4px 4px 4px 4px;
    color: #FFFFFF;
    display: inline-block;
    font-size: 15px;
    height: 32px;
    line-height: 30px !important;
    margin: 16px 18px 0px 0px !important;
    text-align: center;
    padding: 0 10% !important;
    border: 1px solid #00949B;
} 
</style>
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
