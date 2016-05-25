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
          <li class="has-dropdown"><a class="drop-p-bg" href="#">For Churches</a>
            <ul class="dropdown m-menu">
              <!----DropDown 1st---->

              <li>
                <div class="row">
                  <div class="churches-popup">
                    <div class="head large-12">
                      <div class="large-6 medium-6 img-sec columns"> <img style="border: 2px solid #ffa024;" alt="Bishop Mike McKee" src="<?php echo get_template_directory_uri() ?>/images/bishop-mckee-Church-menu.jpg">
                        <div class="hover-head-text-sec">
                          <h3 style="margin: 0px; padding: 0px;">Welcome from<br>
                            <span style="margin-left: 20px;">Bishop McKee!</span></h3>
                        </div>
                      </div>
                      <div class="large-3 medium-3 bord-img-sec columns"> <a href="/"><img alt="NTC News - News about North Texas United Methodist Churches" src="<?php echo get_template_directory_uri() ?>/images/churches-menu-ntcnews-banner.gif" style="border: 0px;"></a> </div>
                      <div class="large-3 medium-3 ntc-img-sec columns"><a href="/"><img alt="2013 Annual Conference" src="<?php echo get_template_directory_uri() ?>/images/churches-menu-bom-banner.png" style="border: 0px;" class="pro_ads"></a></div>
                    </div>
                    <div style="clear:both"> </div>
                    <div class="churches-options large-12">
                      <div class="churches-options1 large-2 medium-4 columns">
                        <div class="col first"><strong class="pro_title">Bishop</strong>
                          <menulinks id="topmenu" name="Top Menu2" type ="multiple-dropdowns">
                            <ul>
                              <li><a href="/">Bishop's Home Page</a> </li>
                              <li><a href="/">Bishop's Bio</a> </li>
                              <li><a href="/">Bishop's Blog</a> </li>
                              <li><a href="/">Conference Staff</a> </li>
                              <li><a href="/">Contact the Bishop</a> </li>
                              <li><a href="/">NTC Cabinet</a> </li>
                              <li><a href="/" target="_blank">FACT Report</a> </li>
                            </ul>
                          </menulinks>
                        </div>
                      </div>
                      <div class="churches-options2 large-2 medium-4 columns">
                        <div class="col second"><strong>Laity</strong>
                          <menulinks id="topmenu" name="Top Menu3" type ="multiple-dropdowns">
                            <ul>
                              <li><a href="/">Laity Home Page</a> </li>
                              <li><a href="/">Lay Leader's Blog</a> </li>
                              <li><a href="/">Lay Servant Ministries</a> </li>
                              <li><a href="/">Board of Laity</a> </li>
                              <li><a href="/">United Methodist Men</a> </li>
                              <li><a href="/">United Methodist Women</a> </li>
                            </ul>
                          </menulinks>
                        </div>
                      </div>
                      <div class="churches-options3 large-2 medium-3 columns">
                        <div class="col fourth"><strong>Pastors</strong>
                          <menulinks id="topmenu" name="Top Menu4" type ="multiple-dropdowns">
                            <ul>
                              <li><a href="/">Pastor Directory</a> </li>
                              <li><a href="/">Appointment Updates</a> </li>
                              <li><a href="/" target="_blank">New Church Development</a> </li>
                              <li><a href="/" target="_blank">Healthy Church Initiative</a> </li>
                              <li><a href="/" target="_blank">Exploring the Call</a> </li>
                              <li><a href="/" target="_blank">Board of Ordained Ministry</a> </li>
                              <li><a href="/" target="_blank">FACT Report</a> </li>
                            </ul>
                          </menulinks>
                        </div>
                      </div>
                      <div class="churches-options4 large-3 medium-3 columns">
                        <div class="col fifth"><strong>Churches</strong>
                          <menulinks id="topmenu" name="Top Menu5" type ="multiple-dropdowns">
                            <ul>
                              <li><a href="/Churches.html">Church Directory</a>&nbsp;
                                <ul>
                                  <li><a href="/">East District</a> </li>
                                  <li><a href="/">Metro District</a> </li>
                                  <li><a href="/">North Central District</a> </li>
                                  <li><a href="/">Northwest District</a> </li>
                                </ul>
                              </li>
                              <li><a href="/">NTC Extension Ministries</a></li>
                              <li><a href="/" target="_blank" title="Helpful Links">Helpful Links</a></li>
                              <li><a href="/">Church Forms</a> </li>
                              <li><a href="/">Property &amp; Liability Ins</a> </li>
                              <li><a href="/">UMC Book of Discipline</a></li>
                              <li><a href="/">Agency Chairs</a></li>
                            </ul>
                          </menulinks>
                        </div>
                      </div>
                      <div class="churches-options5 large-3 medium-8 columns">
                        <div class="col third"> <strong>Annual Conference</strong>
                          <ul>
                            <li><a href="/">2016 Annual Conference</a></li>
                            <li><a href="/">2015 Conference Journal</a></li>
                            <li><a href="/">AC Nominations</a> </li>
                            <li><a href="/">2016 General Conference</a></li>
                            <li><a href="/">2016 Jurisdictional Conference</a></li>
                            <li><a href="/">Past Annual Conferences</a></li>
                            <li><a href="/">Past Conference Journals</a></li>
                            <li><a href="/">Conference History</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="churches-choose churches-choose-ct2  large12 ">
                      <div class="holder">
                        <div title="The Center for Missional Outreach encourages churches to be in ministry WITH the poor and to reach out to Global Health issues" class="col large-3 medium-4 columns"><a href="#"><img alt="Center for Missional Outreach" src="<?php echo get_template_directory_uri() ?>/images/img15.png"></a> <a href="#" class="button" target="_blank">Ministry with the Poor</a> <a href="#" class="button" target="_blank">Global Health</a> <a href="#" class="button" target="_blank">Zip Code Connection</a> </div>
                        <div title="The Center for New Church Development plants new churches and transform existing churches in North Texas!" class="col large-3 medium-4 columns"><a href="#" target="_blank"><img alt="Center for New Church Development" src="<?php echo get_template_directory_uri() ?>/images/imgNCD.png"></a> <a href="#" class="button" target="_blank">New Church Development</a> <a href="#" class="button" target="_blank">Healthy Church Initiative</a> </div>
                        <div title="The Center for Leadership Development supports Faith Formation in the Youth and Adults of North Texas.  Check out our home page for the seven programs we support." class="col large-3 medium-4 columns"><a href="#" target="_blank"><img alt="Center for Leadership Development" src="<?php echo get_template_directory_uri() ?>/images/imgCLD.png"></a> <a href="#" class="button" target="_blank">Home Page</a> </div>
                        <div title="The Center for Connectional Resources provides pension,
