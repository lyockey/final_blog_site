<!-- Begin Header -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>

  <!-- Links to our Style.css file -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

</head>
<body>
  <div class="container"><!--Begin Container Div-->

    <header>
        <div class="row">
            <div class="twelve columns">
                <div class="contact-header-bar">
                <img src="#"><p class="contact-info">601 B Eglin Pkwy NE |</p>
                <img src="#"><p class="contact-info">7am - 5pm |</p>
                <img src="#"><p class="contact-info">850 - 586 - 7696 |</p>
                <img src="#"><p class="contact-info emergency">Emergencies</p>
            </div>

            <h1>
                <a href="<?php $url = home_url('/'); echo $url; ?>">
                    <img src="#"/>Crossroads Animal Clinic
                </a>
            </h1>
            </div>
    </header>
    <div class="row">
        <div class="twelve columns">
            <?php
                wp_nav_menu( array(
                    'sort_column'      =>  'menu_order',
                    'container_class'  =>  'blank-menu-header'
                ));
            ?>
        </div>
    </div>
<!-- End Header -->
