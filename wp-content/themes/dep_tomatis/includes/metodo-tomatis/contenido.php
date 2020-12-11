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
  <div class="tabs-metodo">
        <ul class="nav nav-pills categorias__wrapper-pills">
   <?php
   $cont =0;
   $tab =0;
   while ( $parent->have_posts() ) : $parent->the_post();
   $cont ++;
   $tab ++;
        // Featured image
        // $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
   ?>

          <li>
            <a data-toggle="pill" href="#menu<?php echo $cont;?>" >
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
              <?php the_title(); ?>
            </a>
          </li>
  <?php

    endwhile;
  ?>
  <?php endif;?>
    </ul>

    <?php if ( $parent->have_posts() ) : ?>
    <div class="tab-content categorias__wrapper-tabs">
      <?php
      $cont =0;
      $tab =0;
      $active='in active';
      while ( $parent->have_posts() ) : $parent->the_post();
      $cont ++;
      $tab ++;
           // Featured image
           // $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
      ?>
      <?php if ($cont==1): ?>
            <div id="menu<?php echo $cont;  ?>" class="tab-pane fade  <?php echo $active; ?>">
              <div class="categorias__wrapper-tabs__item categoria-item <?php the_title(); ?>" id="tab<?php echo $tab;  ?>">
                <div class="categoria-infografia">

                    <?php the_content(); ?>
                </div>
              </div>
            </div>
           <?php else: ?>
             <div id="menu<?php echo $cont;  ?>" class="tab-pane fade">
               <div class="categorias__wrapper-tabs__item categoria-item <?php the_title(); ?>" id="tab<?php echo $tab;  ?>">
                 <div class="categoria-infografia">

                     <?php the_content();?>
                 </div>
               </div>
           </div>
           <?php
             endif;
             endwhile;
           ?>
           <?php endif; ?>
     </div>
</div>
</section><!-- /.child-grid -->
