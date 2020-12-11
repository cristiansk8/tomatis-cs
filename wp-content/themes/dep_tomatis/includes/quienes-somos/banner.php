<?php
/*
	Campos banner
  fondo_banner
  destacado (field_repeater)
    text1
    numero
    texto color
*/
	 $fondo_banner = get_field('fondo_banner');

	?>
  <section>
    <div class="" style="background-image:url(<?php echo $fondo_banner; ?>)">
      <div class="bannerqs--captions bannerqs">
        <?php
        while (have_rows('destacado')): the_row();
        $texto1=get_sub_field('texto1');
        $numero=get_sub_field('numero');
        $texto_color=get_sub_field('texto_color')
        ?>
        <div class="bannerqs--caption">
          <?php if($texto1): ?>
          <h3><?php echo $texto1; ?></h3>
        <?php endif; ?>
        <?php if($numero): ?>
          <h2 class="counter" data-count="<?php echo $numero; ?>">1</h2>
        <?php endif; ?>
        <?php if($texto_color): ?>
					<div class="color">
						<h3><?php echo $texto_color; ?> </h3>
					</div>

        <?php endif; ?>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
  </section>
