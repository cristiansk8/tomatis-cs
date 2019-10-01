
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
  <div class="areas--item">

    <a href="#popup<?php echo $cont; ?>">
      <div class="areas--caption">
        <?php the_post_thumbnail(); ?>
        <h3><?php echo $subtitulo; ?></h3>
      </div>
    </a>
  </div>

  <div id="popup<?php echo $cont; ?>" class="overlay">
	<div class="popup">
		<h2><?php echo $subtitulo; ?></h2>
    <hr>
		<a class="close" href="#">&times;</a>
		<div class="content">
			<?php the_content(); ?>
		</div>
	</div>
</div>

  <?php endwhile;
  wp_reset_query();
  ?>

  </div>

</section>
<?php endif; ?>
