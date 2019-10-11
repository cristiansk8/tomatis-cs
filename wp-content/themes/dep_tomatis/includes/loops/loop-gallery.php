
<?php
// Aliados
?>


<section id="fotos">
<div class="fotos-container">
  <div class="tittle-fotos">
    <h2>Fotos</h2>
    <hr>
  </div>
  <div class="fotos">


    <div class="fotos-caption">

      <?php
				while (have_rows('imagenes')): the_row();
					$imagen = get_sub_field('imagen');
			 ?>
       <div class="">
         <img src="<?php echo $imagen; ?>" alt="">
       </div>
     <?php endwhile; ?>
    </div>

  </div>
</div>

</section>
