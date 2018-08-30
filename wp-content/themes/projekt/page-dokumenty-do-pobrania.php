<?php
get_header(); ?>


<?php
$qdok = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 2,
                'category_name' => 'dok'

        ]);
 ?>
<div class="new">
    <?php if ( $qdok->have_posts() ) : while ( $qdok->have_posts() ) :    $qdok->the_post(); ?>
          <!-- post -->

       <div class="tit">
           <h3><?php the_title(); ?></h3>
       </div>

        <a  href="<?php the_permalink(); ?>"class="btn btn-primary">Pobierz</a>



        <?php endwhile; ?>
          <!-- post navigation -->
        <?php else: ?>
          <!-- no posts found -->
        <?php endif; ?>
</div>

<?php get_footer(); ?>
