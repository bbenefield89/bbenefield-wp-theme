<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bbenefield
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php get_template_directory_uri(); ?>/favicon.ico">
	
	<?php wp_head(); ?>
	
	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
  <div id="page" class="container-fluid site">
	  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bbenefield' ); ?></a>
    
    <nav class="navbar">
      <div class="navbar__mobile-container">
        <div class="navbar__logo-container">
          <a class="navbar__logo-container__logo">BB</a>
        </div>
        
        <div class="navbar__hamburger-container">
          <i class="fas fa-bars"></i>
        </div>
      </div>

      <ul class="navbar__links-container">
        <li class="navbar__links-container__item">
          <a class="navbar__links-container__item__link">About</a>
        </li>
        <li class="navbar__links-container__item">
          <a class="navbar__links-container__item__link">Portfolio</a>
        </li>
        <li class="navbar__links-container__item">
          <a class="navbar__links-container__item__link">Blog</a>
        </li>
      </ul>
      
      <?php
      
      // wp_nav_menu([
      //   'menu' => 'Nav Menu',
      // ]);
      
      ?>
    </nav>
    
<!--     <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand ml-2 ml-lg-5" href="/">BB</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
        
      <?php
      
        // wp_nav_menu([
        //   'menu' => 'Nav Menu',
        //   'menu_class' => 'navbar-nav',
        //   'container' => 'div',
        //   'container_class' => 'collapse navbar-collapse',
        //   'container_id' => 'navbarSupportedContent',
        // ]);
        
      ?>
    <!-- </nav> -->
