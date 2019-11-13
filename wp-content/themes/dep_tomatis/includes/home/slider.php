<?php
/*
	Campos slider
	- slider_home (field_repeater)
		slider_item
		big_text
		small_text
		color_text

*/
	$slider = get_field('slider_home');

	?>

  <section>
		<div class="slider-wrapper slider">
			<?php
			$cont = 0;
				while (have_rows('slider_home')): the_row();

					$slider_item = get_sub_field('slider_item');
					$big_text = get_sub_field('big_text');
					$small_text = get_sub_field('small_text');
					$color_text = get_sub_field('color_text');

				$cont++;
			 ?>

			<div class="slider--item" style="background-image:url(<?php echo $slider_item; ?>)">

					<div class="slider--caption">
						<?php if($big_text): ?>
						<h1><?php echo $big_text; ?></h1>
					<?php endif; ?>
					<?php if($small_text): ?>
						<h2><?php echo $small_text; ?></h2>
					<?php endif; ?>
					<?php if($color_text): ?>
						<h2> <span><?php echo $color_text; ?></span> </h2>
					<?php endif; ?>
					</div>



			</div>

		<?php endwhile; ?>
		</div>

  </section>
