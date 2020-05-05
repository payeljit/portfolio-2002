<?php
global $post, $scpd_excerpt_length;
get_header();
the_post();
?>
<div class="container">
    <div class="row">
        <div class="col12">
          <h1 class="title">Missing page.</h1>
          <section>
            <p>Sorry, the requested page cannot be found.</p>
            <p><a href="<?php echo get_site_url() ?>">Click here</a> to go back to the home page</p>
          </section>
        </div>
    </div>
    <div class="clearfix"><br /></div>
</div>
<?php get_footer();
