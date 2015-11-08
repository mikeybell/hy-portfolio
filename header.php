<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Dev Icons -->
  <link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>

  <?php // Load CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header class="animated slideInDown">
  <div class="container">
  
  <a href="#top"><img src="<?php echo get_bloginfo('template_url') ?>/images/logo.png"></a>
  <div class="burger">&#9776;</div>

    <nav>
      <!-- <i class="fa fa-close"></i> -->
      <img class="nav-close" src="<?php echo get_bloginfo('template_url') ?>/images/title_x_sm.png">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </nav>
    
  </div> <!-- /.container -->
</header><!--/.header-->

