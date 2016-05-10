
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
<?php wp_footer() ?>