health insurance, property &amp; liability insurance and other services for the North Texas Conference." class="col large-3 columns"><a href="#"><img alt="Center for Connectional Resources" src="<?php echo get_template_directory_uri() ?>/images/img18.png"></a> <a href="#" class="button">Home Page</a> </div>
                        <div style="clear:both;"> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="has-dropdown"><a class="drop-p-bg" href="#">For Districts</a>
            <ul class="dropdown m-menu">
              <!----DropDown 2nd---->
              <li> 
            <?php echo do_shortcode('[For-Districts-Drop-Down-Menu]'); ?>
                <!----------2nd poup----------------->
                <?php /*?><div class="row">
                  <div class="districts-popup">
                    <div class="head large-12">
                      <div class="churches-options">
                        <h2 class="Districts-main-title">Making Disciples to Transform North Texas and The World!</h2>
                        <div class="col first large-3 medium-6 columns">
                          <div class="district-title"><strong>East District</strong></div>
                          <div class="district-img"><img src="<?php echo get_template_directory_uri() ?>/images/Vic-Casad-110-130.jpg" alt="Victor Casad" style="border: 0pt none currentcolor;"></div>
                          <div class="district-super"><strong>Victor Casad</strong></div>
                          <div class="district-charge"><strong>District Superintendent</strong></div>
                          <ul class="Superintendent-lists">
                            <li><a href="/">Home Page</a> </li>
                            <li><a href="/">Events</a> </li>
                            <li><a href="/">Church Directory</a> </li>
                            <li><a href="/">Clergy Directory</a> </li>
                            <li class="show-for-small"><a href="/">Contact us</a> </li>
                          </ul>
                          <a class="east-btn district-btn show-for-large-cust" href="/"><span>Contact us</span></a> </div>
                        <div class="col second large-3 medium-6 columns">
                          <div class="district-title"><strong>Metro District</strong></div>
                          <div class="district-img"><img src="<?php echo get_template_directory_uri() ?>/images/CammyGaston-110x130.jpg" alt="Camille Gaston" style="border: 0pt none currentcolor;"></div>
                          <div class="district-super"><strong>Camille Gaston</strong></div>
                          <div class="district-charge"><strong>District Superintendent</strong></div>
                          <ul class="Superintendent-lists">
                            <li><a href="/">Home Page</a> </li>
                            <li><a href="/">Events</a> </li>
                            <li><a href="/">Church Directory</a> </li>
                            <li><a href="/">Clergy Directory</a> </li>
                            <li class="show-for-small"><a href="/">Contact us</a> </li>
                          </ul>
                          <a class="metro-btn district-btn show-for-large-cust" href="/Metro-District/contact-us.html"><span>Contact us</span></a> </div>
                        <div class="col third large-3 medium-6 columns">
                          <div class="district-title"><strong>North Central District</strong></div>
                          <div class="district-img"><img src="<?php echo get_template_directory_uri() ?>/images/RonHenderson-110x130.gif" alt="Dr. Ronald Henderson" style="border: 0pt none currentcolor; width: 110px; height: 130px;"></div>
                          <div class="district-super"><strong>Dr. Ronald Henderson</strong></div>
                          <div class="district-charge"><strong>District Superintendent</strong></div>
                          <ul class="northcentral-links Superintendent-lists">
                            <li><a href="/">Home Page</a> </li>
                            <li><a href="/">Events</a> </li>
                            <li><a href="/">Church Directory</a> </li>
                            <li><a href="/">Clergy Directory</a> </li>
                            <li class="show-for-small"><a href="/">Contact us</a> </li>
                          </ul>
                          <a class="northcentral-btn district-btn show-for-large-cust" href="/"><span>Contact us</span></a> </div>
                        <div class="col fourth large-3 medium-6 columns">
                          <div class="district-title"><strong>Northwest District</strong></div>
                          <div class="district-img"><img src="<?php echo get_template_directory_uri() ?>/images/Marvin-Guier-2013-110x130.jpg" alt="L. Marvin Guier III" style="border: 0pt none currentcolor;"></div>
                          <div class="district-super"><strong>L. Marvin Guier III</strong></div>
                          <div class="district-charge"><strong>District Superintendent</strong></div>
                          <ul class="Superintendent-lists">
                            <li><a href="/">Home Page</a> </li>
                            <li><a href="/">Events</a> </li>
                            <li><a href="/">Church Directory</a> </li>
                            <li><a href="/">Clergy Directory</a> </li>
                            <li class="show-for-small"><a href="/">Contact us</a> </li>
                          </ul>
                          <a class="northwest-btn district-btn show-for-large-cust" href="/" style="border-color: #7300E6 !important;
                border: #7300E6 !important;"><span>Contact us</span></a> </div>
                      </div>
                    </div>
                  </div>
                </div><?php */?>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </section>
  </nav>
</div>
<!--end .contain-to-grid-->
</div>
<!--/NAVBAR MAIN--> 
<!--========bottom heder end==============--> 