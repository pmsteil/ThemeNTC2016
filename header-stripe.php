<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>
<?php if ( is_category() ) {

		echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );

	} elseif ( is_tag() ) {

		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );

	} elseif ( is_archive() ) {

		wp_title(''); echo ' Archive | '; bloginfo( 'name' );

	} elseif ( is_search() ) {

		echo 'Search for &quot;'. esc_html(get_search_query()) .'&quot; | '; bloginfo( 'name' );

	} elseif ( is_front_page() ) {

		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );

	}  elseif ( is_404() ) {

		echo 'Error 404 Not Found | '; bloginfo( 'name' );

	} elseif ( is_single() ) {

		wp_title('');

	} else {

		echo wp_title(''); echo ' | '; bloginfo( 'name' );

	} ?>
</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<!--*********favicon******css***************-->
<favicon>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
</favicon>
<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
 <!--========top heder starts==============-->
  <headertop>
    <div class="top-header-wrapper">
      <div class="row">
        <div class="large-12">
          <single-socials>
            <ul class="icon-nav">
            <?php /*?>  <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon-star.png" alt=""> </a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon-home.png" alt=""> </a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon-rss.png" alt=""> </a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon-tw.png" alt=""> </a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon-fb.png" alt=""> </a></li><?php */?>
			  <?php 
		 if ( is_active_sidebar( 'social-icon' ) ) : 
				 dynamic_sidebar( 'social-icon' ); 
        endif; ?>
              <li class="top-search">
                 <?php get_search_form() ?>
              </li>
            </ul>
          </single-socials>
        </div>
      </div>
    </div> 
  </headertop>
  <!--========top heder end==============-->
<!--========bottom heder start==============--> 
<!-- NAVBAR MAIN
        ================================================== -->
<div class="contain-to-grid Bottom-header-wrapper">
  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="logo_ct"> <a href="<?php echo get_home_url(); ?>" class="wp_logo_container brand-name"> <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" class="wp_logo"> </a> </li>
      <li class="toggle-topbar menu-icon"> <a href="#"><span>Menu</span></a> </li>
    </ul>
    <section class="top-bar-section">
    	<?php
	        wp_nav_menu( array(
	            'theme_location' => 'topmenu',
	            'container' => false,
	            'depth' => 0,
	            'items_wrap' => '<ul class="right_menu_sec-list">%3$s</ul>',
				
				
				 'walker' => new reverie_walker( array(
	                'in_top_bar' => true,
	                'item_type' => 'li',
	                'menu_type' => 'main-menu'
	            ) ),	          
	        ) );
			
			
		
	    ?>
     
      <div class="dropdown_ct">
        
		<ul class="left dropdown_ct_list">
		<?php 
		 if ( is_active_sidebar( 'c-dropdowns' ) ) : 
				 dynamic_sidebar( 'c-dropdowns' ); 
        endif; ?>
        
        <?php
		 if ( is_active_sidebar( 'd-dropdowns' ) ) : 
				 dynamic_sidebar( 'd-dropdowns' ); 
          endif; ?>
        </ul>
       
      </div>
    </section>
  </nav>
</div>
<!--end .contain-to-grid-->
</div>
<!--/NAVBAR MAIN--> 
<!--========bottom heder end==============--> 
<script>
jQuery(document).ready(function(){
	jQuery('.top-bar-section ul.dropdown.m-menu').unwrap();
	});
