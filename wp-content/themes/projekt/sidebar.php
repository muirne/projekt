

                    <?php
                    $q3 = new WP_Query([
                                    'post_type' => 'post',
                                    'posts_per_page' => 1,
                                    'category_name' => 'o mnie'

                            ]);
                     ?>

                        <?php if ( $q3->have_posts() ) : while ( $q3->have_posts() ) :    $q3->the_post(); ?>
                              <!-- post -->

                             <div id="card_s" class="card-body">
                               <h3 id="tit_s" class="card-title"><?php the_title(); ?></h3>
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
