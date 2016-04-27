<?php
/*
    Template Name: page-without-sidebar
*/
?>
<!doctype html>
<html class="no-js" lang="en">
<headersection>
  <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php if ( is_category() ) {

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

	} ?></title>
  
  
  
  
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
                              <div class="post-socials">

                      <div class="small-social-btn fb-button">
                          <iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;send=false&amp;layout=button_count&amp;width=87&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21&amp;locale=en_US" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:87px; height:21px;" allowTransparency="true"></iframe>
                      </div>

                      <div class="small-social-btn twitter-button">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-via="@alanpasho" data-text="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" >Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                      </div>

                      <div class="small-social-btn gplus">
                        <g:plusone href="<?php the_permalink() ?>" size="medium" annotation="bubble" ></g:plusone>
                      </div>

                      <?php if($site_options['fb_share_api'] !== '') { ?>
                      <div class="small-social-btn fb-share">
                        <div class="fb-share-button" data-href="https://example.com" data-layout="button_count"></div>
                      </div>
                      <?php } ?>

                    </div>
                    <!--/post socials-->
                    <div class='clearfix'></div>

        </div>
      </div>
    </div>
  </headertop>
  <!--========top heder end==============-->
  <headerbottom><!--========bottom heder start==============--> 
    <!-- NAVBAR MAIN
        ================================================== -->
    <div class="contain-to-grid Bottom-header-wrapper">
      <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
          <li class="logo_ct"> <a href="/" class="wp_logo_container brand-name"> <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" class="wp_logo"> </a> </li>
          <li class="toggle-topbar menu-icon"> <a href="#"><span>Menu</span></a> </li>
        </ul>
        <section class="top-bar-section">
          <li><a href='<?php echo home_url(); ?>'>Home</a></li>

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
                          <div class="large-3 medium-3 ntc-img-sec columns"><a href="/"><img alt="2013 Annual Conference" src="<?php echo get_template_directory_uri() ?>/images/churches-menu-bom-banner.png" style="border: 0px;"></a></div>
                        </div>
                        <div style="clear:both"> </div>
                        <div class="churches-options large-12">
                          <div class="churches-options1 large-2 medium-4 columns">
                            <div class="col first"><strong>Bishop</strong>
                              <li><a href='<?php echo home_url(); ?>'>Home</a></li>

                            </div>
                          </div>
                          <div class="churches-options2 large-2 medium-4 columns">
                            <div class="col second"><strong>Laity</strong>
                              <li><a href='<?php echo home_url(); ?>'>Home</a></li>

                            </div>
                          </div>
                          <div class="churches-options3 large-2 medium-3 columns">
                            <div class="col fourth"><strong>Pastors</strong>
                              <li><a href='<?php echo home_url(); ?>'>Home</a></li>

                            </div>
                          </div>
                            
                          
                          <div class="churches-options4 large-3 medium-3 columns">
                            <div class="col fifth"><strong>Churches</strong>
                              <li><a href='<?php echo home_url(); ?>'>Home</a></li>

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
                        <div class="churches-choose churches-choose-ct2  large12">
                          <div class="holder">
                            <div title="The Center for Missional Outreach encourages churches to be in ministry WITH the poor and to reach out to Global Health issues" class="col large-3 medium-4 columns"><a href="#"><img alt="Center for Missional Outreach" src="<?php echo get_template_directory_uri() ?>/images/img15.png"></a> <a href="#" class="button" target="_blank">Ministry with the Poor</a> <a href="#" class="button" target="_blank">Global Health</a> <a href="#" class="button" target="_blank">Zip Code Connection</a> </div>
                            <div title="The Center for New Church Development plants new churches and transform existing churches in North Texas!" class="col large-3 medium-4 columns"><a href="#" target="_blank"><img alt="Center for New Church Development" src="<?php echo get_template_directory_uri() ?>/images/imgNCD.png"></a> <a href="#" class="button" target="_blank">New Church Development</a> <a href="#" class="button" target="_blank">Healthy Church Initiative</a> </div>
                            <div title="The Center for Leadership Development supports Faith Formation in the Youth and Adults of North Texas.  Check out our home page for the seven programs we support." class="col large-3 medium-4 columns"><a href="#" target="_blank"><img alt="Center for Leadership Development" src="<?php echo get_template_directory_uri() ?>/images/imgCLD.png"></a> <a href="#" class="button" target="_blank">Home Page</a> </div>
                            <div title="The Center for Connectional Resources provides pension,health insurance, property &amp; liability insurance and other services for the North Texas Conference." class="col large-3 columns"><a href="#"><img alt="Center for Connectional Resources" src="<?php echo get_template_directory_uri() ?>/images/img18.png"></a> <a href="#" class="button">Home Page</a> </div>
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
                    <!----------2nd poup----------------->
                    <div class="row">
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
                              <a class="northwest-btn district-btn show-for-large-cust" href="/" style="border-color: #7300E6 !important;                border: #7300E6 !important;"><span>Contact us</span></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
    
  </headerbottom>
  <!--========bottom heder end==============--> 
