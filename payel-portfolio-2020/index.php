  <?php get_header(); ?>


     <div class="row pl-4">
         <div class="col-12 col-md-8 col-lg-8">
           <?php
           $post   = get_post( 1 );
           $output =  apply_filters( 'the_content', $post->post_content );
           $output_title =  apply_filters( 'the_title', $post->post_title );
           echo '<h2>' . $output_title . '</h2>';
           echo $output;?>


           <h4>All posts</h4>
              <ul>
                <?php
                  global $post;

                  $myposts = get_posts( array(
                    'post_type'=>'post',
                      'posts_per_page' => -1
                  ) );

                  if ( $myposts ) {
                      foreach ( $myposts as $post ) :
                          setup_postdata( $post ); ?>
                          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                      <?php
                      endforeach;
                      wp_reset_postdata();
                  }
                  ?>
              </ul>
              
        </div>

        <!-- sidebar query for latest article-->
        <div class="col-12 col-md-4 col-lg-4">
          <?php
           // the query for all articles
           $wpb_all_query_posts = new WP_Query(array(
             'post_type'=>'post',
             'post_status'=>'publish',
             'posts_per_page'=>2)); ?>

            <h5 class="mt-5 mb-3">Recent articles</h5>
           <?php
           if ( $wpb_all_query_posts->have_posts() ) :
             while ( $wpb_all_query_posts->have_posts() ) : $wpb_all_query_posts->the_post();

                if ( has_post_thumbnail()) {
                  the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) );
                }
                 ?>
                 <p class="mt-3 mb-3"> <a href="<?php echo get_permalink($post->ID); ?>"> <?php the_title(); ?></a></p>

        <?php endwhile;  wp_reset_postdata();
            endif; ?>
        </div>
     </div>



                 <?php /*
                   $args = array(
                   'post_type' => 'portfolio'
                   );

                   $query = new WP_Query( $args );?>

                   <?php

                   if( $query->have_posts() ) :
                      while( $query->have_posts()) : $query->the_post(); ?>
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
                 <?php
                 endwhile;
                 endif;

                */  ?>

<?php get_footer() ?>
