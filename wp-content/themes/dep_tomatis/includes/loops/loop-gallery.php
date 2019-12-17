
<?php
// Aliados
?>


<section id="fotos">
<div class="fotos-container">
  <div class="tittle-fotos">
    <h2>Fotos</h2>
    <hr>
  </div>
  <div class="galery">
    <?php
      while (have_rows('imagenes')): the_row();
        $imagen = get_sub_field('imagen');
        $titulo = get_sub_field('titulo');
     ?>
      <figure>
          <a class="" data-fancybox="images" href="<?php echo $imagen; ?>" data-fancybox="gallery">
              <img src="<?php echo $imagen; ?>" width="100%" height="auto">
          </a>
          <figcaption>
              <h6><?php echo $titulo; ?></h6>

          </figcaption>
      </figure>
<?php endwhile; ?>

  </div>
</div>

</section>
