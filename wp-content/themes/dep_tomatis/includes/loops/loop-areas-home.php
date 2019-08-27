
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
  <div class="areas">
    <?php

  if($query->have_posts()):
    while($query->have_posts()): $query->the_post();
    $logo= get_field('logo_home');
  ?>
    <div class="areas-caption">
      <img src="<?php echo $logo; ?>" alt="">
      <h3><?php the_title(); ?></h3>

    </div>
  <?php endwhile;
  wp_reset_query(); ?>
  </div>

</section>
<?php endif; ?>
