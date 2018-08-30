<?php
get_header(); ?>


    <div class="container-fluid">


  <section class="oferta jumbotron  jumbotron-fluid">
    <div class="container">

      <h1>Znajdź coś dla siebie.</h1>
      <p class="lead">Fitness "GET FIT" to niepowtarzalne miejsce w samym Centrum Limanowej. Zapraszamy do zapoznania się z naszą ofertą. Stawiamy na propagowanie zdrowego, sportowego stylu życia. Różnorodność zajęć pozwala na dostosowanie intensywności ćwiczeń do Państwa możliwości. Zapraszamy na trening!</p>

    </div>

  </section>

  <div class="container-fluid">
               <?php
                 $qof = new WP_Query([
                                   'post_type' => 'post',
                                   'posts_per_page' => 8,
                                   'category_name' => 'oferta'

                           ]);
               ?>
     <div class="row row-flex">
         <?php if ( $qof->have_posts() ) : while ( $qof->have_posts() ) :    $qof->the_post(); ?>
                              <!-- post -->

            <div class="col-md-3 col-sm-6 col-xs-12 d-flex align-items-stretch">
               <div id="bod" class="card card-body flex-fill">                    <div class="card-block">
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
