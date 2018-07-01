<?php get_header(); ?>
<div class="wrapper">
 <div id="content">
            <div class="container-fluid">

               <div class="row row-flex">
                   <?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
                                        <!-- post -->


                         <div id="bod_sin" class="card card-body flex-fill">
                          <div class="card-img-top img-responsive"><?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?></div>


                               <div class="card-block">
                                  <h2 id="title_3" class="card-title"><?php the_title(); ?></h2>
                                  <div class="card-text_3"><?php the_content(); ?></div>
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
