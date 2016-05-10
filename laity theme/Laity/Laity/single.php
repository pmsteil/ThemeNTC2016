<?php
/*
    Template Name: single
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
        <article class="large-8 medium-7 left-sidebar-ct columns">
            <div class="post-list"> 
                <div class="top-page blogtitle">North Texas Conference News</div>
               <p class="description">A New Vision, A New Voice ~ The North Texas Conference</p> 
                 <div id="catblogoutput">

               <div class="blog-post-bg">
               <div class="blog-post">
               <h1 class="post-title"> By day, an East Texas pastor. By night, a social media star to teens. </h1>
               <div class="post-details">Date Posted: Thursday, April 07, 2016 </div>
               <div class="post-body"> <h2>Greg Neal, 49, seems an unlikely sort to draw 9 MILLION views, mostly by teens, with his nightly webcast.</h2>
               <span style="font-size: 14px;"><strong>By SHERON C. PATTERSON</strong></span><br>
               <span style="font-size: 10px;"><strong>Editor</strong></span>
               <div style="float: right; margin-left: 10px; margin-top: 25px; font-size: 11px; width: 325px; margin-bottom: 10px;"><img src="<?php echo get_template_directory_uri() ?>/images/greg-neal-kermit.png" alt="One of Dr. Neal’s followers made him into Kermit the Frog." style="width: 315px;"><br>
               <strong>One of Dr. Neal’s followers made him into Kermit the Frog.</strong>
               </div>
               <p>Many pastors dream of building a strong audience with young people. Rev. Dr. Greg Neal lives it every day.</p>
               <p>Dr. Neal, senior pastor of <a href="http://www.fumccommerce.org/" target="_blank" title="First UMC Commerce">First UMC Commerce</a>, is a social media rock star. He launched a show on the social media platform <a rel="nofollow" href="https://www.younow.com/DrGreg/channel" target="_blank" title="YouNow">YouNow</a> in May 2015, broadcasting six nights a week from his home in Commerce. His shows run 3-5 hours in length.</p>
               <p>Dr. Neal is a hit. Since May, he has an accumulated over 9 million views.</p>
               <p>“<a rel="nofollow" href="https://www.younow.com/DrGreg/channel" target="_blank" title="YouNow">YouNow</a> is interesting and very different,” he said. “It gets wild and woolly. The audience is very young, not churched — or if they are, they are on the edge of church. It is a great space to talk to people outside the church. <a rel="nofollow" href="https://www.younow.com/DrGreg/channel" target="_blank" title="YouNow">YouNow</a> is an incredible tool that could be used by the church.”</p>
               <div style="float: right; width: 300px; padding: 8px 8px 0px; margin-left: 10px; margin-bottom: 10px; border: thin solid #b45f06; background-color: #deb887;">
               <h3 style="text-align: center;">GREG NEAL BY THE NUMBERS</h3>
               <p>Over 60 percent of the audience is 13 to 25 years old.</p>
               <p><strong>YOUNOW:</strong> Over 70,000 fans on YouNow and a nightly average viewership of 600-800 at a time. Over 9 million total views. <a rel="nofollow" href="https://www.younow.com/DrGreg/channel" target="_blank" title="YouNow">https://www.younow.com/DrGreg</a></p>
               <p><strong>TWITTER:</strong> Over 8,500 followers. <a rel="nofollow" target="_blank" title="Twitter" href="https://twitter.com/revgregorysneal">@revgregorysneal</a></p>
               <p><strong>INSTAGRAM:</strong> Over 7,400 followers. <a rel="nofollow" target="_blank" title="Instagram" href="https://www.instagram.com/revneal/">www.instagram.com/revneal</a></p>
               <p><strong>SNAPCHAT:</strong> Over 24,000 followers.<br>
               gsn1967</p>
               <p><strong>YOUTUBE:</strong> Over 2,450 subscribers, with each video sermon averaging between 5,000-7,000 views. <a rel="nofollow" target="_blank" href="https://www.youtube.com/user/revneal" title="YouTube">www.youtube.com/user/revneal</a></p>
               <p><strong>FACEBOOK:</strong> Over 61,000 followers, with more than 20,000 reached per week, for <a rel="nofollow" target="_blank" title="Facebook" href="https://www.facebook.com/RevNealVideo/?ref=br_rs">Grace Incarnate Ministries - Video Sermons</a>, his ministry’s Facebook page.</p>
               </div>
               <h3>WHAT’S THE ATTRACTION?</h3>
               <p>But what is it about a 49-year-old pastor in an East Texas town that would draw the young? Especially considering that most of <a rel="nofollow" href="https://www.younow.com/DrGreg/channel" target="_blank" title="YouNow">YouNow</a>’s broadcasters are 13 to 20.</p>
               <p>His best guess? “It's the fact that I don't take myself too seriously, that I like and play their kind of music, that I don't ever judge them for the things they've done wrong, and I'm patient with them. Many times they'll say things like ‘I wish you were my dad’ or ‘I wish my pastor was like you.’ “</p>
               <p>And it’s also his message. “Many of today’s young people have been told that they’re going to hell for everything from makeup and tattoos to piercings, their clothing, their music, or their sexual orientations; I felt called to share with them that God does not hate them, that God loves them, accepts them, and has made them to be who and what they are — beautiful, diverse, beloved children of God.”</p>
               <h3>HOW HE STARTED</h3>
               <div style="float: left; margin-right: 10px; font-size: 11px; width: 220px; margin-bottom: 10px;"><img src="<?php echo get_template_directory_uri() ?>/images/reality-potatoes-anya.png" alt="Reality Potatoes, a.k.a. Anya, drew Dr. Neal in Pictionary." style="width: 210px;"><br>
               <strong>Reality Potatoes, a.k.a. Anya, drew Dr. Neal in Pictionary.</strong>
               </div>
               <p>Neal found out about <a rel="nofollow" href="https://www.younow.com/DrGreg/channel" target="_blank" title="YouNow">YouNow</a> a couple months before he jumped in with his own broadcasts after a young member of his church told him about it.</p>
               <p> “She told me how one of its broadcasters had kept her from committing suicide. I had been a <a rel="nofollow" href="https://www.youtube.com/user/revneal" target="_blank" title="YouTube">YouTuber</a> since 2006 but hadn’t heard of <a rel="nofollow" href="https://www.younow.com/DrGreg/channel" target="_blank" title="YouNow">YouNow</a>. So out of curiosity, I joined in order to find out what it was all about. I was immediately impressed by the amazing group of broadcasters and fans that I found.</p>
               <p>“Unfortunately, I was also horrified by the many cruel words of bitter intolerance, condemnation and outright hatred being spewed in the name of God at broadcasters and those in their chats by those who claimed to be Christians,” Dr. Neal said. “I decided to start broadcasting in order to present a positive expression of the love of God for all.”</p>
               <p>His first broadcast was short and only three people came across it.</p>
               <p>“Each one accosted me for being on a site that was supposedly intended only for young people. It nearly discouraged me from trying to broadcast again,” he said.</p>
               <h3>LOYAL VIEWERS</h3>
               <div style="float: right; margin-left: 10px; font-size: 11px; width: 250px; margin-bottom: 10px;"><img src="<?php echo get_template_directory_uri() ?>/images/greg-neal-tabitha.png" alt="Tabitha, Greg Neal’s cat, has endeared herself to the audience with her demands for attention." style="width: 240px;"><br>
               <strong>Tabitha, Greg Neal’s cat, has endeared herself to the audience with her demands for attention.</strong>
               <img src="<?php echo get_template_directory_uri() ?>/images/greg-neal-kitties.png" alt="The young followers like to doctor up photos playing on Tabitha." style="margin-top: 15px; width: 240px;"><br>
               <strong>The young followers like to doctor up photos playing on Tabitha.</strong>
               </div>
               <p>But as he built a following, <a rel="nofollow" href="https://www.younow.com/DrGreg/channel" target="_blank" title="YouNow">YouNow</a> spotted a potential star that could also draw in an older — and more affluent — age range. That’s when it made him a partner, then an Editor’s Choice, meaning that when people went to <a rel="nofollow" href="https://www.younow.com/DrGreg/channel" target="_blank" title="YouNow">YouNow</a>, the chances were good they’d be dropped into his broadcast.</p>
               <p> “Now I have listeners in Australia, Asia, Kuwait and Russia,” he said. “Listeners have told me that as a result of my show, they are going back to church or reconsidering their faith. Once a person who was a cutter told me that after listening to me they flushed their razors and started taking their meds.”</p>
               <p>In the format, viewers can see Dr. Neal as he broadcasts. From his side of the screen, he can see the list and numbers of watchers, and see the questions they type, which may include a profile picture of them by their name. Occasionally there is a split screen of the pastor and a questioner. Another time, his 79-year-old mother was a guest – and proved quite popular. The other regulars are his tabby, Tabitha – “the darling of the broadcast” – and his Basset hound Fannie, both wandering in and out of picture enough that loyal viewers ask about them if they go missing.</p>
               <h3>THE QUESTIONS</h3>
               <p>And the questions come fast and furiously. The most common, he said, is: “Do homosexuals go to hell? With the follow-up or adjunct statement being, ‘All Christian pastors say that gays will burn in hell, no matter what. Why do you say otherwise?’ ”</p>
               <p>Vanessa Paulin, a <a href="http://www.fumccommerce.org/" target="_blank" title="First UMC Commerce">First UMC Commerce</a> member and <a rel="nofollow" href="http://www.tamuc.edu/" target="_blank" title="Texas A&amp;M-Commerce">Texas A&amp;M-Commerce</a> student, likes that she feels free “to ask whatever I want in regards to religion and occasionally other things. He answers all the questions that he gets asked whether related to religion or pop culture.”</p>
               <p>He’s “professional yet down to earth. Kind, but at the same time firm when he needs to be,” she said.</p>
               <p>And his following isn’t just the teens. David Finn, another <a href="http://www.fumccommerce.org/" target="_blank" title="First UMC Commerce">First UMC Commerce</a> member and <a rel="nofollow" href="http://www.tamuc.edu/" target="_blank" title="Texas A&amp;M-Commerce">Texas A&amp;M-Commerce</a> student, calls him “accessible to older adults, younger adults, and youth.</p>
               <p>“He’s one of the easiest people to contact through any and all of these social media methods. He communicates well to people of all generations and educational levels,” Finn said.</p>
               <h3>TALK ABOUT CONNECTION</h3>
               <div style="float: right; margin-left: 10px; font-size: 11px; width: 180px; margin-bottom: 10px;"><img src="<?php echo get_template_directory_uri() ?>/images/krayonix.png" alt="Krayonix showed his admiration for Dr. Neal." style="width: 170px;"><br>
               <strong>Krayonix showed his admiration for Dr. Neal.</strong>
               </div>
               <p>An almost nightly viewer, Finn feels “connected to my church, to Christians all over the world, and to God through Dr. Greg’s online ministry. And through my connections with Dr. Greg’s broadcast ministry, I've met so many people and good friends all over the world.</p>
               <p>“I may not be there for the entire four- or five-hour broadcast, but I'll watch and support him as much as I can.”</p>
               <p>And how is Dr. Neal able to devote so many hours to <a rel="nofollow" href="https://www.younow.com/DrGreg/channel" target="_blank" title="YouNow">YouNow</a>? It’s time the single pastor used to spend watching TV or playing on the computer. Now, even at four hours or more, the broadcasts seem to fly by.</p>
               <p>“I wish there were more clergy who would broadcast. I’d love to bring another clergy on my show to prove that I am not some anomaly,” Dr. Neal said. “People think that I am an unusual UMC pastor.”</p>
               <p>In Paulin’s words, “Dr. Neal is as real and transparent as a minister can get.”</p>
               <!--<div style="float: left; width: 360px; padding: 8px; margin-right: 10px; margin-top: 15px; margin-bottom: 15px; border: thin solid #b45f06; background-color: #deb887;">
               <h3 style="text-align: center;">COMING SOON:</h3>
               <p>Dr. Greg Neal will conduct a media ministry seminar for clergy and lay members of the North Texas Conference. Check future editions of the <em>North Texas Connection</em> online newsletter for details.</p>
               </div>
               <div class="clear"></div>-->
               <div style="width: 250px; padding: 10px; margin-right: 10px; margin-top: 10px; border: thin solid #b45f06; background-color: #deb887;">
               <h3 style="text-align: center;">COMING IN SEPTEMBER!</h3>
               <p>Greg Neal, senior pastor of <a href="http://www.fumccommerce.org/" target="_blank" title="FUMC, Commerce">FUMC, Commerce</a>, will lead a seminar on reaching out via social media. </p>
               <p><strong>Stay tuned for details.</strong></p>
               <div style="border: 0px; font-size: 11px; width: 150px; margin-bottom: 20px;">
               <img src="<?php echo get_template_directory_uri() ?>/images/ConnectionsAprilArticle5-Img2.JPG" alt="" style="border: 0px solid; width: 150px; height: 150px;"><br>
               <strong>Greg Neil, senior pastor <a href="http://www.fumccommerce.org/" rel="nofollow" target="_blank" title="FUMC Commerce">FUMC Commerce</a>, TX.</strong></div>
               </div>
               <div class="clear"></div>

               </div>

               <!-- Go to www.addthis.com/dashboard to customize your tools -->
               <div data-description="Greg Neal, 49, seems an unlikely sort to draw 9 MILLION views, mostly by teens, to his nightly webcast." data-title="By day, an East Texas pastor. By night, a social media star to teens." data-url="http://www.northtexasumc.org/north-texas-conference-news/by-day-an-east-texas-pastor-by-night-a-social-media-star-to-teens" class="addthis_sharing_toolbox" style="padding-top: 50px;"><div class="at-share-tbx-element addthis_32x32_style addthis-smartlayers addthis-animated at4-show" id="atstbx"><a class="at-share-btn at-svc-facebook"><span style="background-color: rgb(59, 89, 152); line-height: 32px; height: 32px; width: 32px; padding: 18px 3px 0px;" class="at-icon-wrapper"><svg alt="Facebook" title="Facebook" style="width: 32px; height: 32px;" class="at-icon at-icon-facebook" viewbox="0 0 32 32" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><path fill-rule="evenodd" style="fill: rgb(255, 255, 255);" d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z"></path></g></svg></span></a><a class="at-share-btn at-svc-twitter"><span style="background-color: rgb(29, 161, 242); line-height: 32px; height: 32px; width: 32px; padding: 18px 3px 0px; margin-left: 5px;" class="at-icon-wrapper"><svg alt="Twitter" title="Twitter" style="width: 32px; height: 32px;" class="at-icon at-icon-twitter" viewbox="0 0 32 32" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><path fill-rule="evenodd" style="fill: rgb(255, 255, 255);" d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336"></path></g></svg></span></a><a class="at-share-btn at-svc-buffer"><span style="background-color: rgb(0, 0, 0); line-height: 32px; height: 32px; width: 32px; padding: 18px 3px 0px; margin-left: 5px;" class="at-icon-wrapper"><svg alt="Buffer" title="Buffer" style="width: 32px; height: 32px;" class="at-icon at-icon-buffer" viewbox="0 0 32 32" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><path fill-rule="evenodd"  style="fill: rgb(255, 255, 255);" d="M5.264 10.393c-.352-.163-.352-.428 0-.59l10.1-4.68c.35-.164.92-.164 1.273 0l10.1 4.68c.35.162.35.427 0 .59l-10.1 4.68c-.352.163-.922.163-1.274 0l-10.1-4.68zm0 5.323c-.352.163-.352.427 0 .59l10.1 4.68c.35.163.92.163 1.273 0l10.1-4.68c.35-.163.35-.427 0-.59l-2.01-.93c-.35-.164-.92-.164-1.273 0l-6.818 3.158c-.35.163-.92.163-1.273 0l-6.817-3.16c-.352-.162-.922-.162-1.273 0l-2.01.932zm0 5.89c-.352.164-.352.43 0 .592l10.1 4.68c.35.163.92.163 1.273 0l10.1-4.68c.35-.163.35-.428 0-.59l-2.01-.932c-.35-.163-.92-.163-1.273 0l-6.818 3.16c-.35.163-.92.163-1.273 0l-6.817-3.16c-.352-.163-.922-.163-1.273 0l-2.01.93z"></path></g></svg></span></a><a class="at-share-btn at-svc-email"><span style="background-color: rgb(132, 132, 132); line-height: 32px; height: 32px; width: 32px; padding: 18px 3px 0px; margin-left: 5px;" class="at-icon-wrapper"><svg alt="Email" title="Email" style="width: 32px; height: 32px;" class="at-icon at-icon-email" viewbox="0 0 32 32" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><g fill-rule="evenodd"></g><path style="fill: rgb(255, 255, 255);" d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z"></path><path style="fill: rgb(255, 255, 255);" d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z"></path></g></svg></span></a></div></div>

               <br>
                <div class="noprint">
                <a href="#" onclick="window.print();return false;" class="button" style="margin-top: 5px; margin-right: 20px; margin-bottom: 10px; padding-left:24px; padding-right:24px;">Print</a>
                       <a href="/subscribe" class="button" title="Subscribe to The North Texas Connection email news" style="margin-top: 5px; margin-right: 20px; margin-bottom: 10px; padding-left:15px; padding-right:15px;">Subscribe</a>
                       <a href="/stories" class="button" title="Submit a story" style="margin-top: 5px; margin-bottom: 10px;">Submit a Story</a>
                       </div>

               <br>
               <div fb-xfbml-state="rendered" class="fb-comments fb_iframe_widget" data-href="http://www.northtexasumc.org/north-texas-conference-news/by-day-an-east-texas-pastor-by-night-a-social-media-star-to-teens" data-numposts="5" data-colorscheme="light"><span style="height: 662px; width: 550px;"><iframe src="https://www.facebook.com/plugins/comments.php?api_key=130308700345703&amp;channel_url=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D42%23cb%3Df6ad11f2ce774a%26domain%3Dwww.northtexasumc.org%26origin%3Dhttp%253A%252F%252Fwww.northtexasumc.org%252Ff72faf3e9a5758%26relation%3Dparent.parent&amp;colorscheme=light&amp;href=http%3A%2F%2Fwww.northtexasumc.org%2Fnorth-texas-conference-news%2Fby-day-an-east-texas-pastor-by-night-a-social-media-star-to-teens&amp;locale=en_US&amp;numposts=5&amp;sdk=joey&amp;skin=light&amp;width=550" class="fb_ltr" title="Facebook Social Plugin" style="border: medium none; overflow: hidden; height: 662px; width: 550px;" scrolling="no" name="fb80e0474810fe" id="f3eacd641b026f4"></iframe></span></div>

               <div class="fb_reset" id="fb-root"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe src="http://staticxx.facebook.com/connect/xd_arbiter.php?version=42#channel=f72faf3e9a5758&amp;origin=http%3A%2F%2Fwww.northtexasumc.org" style="border: medium none;" tabindex="-1" title="Facebook Cross Domain Communication Frame" aria-hidden="true" id="fb_xdm_frame_http" scrolling="no" allowfullscreen="true" allowtransparency="true" name="fb_xdm_frame_http" frameborder="0"></iframe><iframe src="https://staticxx.facebook.com/connect/xd_arbiter.php?version=42#channel=f72faf3e9a5758&amp;origin=http%3A%2F%2Fwww.northtexasumc.org" style="border: medium none;" tabindex="-1" title="Facebook Cross Domain Communication Frame" aria-hidden="true" id="fb_xdm_frame_https" scrolling="no" allowfullscreen="true" allowtransparency="true" name="fb_xdm_frame_https" frameborder="0"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe src="https://www.facebook.com/connect/ping?client_id=130308700345703&amp;domain=www.northtexasumc.org&amp;origin=1&amp;redirect_uri=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D42%23cb%3Df1e797bae28f466%26domain%3Dwww.northtexasumc.org%26origin%3Dhttp%253A%252F%252Fwww.northtexasumc.org%252Ff72faf3e9a5758%26relation%3Dparent&amp;response_type=token%2Csigned_request%2Ccode&amp;sdk=joey" style="display: none;" scrolling="no" allowfullscreen="true" allowtransparency="true" name="f32fd7782a16cb2" frameborder="0"></iframe></div></div></div>
               <script>(function(d, s, id) {
                 var js, fjs = d.getElementsByTagName(s)[0];
                 if (d.getElementById(id)) return;
                 js = d.createElement(s); js.id = id;
                 js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=130308700345703";
                 fjs.parentNode.insertBefore(js, fjs);
               }(document, 'script', 'facebook-jssdk'));</script>




               </div>
               </div>
               </div>     <hr>
               <p class="page-nav"><a id="previouspage" href="#" style="display:none">Previous</a>  <span class="pagination" id="pagination"></span> <a id="nextpage" href="#" style="display:none">Next</a> </p>
               </div>

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
