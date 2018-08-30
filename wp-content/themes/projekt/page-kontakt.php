

<?php
get_header(); ?>
 <div class="wrapper">
             <div id="content" class="content_2">

              <div class="container-table">
                <div class="container-table-row">

                 <div class="container-table-cell">
            <?php
            if( have_posts() ) {
              while ( have_posts() ) {
                the_post();

                if( have_rows('kontakt') ): ?>

	<table class=" tabe table table-responsive">
        <thead>

        </thead>

	<?php while( have_rows('kontakt') ): the_row(); ?>

        <tbody>
            <tr>
            <td class="table-secondary">NAZWA</td>
            <td class="table-info"><?php echo get_sub_field('nazwa'); ?></td>
             </tr>
             <tr>
                 <td class="table-secondary">ADRES</td>
                <td class="table-success"><?php echo get_sub_field('adres'); ?></td>
             </tr>
            <tr>
               <td class="table-secondary">TELEFON</td>
            <td class="table-danger"><?php echo get_sub_field('telefon'); ?></td>
            </tr>
            <tr>
                <td class="table-secondary">E-MAIL</td>
                <td class="table-info"><?php echo get_sub_field('e-mail'); ?></td>
            </tr>

        </tbody>
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

<div class="embed-responsive-item">
        <iframe src="https://www.google.com/maps/place/Marka+22,+34-600+Limanowa/@49.70508,20.4167159,17z/data=!3m1!4b1!4m5!3m4!1s0x47161cdbaca68853:0xba83404443bd7d9d!8m2!3d49.7050766!4d20.4189099" width="580" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>





<?php get_footer(); ?>

 <!-- <div id="content">

  <div id="kontakt" class="container-table">
    <div class="container-table-row">

     <div class="container-table-cell">
      <table class="table table-responsive">

          <tbody>
              <tr class="table-secondary">
                  <h1 class="tablecont">KONTAKT "FITNESS GET FIT"</h1>
              </tr>
              <tr class="table-info">
                  <th scope="row">adres:</th>
                  <td> ul.Jóźefa Marka 22 <br/> 34-600 Limanowa</td>
              </tr>
              <tr class="table-danger">
                  <th scope="row">telefon:</th>
                  <td>+48 509 849 773</td>
              </tr>
              <tr class="table-secondary">
                  <th scope="row">e-mail:</th>
                  <td>getfitlimanowa@gmail.com</td>
              </tr>
          </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