</script>
<style>
.district-popup.metro-district-popup {
    width: 100%;
}
.metro-district-popup .col-left1 {
    text-align: left;   
	 padding-left: 30px !important;
}
.col-left1 a {
    padding: 0px !important;
}
.metro-district-popup .align-left {
    float: left;
}
.metro-district-popup .align-left {
    float: left;
}
.district-popup .col-center1 ul li a {
    padding-left: 0px !important;
    line-height: 20px !important;
}
.col-center1 {
    text-align: left;
    padding-left: 30px !important;
}
.district-popup .col-right1 ul li a {
    padding-left: 0px !important;
    line-height: 20px !important;
}
.col-right1 {
    text-align: left;
    padding-left: 30px !important;
} 
.col-right1 .btn-learn-more,.col-center1 .btn-learn-more{
	border: 1px solid #9b5512 !important;
    display: inline-block  !important;
    text-align: center  !important;
    background-color: #b36015 !important;
    background: -moz-linear-gradient(top, #c98a1d 0%, #b36015 100%) !important;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #c98a1d), color-stop(100%, #b36015)) !important;
    background: -webkit-linear-gradient(top, #c98a1d 0%, #b36015 100%) !important;
    background: -o-linear-gradient(top, #c98a1d 0%, #b36015 100%) !important;
    background: -ms-linear-gradient(top, #c98a1d 0%, #b36015 100%) !important;
    background: linear-gradient(top, #c98a1d 0%, #b36015 100%) !important;
    border-radius: 4px !important;
    -webkit-border-radius: 4px !important;
    -moz-border-radius: 4px !important;
    height: 30px !important;
    line-height: 28px !important;
    color: #fff !important;
    font-size: 12px !important;
    text-shadow: none !important;
}
.col-right1 .btn-learn-more span,.col-center1 .btn-learn-more span {
    border: none !important;
    display: block !important;
    border-radius: 0px !important;
    -webkit-border-radius: 0px !important;
    -moz-border-radius: 0px !important;
    height: 28px !important;
}
ul.metro-district-details-list {
    float: left !important;
    width: 49% !important;
}
ul.metro-district-details-list li a{
	line-height: 20px !important;
}
.metro-btn-holder a span {
    border: none !important;
    padding: 0px !important;
    border-radius: 0px !important;
    height: auto !important;
}
.metro-district-popup .metro-btn-holder a {
    padding-left: 30px !important;
    padding-right: 30px !important;
    border: 1px solid #00949b !important;
} 
div#text-114 {
    display: inline-block;
}
.page-green1.district-popup {
    background: #5f3308 url(http://dev.northtexasumc.org/wp-content/uploads/2016/06/bg-district-green.jpg) !important;
    border-color: #3b450b !important;
}
.page-green1.district-popup .btn-holder {
    background: #515f0c url(http://dev.northtexasumc.org/wp-content/uploads/2016/06/bg-btn-holder-green.png) repeat-x !important;
}
.page-green1.district-popup .btn-holder a span {
    border-color: #859a15 !important;
} 
.page-green1.district-popup .btn-holder a {
    border-color: #3c4707 !important;
    background-color: #596b0c !important;
    background: -moz-linear-gradient(top, #6f8014 0%, #596b0c 100%) !important;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #6f8014), color-stop(100%, #596b0c)) !important;
    background: -webkit-linear-gradient(top, #6f8014 0%, #596b0c 100%) !important;
    background: -o-linear-gradient(top, #6f8014 0%, #596b0c 100%) !important;
    background: -ms-linear-gradient(top, #6f8014 0%, #596b0c 100%) !important;
    background: linear-gradient(top, #6f8014 0%, #596b0c 100%) !important;
}
.page-green1.district-popup .align-left,.page-red.district-popup .align-left,.page-darkpurple1.district-popup .align-left,.page-blue2.district-popup .align-left,.page-navy.district-popup .align-left {
    margin: 8px 18px 18px 0;
}
.page-red.district-popup .btn-holder a span {
    border-color: #b02410 !important;
}
.page-red.district-popup .btn-holder a{
    border-color: #7b190c !important;
    background-color: #8a180a !important;
    background: -moz-linear-gradient(top, #9e2612 0%, #8a180a 100%) !important;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #9e2612), color-stop(100%, #8a180a)) !important;
    background: -webkit-linear-gradient(top, #9e2612 0%, #8a180a 100%) !important;
    background: -o-linear-gradient(top, #9e2612 0%, #8a180a 100%) !important;
    background: -ms-linear-gradient(top, #9e2612 0%, #8a180a 100%) !important;
    background: linear-gradient(top, #9e2612 0%, #8a180a 100%) !important;
}
.page-red.district-popup {
    background: #961d0d url(http://dev.northtexasumc.org/wp-content/uploads/2016/06/bg-district-red.jpg) !important;
    border-color: #601107 !important;
}
.page-red.district-popup .btn-holder {
    background: #801a0d url(http://dev.northtexasumc.org/wp-content/uploads/2016/06/bg-btn-holder-red.png) repeat-x;
}
.page-darkpurple1.district-popup {
    background: #5f3308 url(http://dev.northtexasumc.org/wp-content/uploads/2016/06/bg-district-darkpurple.jpg);
    border-color: #6700CE;
}
.page-darkpurple1.district-popup .btn-holder {
    background: #2E005B url(../images/new/bg-btn-holder-darkpurple.png) repeat-x;
}
.page-darkpurple1.district-popup .btn-holder a{
	border-color: #7300E6 !important;
    border: #7300E6 !important;
    background: #2E005B !important;
    background-color: #2E005B !important;
    background: -moz-linear-gradient(top, #46008C 0%, #2E005B 100%) !important;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #46008C), color-stop(100%, #2E005B)) !important;
    background: -webkit-linear-gradient(top, #46008C 0%, #2E005B 100%) !important;
    background: -o-linear-gradient(top, #46008C 0%, #2E005B 100%) !important;
    background: -ms-linear-gradient(top, #46008C 0%, #2E005B 100%) !important;
    background: linear-gradient(top, #46008C 0%, #2E005B 100%) !important;
}
.page-purple2.district-popup {
    background-color: #660066;
    border-color: #B381B3;
    background: #660066;
}
.page-purple2.district-popup .btn-holder {
    background-color: #B381B3;
    background: #B381B3;
}
.page-purple2.district-popup .btn-holder a {
    border-color: #B381B3 !important;
    background-color: #660066 !important;
    background: #660066 !important;
    background: -moz-linear-gradient(top, #B381B3 0%, #660066 100%) !important;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #B381B3), color-stop(100%, #660066)) !important;
    background: -webkit-linear-gradient(top, #B381B3 0%, #660066 100%) !important;
    background: -o-linear-gradient(top, #B381B3 0%, #660066 100%) !important;
    background: -ms-linear-gradient(top, #B381B3 0%, #660066 100%) !important;
    background: linear-gradient(top, #B381B3 0%, #660066 100%) !important;
}
.page-blue2.district-popup {
    background: #2D70B3 url(http://dev.northtexasumc.org/wp-content/uploads/2016/06/bg-BOM.jpg);
    border-color: #479ACB;
}
.page-blue2.district-popup .btn-holder {
    background: #2D70B3 url(http://dev.northtexasumc.org/wp-content/uploads/2016/06/bg-btn-holder-BOM.jpg) repeat-x;
} 
.page-blue2.district-popup .btn-holder a{
    border-color: #479ACB !important;
    background-color: #2D70B3 !important;
    background: -moz-linear-gradient(top, #479ACB 0%, #2D70B3 100%) !important;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #479ACB), color-stop(100%, #2D70B3)) !important;
    background: -webkit-linear-gradient(top, #479ACB 0%, #2D70B3 100%) !important;
    background: -o-linear-gradient(top, #479ACB 0%, #2D70B3 100%) !important;
    background: -ms-linear-gradient(top, #479ACB 0%, #2D70B3 100%) !important;
    background: linear-gradient(top, #479ACB 0%, #2D70B3 100%) !important;
}
.page-blue2.district-popup .btn-holder a span {
    border-color: #58B2D7 !important;
}
.page-navy.district-popup {
    background: #003366 url(http://dev.northtexasumc.org/wp-content/uploads/2016/06/bg-district-navy.jpg);
    border-color: #00458A;
}
.page-navy.district-popup .btn-holder {
    background: #00458A;
}
.page-navy.district-popup .btn-holder a{
	border-color: white !important;
    border: white !important;
    background: #003366 !important;
    background-color: #003366 !important;
    background: -moz-linear-gradient(top, #003366 0%, #002448 100%) !important;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #003366), color-stop(100%, #002448)) !important;
    background: -webkit-linear-gradient(top, #003366 0%, #002448 100%) !important;
    background: -o-linear-gradient(top, #003366 0%, #002448 100%) !important;
    background: -ms-linear-gradient(top, #003366 0%, #002448 100%) !important;
    background: linear-gradient(top, #003366 0%, #002448 100%) !important;
}
.district-popup.ext-minister-d.metro-district-popup {
    background: #620000;
    border-color: #620000;
}
.district-popup.ext-minister-d .btn-holder{
    background: #801a0d  url(http://dev.northtexasumc.org/wp-content/uploads/2016/06/bg-btn-holder-red-1.png);
    border-color: #801a0d;
}
.district-popup.ext-minister-d .btn-holder a{
	border-color: #7b190c !important;
    background-color: #620000 !important;
    background: -moz-linear-gradient(top, #620000 0%, #8a180a 100%) !important;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #620000), color-stop(100%, #8a180a)) !important;
    background: -webkit-linear-gradient(top, #620000 0%, #8a180a 100%) !important;
    background: -o-linear-gradient(top, #620000 0%, #8a180a 100%) !important;
    background: -ms-linear-gradient(top, #620000 0%, #8a180a 100%) !important;
    background: linear-gradient(top, #620000 0%, #8a180a 100%) !important;
	border:1px solid #fff !important;
}
@media only screen  and (max-width: 767px){
.dropdown_ct .dropdown_ct_list li:last-child a.drop-p-bg {
    background: none !important;
}
.metro-district-popup .col-left1 {
    text-align: center;
    padding-left: 30px !important;
}
.metro-district-popup .align-left {
    float: none !important;
}
ul.metro-district-details-list {
    float: none !important;
    width: 100% !important;  
	 text-align: left !important;
}
.col-left1 a {
    padding-left: 15px !important;
}
.district-popup .col-center1 ul li a,.district-popup .col-right1 ul li a {
    padding-left: 15px !important;
	    padding-top: 0px;
    padding-bottom: 0px;
}
.metro-district-popup .show-for-large-cust-metro {
    display: none !important;
}
.district-popup .btn-holder a, .districts-popup .metro-btn {
    display: block !important;
    float: none !important;
    width: 100% !important;
}
.district-popup .btn-holder .over {
    position: static !important;  padding-bottom: 40px;
}
.district-popup .btn-holder {
    height: auto;
}
.district-popup .btn-holder .frame {
    padding: 0 30px;
	position: static !important;
}
.metro-btn-holder a span {
    line-height: 14px;
}
}
@media only screen and (max-width: 640px){
.secondary {
    border-radius: 0px;
    padding: 23px 15px;
}
}
.breadcrumbs.breadcrumbs_custom a {
    text-decoration: none;
    color: #999;
    font: 13px/1.5 'Open Sans', Arial, Helvetica, Verdana, sans-serif;
    text-transform: capitalize;
}
.breadcrumbs.breadcrumbs_custom > *{
	color:#b45f06;
	line-height: 18px;
}
.breadcrumbs{
	color:#b45f06;
}

</style>
<div class="stripe_heder_wrapper">
	<div class="row">
    
    	<?php if ( is_active_sidebar( 'header-stripe' ) ) : ?>
				<?php dynamic_sidebar( 'header-stripe' ); ?>
          <?php endif; ?>
    </div>
</div>