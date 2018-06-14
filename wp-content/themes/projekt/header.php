<html lang="<?php language_attributes() ?>">
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <?php wp_head(); ?>
 </head>
 <body>


  <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('https://localhost/WP_projekt/wp-content/uploads/2018/06/ball.jpeg');"></div>
                <div class="carousel-caption">
                     <h2 class="animated fadeInLeft">GET FIT</h2>
                     <p class="animated fadeInUp">by Kamila Ociepka</p>

                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('https://localhost/WP_projekt/wp-content/uploads/2018/06/ball.jpeg');"></div>
                <div class="carousel-caption">
                     <h2 class="animated fadeInDown">GET FIT</h2>
                     <p class="animated fadeInUp">by Kamila Ociepka</p>

            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('https://localhost/WP_projekt/wp-content/uploads/2018/06/ball.jpeg');"></div>
                <div class="carousel-caption">
                     <h2 class="animated fadeInRight">GET FIT</h2>
                     <p class="animated fadeInRight">by Kamila Ociepka</p>
                     
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </div>

     <!-- <div class="container-fluid main">
         <div class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img-fluid" src="https://localhost/WP_projekt/wp-content/uploads/2018/06/ball.jpeg" alt="Pierwszy slajd">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="https://localhost/WP_projekt/wp-content/uploads/2018/06/ball.jpeg" alt="Drugi slajd">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="https://localhost/WP_projekt/wp-content/uploads/2018/06/ball.jpeg" alt="Trzeci slajd">
            </div>
          </div>
         </div>
      </div> -->

   <div class="container">
      <div class="navigation">
         <a class="responsive"><span></span></a>
                 <?php wp_nav_menu(
                  array(
                   'menu'=>'kamila',
                   'theme_location' => 'top',
                   'container' => 'nav',
                   'container_class' => false,
                   'menu_class' => 'nav',
                   'menu_id' => 'top-menu' ,
                   ) ); ?>
              <div class="clear"></div>
           </div>
          </div>


    </header>
