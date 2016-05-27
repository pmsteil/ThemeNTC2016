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
	jQuery('ul.icon-nav li').parent().parent().unwrap();
	});
	
</script>
