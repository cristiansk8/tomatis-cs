<?php

$imagen_banner= get_field('imagen_banner');

?>

 <section>
   <div class="metodo--wrapper metodo">
     <div class="metodo--item" style="background-image:url(<?php echo $imagen_banner; ?>);">
       <img src="<?php echo $imagen_banner; ?>" alt="">
       <div class="metodo--caption">
         <h1><?php the_title(); ?>®</h1>
         <hr>
       </div>
     </div>
   </div>

 </section>
