<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
		<div class="col-md-1">

		</div>
    <div class="navbar-header col-md-2">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="" href="<?php echo home_url('/'); ?>"> <img src="../wp-content/themes/dep_tomatis/img/logos/logonew.png'" alt="" width="90px" height="auto"> </a>
    </div>
    <div class="collapse navbar-collapse col-md-9" id="navbar">
      <?php
            wp_nav_menu( array(
						  	'menu'              => 'main menu',
                'theme_location'    => 'navbar-right',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-right',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar,
then you probably don't require a site title. Alternatively you can use the example below.
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->















<div class="metodo1">
<div class="block-1">
<h2>EL Proceso</h2>
<h3>1. Entrevista Inicial</h3>
En la entrevista inicial se identifican las habilidades y dificultades, y se establecen los ejes de mejora. Teniendo en cuenta la edad se realiza un Test de escucha que evalúa la forma en la que el cerebro procesa la información sonora y se obtiene un <b>perfil de escucha.</b> Este perfil brinda información sobre el esquema corporal, la inteligencia sensorial y motora, el nivel de atención y concentración, el balance entre el pensamiento racional y emocional, el nivel de motivación y energía, la capacidad de adaptación y manejo de la ansiedad, las habilidades comunicativas y las habilidades de planeación y organización.

En resumen <b>se evalúa el nivel de integración acústica del sonido,</b> ya que éste influye directamente en el desempeño familiar, social, educativo y/o laboral de cada persona.

</div>
<div class="">
	<img src="https://tomatis.com.co/wp-content/uploads/2019/09/Imagen-Home-e1573848823652.png" alt="proceso-tomatis" width="100%" height="auto">
</div>
<div class="block-2">
	<h3>2. Sesiones de escucha</h3>
	Una vez que se determina el perfil de escucha y se establecen los ejes de mejora de forma conjunta, nuestras consultoras diseñan un programa adaptado al perfil y las necesidades de cada persona.

El programa <b>se realiza en sesiones diarias de dos horas que se efectúan en tres periodos de entre 10 a 15 días.</b> Al finalizar cada periodo se realiza una pausa llamada <b>“fase de integración”</b> para que el cerebro integre toda la información. Después de cada pausa se realizan test de escucha y consultorías intermedias que determinan los cambios y ajustes en la programación.

Usualmente en la última fase el niño o el adulto escuchan su propia voz en sesiones de lectura, repetición o canto. La voz propia se modifica instantáneamente y se retransmite según los parámetros de sonido del Método Tomatis®

<b>Durante las sesiones se puede dibujar, caminar, jugar, e incluso dormir.</b> Se recomienda no leer, escribir ni comer.

El programa se escucha mediante el equipo electrónico  más avanzado que ha desarrollado el Método Tomatis, el <b>Talks</b>Up®. Éste dispositivo es compacto, ligero y portátil, permitiendo realizar las sesiones de escucha en casa.

<hr>
</div>
<div class="">
	<img src="https://tomatis.com.co/wp-content/uploads/2019/11/Infografía-Metodo-Tomatis.png" alt="proceso-tomatis" width="100%" height="auto">
</div>


</div>
