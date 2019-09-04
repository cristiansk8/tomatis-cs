<?php
/*
	Campos info

  informacion
  fondo_banner2
  texto_banner2

*/
   $informacion = get_field('informacion');
	 $fondo_banner2 = get_field('fondo_banner2');
   $texto_banner2 = get_field('texto_banner2');

	?>
<section>
  <div class="infoqs">
    <div class="infoqs--block">
      <?php echo $informacion; ?>
    </div>
    <div class="infoqs--banner"style="background-image:url(<?php echo $fondo_banner2; ?>)">
      <div class="infoqs--caption">
        <?php echo $texto_banner2; ?>
      </div>
    </div>
  </div>
</section>
