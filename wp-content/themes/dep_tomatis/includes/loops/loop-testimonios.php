
<?php
// testimonios
?>

<?php

$args = array (
  'post_type' => 'testimonios',
  'posts_per_page' => 100,
  'order'          => 'ASC'
  );

$query = new WP_Query($args);

?>

<section>
  <div class="tittle-testimonios">
    <header>
      <h2>Testimonios</h2>
    </header>
  </div>
  <div class="slider-prod testimonios">
    <?php

  if($query->have_posts()):
    while($query->have_posts()): $query->the_post();

  ?>
    <div class="testimonios--caption">
    
      <?php the_content(); ?>
    </div>
  <?php endwhile;
  wp_reset_query(); ?>
  </div>

</section>
<?php endif; ?>
