<?php
/*
    Template Name: categories
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
            <div class="breadcrumbs">
              <li><a href="<?php echo home_url();?>">Home</a></li>
<li><a href="<?php echo get_permalink($post->post_parent);?>"><?php echo get_the_title($post->post_parent);?></a></li>
<li><?php echo get_the_title($post->ID);?></li>

            </div>
            <h1>Board of Laity</h1>
            <div class="inset"><a href="/" target="_blank"><img alt="North Texas Conference Laity" src="<?php echo get_template_directory_uri() ?>/images/2013-Laity-Presentations-Banner.png"></a></div>
            <h2><strong>The North Texas Annual Conference<br>
              Board of Laity</strong></h2>
            <h3>The Board is charged to:</h3>
            <ul>
              <li>foster an awareness of the role of the laity within the local congregations; and to promote and develop programs to cultivate an adequate understanding of the theological and biblical basis for lay life and work;</li>
              <li>develop and promote stewardship of time, talent, and possessions;</li>
              <li>provide for the training of lay members of the annual conference;</li>
              <li>provide support and direction for the ministry of the Laity on the local, district and annual conference levels and to promote the observation of Laity Sunday;</li>
              <li>provide organization, direction, and support for the development of local church lay leaders.</li>
            </ul>
            <h2><strong>2015-2016 Board of Laity</strong></h2>
            <img alt="North Texas Conference Laity" class="board_img_right" src="<?php echo get_template_directory_uri() ?>/images/XLGN4LZ6_palm_cross_BOL.jpg">
            <p><strong>Conference Lay Leader:</strong><a href="#" target="_blank">Linda Parks</a></p>
            <p><strong>Conference Lay Leader Elect:</strong><a href="#" target="_blank">Jeff Bouis</a></p>
            <p><strong>Associate Lay Leader:</strong><a href="#" target="_blank">Henry Lessner</a></p>
            <p><strong>Conference Council on Youth Ministries Chairperson:</strong><a href="#" target="_blank">Audrey Chumley</a></p>
            <p><strong>East District Lay Leader:</strong><a href="#" target="_blank">Jim Skaggs</a></p>
            <p><strong>East District Youth Lay Leader:</strong><a href="#" target="_blank">Cotton Riley</a></p>
            <p><strong>Metro District Lay Leader:</strong><a href="#" target="_blank">Billy Ratcliff</a></p>
            <p><strong>Metro District Youth Lay Leader:</strong><a href="#" target="_blank">Michaela Haskell</a></p>
            <p><strong>North Central District Lay Leader:</strong><a href="#" target="_blank">Alfred White</a></p>
            <p><strong>North Central District Youth Lay Leader:</strong><a href="#" target="_blank">Sidney Weidenbach</a></p>
            <p><strong>Northwest District Lay Leader:</strong><a href="#" target="_blank">Tom Busby</a></p>
            <p><strong>Northwest District Youth Lay Leader:</strong><a href="#" target="_blank">Madison Wiese</a></p>
            <p><strong>Conference United Methodist Women President:</strong><a href="#" target="_blank">Mae Alexander</a></p>
            <p><strong>Conference United Methodist Men President:</strong>To Be Elected by UMM</p>
            <p><strong>Lay Servant Ministry Coordinator:</strong><a href="#" target="_blank">Herman Totten</a></p>
            <p><strong>Conference Children, Youth &amp; Young Adult Ministry Coordinator:</strong><a href="#" target="_blank">Kelly Carpenter</a></p>
            <p><strong>Center Director for Leadership Development:</strong><a href="#" target="_blank">Marti Soper</a></p>
            <p><strong>Associate Director for Leadership Development:</strong><a href="#" target="_blank">Becky Hensley</a></p>
            <p>You can reach any member of the Board of Laity by calling the conference office, 972-526-5000 or toll free 800-815-6690.</p>
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