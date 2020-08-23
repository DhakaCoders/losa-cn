<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--   <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?> -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	
  <?php wp_head(); ?>
</head>
<body>
<div class="bdoverlay"></div>
<header class="header">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr ">
            <div class="hdr-lft">
              <div class="logo">
                <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-logo.png"></a>
              </div>
            </div>
            <div class="hdr-rgt">
              <div class="hdr-rgt-top">
                <a href="#">
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/hdr-top-tell.png" alt=""></i>
                  <em>(55) 5424-0205</em></a>
              </div>
              <div class="hdr-humberger">
                <div class="line-icon show-md">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
              <nav class="main-nav hide-md">
              <?php 
                $menuOptions = array( 
                    'theme_location' => 'cbv_main_menu', 
                    'menu_class' => 'reset-list hdr-topbar-nav',
                    'container' => false,
                    'container_class' => ''
                  );
                wp_nav_menu( $menuOptions ); 
              ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="xs-main-nav-cntlr show-md" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/xs-nav-bg.png');">
  
    <nav class="xs-main-nav">
      <div class="xs-popup-hdr">
        <div class="logo">
          <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/xs-hdr-logo.png"></a>
        </div>
        <div class="closebtn">
          <span></span>
          <span></span>
        </div>
      </div>
      
      <div class="nav-menu-bg">
          <?php 
            $menuOptions = array( 
                'theme_location' => 'cbv_main_menu', 
                'menu_class' => 'reset-list',
                'container' => false,
                'container_class' => ''
              );
            wp_nav_menu( $menuOptions ); 
          ?>
        <div class="hdr-rgt-top">
          <a href="#">
            <i><img src="<?php echo THEME_URI; ?>/assets/images/xs-hdr-tell-logo.png" alt=""></i>
            <em>(55) 5424-0205</em></a>
        </div>
      </div>
      
      
    </nav>
  </div>
</header>