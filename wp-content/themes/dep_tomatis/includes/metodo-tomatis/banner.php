<?php

$imagen_banner= get_field('imagen_banner');

?>

 <section>
   <div class="metodo--wrapper metodo">
     <div class="metodo--item" style="background-image:url(<?php echo $imagen_banner; ?>);">
       <div class="metodo--caption">
         <h1><?php the_title(); ?><span>®<span></h1>
         <hr>
       </div>
     </div>
   </div>

 </section>
