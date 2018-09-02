<?php
get_header(); ?>


<?php
$qdok = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 2,
                'category_name' => 'dok'

        ]);
 ?>
<div class="guzik">
    <?php if ( $qdok->have_posts() ) : while ( $qdok->have_posts() ) :    $qdok->the_post(); ?>
          <!-- post -->

       <div class="tit_doc">
           <h3><?php the_title(); ?></h3>
           <a class="guzik_doc" href="<?php the_permalink(); ?>"class="btn btn-primary">Pobierz</a>
       </div>





        <?php endwhile; ?>
          <!-- post navigation -->
        <?php else: ?>
          <!-- no posts found -->
        <?php endif; ?>
</div>

<?php get_footer(); ?>
