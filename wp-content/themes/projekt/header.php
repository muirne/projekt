<html lang="<?php language_attributes() ?>">
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <?php wp_head(); ?>
 </head>
 <body>
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

     <div class="rounded-social-buttons">
                    <a class="social-button facebook" href="https://www.facebook.com/fitnessGetFITlimanowa/?fb_dtsg_ag=AdzdL2Me3mEUvbvBPkiHKhM3TRlOTGoHlE60GXMMZ62KMg%3AAdxyLm9HE9KgrSNRntTYBDRCLN24e-hIIdIEEJwZw_B1ew" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>


     <!-- Full Page Image Background Carousel Header -->
      <div id="myCarousel" class="carousel slide">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active" style="background-color:black">
                    <!-- Set the first background image using inline CSS below. -->
                    <div id="one" class="fill" style="background-image:url('http://localhost/WP_projekt/wp-content/uploads/2018/06/bright-close-up-color-221247.jpg');" ></div>
                    <div class="carousel-caption">
                         <h1 class="animated fadeInLeft"></h1>
                         <p class="animated fadeInUp"></p>

                    </div>
                </div>
                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" ></div>
                    <div class="carousel-caption">
                         <h1 class="animated fadeInDown"></h1>
                         <p class="animated fadeInUp"></p>

                    </div>
                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill"></div>
                    <div class="carousel-caption">
                         <h1 class="animated fadeInRight" style="font-size: px" > FITNESS</h1>
                         <h1 class="animated fadeInRight">GET FIT</h1>
                         <p class="animated fadeInRight">---- by Kamila Ociepka ----</p>

                    </div>
                </div>
            </div>
        </div>

<div id="menu" class="container-fluid">
    <nav class="nav hidden-sm-down" style="display: flex; justify-content: flex-end; text-align:right;">
                <a class="responsive"><span></span></a>
                        <?php wp_nav_menu(
                         array(
                          'menu'=>'kamila',
                          'theme_location' => 'top',
                          'container' => 'nav',
                          'container_class' => false,
                          'menu_class' => 'nav',
                          'menu_id' => 'top-menu' ,
                          )
                      ); ?>

    </div>
    </nav>
    <!-- <nav class="navbar hidden-md-up">
        <div id="guzik" class="container-fluid">
            <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="collapse" > ☰ </button>

            <div class="collapse navbar-toggleable-sm"> -->
            <nav class="navbar hidden-md-up">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="#"></a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                <!-- Collapsible content -->
                <div class="collapse navbar-toggleable-sm" id="navbarSupportedContent15">

                <a class="responsive"><span></span></a>
                        <?php wp_nav_menu(
                         array(
                          'menu'=>'kamila',
                          'theme_location' => 'top',
                          'container' => 'nav',
                          'container_class' => false,
                          'menu_class' => 'nav',
                          'menu_id' => 'top-menu' ,

                          )
                      ); ?>
            </div>
        
    </nav>




    </header>
