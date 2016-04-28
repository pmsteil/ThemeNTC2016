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
                                   	<div class="blog-thumbnail"><?php the_post_thumbnail(); ?></div>
                                    <?php the_excerpt(); ?>
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
          <?php //get_sidebar( 'sidebarmain' ) ?>
          <sidebar id="sidebarmain" name="Main" description="Main sidebar that appears on the default page template">
            <div id="sidecontent" class="right-sidebar-inner-ct medium-side-top">
              <div class="sidebox"><img class="front-page-slider-margin mrg" src="<?php echo get_template_directory_uri() ?>/images/2015-christmas-tornadoes-news.jpg"/><img class="front-page-slider-margin mrg" src="<?php echo get_template_directory_uri() ?>/images/2015-ac-journal-banner.png"/>
                <div class="section-top"><a href="#">North Texas Conference UMC</a></div>
                <menulinks id="topmenu" name="Top Menu6" type ="multiple-dropdowns">
                  <ul class="ourlist ql-normal">
                            <li class="first"><img src="<?php echo get_template_directory_uri() ?>/images/Icon-Leadership-Development-15.png" style="float: left; padding-top: 5px;" alt="Center for Leadership Development"><a target="_blank" href="http://ntcleadership.org/">Center for Leadership Development</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/Icon-Church-Development.gif" style="float: left; padding-top: 5px;" alt="Center for New Church Development"><a target="_blank" href="http://ntcnewchurch.org/">Center for New Church Development</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/Icon-Missional-Outreach.gif" style="float: left; padding-top: 5px;" alt="Center for Missional Outreach"><a target="_blank" href="http://www.ntcmissionaloutreach.org/">Center for Missional Outreach</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/crc-icon-new.png" style="float: left; padding-top: 5px;" alt="Center for Connectional Resources"><a style="padding-left: 30px;" href="/connectional-resources/home.html">Center for Connectional Resources</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/bom-icon.png" style="float: left; padding-top: 5px;" alt="Board of Ordained Ministry"><a style="padding-left: 30px;" href="/board-of-ordained-ministry/home.html">Board of Ordained Ministry</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/forms.png" style="height: 25px; width: 25px; float: left; padding-top: 5px;" alt="Church Froms and Materials"><a style="padding-left: 30px;" href="/connectional-resources/forms.html">Official Church Forms and Materials</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/insurance.gif" style="height: 25px; width: 25px; float: left; padding-top: 5px;" alt="Insurance Claims"><a style="padding-left: 30px;" href="/Connectional-Resources/property-liability-insurance.html">Property &amp; Liability Insurance Claims</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/FACT-icon.gif" alt="FACT" style="height: 25px; width: 25px; float: left; padding-top: 5px;"><a href="/FACT/FACT.html" style="padding-left: 30px;">FACT Report</a></li>
                            <!--COMMENT OUT FOR NEXT YEAR'S USE-->
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/Nominations-Box.gif" alt="Nominations Forms" style="height: 25px; width: 25px; float: left; padding-top: 5px;"><a href="/2016-Annual-Conference/2016-Nominations-Process.html" style="padding-left: 30px;">AC Nominations Process</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/icon-ntcumc-2012.png" style="height: 25px; width: 25px; float: left; padding-top: 5px;" alt="2016 Annual Conference"><a style="padding-left: 30px;" href="http://www.ntc2016.org/" target="_blank">2016 North Texas Annual Conference</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/icon-ntcumc-2012.png" style="height: 25px; width: 25px; float: left; padding-top: 5px;" alt="Past Annual Conferences"><a style="padding-left: 30px;" href="/Annual-Conferences/Past-Annual-Conferences.html">Previous NT Annual Conferences</a></li>
                            <!--
                            <li><img alt="2012 Annual Conference" src="<?php echo get_template_directory_uri() ?>//images/Icons/icon-podium.png" style="height: 25px; width: 25px; float: left; padding-top: 5px;" /><a href="/2012-Annual-Conferences/home.html" style="padding-left: 30px;">2012 Annual Conference</a></li>
                            <li><img style="height: 25px; width: 25px; float: left; padding-top: 5px;" src="<?php echo get_template_directory_uri() ?>//images/Icons/2012-General-Conference-Icon.gif" alt="2012 General Conference" /><a style="padding-left: 30px;" href="/General-Conference/2012-General-Conference.html">2012 General Conference</a></li>
                            <li><img style="height: 25px; width: 25px; float: left; padding-top: 5px;" src="<?php echo get_template_directory_uri() ?>//images/Icons/south-central-jursd-icon.gif" alt="2012 Jurisdictional Conference" /><a style="padding-left: 30px;" href="/Jurisdictional-Conference/2012-jurisdictional-conference.html">2012 Jurisdictional Conference</a></li>
                        -->
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/journal-icon.png" style="height: 25px; width: 25px; float: left; padding-top: 5px;" alt="Conference Journals"><a style="padding-left: 30px;" href="/Annual-Conferences/Conference-Journals.html">Annual Conference Journals</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/jobs-icon.gif" style="height: 25px; width: 25px; float: left; padding-top: 5px;" alt="Job Openings"><a style="padding-left: 30px;" href="/JobBank/jobs.html">Job Bank Listing</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/Announcement-Icon.png" style="float: left; padding-top: 5px;" alt="Birth and Death Announcements"><a style="padding-left: 30px;" href="/birth-death-announcements.html">Birth and Death Announcements</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/Appointment-Update-Icon.png" style="height: 25px; width: 25px; float: left; padding-top: 5px;" alt="Appointment Updates"><a style="padding-left: 30px;" href="/2015-Annual-Conference/2015-Appointments.html">Appointment Updates</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/journal-icon.png" style="height: 25px; width: 25px; float: left; padding-top: 5px;" alt="UMC Book of Discipline"><a style="padding-left: 30px;" href="/Book-of-Discipline.html">UMC Book of Discipline</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/links-icon.png" style="height: 25px; width: 25px; float: left; padding-top: 5px;" alt="Helpful Links"><a style="padding-left: 30px;" href="/Links.html">Helpful Links</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/blog-icon.png" style="height: 25px; width: 25px; float: left; padding-top: 5px;" alt="NT Conference News"> <a style="padding-left: 30px;" href="/blogs.html">Conference News</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/NTCMeetingButton.png" style="height: 25px; width: 25px; float: left; padding-top: 5px;" alt="Schedule Meeting"><a style="padding-left: 30px;" href="http://www.northtexasumc.org/rooms">Schedule Meeting</a></li>
                            <li><img src="<?php echo get_template_directory_uri() ?>/images/calendar_icon.png" style="height: 25px; width: 25px; float: left; padding-top: 5px;" alt="NTC Calendar of Events"><a style="padding-left: 30px;" href="/Calendar-of-Events.html">Calendar</a></li>
                            <li><div id="google_translate_element"><div style="" dir="ltr" class="skiptranslate goog-te-gadget"><div id=":0.targetLanguage"><select class="goog-te-combo"><option value="">Select Language</option><option value="af">Afrikaans</option><option value="sq">Albanian</option><option value="am">Amharic</option><option value="ar">Arabic</option><option value="hy">Armenian</option><option value="az">Azerbaijani</option><option value="eu">Basque</option><option value="be">Belarusian</option><option value="bn">Bengali</option><option value="bs">Bosnian</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="ceb">Cebuano</option><option value="ny">Chichewa</option><option value="zh-CN">Chinese (Simplified)</option><option value="zh-TW">Chinese (Traditional)</option><option value="co">Corsican</option><option value="hr">Croatian</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="eo">Esperanto</option><option value="et">Estonian</option><option value="tl">Filipino</option><option value="fi">Finnish</option><option value="fr">French</option><option value="fy">Frisian</option><option value="gl">Galician</option><option value="ka">Georgian</option><option value="de">German</option><option value="el">Greek</option><option value="gu">Gujarati</option><option value="ht">Haitian Creole</option><option value="ha">Hausa</option><option value="haw">Hawaiian</option><option value="iw">Hebrew</option><option value="hi">Hindi</option><option value="hmn">Hmong</option><option value="hu">Hungarian</option><option value="is">Icelandic</option><option value="ig">Igbo</option><option value="id">Indonesian</option><option value="ga">Irish</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="jw">Javanese</option><option value="kn">Kannada</option><option value="kk">Kazakh</option><option value="km">Khmer</option><option value="ko">Korean</option><option value="ku">Kurdish (Kurmanji)</option><option value="ky">Kyrgyz</option><option value="lo">Lao</option><option value="la">Latin</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="lb">Luxembourgish</option><option value="mk">Macedonian</option><option value="mg">Malagasy</option><option value="ms">Malay</option><option value="ml">Malayalam</option><option value="mt">Maltese</option><option value="mi">Maori</option><option value="mr">Marathi</option><option value="mn">Mongolian</option><option value="my">Myanmar (Burmese)</option><option value="ne">Nepali</option><option value="no">Norwegian</option><option value="ps">Pashto</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="pa">Punjabi</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sm">Samoan</option><option value="gd">Scots Gaelic</option><option value="sr">Serbian</option><option value="st">Sesotho</option><option value="sn">Shona</option><option value="sd">Sindhi</option><option value="si">Sinhala</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="so">Somali</option><option value="es">Spanish</option><option value="su">Sundanese</option><option value="sw">Swahili</option><option value="sv">Swedish</option><option value="tg">Tajik</option><option value="ta">Tamil</option><option value="te">Telugu</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="uz">Uzbek</option><option value="vi">Vietnamese</option><option value="cy">Welsh</option><option value="xh">Xhosa</option><option value="yi">Yiddish</option><option value="yo">Yoruba</option><option value="zu">Zulu</option></select></div>Powered by <span style="white-space:nowrap"><a class="goog-logo-link" href="https://translate.google.com" target="_blank"><img src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png" style="padding-right: 3px" height="14px" width="37px">Translate</a></span></div></div>
                        <script>
                        function googleTranslateElementInit() {
                          new google.translate.TranslateElement({
                            pageLanguage: 'en',
                            gaTrack: true,
                            gaId: 'UA-25024839-1'
                          }, 'google_translate_element');
                        }
                        </script>
                        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
                </ul>
                     
                    <div class="housebanner"> <a href="/Connection.html"><img src="<?php echo get_template_directory_uri() ?>/images/north-texas-connection-banner.jpg" style="border: 1px solid black; width: 239px; height: 76px;" alt="North Texas Connection" title="North Texas Connection"></a> </div>
                    <div class="housebanner"> <a href="http://www.ntcleadership.org/#/youth/ministry-safe" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/ministry-safe-banner.gif" alt="MinistrySafe" title="MinistrySafe"></a> </div>
                    <div class="housebanner"> <a href="http://www.ntcumcbom.org/board-of-ordained-ministry/home.html" target="_blank" title="Board of Ordained Ministry"><img src="<?php echo get_template_directory_uri() ?>/images/bom-banner-horiz.png" alt="Board of Ordained Ministry"></a> </div>
                    <div class="housebanner"> <a href="https://www.christiancopyrightsolutions.com/" target="_blank" title="Copyright Solver" rel="nofollow"><img style="margin-left: 2px; height: 76px;" src="<?php echo get_template_directory_uri() ?>/images/copyright-solver-banner.gif" alt="Copyright Solver" title="Copyright Solver" width="237"></a> </div>
                    <div class="housebanner"> <a href="<?php echo get_template_directory_uri() ?>/images/amazon/D328CEFA536A494FA81F138CE156F443_MI%20How%20to%20Register%20Handout%20N%20TX%20UMC%208%2010.pdf" target="_blank"><img src="images/Mission-Insite.png" alt="Mission Insite" title="Mission Insite"></a> </div>
                    <div class="housebanner"> <a href="http://www.ntcmissionaloutreach.org/ImagineNoMalaria/Home.htm" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/imagine-no-malaria-logo.png" alt="Imagine No Malaria" title="Imagine No Malaria" style="width: 239px; border: 1px solid black;"></a> </div>
                 
                </menulinks>
                <hr>
                <div id="mc_embed_signup">
                <h3>Subscribe to our Mailing List</h3>
                <form action="http://ntcumc.us4.list-manage1.com/subscribe/post?u=0d4ce057401917b1ec6f4bf51&amp;id=5188f143d4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                    <div class="mc-field-group">
                    <label for="mce-EMAIL">Enter Email Address: </label>
                    <input name="EMAIL" class="required email" id="mce-EMAIL" type="email">
                    <input value="134217728" name="group[1969][134217728]" id="mce-group[1969]-1969-27" type="hidden"><!--Register for CONNECTION email news -->
                    <input value="html" name="EMAILTYPE" id="mce-EMAILTYPE-0" type="hidden">
                    </div>
                    <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display: none;"></div>
                    <div class="response" id="mce-success-response" style="display: none;"></div>
                    </div>
                    <div class="clear">
                    <input value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" type="submit">
                    </div>
                </form>
                </div>
                <div style="margin-left: auto; margin-right: auto; border: double #875010; width: 67%; padding: 8px 4px 4px; background-color: #e8d5bb;">
                    <h5 style="text-align: center; line-height: 20px;">NTC by the Numbers:</h5>
                    <h5 style="line-height: 20px;">
                    <div style="text-align: center;">300 churches</div>
                    <div style="text-align: center;">160,000 members</div>
                    <div style="text-align: center;">4 districts</div>
                    <div style="text-align: center;">20 counties</div>
                    </h5>
               </div>
              </div>
            </div>
            <!-- sidecontent_laity -->
          </sidebar>
        </aside>
      </section>
    </div>
  </div>
</main>

<!--========main content section start==============--> 

<!--===Footer section starts===-->
<?php get_footer(); ?>