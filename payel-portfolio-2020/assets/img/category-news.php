<?php
global $post, $scpd_excerpt_length;
$scpd_excerpt_length = 10;
the_post();
get_header();

?>
<div class="container main_content">
  <div class="row">
    <?php  // Main Content ?>
    <div class="col-md-8 col-sm8 col-xs-12">

      <?php // Latest News ?>
      <?php 
        $category_name = get_query_var('category_name');

        $args = array(
          'numberposts' => 1,
          'category_name' => $category_name,
          'orderby' => 'post_date',
          'order' => 'DESC',
          'post_type' => 'post',
          'post_status' => 'publish'
        );

        $latest_news = get_posts( $args );
        $latest_new = $latest_news[0];
        $count_comments = get_comments_number( $latest_new->ID );

      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="latest_news">
            <div class="left_side">
              <h3 class="box_title tupper lightblue">
                Latest <?php echo $category_name ?>
              </h3>
              <br>
              <a href="<?php echo get_the_permalink($latest_new->ID) ?>" class="news_title"><?php echo get_the_title($latest_new->ID); ?></a>
              <?php /* <p><?php echo get_the_excerpt($latest_new->ID); ?></p> */ ?>
              <!-- <p class="comments_count"><span class="comment-icon"></span> Comments (<?php echo $count_comments ?>)</p> -->
            </div>
            <div class="right_side">
                <?php echo get_the_post_thumbnail($latest_new->ID); ?>
            </div>
          </div>
        </div>
      </div>
      <?php wp_reset_query(); ?>
      <?php wp_reset_postdata(); ?>

      <?php //  News and Pharmacy ?>
      <div class="row">
        <?php // News side  and Your Pharmacy?>
        <div class="col-md-12 col-sm-12 col-xs-12 home_boxes">
          <?php
            // News section
            $args = array(
              'numberposts' => 10,
              'offset' => 1,
              'category_name' => $category_name,
              'orderby' => 'post_date',
              'order' => 'DESC',
              'post_type' => 'post',
              'post_status' => 'publish'
            );

            $latest_news = get_posts( $args );
          ?>
          <hr>
          <h3 class="box_title tupper lightblue">
            Latest News
          </h3>
          <?php foreach( $latest_news as $key =>  $news ) : ?>
          <?php $count_comments = get_comments_number( $news->ID ); ?>
            <div class="fifty">
              <div class="latest_news">
                <div class="left_side">
                  <?php echo get_the_post_thumbnail($news->ID); ?>
                </div>
                <div class="right_side">
                  <a href="<?php echo get_the_permalink($news->ID) ?>" class="news_title"><?php echo get_the_title($news->ID); ?></a>
                  <!-- <p class="comments_count"><span class="comment-icon"></span> Comments (<?php echo $count_comments ?>)</p> -->
                </div>
              </div>
              <hr class="inside_boxes">
            </div>
          <?php endforeach; ?>
          <?php wp_reset_query(); ?>
          <?php wp_reset_postdata(); ?>

          <hr>
        </div>
      </div>
      <?php /* ?>
      <?php // Interviw ?>
      <div class="row">
        <div class="col-xs-12">
          <?php
            // $interview_d_img = get_field('interview_desktop_image');
            // $interview_m_img = get_field('interview_mobile_image');
            // $interview_copy = get_field('interview_copy');
          ?>
          <div class="interview">
            <img class="hidden-xs" src="<?php echo $interview_d_img['url'] ?>">
            <img class="visible-xs" src="<?php echo $interview_m_img['url'] ?>">
            <div class="interview_copy">
              <h2 class="tupper">Survey</h2>
              <?php echo $interview_copy ?>
            </div>
          </div>
        </div>
      </div>
      <?php // End Interviw ?>
      <?php */ ?>

      <?php // check if showing other posts
      $args = array(
        'numberposts' => -1,
        'offset' => 11,
        'category' => $category_name,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish'
      );

      $latest_news_more = get_posts( $args );
      $more_num = count($latest_news_more);

      if ( $more_num > 11 ) :
       ?>

      <?php // Start view more ?>
      <div class="row more">
        <div class="col-md-12 col-sm-12 col-xs-12 home_boxes archive_lightblue">
          <h3 class="box_title tupper lightblue">
            Other <?php echo $category_name ?>
          </h3>
          <?php echo do_shortcode('[ajax_load_more container_type="ul" css_classes="fiftyul" post_type="post" posts_per_page="10" category="'.$category_name.'" offset="11" scroll="false" button_label="Load more '.$category_name.' articles"]') ?>
        </div>
      </div>
      <?php // End view more ?>
      <?php
      endif;
       ?>
    </div>

    <?php // Right sidebar ?>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <?php get_sidebar(); ?>
    </div>
  </div>

  <div class="footer_top_banner sidempu">
      <!-- Async Tag // Tag for network 1732: Cogora  // Website: Pharmacist // Page: Site Wide  // Placement: Pharmacist bottom banner (6340774) // created at: Jun 9, 2017 5:34:40 PM -->
      <script type="text/javascript" src="https://aka-cdn-ns.adtech.de/dt/common/DAC.js"></script>
      <div id="6340774">
        <noscript>
          <a href="https://adserver.adtech.de/adlink|3.0|1732.1|6340774|0|225|ADTECH;loc=300;alias=" target="_blank">
            <img src="https://adserver.adtech.de/adserv|3.0|1732.1|6340774|0|225|ADTECH;loc=300;alias=" border="0" width="728" height="90">
          </a>
        </noscript>
      </div>
      <script>
        ADTECH.config.page = { protocol: 'https', server: 'adserver.adtech.de', network: '1732.1', params: { loc: '100' }};
        ADTECH.config.placements[6340774] = { sizeid: 225, params: { alias: '', target: '_blank' }};
        ADTECH.loadAd(6340774);
      </script>

  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<!-- End of main content -->
<?php get_footer();
