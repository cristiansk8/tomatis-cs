
<?php
// Aliados
?>

<?php

$args = array (
  'post_type' => 'aliados',
  'posts_per_page' => 100,
  'order'          => 'ASC'
  );

$query = new WP_Query($args);

?>

<section>
  <div class="aliados">
    <?php

  if($query->have_posts()):
    while($query->have_posts()): $query->the_post();
  ?>
    <div class="aliados-caption">

      <?php the_post_thumbnail(); ?>
      <h3><?php the_title(); ?></h3>

    </div>
  <?php endwhile;
  wp_reset_query();
  ?>

  </div>

</section>
<?php endif; ?>