<?php wp_footer() ?>
</body>
</headersection>

<!--========main content section start==============-->

<main class="main">
  <div class="main-content-section">
    <div class="row">
      <section id="main" class="secondary">
        <!-- left column -->
        <article class="large-12 medium-12 left-sidebar-ct columns">
          <div id="maincontent" class="mainwrapper">
            <div class="breadcrumbs">
              <li><a href="<?php echo home_url();?>">Home</a></li>
<li><a href="<?php echo get_permalink($post->post_parent);?>"><?php echo get_the_title($post->post_parent);?></a></li>
<li><?php echo get_the_title($post->ID);?></li>

            </div>
            <h1>Board of Laity</h1>
            <div class="inset"><a href="/" target="_blank"><img alt="North Texas Conference Laity" src="<?php echo get_template_directory_uri() ?>/images/2013-Laity-Presentations-Banner.png"></a></div>
            <h2><strong>The North Texas Annual Conference<br>
              Board of Laity</strong></h2>
            <h3>The Board is charged to:</h3>
            <ul>
              <li>foster an awareness of the role of the laity within the local congregations; and to promote and develop programs to cultivate an adequate understanding of the theological and biblical basis for lay life and work;</li>
              <li>develop and promote stewardship of time, talent, and possessions;</li>
              <li>provide for the training of lay members of the annual conference;</li>
              <li>provide support and direction for the ministry of the Laity on the local, district and annual conference levels and to promote the observation of Laity Sunday;</li>
              <li>provide organization, direction, and support for the development of local church lay leaders.</li>
            </ul>
            <h2><strong>2015-2016 Board of Laity</strong></h2>
            <img alt="North Texas Conference Laity" class="board_img_right" src="<?php echo get_template_directory_uri() ?>/images/XLGN4LZ6_palm_cross_BOL.jpg">
            <p><strong>Conference Lay Leader:</strong><a href="#" target="_blank">Linda Parks</a></p>
            <p><strong>Conference Lay Leader Elect:</strong><a href="#" target="_blank">Jeff Bouis</a></p>
            <p><strong>Associate Lay Leader:</strong><a href="#" target="_blank">Henry Lessner</a></p>
            <p><strong>Conference Council on Youth Ministries Chairperson:</strong><a href="#" target="_blank">Audrey Chumley</a></p>
            <p><strong>East District Lay Leader:</strong><a href="#" target="_blank">Jim Skaggs</a></p>
            <p><strong>East District Youth Lay Leader:</strong><a href="#" target="_blank">Cotton Riley</a></p>
            <p><strong>Metro District Lay Leader:</strong><a href="#" target="_blank">Billy Ratcliff</a></p>
            <p><strong>Metro District Youth Lay Leader:</strong><a href="#" target="_blank">Michaela Haskell</a></p>
            <p><strong>North Central District Lay Leader:</strong><a href="#" target="_blank">Alfred White</a></p>
            <p><strong>North Central District Youth Lay Leader:</strong><a href="#" target="_blank">Sidney Weidenbach</a></p>
            <p><strong>Northwest District Lay Leader:</strong><a href="#" target="_blank">Tom Busby</a></p>
            <p><strong>Northwest District Youth Lay Leader:</strong><a href="#" target="_blank">Madison Wiese</a></p>
            <p><strong>Conference United Methodist Women President:</strong><a href="#" target="_blank">Mae Alexander</a></p>
            <p><strong>Conference United Methodist Men President:</strong>To Be Elected by UMM</p>
            <p><strong>Lay Servant Ministry Coordinator:</strong><a href="#" target="_blank">Herman Totten</a></p>
            <p><strong>Conference Children, Youth &amp; Young Adult Ministry Coordinator:</strong><a href="#" target="_blank">Kelly Carpenter</a></p>
            <p><strong>Center Director for Leadership Development:</strong><a href="#" target="_blank">Marti Soper</a></p>
            <p><strong>Associate Director for Leadership Development:</strong><a href="#" target="_blank">Becky Hensley</a></p>
            <p>You can reach any member of the Board of Laity by calling the conference office, 972-526-5000 or toll free 800-815-6690.</p>
          </div>
        </article>
        <!-- right column -->
        
      </section>
    </div>
  </div>
</main>

<!--========main content section start==============-->

