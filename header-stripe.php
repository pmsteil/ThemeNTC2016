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
              <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon-star.png" alt=""> </a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon-home.png" alt=""> </a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon-rss.png" alt=""> </a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon-tw.png" alt=""> </a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon-fb.png" alt=""> </a></li>
              <li class="top-search">
                <searchform>
                  <form role="search" name="search" class="form-search" method="get" action="/">
                    <input type="text" name="CAT_Search" title="site search" class="txt" id="CAT_Search" accesskey="4">
                    <input type="submit" class="btn-submit cat_button" value="Search">
                  </form>
                </searchform>
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
</style>
<div class="stripe_heder_wrapper">
	<div class="row">
    
    	<?php if ( is_active_sidebar( 'header-stripe' ) ) : ?>
				<?php dynamic_sidebar( 'header-stripe' ); ?>
          <?php endif; ?>
    </div>
</div>