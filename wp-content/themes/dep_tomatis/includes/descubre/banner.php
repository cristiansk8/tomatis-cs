<?php

$imagen_banner= get_field('imagen_banner');

?>

 <section>
   <div class="descrubre--wrapper descubre">
     <div class="descubre--item" style="background-image:url(<?php echo $imagen_banner; ?>);">
      
       <div class="descubre--caption">
         <h1><?php the_title(); ?></h1>
         <hr>
       </div>
     </div>
   </div>

 </section>
