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
            
             <div class="content">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results for "<?php echo $s ?>"</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
			<div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
		</div>
		
		<div class="clear"></div>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">

				<h2 class="large nomargin"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<?php
				// Support for "Search Excerpt" plugin
				// http://fucoder.com/code/search-excerpt/
				if ( function_exists('the_excerpt') && is_search() ) {
					the_excerpt();
				} ?>
				<p class="small">
					<?php the_time('F jS, Y') ?> &nbsp;|&nbsp; 
					<!-- by <?php the_author() ?> -->
					Published in
					<?php the_category(', ');
						if($post->comment_count > 0) { 
								echo ' &nbsp;|&nbsp; ';
								comments_popup_link('', '1 Comment', '% Comments'); 
						}
					?>
				</p>
				
			</div>
			
			<hr>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
			<div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php //include (TEMPLATEPATH . '/searchform.php'); ?>


	<?php endif; ?>

		</div>
          
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