<?php
/*
    Template Name: search
*/
?>
<?php get_header(); ?>
<!--========main content section start==============-->

<main class="main">
  <div class="main-content-section">
    <div class="row">
      <section id="main" class="secondary">
        <!-- left column -->
        <article class="large-8 medium-7 left-sidebar-ct columns">
          <div id="maincontent">
            <h1>Site Search</h1>
            	 <?php get_search_form() ?>
            
             <searchresults>
                  <h1 class="content-title">Search Results for "<?php echo get_search_query(); ?>"</h1>

                  <?php
                  $args = array( 'paged'=> $paged,
                                 'post_type' => 'post');
                  $more = 0;
                  query_posts($args);
                  $image_url = $site_options['blog_image'];
                  ?>
                  <?php if (have_posts()) : $count = 0; ?>
                  <?php while (have_posts()) : the_post(); $count++; ?>
                      <?php
                      $ImageID = get_post_thumbnail_id($post->ID);
                      if($ImageID)
                         // get the image url
                         $image_url = wp_get_attachment_url($ImageID);
                      $excerpt = get_the_excerpt();
                      $excerpt = preg_replace('/\s+?(\S+)?$/', '', $excerpt);
                      ?>
                        <div class="recent-box clearfix">
                          <div class="recent-box-img">
                            <img src="<?php echo $image_url; ?>" alt="">
                          </div>
                          <div class="recent-box-text">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p>
                              <?php echo $excerpt; ?>
                              <a href="<?php the_permalink(); ?>">Read More</a>
                            </p>
                          </div>
                        </div>
                  <?php endwhile; else: ?>
                    <div class="post">
                        <p>Sorry, no posts matched your criteria.</p>
                    </div><!-- /.post -->
                  <?php endif; ?>

                  <?php
                    if(function_exists('wp_pagenavi')) {
                      wp_pagenavi();
                    }
                    else {
                      $next_page_link = next_page_not_post('');
                      if (function_exists('apply_all_short_codes'))
                         $next_page_link =  apply_all_short_codes($next_page_link);
                      echo '<div style="clear:both">' . $next_page_link . '</div>';
                    }
                  ?></searchresults>
          
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
<?php get_footer(); ?>