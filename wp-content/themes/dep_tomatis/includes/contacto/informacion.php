<?php
/*
  informacion_ubicacion

*/
	$informacion_ubicacion= get_field('informacion_ubicacion');

	?>
  <section>
    <div class="ubicacion">
      <div class="ubicacion--title">
        <h3>¿Dónde estamos?</h3>
        <div class="linea-horizontal">
					<hr>
        </div>
      </div>
      <div class="ubicacion--info">
        <?php echo $informacion_ubicacion; ?>
      </div>

    </div>
		<div class="map row">
			<div class="map--title">
				<h3>Mapa</h3>
				<div class="linea-horizontal">
					<hr>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="titulo text-center">
						<h3>Bogotá</h3>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.5646873349415!2d-74.05535244932948!3d4.671419143194032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b8aa9150687%3A0xdaf4fd76f7296f9d!2sCentro+Tomatis+CS+-+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1566415254286!5m2!1ses!2sco" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6">
					<div class="titulo text-center">
						<h3>Cajicá</h3>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63604.84025026787!2d-74.07901333405198!3d4.88892514290283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd81374c1d33070d9!2sCentro%20Tomatis%20CS%20-%20Cajic%C3%A1!5e0!3m2!1ses!2sco!4v1582155096336!5m2!1ses!2sco" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>

  </section>
