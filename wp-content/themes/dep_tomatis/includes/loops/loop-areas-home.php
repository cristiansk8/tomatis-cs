
<?php
// areas home
?>

<?php

$args = array (
  'post_type' => 'areas',
  'posts_per_page' => 100,
  'order'          => 'ASC'
  );

$query = new WP_Query($args);

?>

<section>
  <div class="areas-home">
    <?php
    $array = array("#4fa7d5", "#1175b7", "#2e5ea3", "#1aa7b3", "#60bb46","#4fa7d5");
    $cont=-1;
    $cont2=0;
  if($query->have_posts()):
    while($query->have_posts()): $query->the_post();
    $logo= get_field('logo_home');
    $cont++;
    $cont2++;
  ?>

      <div class="areasHome--caption" style="background-color:<?php echo $array[$cont] ?>">
        <a href="https://tomatis.com.co/areas-de-aplicacion/#popup<?php echo $cont2; ?>">
          <img src="<?php echo $logo; ?>" alt="">
        </a>
        <h3><?php the_title(); ?></h3>

      </div>

  <?php endwhile;
  wp_reset_query(); ?>
  </div>

</section>
<?php endif; ?>
