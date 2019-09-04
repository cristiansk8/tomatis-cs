
<?php
// areas
?>

<?php

$args = array (
  'post_type' => 'areas',
  'posts_per_page' => 100,
  'order'          => 'ASC'
  );

$query = new WP_Query($args);

?>

<section id="areas">
  <div class="text-areas">
    La aplicación del programa <strong>Tomatis®</strong> beneficia a las personas en:
  </div>
  <div class="areas-wrapper areas">

    <?php

  if($query->have_posts()):
    while($query->have_posts()): $query->the_post();
    $subtitulo= get_field('subtitulo');
  ?>
  <div class="areas--item">

    <div class="areas--caption">
      <?php the_post_thumbnail(); ?>
      <h3><?php echo $subtitulo; ?></h3>
    </div>
  </div>

  <?php endwhile;
  wp_reset_query();
  ?>

  </div>

</section>
<?php endif; ?>
