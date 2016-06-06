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
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->
				<?php
				 echo $cat_id =  get_cat_id( single_cat_title("",false) );
				 ?>		
			<?php /* The loop */
			echo do_shortcode('[ntclistcategorypost category="'.$cat_id.'" order_by_post="DESC" per_page="10" pagerange="2" post_type="post" maxlimit="200"]');	
			 ?>
            
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; 
				 
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
       			 <?php //get_sidebar( 'sidebarmain' ) ?>
                 <?php get_sidebar(); ?>
        	</div>
        </div>
        </aside>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>
