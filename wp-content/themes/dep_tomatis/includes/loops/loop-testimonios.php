
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
  <div class="testimonios">
    <?php

  if($query->have_posts()):
    while($query->have_posts()): $query->the_post();

  ?>
    <div class="testimonios--caption">
      <h3><?php the_title(); ?></h3> 
      <?php the_content(); ?>
    </div>
  <?php endwhile;
  wp_reset_query(); ?>
  </div>

</section>
<?php endif; ?>
