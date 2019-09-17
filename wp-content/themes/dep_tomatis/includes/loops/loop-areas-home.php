
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
  <div class="areasHome">
    <?php
    $array = array("#4fa7d5", "#1175b7", "#2e5ea3", "#1aa7b3", "#60bb46");
    $cont=-1;
  if($query->have_posts()):
    while($query->have_posts()): $query->the_post();
    $logo= get_field('logo_home');
    $cont++;
  ?>
    <div class="areasHome--caption" style="background-color:<?php echo $array[$cont] ?>">
      <img src="<?php echo $logo; ?>" alt="">
      <h3><?php the_title(); ?></h3>

    </div>
  <?php endwhile;
  wp_reset_query(); ?>
  </div>

</section>
<?php endif; ?>
