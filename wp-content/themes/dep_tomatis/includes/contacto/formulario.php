<?php
/*
	Campos
  imagen_banner
  titulo
  subtitulo


*/
	$imagen_banner= get_field('imagen_banner');
  $titulo= get_field('titulo');
  $subtitulo= get_field('subtitulo');

	?>

  <section id="contacto">
    <div class="banner_formulario formulario" style="background-image:url(<?php echo $imagen_banner; ?>)">
      <div class="formulario--tiutlo">
        <h2><?php echo $titulo; ?></h2>
        <span> <h2><?php echo $subtitulo; ?></h2> </span>
      </div>
      <div class="subscriptions-form">
        <div class="subscriptions-form__wrapper container">
          <?php echo do_shortcode('[contact-form-7 id="52" title="Contacto"]'); ?>
        </div>
      </div>
    </div>
  </section>
