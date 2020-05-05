<?php get_header(); ?>


<main>
  <!-- Intro section -->
  <!-- <div id="intro" class="row payel-image  intro text-center" style="background: url('<?php echo get_template_directory_uri() . '/assets/img/portfolio-background-light.png' ?>');   background-position: 100%; background-size: cover; background-repeat: no-repeat; "> -->
    <div id="intro" class="row payel-image  intro text-center" style="background: #52cfde">
      <div class="col-12 payel-image">
       <img src="<?php echo get_template_directory_uri() . '/assets/img/Payel-Banerjee.jpeg' ?>" alt="Payel Banerjee" width="200px">
      </div>
    <div class="col-12"  id="about">
      <h1 class="mb-4 name" id="name">Payel Banerjee</h1>
      <h4 class="mb-4">Front end deeveloper</h4>
      <p> My name is Payel Banerjee. I am a passionate Front End Web Developer. Currently working for a digital company Cogora.&nbsp;

I love to code from scratch. I love simple coding with HTML/5,CSS/3, JavaScript/Jquery, PHP with WordPress. I started loving JavaScript framework AngularJs. I have experience in creating WordPress theme from scratch. I am keen to learn new technologies. I always put my 100% to my work. Plese <a href="#contact" style="color:  #bd49a9;">contact</a> me for more details.
      </p>
    </div>

  </div>
<span id="skill"></span>
<!-- My skills section -->

<div class="row my-skills"  id="skills">
  <div class="col-12">
    <h1 class="text-center">My skills</h1>
  </div>

  <div class="col-12 col-md-3 col-lg-3">
    <strong class="pl-3">Languages</strong>
    <div class="languages"><?php echo do_shortcode("[PROGRESSBAR_WP id=28]"); ?></div>
  </div>
  <div class="col-12 col-md-3 col-lg-3">
    <strong>  Tools</strong>
    <div class="languages"><?php echo do_shortcode("[PROGRESSBAR_WP id=32]"); ?></div>

  </div>
  <div class="col-12 col-md-3 col-lg-3">
    <strong>  Editor</strong>
    <div class="languages"><?php echo do_shortcode("[PROGRESSBAR_WP id=33]"); ?></div>
  </div>
  <div class="col-12 col-md-3 col-lg-3">
    <strong>  CMS</strong>
    <div class="languages"><?php echo do_shortcode("[PROGRESSBAR_WP id=34]"); ?></div>
  </div>
</div>

<!-- Experience -->
<div class="row experiance"  id="experiences">
  <div class="col-12">
    <h1 class="text-center">Experiences</h1>
  </div>
  <!-- repeater -->
  <div class="row mx-auto" style="max-width: 740px">
    <div class="col-6">
        <?php
        if(get_field('label')):
               while(has_sub_field('label')):
                  the_sub_field('label');
                echo '<br>';
               endwhile;
        endif; ?>
      </div>
  <div class="col-6">
      <?php
      if(get_field('label_description')):
              while(has_sub_field('label_description')):
                 the_sub_field('label_des');
                  echo '<br>';
               endwhile;
      endif; ?>
    </div>
  </div>
</div>

<!-- Portfolio -->

<?php

if(have_rows('portfolio_images')): ?>
  <div class="row image_portfolio portfolio"  id="portfolio">
    <div class="col-12">
        <h1 class="text-center"> Portfolio  </h1>
    </div>
    <?php while(have_rows('portfolio_images')): the_row(); ?>
      <div class="col-12 col-mb-3 col-lg-3 mb-4">
        <a href="<?php echo the_sub_field('link'); ?>" alt="" target="_blank"><img class="images" src="<?php the_sub_field('image'); ?>" alt="" width="300px"></a>
        <div class="overlay"></div>
      </div>

<?php endwhile; ?>
  </div>
<?php endif; ?>


<!-- Contact -->
<div class="row contact" id="contact">
  <div class="col-12 text-center">
    <h1> Contact </h1>
  </div>
  <div class="col-12 col-md-4 col-lg-4  text-right">
    <h4>Write a message</h4>
    <p>I am available to do a free consultation on your project. Please don't hesitate to send your message to me. Thank you for visiting my website!</p>
  </div>
  <div class="col-12 col-md-8 col-lg-8  text-left">
  <?php echo do_shortcode('[contact-form-7 id="71" title="Contact"]'); ?>
  </div>
</div>




<?php get_footer(); ?>
