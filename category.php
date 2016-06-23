<?php
/*
    Template Name: category
 *
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

?>
<?php
get_header(); ?>
<style>   
    .single_post_title{
        font-size: 18px;
        font-weight: 600;
        line-height: 30px;
        margin: 0 0 6px;
        color: #b45f06;
        
    }
    #comments{
        color: rgb(76,158,217);
        font-size: 15px;
    }
	.blogtitle.blogtitle12 {
    color: #b45f06;
    font-family: 'Open Sans';
    font-size: 22px;
    margin: 0 0 2px 0;
}
p.description.description12 {
    color: #000;
    font: 13px/1.5 'Open Sans', Arial, Helvetica, Verdana, sans-serif;
}
h1.single_post_title.single_post_title12 {
    font-size: 36px;
    line-height: 40px;
       margin: 0 0 7px 0 !important;
}
.post-details.post-details12 {
    color: #888;
    font-size: 11px;
    margin: 0 0 18px;
}    
</style>

<main class="main">
  <div class="main-content-section">
    <div class="row">
      <section id="main" class="secondary">
        <!-- left column -->
        <article class="large-8 medium-7 left-sidebar-ct columns">
        <?php if ( have_posts() ) : ?>
        <div class="breadcrumbs breadcrumbs_custom" typeof="BreadcrumbList" vocab="">
							<?php if(function_exists('bcn_display'))
                            {
                            bcn_display();
                            }?>
                    </div>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->
				<?php
				 $cat_id =  get_cat_id( single_cat_title("",false) );
				  $cat_name= get_cat_name($cat_id); 
				 ?>
                 <div id="District-Page">
              <div class="box">
                <div class="box-holder">
                  <div class="news-row"> 
                    <!--Add blog here -->
                     <?php
	 
       $args = array( 'category'=>$cat_id,'category_name'=>$cat_name,'post_type' => 'post','posts_per_page' => 40, 'order'=> 'DESC', 'orderby' => 'id' );
                    $postslist = get_posts( $args );
                    foreach ( $postslist as $post ) :
				 
                    setup_postdata( $post ); 
					 
					?> 
       
                          <div id="blogbackground">
                               <div class="post-body">
                                 <li class="blog-list-title" id="postnum1432883">
                                    <span class="blog-list-title-only">
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                    </span>
                                   <div id="postText1432883">
                                    <div class="blog-thumbnail"><?php the_post_thumbnail(); ?></div>
                                    <?php the_excerpt(); ?>
                                    <a class="blog-read-more" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">read&nbsp;more&nbsp;»</a>
                                   </div>
                                 </li>
                                </div>
                            </div>
       <?php
                    endforeach; 
					/*echo '<div style="clear:both;"></div>';
					if (function_exists(ntc_custom_pagination)) {
        ntc_custom_pagination($postslist->max_num_pages,$pagerange,$paged,$maxlimit,$per_page);
      }*/
    
                    wp_reset_postdata();
                    ?>    
                    
                 
                  </div>
                </div>
              </div>
            </div>
                 	
			<?php /* The loop */
			
			
			 ?>
            
			

			<?php //twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
        		</article>
        <!-- right column -->
        <aside class="large-4 medium-5 columns right-sidebar-ct">
        	<div id="sidecontent" class="right-sidebar-inner-ct medium-side-top">
            <div class="sidebox">
       			 <?php get_sidebar( 'sidebarmain' ) ?>
                 <?php //get_sidebar(); ?>
        	</div>
        </div>
        </aside>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>
