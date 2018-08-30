<?php get_header(); ?>
<div class="wrapper">
 <div id="content">
            <div class="container-fluid">

               <div class="row row-flex">
                   <?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
                        <!-- post -->
                        <section>
                        <div class="container py-3">
                        <div class="cardy">
                          <div class="row ">
                            <div class="col-md-4">
                                <div class="card-img-top img-responsive"><?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?></div>
                              </div>
                              <div class="col-md-8 px-3">
                                <div class="card-block px-3">
                                    <div id="title_3" class="card-title_single"><?php the_title(); ?></div>
                                    <div class="card-text_single"><?php the_content(); ?></div>

                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                        </div>
                        </section>


                                      <?php endwhile; ?>
                          <!-- post navigation -->
                                     <?php else: ?>
                          <!-- no posts found -->
                                    <?php endif; ?>

                    </div>
              </div>


          <?php get_footer(); ?>
