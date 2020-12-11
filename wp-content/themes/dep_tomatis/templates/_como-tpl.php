<?php
/*
  Template Name: prueba metodo
*/

 	get_template_part('includes/header');

?>
<section>
  <div class="metodo--wrapper metodo">
    <div class="">
      <img src="https://tomatis.com.co/wp-content/uploads/2020/10/banner-1.0-1.png" alt="" width="100%" height="auto">
    </div>
  </div>

  <ul class="nav nav-pills categorias__wrapper-pills">

          <li>
            <a data-toggle="pill" href="#menu1">
              <img src="https://tomatis.com.co/wp-content/uploads/2019/11/Metodo-Qué-es.png" alt="">
              ¿Qué es?            </a>
          </li>

          <li>
            <a data-toggle="pill" href="#menu2">
              <img src="https://tomatis.com.co/wp-content/uploads/2019/09/Metodo-Como-funciona.png" alt="">
              ¿Cómo y qué se escucha?            </a>
          </li>

          <li>
            <a data-toggle="pill" href="#menu3">
              <img src="https://tomatis.com.co/wp-content/uploads/2019/11/Metodo-Por-qué-es-importante.png" alt="">
              ¿Por qué es importante escuchar bien?            </a>
          </li>

          <li>
            <a data-toggle="pill" href="#menu4">
              <img src="https://tomatis.com.co/wp-content/uploads/2019/11/Metodo-por-qué-se-llama.png" alt="">
              ¿Por qué se llama Método Tomatis®?            </a>
          </li>

          <li>
            <a data-toggle="pill" href="#menu5">
              <img src="https://tomatis.com.co/wp-content/uploads/2019/09/Metodo-proceso.png" alt="">
              El proceso            </a>
          </li>
        </ul>

        <div id="" class="">
          <div class="categorias__wrapper-tabs__item categoria-item <?php the_title(); ?>" id="">
            <div class="container-fluid categoria-infografia">

                <?php the_content(); ?>
            </div>
          </div>
        </div>

        <?php 	get_template_part('includes/footer'); ?>
