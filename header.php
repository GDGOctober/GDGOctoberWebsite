<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php bloginfo('title'); ?></title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>

  <!-- Css -->
  <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top">

  <!-- Preloader -->
<!--   <div class="loader-mask">
    <div class="loader">
      "Loading..."
    </div>
  </div> -->

  <!-- Navigation -->
  <header class="nav-type-1" id="home">

    <nav class="navbar navbar-fixed-top">
      <div class="navigation-overlay">
        <div class="container-fluid relative">
          <div class="row">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <!-- Logo -->
              <div class="logo-container">
                <div class="logo-wrap local-scroll">
                  <a href="<?php site_url(); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo">
                  </a>
                </div>
              </div>
            </div> <!-- end navbar-header -->

            <!-- Start navbar menu -->
            <?php 
              $menu = array(
                'menu'              => 'header-menu',
                'menu_class'        => 'nav navbar-nav local-scroll text-center',
                'container_class'   => 'collapse navbar-collapse nav-wrap text-center',
                'container_id'      => 'navbar-collapse',
              );
              wp_nav_menu($menu); ?>
            <!-- End navbar menu -->
            
            <div class="menu-socials hidden-sm hidden-xs">
              <ul>
                <li>
                  <a href="https://www.facebook.com/GDGOctober/" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="https://www.meetup.com/GDG-6-October/" target="_blank"><i class="fa fa-meetup"></i></a>
                </li>
                <li>
                  <a href="https://plus.google.com/u/0/b/105609152381762460369/+GDG6October" target="_blank"><i class="fa fa-google-plus"></i></a>
                </li>
                   <li>
                  <a href="https://www.youtube.com/channel/UCb1W9Tl-mqNzwV70PVNEIvQ" target="_blank"><i class="fa fa-youtube-play"></i></a>
                </li>
              </ul>
            </div>

          </div> <!-- end row -->
        </div> <!-- end container -->
      </div> <!-- end navigation -->
    </nav> <!-- end navbar -->

  </header> <!-- end navigation -->
