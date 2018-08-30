
<div class="new">


<div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
    <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
        <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
        <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active"><img alt="First slide" class="d-block w-100" src='http://localhost/WP_projekt/wp-content/uploads/2018/06/bright-close-up-color-221247.jpg'></div>
        <div class="carousel-item"><img alt="Second slide" class="d-block w-100" src="http://localhost/WP_projekt/wp-content/uploads/2018/06/active-adult-aerobic-864990.jpg"></div>
        <div class="carousel-item"><img alt="Third slide" class="d-block w-100" src="http://localhost/WP_projekt/wp-content/uploads/2018/06/abdominal-exercise-abdominal-trainer-action-416747.jpg"></div>
    </div>
    <a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a>
    <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
</div>

</div>
<?php
$q3 = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 1,
                'category_name' => 'o mnie'

        ]);
 ?>
<div class="new">
    <?php if ( $q3->have_posts() ) : while ( $q3->have_posts() ) :    $q3->the_post(); ?>
          <!-- post -->

       <div class="tit">
           <h3><?php the_title(); ?></h3>
       </div>

        <div class="con_3">
            <?php the_excerpt(); ?>

        </div>



        <?php endwhile; ?>
          <!-- post navigation -->
        <?php else: ?>
          <!-- no posts found -->
        <?php endif; ?>
</div>



<!-- <div class="container">
<br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
</ol>


<div class="carousel-inner" role="listbox">

<div class="item"><img alt="First slide"  src='http://localhost/WP_projekt/wp-content/uploads/2018/06/bright-close-up-color-221247.jpg'>
<div class="carousel-caption">
</div>
</div>
<div class="item"><img alt="Second slide"  src="http://localhost/WP_projekt/wp-content/uploads/2018/06/active-adult-aerobic-864990.jpg">
<div class="carousel-caption">
</div>
</div>
<div class="item"><img alt="Third slide"  src="http://localhost/WP_projekt/wp-content/uploads/2018/06/abdominal-exercise-abdominal-trainer-action-416747.jpg">
<div class="carousel-caption">
</div>
</div>
</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div> -->
<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar2"> ☰ </button>
        <a class="navbar-brand" href="#">Navbar sm</a>
        <div class="collapse navbar-toggleable-sm" id="collapsingNavbar2">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-xs-right">
                 <li class="nav-item">
                     <a class="nav-link" href="#">About</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>


  <nav class="navbar-toggleable-sm hidden-md-up h-20" role="navigation">
      <div class="menu btn1" data-menu="1">
          <div class="icon-left"></div>
          <div class="icon-right"></div>
        </div>
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

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

   <h1>

     Codepen Menu Challenge</h1>
   <div class="container">
     <div class="flex-box"></div>
     <div class="flex-box"></div>
     <div class="flex-box"></div>

     <div class="menu">
       <ul class="menu__list">
         <li class="menu__item">Home</li>
         <li class="menu__item">About</li>
         <li class="menu__item dropdown-holder dropdown-holder1">
           Widgets
           <div class="hover-box">
             <ul class="hover-box__list">
               <li class="hover-box__item">Big Widget</li>
               <li class="hover-box__item">Bigger Widgets</li>
               <li class="hover-box__item">Huge Widget</li>
             </ul>
           </div>

         </li>
         <li class="menu__item dropdown-holder">Kabobs
           <div class="hover-box">
             <ul class="hover-box__list">
               <li class="hover-box__item">Shiskabobs</li>
               <li class="hover-box__item">BBQ kabobs</li>
               <li class="hover-box__item">Summer Kabobs</li>
             </ul>
           </div>

         </li>
         <li class="menu__item">Contact</li>

       </ul>
     </div>

     <div class="toggle">
       <span class="toggle__span"></span>
       <span class="toggle__span"></span>
       <span class="toggle__span"></span>
     </div>

   </div>
