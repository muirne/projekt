<?php get_header(); ?>
    <section class="single">
        <div class="container">
            <article>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!-- post -->
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>
                    <footer>
                        <?php the_category(); ?>
                        <p>Data publikacji: <?php the_date(); ?></p>
                    </footer>
                    <?php the_content(); ?>
                    <p>Autor: <?php the_author(); ?></p>
                <?php endwhile; ?>
                    <!-- post navigation -->
                <?php else: ?>
                    <!-- no posts found -->
                <?php endif; ?>
            </article>
        </div>
    </section>
<?php get_footer(); ?>
