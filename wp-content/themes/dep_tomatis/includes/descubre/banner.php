<?php

$imagen_banner= get_field('imagen_banner');

?>

 <section>
   <div class="areas banner" style="background-image:url(<?php echo $imagen_banner; ?>);">
     <div class="areas--caption">
       <h1><?php the_title(); ?></h1>
     </div>
   </div>
 </section>
