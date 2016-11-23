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
  <!--<div class="container"--> <!--Begin Container Div-->

    <header>
        <div class="contact-header">
            <p class="contact-info"><img src="http://www.laurenyockey.com/finalblog2016/wp-content/uploads/2016/11/pindrop.png">601 B Eglin Pkwy NE |</p>
            <p class="contact-info"><img src="http://www.laurenyockey.com/finalblog2016/wp-content/uploads/2016/11/hours.png">7am - 5pm |</p>
            <p class="contact-info"><img src="http://www.laurenyockey.com/finalblog2016/wp-content/uploads/2016/11/phone.png">
                <a href="tel:8505867696">850 - 586 - 7696</a> |</p>
            <p class="contact-info emergency">
                <a href="tel:8505867696">Emergencies</a></p>
        </div>

        <h1>
            <a href="<?php $url = home_url('/'); echo $url; ?>">
                <img src="http://www.laurenyockey.com/finalblog2016/wp-content/uploads/2016/11/logo_paw.png"/>Crossroads Animal Clinic
            </a>
        </h1>
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
