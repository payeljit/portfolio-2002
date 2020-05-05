<?php get_header(); ?>
<?php
global $post;
$output =  apply_filters( 'the_content', $post->post_content );
$output_title =  apply_filters( 'the_title', $post->post_title );
echo '<h2>' . $output_title . '</h2>';
echo $output; ?>

<!-- Add comment section -->
<?php
 if ( comments_open()) :
 comments_template();
endif;
?>
<?php get_footer() ?>
