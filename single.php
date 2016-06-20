<?php
/*
    Template Name: single
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
@media print{
	.top-header-wrapper,ul.right_menu_sec-list,.dropdown_ct,.right-sidebar-ct,.sub-footer,.footer-wrapper,.noprint,li.toggle-topbar.menu-icon,.Bottom-header-wrapper{
		display:none !important;
	}
	.Bottom-header-wrapper {
    background: #d2821f !important;
	height:126px !important;
}
.Bottom-header-wrapper li.logo_ct a img.wp_logo{
	height:126px !important;
	min-height:126px !important;
	position:relative !important;
	z-index:999999 !important;
	overflow:visible !important;
}
.Bottom-header-wrapper li.logo_ct a,.Bottom-header-wrapper li.logo_ct{
	display:block !important;
	height:126px !important;
	overflow:visible !important;
}
.top-bar .title-area{
	float:none !important;
	height: 126px !important;
}

  a[href]:after {
    content: none !important;
  }

 a[href]:after {
    content: " (" attr(href) ")";
  }
  .footer-wrapper{
  }
	
}

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
        <div class="blogtitle blogtitle12">North Texas Conference News</div>
        <p class="description description12">A New Vision, A New Voice ~ The North Texas Conference</p>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
                        
			get_template_part( 'content', get_post_format() );
                        echo '<h1 class="single_post_title single_post_title12">'.get_the_title().'</h1>';
						?>
	<div class="post-details post-details12">Date Posted: <?php echo the_time(' l, F jS, Y') ?></div>
                        <?php
                        echo "<hr>";
                        the_content();
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
		        comments_template();
                             
                        
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

		// End the loop.
		endwhile;
		?>
        
        <div class="noprint">
            <a href="#" onclick="window.print();return false;"
            class="button" style="margin-top: 5px; margin-right:
            20px; margin-bottom: 10px; padding-left:15px; paddingright:
            24px;">Print</a>
            <a href="/subscribe" class="button" title="Subscribe to
            The North Texas Connection email news"
            style="margin-top: 5px; margin-right: 20px; marginbottom:
            10px; padding-left:15px; paddingright:
            15px;">Subscribe</a>
            <a href="/stories" class="button" title="Submit a story"
            style="margin-top: 5px; margin-bottom: 10px;">Submit
            a Story</a>
		</div>
        		</article>
        <!-- right column -->
        <aside class="large-4 medium-5 columns right-sidebar-ct">
        	<div id="sidecontent" class="right-sidebar-inner-ct medium-side-top">
            <div class="sidebox">
       			 <?php get_sidebar( 'sidebarmain' ) ?>
        	</div>
        </div>
        </aside>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>
