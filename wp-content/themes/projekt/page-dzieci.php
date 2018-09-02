<?php get_header(); ?>
<div class="container-fluid">


<section id="wellcome" class="jumbotron  jumbotron-fluid">
<div class="container">

  <h1 class="ti_kids">SALA ZABAW "DZIECIAKI I SPÓŁKA"</h1>
  <p class="lead"> Miejsce przyjazne Mamom z Maluszkami.Znajdujemy się obok klubu Fitness Get FIT, można więc zostawić Dzieciaczki na zabawie i poćwiczyć:)</p>

</div>

</section>

<div class="container-fluid">
             <?php
               $qd = new WP_Query([
                                 'post_type' => 'post',
                                 'posts_per_page' => 4,
                                 'category_name' => 'dzieciaki'

                         ]);
             ?>
   <div class="row row-flex">
       <?php if ( $qd->have_posts() ) : while ( $qd->have_posts() ) :    $qd->the_post(); ?>
                            <!-- post -->

          <div class="col-md-3 col-sm-6 col-xs-12 d-flex align-items-stretch">
             <div id="bod" class="card card-body flex-fill">
                 <div class="card-block">
                     <div class="card-img-top img-responsive"><?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?></div>
                      <h2 id="title" class="card-title"><?php the_title(); ?></h2>
                      <div class="card-text"><?php the_content(); ?></div>
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
