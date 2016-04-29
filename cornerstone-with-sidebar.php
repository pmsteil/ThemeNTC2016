<?php
/*
    Template Name: cornerstone with sidebar
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
            <div id="District-Page">
         		<?php the_content(); ?>
            </div>
          </div>
          
        </article>
        <!-- right column -->
        
        <aside class="large-4 medium-5 columns right-sidebar-ct">
          <?php //get_sidebar( 'sidebarmain' ) ?>
          <sidebar id="sidebarmain" name="Main" description="Main sidebar that appears on the default page template">
            <div id="sidecontent" class="right-sidebar-inner-ct medium-side-top">
              <div class="sidebox">
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