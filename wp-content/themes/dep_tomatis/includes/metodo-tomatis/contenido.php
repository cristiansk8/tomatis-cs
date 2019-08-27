<?php
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID, // Get this pages id and find the children
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );
 ?>
<?php

if ( $parent->have_posts() ) : ?>

<section class="child-grid padding">
  <div class="">
        <ul class="nav nav-pills categorias__wrapper-pills">
   <?php
   $cont =0;
   while ( $parent->have_posts() ) : $parent->the_post();
   $cont ++;
        // Featured image
        // $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
   ?>
          <?php if ($cont==1): ?>
            <li class="active <?php the_title(); ?>" >
              <a href="#menu<?php echo $cont;?>" >
                <?php the_title(); ?>
              </a>
            </li>
          <?php else: ?>
          <li>
            <a data-toggle="pill" href="#menu<?php echo $cont;?>" >
              <?php the_title(); ?>
            </a>
          </li>
  <?php
    endif;
    endwhile;
  ?>
  <?php endif; wp_reset_query(); ?>
    </ul>

    <?php if ( $parent->have_posts() ) : ?>
    <div class="tab-content categorias__wrapper-tabs">
      <?php
      $cont =0;
      $active='in active';
      while ( $parent->have_posts() ) : $parent->the_post();
      $cont ++;
           // Featured image
           // $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
      ?>
      <?php if ($cont==1): ?>
            <div id="menu<?php echo $cont;  ?>" class="tab-pane fade  <?php echo $active; ?>">
              <div class="categorias__wrapper-tabs__item categoria-item <?php the_title(); ?>">
                <div class="categoria-infografia">
                    <?php the_title(); ?>
                </div>
              </div>
            </div>
           <?php else: ?>
             <div id="menu<?php echo $cont;  ?>" class="tab-pane fade">
               <div class="categorias__wrapper-tabs__item categoria-item <?php the_title(); ?>">
                 <div class="categoria-infografia">
                     <?php the_title();?>
                 </div>
               </div>
           </div>
           <?php
             endif;
             endwhile;
           ?>
           <?php endif; wp_reset_query(); ?>
     </div>
</div>
</section><!-- /.child-grid -->
