
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
    $cont = 0;
    while($query->have_posts()): $query->the_post();
    $subtitulo= get_field('subtitulo');
    $cont++;
  ?>
<div id="inline<?php echo $cont; ?>" class="" style="display:none;width:80%;">
<div class="popup">
  <h2><?php echo $subtitulo; ?></h2>
  <hr>
  <a class="close" href="#">&times;</a>
  <div class="content">
    <?php the_content(); ?>
  </div>
</div>
</div>

<div class="areas--item">
  <a class="fancyOther" data-fancybox="images" href="#inline<?php echo $cont; ?>" data-fancybox="gallery">
    <div class="areas--caption">
      <?php the_post_thumbnail(); ?>
      <h3><?php echo $subtitulo; ?></h3>
    </div>
  </a>
</div>
  <?php endwhile;
  wp_reset_query();
  ?>

  </div>

</section>
<?php endif; ?>