<!--===Footer section starts===-->
<footersection>
  <div class="footer-wrapper">
    <div class="footer-top_wrapper">
      <div class="row">
        <div class="large-1 medium-1 columns footer-logo"><a href="#" class="f-logo tipright" original-title="The Cross and Flame is a registered trademark, and the use is supervised by the General Council on Finance and Administration (GCFA) of The United Methodist Church. "><img src="<?php echo get_template_directory_uri() ?>/images/logo-footer.png" alt="United Methodist Cross and Flame"></a></div>
        <div class="f-nav large-11 medium-11 columns">
          <div class="row">
            <div class="col large-3 medium-6 columns fotter-cat-1"><strong>Home Pages</strong>
              <li><a href='<?php echo home_url(); ?>'>Home</a></li>

            </div>
            <div class="col large-3 medium-6 columns fotter-cat-2"><strong>NTC Centers</strong>
              <li><a href='<?php echo home_url(); ?>'>Home</a></li>

            </div>
            <div class="col large-3 medium-6 columns fotter-cat-3"><strong>Districts</strong>
              <li><a href='<?php echo home_url(); ?>'>Home</a></li>

            </div>
            <div class="col large-3 medium-6 columns fotter-cat-4"><strong>Directories</strong>
              <li><a href='<?php echo home_url(); ?>'>Home</a></li>

            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!------sub-footer---->
    
    <div class="sub-footer">
      <div class="holder row">
        <div class="large-4 medium-7 sub-footer-text-1 columns">
          <div class="northtexasaddress">
            <p><span style="font-size: 18px;"><strong>The North Texas Conference<br>
              of The United Methodist Church</strong></span><br>
              <a href="#" target="_blank" rel="nofollow" original-title="Click here to view directions">500 Maplelawn Drive, Plano, TX 75075</a><br>
              972-526-5000 | 800-815-6690 | fax 972-526-5003<br><br>
              
              <strong>Center Hours:</strong>Monday-Friday 8:30 a.m. to 4:30 p.m.<br><br>
            </p>
          </div>
        </div>
        <div class="large-3 medium-5 sub-footer-text-2 columns">
          <div class="bishopaddress">
            <p><span style="font-size: 18px;"><strong>Office of the Bishop</strong></span><br>
              P.O. Box 866188 Plano, TX 75086-6188<br>
              972-526-5000 | fax 972-526-5014</p>
            <a href="/" class="button" title="Subscribe to our Inspirational Emails!">Subscribe by Email</a></div>
        </div>
        <div class="large-5 sub-footer-text-3 columns">
          <div class="icon-nav">
            <ul>
              <li><a title="Set THIS page as your default home page for NorthTexasUMC.org" class="btn-auto-forward" href="#"><img alt="icon star" src="<?php echo get_template_directory_uri() ?>/images/icon-star.png"></a></li>
              <li><a title="Return to Guests Home Page" class="btn-forward-home" href="/"><img alt="icon home" src="<?php echo get_template_directory_uri() ?>/images/icon-home.png"></a></li>
              <li><a title="Get the RSS feed for this site" target="_blank" href="#"><img alt="icon rss" src="<?php echo get_template_directory_uri() ?>/images/icon-rss.png"></a></li>
              <li><a target="_blank" title="Follow United Methodist Churches of North Texas on Twitter" href="#"><img alt="icon tw" src="<?php echo get_template_directory_uri() ?>/images/icon-tw.png"></a></li>
              <li><a target="_blank" title="Follow United Methodist North Texas Churches on Facebook" href="#"><img alt="icon fb" src="<?php echo get_template_directory_uri() ?>/images/icon-fb.png"></a></li>
              <li style="background-color: #4e300e;" class="footer-search">
                <p><a href="#" class="btn-feedback"><span>Website Feedback</span></a></p>
              </li>
            </ul>
            <div class="copyright">
              <div class="copyright-align">
                        <?php global $site_options; ?>
       <span><?php echo $site_options['copyright_text']; ?> &copy; Copyright <?php echo date('Y'); ?>. All rights reserved. <?php echo do_shortcode('[full_church]'); ?></span>

              </div>
              <div id="managedby"><a href="#" title="Click here to find out more about ChurchBuzz">Methodist Church Website Design</a>by ChurchBuzz</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footersection>



<script>
      jQuery(document).foundation();
    </script>
<script>
	jQuery(document).foundation();

// below does the "Programs" info switch
jQuery('.is-hover a').on('mouseover', function() {
  var idx = jQuery(this).parent().index() + 2;
  jQuery('.info:nth-child(' + idx + ')').addClass('info-visible');
  jQuery('.info:nth-child(' + idx + ')').siblings().removeClass('info-visible');
});

jQuery('.dropdown').on('mouseout', function() {
  jQuery('.info:nth-child(1)').addClass('info-visible').siblings().removeClass('info-visible');
});
	</script>
</body>
</html>
