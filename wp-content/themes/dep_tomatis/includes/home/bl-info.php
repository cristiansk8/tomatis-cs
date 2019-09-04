<?php
/*
	Campos bl-info
	- informacion_home (field_repeater)
    descripcion

*/
	$info_home = get_field('informacion_home');

	?>
  <section id="infoHome">
    <div class="infohome-wraper infoHome">
      <?php
			$cont=0;
        while (have_rows('informacion_home')): the_row();
          $descripcion = get_sub_field('descripcion');
					$imagen = get_sub_field('imagen');
			$cont++;
       ?>
       <div class="infoHome--item block<?php echo $cont; ?>">
				 <?php if ($descripcion): ?>
				 <div class="infoHome--caption">
				 	 <?php echo $descripcion; ?>
				 </div>
			 <?php else: ?>
				 <img src="<?php echo $imagen; ?>" alt="">
<?php endif; ?>
       </div>
     <?php endwhile; ?>
    </div>
  </section>
