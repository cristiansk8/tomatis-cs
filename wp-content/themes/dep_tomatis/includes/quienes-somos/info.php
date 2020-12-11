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
    <div class="equipo">
      <?php
      $cont=0;
      while(have_rows('equipo_trabajo')): the_row();
        $nombre= get_sub_field('nombre');
        $foto = get_sub_field('foto');
        $descripcion = get_sub_field('descripcion');
        $cont++;
       ?>
       <div class="equipo--item">
         <div class="titulo">
           <h2><?php echo $nombre; ?></h2>
         </div>
         <div class="foto">
           <figure>
             <img src="<?php echo $foto; ?>" alt="">
           </figure>
         </div>
        <div class="">
          <div class="descripcion">
            <?php echo $descripcion; ?>
          </div>
        </div>

       </div>
     <?php endwhile; ?>
    </div>
    <div class="infoqs--banner">
      <div class="">
        <img src="<?php echo $fondo_banner2; ?>" alt=""width="100%" height="auto">
      </div>
    </div>
  </div>
</section>
