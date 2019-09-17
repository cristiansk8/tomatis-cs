<?php
// campos areas de aplicacion

$banner= get_field('banner');
$titulo= get_field('titulo');
$subtitulo= get_field('subtitulo');
?>

 <section>
   <div class="area-wrapper area">
     <div class="banner area--item" style="background-image:url(<?php echo $banner; ?>);">
       <div class="area--caption">
         <?php if($titulo): ?>
         <h1><?php echo $titulo; ?></h1>
       <?php endif; ?>
       <?php if ($subtitulo): ?>
         <h2><?php echo $subtitulo; ?></h2>
       <?php endif; ?>

       </div>
     </div>
   </div>

 </section>
