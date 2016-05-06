
 <footersection>
  <div class="footer-wrapper">
    <div class="footer-top_wrapper">
      <div class="row">
        <div class="large-1 medium-1 columns footer-logo"><a href="#" class="f-logo tipright" original-title="The Cross and Flame is a registered trademark, and the use is supervised by the General Council on Finance and Administration (GCFA) of The United Methodist Church. "><img src="<?php echo get_template_directory_uri() ?>/images/logo-footer.png" alt="United Methodist Cross and Flame"></a></div>
        <div class="f-nav large-11 medium-11 columns">
          <div class="row">
            <div class="col large-3 medium-6 columns fotter-cat-1">
               <?php if ( is_active_sidebar( 'footer1' ) ) : ?>
					<?php dynamic_sidebar( 'footer1' ); ?>
                <?php endif; ?>
            </div>
            <div class="col large-3 medium-6 columns fotter-cat-2">
            <?php if ( is_active_sidebar( 'footer2' ) ) : ?>
					<?php dynamic_sidebar( 'footer2' ); ?>
                <?php endif; ?>
            </div>
            <div class="col large-3 medium-6 columns fotter-cat-3">
            <?php if ( is_active_sidebar( 'footer3' ) ) : ?>
					<?php dynamic_sidebar( 'footer3' ); ?>
                <?php endif; ?>
            </div>
            <div class="col large-3 medium-6 columns fotter-cat-4">
            	<?php if ( is_active_sidebar( 'footer4' ) ) : ?>
					<?php dynamic_sidebar( 'footer4' ); ?>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="stripe_footer_wrapper">
	<div class="row">
    	<div class="large-6 medium-6 small-12 columns left-strip-footer">
    	<?php if ( is_active_sidebar( 'footer-stripe-left' ) ) : ?>
				<?php dynamic_sidebar( 'footer-stripe-left' ); ?>
          <?php endif; ?>
          </div>
          <div class="large-6 medium-6 small-12 columns right-strip-footer">
    	<?php if ( is_active_sidebar( 'footer-stripe-right' ) ) : ?>
				<?php dynamic_sidebar( 'footer-stripe-right' ); ?>
          <?php endif; ?>
          </div>
    </div>
</div>

    
    <!------sub-footer---->
    
    <div class="sub-footer">
      <div class="holder row">
        <div class="large-4 medium-7 sub-footer-text-1 columns">
        	<?php if ( is_active_sidebar( 'bottom_footer1' ) ) : ?>
					<?php dynamic_sidebar( 'bottom_footer1' ); ?>
                <?php endif; ?>
        </div>
        <div class="large-3 medium-5 sub-footer-text-2 columns">
          <?php if ( is_active_sidebar( 'bottom_footer2' ) ) : ?>
					<?php dynamic_sidebar( 'bottom_footer2' ); ?>
                <?php endif; ?>
        </div>
        <div class="large-5 sub-footer-text-3 columns">
          <?php if ( is_active_sidebar( 'bottom_footer3' ) ) : ?>
					<?php dynamic_sidebar( 'bottom_footer3' ); ?>
                <?php endif; ?>
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
</body></html>
<?php wp_footer() ?>
