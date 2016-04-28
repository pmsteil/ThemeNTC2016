<?php
/*
    Template Name: front-page
*/
?>
<?php get_header(); ?>
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
                     <?php
						$type = 'news';
						$args=array(
						  'post_type' => $type,
						  'post_status' => 'publish',
						  'posts_per_page' => 20,
						  'caller_get_posts'=> 1,
						  'order'=> 'ASC', 
						  'orderby' => 'id'
						);
						$my_query = null;
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) {
						  while ($my_query->have_posts()) : $my_query->the_post(); ?>
							
                          <div id="blogbackground">
                              	<div class="post-body">
                                	<li class="blog-list-title" id="postnum1432883">
                                    <span class="blog-list-title-only">
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                    </span>
                                   <div id="postText1432883">
                                   	<?php the_post_thumbnail(); ?>
                                    <?php the_content(); ?>
                                    <a class="blog-read-more" href="<?php the_permalink() ?> rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">read&nbsp;more&nbsp;»</a>
                                   </div>
                                	</li>
                                </div>
                            </div>
							<?php
						  endwhile;
						}
						wp_reset_query();  // Restore global post data stomped by the_post().
						?>
                    
                  <?php /*?>  
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
                          <div id="postText1440745" style=""><img class="blog-thumbnail" src="<?php echo get_template_directory_uri() ?>/images/running-for-clean-water-2016.png"> Running 4 Clean Water 
                            5K Run/1 Mile Fun Run 2016 
                            Saturday, April 23, 2016 
                            8:30 a.m. start time (rain or shine) 
                            O’Banion Middle School 
                            700 Birchwood Drive 
                            Garland, TX 75043 
                            Presented by: 
                            Axe Memorial United Met... <a class="blog-read-more" href="/north-texas-conference-news/running-4-clean-water-april-23-2016">read&nbsp;more&nbsp;»</a><br>
                          </div>
                          <script type="text/javascript">displaypost('postText1440745','postnum1440745',225);</script> 
                        </li>
                      </div>
                    </div>
                    <div id="blogbackground">
                      <div class="post-body">
                        <li class="blog-list-title" id="postnum1448615"><span class="blog-list-title-only"><a href="/birth-announcements/rev-dan-and-angie-gurleys-granddaughter-sagelee-is-born-march-29-2016" title="Rev. Dan and Angie Gurley's granddaughter, Sagelee, is born March 29, 2016">Rev. Dan and Angie Gurley's granddaughter, Sagelee, is born March 29, 2016</a></span>
                          <div id="postText1448615" style=""><img class="blog-thumbnail" src="<?php echo get_template_directory_uri() ?>/images/baby-footprint-pink.png"> Rev. Dan Gurley (First UMC Blue Ridge) and his wife, Angie, are celebrating the birth of their new granddaughter, Sagelee Robbin Stowe, born last Tuesday, March 29, 2016, at 11:34 a.m. She weighed 7 lbs. 4 oz. and was 19... <a class="blog-read-more" href="/birth-announcements/rev-dan-and-angie-gurleys-granddaughter-sagelee-is-born-march-29-2016">read&nbsp;more&nbsp;»</a><br>
                          </div>
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
                            Is it OK to talk about faith and politics together? Not only is it OK, it is our Chris... <a class="blog-read-more" href="/north-texas-conference-news/faith-and-politics-forum-at-trinity-umc">read&nbsp;more&nbsp;»</a><br>
                          </div>
                          <script type="text/javascript">displaypost('postText1448996','postnum1448996',225);</script> 
                        </li>
                      </div>
                    </div>
                    <div id="blogbackground">
                      <div class="post-body">
                        <li class="blog-list-title" id="postnum1448566"><span class="blog-list-title-only"><a href="/death-announcements/patsy-affleck" title="Patsy Affleck">Patsy Affleck</a></span>
                          <div id="postText1448566" style=""><img class="blog-thumbnail" src="<?php echo get_template_directory_uri() ?>/images/weve-lost-a-friend-og.png"> Patsy Affleck passed away March 29, 2016, at her home in the company of her loving husband of 61 years, Bert. The family gives thanks that she has entered the loving arms of God, and give thanks for her joyful spirit. 
                            The... <a class="blog-read-more" href="/death-announcements/patsy-affleck">read&nbsp;more&nbsp;»</a><br>
                          </div>
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
                            In partnership with New Church Development, Argyle UMC will sponsor a “Reach Ever... <a class="blog-read-more" href="/north-texas-conference-news/argyle-umc-to-sponsor-reach-every-generation-workshop-april-2-2016">read&nbsp;more&nbsp;»</a><br>
                          </div>
                          <script type="text/javascript">displaypost('postText1435681','postnum1435681',225);</script> 
                        </li>
                      </div>
                    </div>
                    <div id="blogbackground">
                      <div class="post-body">
                        <li class="blog-list-title" id="postnum1448190"><span class="blog-list-title-only"><a href="/death-announcements/jeep-hensley" title="'Jeep' Hensley">'Jeep' Hensley</a></span>
                          <div id="postText1448190" style=""><img class="blog-thumbnail" src="<?php echo get_template_directory_uri() ?>/images/weve-lost-a-friend-og.png"> "Jeep" Hensley, father of Rev. Ben David Hensley, Associate Pastor of Oak Lawn UMC, died on March 23, 2016. Arrangements are pending. 
                            
                            Please keep Ben, his wife Rev. Becky David Hensley, Associate Director of the Center f... <a class="blog-read-more" href="/death-announcements/jeep-hensley">read&nbsp;more&nbsp;»</a><br>
                          </div>
                          <script type="text/javascript">displaypost('postText1448190','postnum1448190',225);</script> 
                        </li>
                      </div>
                    </div><?php */?>
                  </div>
                  <div style="text-align: right; font-weight: bold;"><a href="../board-of-ministry.html" style="font-weight: bold;"></a><a href="../board-of-ministry.html">More News and Events</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer_media"> <a class="readmore" href="/_blog/North_Texas_Conference_News">Read more News Around The Conference »</a><br>
            <a href="/subscribe" class="button" title="Subscribe to The North Texas Connection email news" style="margin-top: 5px; margin-right: 20px; margin-bottom: 10px;">Subscribe</a> <a href="/stories" class="button" title="Submit a story" style="margin-top: 5px; margin-bottom: 10px;">Submit a Story</a> <br>
            Subscribe to the RSS Feed: <a target="_blank" href="images/icon-rss.png?vs=b2004.r486545-phase1" id="rss" catid="58,12423" sw="1"><img style="border-width: 0px; border-style: solid;" src="<?php echo get_template_directory_uri() ?>/images/icon-rss.png?vs=b2004.r486545-phase1" alt="RSS" height="16" width="16"></a> </div>
          <br>
          <br>
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
<?php get_footer(); ?>