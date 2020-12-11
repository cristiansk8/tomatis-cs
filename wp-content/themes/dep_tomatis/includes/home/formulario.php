<?php
	$imagen_banner= get_field('imagen_banner');
 ?>

<section id="contacto">
  <div class="banner_formulario formulario col-md-12" style="background-image:url(<?php echo $imagen_banner; ?>)">
    <div class="col-md-6">
      <header>
        <h2>¡QUEREMOS SEGUIR
  EN CONTACTO CONTIGO!</h2>
      </header>
    </div>

    <div class="formulario--form col-md-6">
      <div class="formulario-form__wrapper ">
        <?php echo do_shortcode('[contact-form-7 id="52" title="Contacto"]'); ?>
      </div>
    </div>

  </div>
  <hr>
</section>
