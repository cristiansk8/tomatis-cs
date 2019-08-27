<?php
/*
	Campos bl-info
	- informacion_home (field_repeater)
    descripcion

*/
	$info_home = get_field('informacion_home');

	?>
  <section>
    <div class="info-home infoHome">
      <?php

        while (have_rows('informacion_home')): the_row();
          $descripcion = get_sub_field('descripcion');
       ?>
       <div class="infoHome--block">
         <?php echo $descripcion; ?>
       </div>
     <?php endwhile; ?>
    </div>
  </section>
