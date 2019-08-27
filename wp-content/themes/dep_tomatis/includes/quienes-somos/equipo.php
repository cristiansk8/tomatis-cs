<?php
/*
	Campos equipo

  equipo_trabajo (field_repeater)

*/

	?>
  <section>
    <div class="equipo">
      <?php

      while(have_rows('equipo_trabajo')): the_row();
        $nombre= get_sub_field('nombre');
        $foto = get_sub_field('foto');
        $descripcion = get_sub_field('descripcion');
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
         <div class="descripcion">
           <?php echo $descripcion; ?>
         </div>
       </div>
     <?php endwhile; ?>
    </div>
  </section>
