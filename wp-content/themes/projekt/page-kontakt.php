

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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106060.55008181452!2d-117.95986053127125!3d33.8279951552879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2808fb8655ad%3A0x535d20ee21ffc70f!2sClash+of+Clans+Attack+Strategy!5e0!3m2!1ssr!2srs!4v1448058178196" width="580" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
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
