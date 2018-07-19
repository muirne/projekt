<?php get_header(); ?>
<div class="container-fluid">


<section id="wellcome" class="jumbotron  jumbotron-fluid">
<div class="container">

  <h1 class="ti_kids">SALA ZABAW "DZIECIAKI I SPÓŁKA"</h1>
  <p class="lead"> Miejsce przyjazne Mamom z Maluszkami.Znajdujemy się obok klubu Fitness Get FIT, można więc zostawić Dzieciaczki na zabawie i poćwiczyć:)</p>

</div>

</section>
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3">
  <div class="card">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="card-title"> <?php the_title(); ?></div>
    <hr>
    <p class="cardbody"><?php the_content(); ?></p>
<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif; ?>
  </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3">
  <div class="card">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="card-title"> <?php the_title(); ?></div>
    <hr>
    <p class="cardbody"><?php the_content(); ?></p>
<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif; ?>
  </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3" id="bottom">
  <div class="card card">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="card-title"> <?php the_title(); ?> </div>
    <hr>
    <p class="cardbody"><?php the_content(); ?></p>
<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif; ?>
  </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3">
  <div class="card">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="card-title"><?php the_title(); ?></div>
    <hr>
    <p class="cardbody"><?php the_content(); ?></p>
<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif; ?>
  </div>
</div>
</div>

</div>



<?php get_footer(); ?>
