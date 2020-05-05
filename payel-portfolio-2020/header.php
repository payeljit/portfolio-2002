<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Payel Banerjee portfolio</title>

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div class="container">
  <header class="site-nav">

    <div class="row mb-2"  id="header">
      <!-- logo -->
      <div class="col-4">
        <a href="<?php echo get_option("siteurl"); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/LOGO.png' ?>" alt="Payel Banerjee logo"></a>
      </div>
      <!-- nav -->
      <div class="col-8 text-center">
        <nav class="navbar nav navbar-expand-lg navbar-light" id="nav">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <?php wp_nav_menu( array('theme_location' => 'header-menu' ) ); ?>
          </div>
        </nav>
      </div>

    </div>  <!-- /row -->
    
</header>
