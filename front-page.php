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
						 $args = array( 'category'=>219,'post_type' => 'news','posts_per_page' => 40, 'order'=> 'ASC', 'orderby' => 'id' );
                    $postslist = get_posts( $args );
                    foreach ( $postslist as $post ) :
                    setup_postdata( $post ); ?> 
							
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
                    endforeach; 
                    wp_reset_postdata();
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
                  <ul class="ourlist ql-normal">
                    <?php
                    $args = array( 'category'=>217,'post_type' => 'news','posts_per_page' => 40, 'order'=> 'ASC', 'orderby' => 'id' );
                    $postslist = get_posts( $args );
                    foreach ( $postslist as $post ) :
                    setup_postdata( $post ); ?> 
                    <li><div style="float: left; padding-top: 5px;"><?php the_post_thumbnail(); ?></div><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </li>
                    <?php
                    endforeach; 
                    wp_reset_postdata();
                    ?>         
                </ul>
                <?php if ( is_active_sidebar( 'sidebarbottom' ) ) : ?>
	<?php dynamic_sidebar( 'sidebarbottom' ); ?>
	<?php endif; ?>
                
              </div>
            </div>
           
          </sidebar>
        </aside>
      </section>
    </div>
  </div>
</main>

<!--========main content section start==============--> 

<!--===Footer section starts===-->
<?php get_footer(); ?>