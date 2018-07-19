<?php get_header(); ?>
<div class="wrapper">
 <div id="content">
  <div class="container-fluid">

    <?php
     $q2 = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'category_name' => 'get fit'

                        ]);
        ?>
     <div class="row">
      <?php if ( $q2->have_posts() ) : while ( $q2->have_posts() ) :    $q2->the_post(); ?>
        <div id="main" class="col-xs-12 col-sm-6 col-md-8">
         <div class="card">

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
         <div class="carousel-inner">
          <div class="carousel-item active">
           <img class="d-block"    src="http://localhost/WP_projekt/wp-content/uploads/2018/06/pexels-photo-396133.jpeg" data-color="lightblue" alt="First Image">
          <div class="carousel-caption d-md-block">

          </div>
         </div>
         <div class="carousel-item">
          <img class="d-block " src="http://localhost/WP_projekt/wp-content/uploads/2018/06/pexels-photo-1172019-1000x800.jpeg" data-color="firebrick" alt="Second Image">
         <div class="carousel-caption d-md-block">

          </div>
         </div>
         <div class="carousel-item">
          <img class="d-block" src="http://localhost/WP_projekt/wp-content/uploads/2018/06/pexels-photo-374694.jpeg" data-color="violet" alt="Third Image">
        <div class="carousel-caption d-md-block">

        </div>
      </div>
    </div>
    <!-- Controls -->
     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
    </div>


    <div class="card-body">
      <h3 class="card-title"><?php the_title(); ?></h3>
      <p class="card-text"><?php the_excerpt(); ?></p>
      <div class="pink_2">
           <a  href="<?php the_permalink(); ?>" class="btn btn-primary">Czytaj więcej...</a>
     </div>
                    <?php endwhile; ?>
                          <!-- post navigation -->
                    <?php else: ?>
                          <!-- no posts found -->
                    <?php endif; ?>
            </div>
            </div>
        </div>

  <div id="side" class="col-xs-6 col-md-4">
              <?php get_sidebar(); ?>
 </div>
</div>
</div>

  <div class="container-fluid">
               <?php
                 $q1 = new WP_Query([
                                   'post_type' => 'post',
                                   'posts_per_page' => 6,
                                   'category_name' => 'get fit'

                           ]);
               ?>
     <div class="row row-flex">
         <?php if ( $q1->have_posts() ) : while ( $q1->have_posts() ) :    $q1->the_post(); ?>
                              <!-- post -->

            <div class="col-md-4 col-sm-6 col-xs-12 d-flex align-items-stretch">
               <div id="bod" class="card card-body flex-fill">
                <div class="card-img-top img-responsive"><?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?></div>


                     <div class="card-block">
                        <h2 id="title" class="card-title"><?php the_title(); ?></h2>
                        <div class="card-text"><?php the_excerpt(); ?></div>
                        <div class="card-footer">
                        <a  href="<?php the_permalink(); ?>" class="btn btn-primary">Czytaj więcej...</a>
                       </div>
                    </div>
                </div>
            </div>

                            <?php endwhile; ?>
                <!-- post navigation -->
                           <?php else: ?>
                <!-- no posts found -->
                          <?php endif; ?>

          </div>
    </div>
<?php get_footer(); ?>
