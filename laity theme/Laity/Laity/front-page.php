<?php
/*
    Template Name: front-page
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
                          <div class="large-3 medium-3 ntc-img-sec columns"><a href="/"><img alt="2013 Annual Conference" src="<?php echo get_template_directory_uri() ?>/images/churches-menu-bom-banner.png" style="border: 0px;" class="pro_ads"></a></div>
                        </div>
                        <div style="clear:both"> </div>
                        <div class="churches-options large-12">
                          <div class="churches-options1 large-2 medium-4 columns">
                            <div class="col first"><strong class="pro_title">Bishop</strong>
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
        <article class="large-8 medium-7 index_article left-sidebar-ct columns">
          <div id="maincontent">
            <slickslider category="home"><img class="front-page-slider-margin" src="<?php echo get_template_directory_uri() ?>/images/front-page-slider1.PNG"/></slickslider>
            <slickslider category="home2"><img class="front-page-slider-margin" src="<?php echo get_template_directory_uri() ?>/images/front-page-slider2.PNG"/></slickslider>
            <div id="District-Page">
              <div class="box">
                <div class="title title_index">
                  <h2>News Around the North Texas Conference</h2>
                </div>
                <div class="box-holder">
                  <div class="news-row">
                    <!--Add blog here -->
                    
                    <div id="blogbackground">
                      <div class="post-body">
                        <li class="blog-list-title" id="postnum1432883"><span class="blog-list-title-only"><a href="#" title="2016 Course of Study School">New Church Development Hosting a “Passing the Baton” Workshop: May 3-4, 2016</a></span>
                          <div id="postText1432883"><img class="blog-thumbnail" src="<?php echo get_template_directory_uri() ?>/images/The-Change-Over-Zone-198x300.jpg">Passing the Baton Workshop May 3, 2016, 1:00 p.m.-5:00 p.m. May 4, 2016, 9:00 a.m.-4:00 p.m. North Texas Conference Center 500 Maplelawn Dr. Plano, TX 75075 Free for North Texas Conference Staff Registration an...<a class="blog-read-more" href="../board-of-ministry/2016-course-of-study-school.html">read&nbsp;more&nbsp;»</a><br>
                          </div>
                        </li>
                      </div>
                    </div>
                    <div id="blogbackground">
                      <div class="post-body">
                        <li class="blog-list-title" id="postnum1017156"><span class="blog-list-title-only"><a href="../board-of-ministry/2014-15-course-of-study-school.html" title="2015 Course of Study School">Free Children and Youth Ministry Volunteer Training: August 13, 2016</a></span>
                          <div id="postText1017156"><img class="blog-thumbnail" src="<?php echo get_template_directory_uri() ?>/images/we-love-our-volunteers.jpg">Free Volunteer Training for Children and Youth Ministries August 13, 2016 9:00 a.m.-12:00 p.m. Christ UMC Farmers Branch 2807 Valwood Pkwy. Farmers Branch, TX 75234 The Center for Leadership Development invites vol...<a class="blog-read-more" href="../board-of-ministry/2014-15-course-of-study-school.html">read&nbsp;more&nbsp;»</a><br>
                          </div>
                        </li>
                      </div>
                    </div>
                    <div id="blogbackground">
                      <div class="post-body">
                        <li class="blog-list-title" id="postnum1017156"><span class="blog-list-title-only"><a href="../board-of-ministry/2014-15-course-of-study-school.html" title="2015 Course of Study School">April 2016 Leadership Webinars</a></span>
                          <div id="postText1017156"><img class="blog-thumbnail" src="<?php echo get_template_directory_uri() ?>/images/UpcomingWebinars2016-Img.JPG">Free Leadership Development Webinars Transitions: Our Pastor Is Moving - Next Steps! Thursday, April 7, 2016 7:00 p.m. Central Daylight Time Presenter: Jacqui King, Director of Leadership for Congregational ...<a class="blog-read-more" href="../board-of-ministry/2014-15-course-of-study-school.html">read&nbsp;more&nbsp;»</a><br>
                          </div>
                        </li>
                      </div>
                    </div>
                    <div id="blogbackground">
                      <div class="post-body">
                        <li class="blog-list-title" id="postnum1017156"><span class="blog-list-title-only"><a href="../board-of-ministry/2014-15-course-of-study-school.html" title="2015 Course of Study School">Know Your Number: Enneagram Workshop for Clergy and Lay Staff: May 26, 2016</a></span>
                          <div id="postText1017156"><img class="blog-thumbnail" src="<?php echo get_template_directory_uri() ?>/images/enneagram.jpg">Know Your Number: Enneagram for Clergy and Lay Staff Thursday, May 26, 2016 8:30 a.m.-5:00 p.m. Prothro Center at Lake Texoma 269 Methodist Lane Pottsboro, TX 75076 Register Now The Enneagram is an ancient person...<a class="blog-read-more" href="../board-of-ministry/2014-15-course-of-study-school.html">read&nbsp;more&nbsp;»</a><br>
                          </div>
                        </li>
                      </div>
                    </div>
                    
                    <div id="blogbackground">
                      <div class="post-body">
                        <li class="blog-list-title" id="postnum1440745"><span class="blog-list-title-only"><a href="/north-texas-conference-news/running-4-clean-water-april-23-2016" title="Running 4 Clean Water: April 23, 2016">Running 4 Clean Water: April 23, 2016</a></span>
                            <div id="postText1440745" style=""><img class="blog-thumbnail" src="<?php echo get_template_directory_uri() ?>/images/running-for-clean-water-2016.png">
                                Running 4 Clean Water 
                                5K Run/1 Mile Fun Run 2016 
                                Saturday, April 23, 2016 
                               8:30 a.m. start time (rain or shine) 
                                O’Banion Middle School 
                                700 Birchwood Drive 
                               Garland, TX 75043 
                                Presented by: 
                                Axe Memorial United Met... <a class="blog-read-more" href="/north-texas-conference-news/running-4-clean-water-april-23-2016">read&nbsp;more&nbsp;»</a><br></div>
                            <script type="text/javascript">displaypost('postText1440745','postnum1440745',225);</script> 
                          </li>
                      </div>
                    </div>
                    <div id="blogbackground">
                      <div class="post-body">
                         <li class="blog-list-title" id="postnum1448615"><span class="blog-list-title-only"><a href="/birth-announcements/rev-dan-and-angie-gurleys-granddaughter-sagelee-is-born-march-29-2016" title="Rev. Dan and Angie Gurley's granddaughter, Sagelee, is born March 29, 2016">Rev. Dan and Angie Gurley's granddaughter, Sagelee, is born March 29, 2016</a></span>
                            <div id="postText1448615" style=""><img class="blog-thumbnail" src="<?php echo get_template_directory_uri() ?>/images/baby-footprint-pink.png"> 

                       Rev. Dan Gurley (First UMC Blue Ridge) and his wife, Angie, are celebrating the birth of their new granddaughter, Sagelee Robbin Stowe, born last Tuesday, March 29, 2016, at 11:34 a.m. She weighed 7 lbs. 4 oz. and was 19... <a class="blog-read-more" href="/birth-announcements/rev-dan-and-angie-gurleys-granddaughter-sagelee-is-born-march-29-2016">read&nbsp;more&nbsp;»</a><br></div>
                            <script type="text/javascript">displaypost('postText1448615','postnum1448615',225);</script> 
                          </li>
                      </div>
                    </div>
                    <div id="blogbackground">
                      <div class="post-body">
                   <li class="blog-list-title" id="postnum1448996"><span class="blog-list-title-only"><a href="/north-texas-conference-news/faith-and-politics-forum-at-trinity-umc" title="United Methodists and politics: UNT political science professors plan forum">United Methodists and politics: UNT political science professors plan forum</a></span>
                   <div id="postText1448996" style=""><img class="blog-thumbnail" src="http://www.northtexasumc.org/images/og/StreetSign-og.JPG"> Faith and Politics Forum 
                        Tuesday, April 26, 2016 
                       7:00 p.m.  
                        Trinity United Methodist Church 
                       633 Hobson Lane 
                       Denton, Texas, 76205 
                        Is it OK to talk about faith and politics together? Not only is it OK, it is our Chris... <a class="blog-read-more" href="/north-texas-conference-news/faith-and-politics-forum-at-trinity-umc">read&nbsp;more&nbsp;»</a><br></div>
                       <script type="text/javascript">displaypost('postText1448996','postnum1448996',225);</script> 
                     </li> 
                          
                      </div>
                    </div>
                    <div id="blogbackground">
                      <div class="post-body">
                       <li class="blog-list-title" id="postnum1448566"><span class="blog-list-title-only"><a href="/death-announcements/patsy-affleck" title="Patsy Affleck">Patsy Affleck</a></span>
                          <div id="postText1448566" style=""><img class="blog-thumbnail" src="<?php echo get_template_directory_uri() ?>/images/weve-lost-a-friend-og.png">
                            Patsy Affleck passed away March 29, 2016, at her home in the company of her loving husband of 61 years, Bert. The family gives thanks that she has entered the loving arms of God, and give thanks for her joyful spirit. 
                            The... <a class="blog-read-more" href="/death-announcements/patsy-affleck">read&nbsp;more&nbsp;»</a><br></div>
                          <script type="text/javascript">displaypost('postText1448566','postnum1448566',225);</script> 
                        </li>
                      </div>
                    </div>
                    <div id="blogbackground">
                      <div class="post-body">
                        <li class="blog-list-title" id="postnum1435681"><span class="blog-list-title-only"><a href="/north-texas-conference-news/argyle-umc-to-sponsor-reach-every-generation-workshop-april-2-2016" title="Argyle UMC to sponsor Reach Every Generation Workshop: April 2, 2016">Argyle UMC to sponsor Reach Every Generation Workshop: April 2, 2016</a></span>
                        <div id="postText1435681" style=""><img class="blog-thumbnail" src="<?php echo get_template_directory_uri() ?>/images/ncd-logo-greenbg.png"> Reach Every Generation Workshop 
                            Saturday, April 2, 2016 
                           9:00 a.m. 
                            Argyle United Methodist Church 
                           9033 Fort Worth Dr. 
                           Argyle, TX 76226 
                            In partnership with New Church Development, Argyle UMC will sponsor a “Reach Ever... <a class="blog-read-more" href="/north-texas-conference-news/argyle-umc-to-sponsor-reach-every-generation-workshop-april-2-2016">read&nbsp;more&nbsp;»</a><br></div>
                        <script type="text/javascript">displaypost('postText1435681','postnum1435681',225);</script> 
                      </li>
                      </div>
                    </div>
                    <div id="blogbackground">
                      <div class="post-body">
                        <li class="blog-list-title" id="postnum1448190"><span class="blog-list-title-only"><a href="/death-announcements/jeep-hensley" title="'Jeep' Hensley">'Jeep' Hensley</a></span>
                            <div id="postText1448190" style=""><img class="blog-thumbnail" src="<?php echo get_template_directory_uri() ?>/images/weve-lost-a-friend-og.png">
                            "Jeep" Hensley, father of Rev. Ben David Hensley, Associate Pastor of Oak Lawn UMC, died on March 23, 2016. Arrangements are pending. 

                           Please keep Ben, his wife Rev. Becky David Hensley, Associate Director of the Center f... <a class="blog-read-more" href="/death-announcements/jeep-hensley">read&nbsp;more&nbsp;»</a><br></div>
                            <script type="text/javascript">displaypost('postText1448190','postnum1448190',225);</script> 
                          </li>
                      </div>
                    </div>
                  </div>
                  <div style="text-align: right; font-weight: bold;"><a href="../board-of-ministry.html" style="font-weight: bold;"></a><a href="../board-of-ministry.html">More News and Events</a></div>
                </div>
              </div>
            </div>
          </div>
            <div class="footer_media">
            <a class="readmore" href="/_blog/North_Texas_Conference_News">Read more News Around The Conference »</a><br>
            <a href="/subscribe" class="button" title="Subscribe to The North Texas Connection email news" style="margin-top: 5px; margin-right: 20px; margin-bottom: 10px;">Subscribe</a>
            <a href="/stories" class="button" title="Submit a story" style="margin-top: 5px; margin-bottom: 10px;">Submit a Story</a>
           <br>
            Subscribe to the RSS Feed: 
            <a target="_blank" href="images/icon-rss.png?vs=b2004.r486545-phase1" id="rss" catid="58,12423" sw="1"><img style="border-width: 0px; border-style: solid;" src="<?php echo get_template_directory_uri() ?>/images/icon-rss.png?vs=b2004.r486545-phase1" alt="RSS" height="16" width="16"></a>
        
             </div><br><br>  
        </article>
        <!-- right column -->
        
        <aside class="large-4 medium-5 columns right-sidebar-ct">
          <?php get_sidebar( 'sidebarmain' ) ?>
        </aside>
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
