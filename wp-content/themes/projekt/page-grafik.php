<?php
get_header(); ?>
 <div class="wrapper">
             <div id="content" class="content_1">

              <div class="container-table">
                <div class="container-table-row">

                 <div class="container-table-cell">
            <?php
            if( have_posts() ) {
              while ( have_posts() ) {
                the_post();

                if( have_rows('kalendarz') ): ?>

	<table class="table table-responsive">
        <thead>
            <tr style="text-align:center;">
                <th style="text-align:center;">godzina/dzień</th>
                <th style="text-align:center;">PONIEDZIAŁEK</th>
                <th style="text-align:center;">WTOREK</th>
                <th style="text-align:center;">ŚRODA</th>
                <th style="text-align:center;">CZWARTEK</th>
                <th style="text-align:center;">PIĄTEK</th>
            </tr>
        </thead>

	<?php while( have_rows('kalendarz') ): the_row(); ?>

        <tr>
            <td class="table-info"><?php echo get_sub_field('godzina'); ?></td>
            <td class="table-secondary"><?php echo get_sub_field('poniedzialek'); ?></td>

            <td class="table-success"><?php echo get_sub_field('wtorek'); ?></td>
            <td class="table-danger"><?php echo get_sub_field('sroda'); ?></td>
            <td class="table-warning"><?php echo get_sub_field('czwartek'); ?></td>
            <td class="table-info"><?php echo get_sub_field('piatek'); ?></td>
        </tr>
        <?php endwhile; ?>
</table>




<?php endif;
              }
            } else {
              /* No posts found */
            }
            ?>


   </div>
   </div>
  </div>
 </div>
</div>

<?php get_footer(); ?>
