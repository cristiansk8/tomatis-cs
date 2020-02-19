<?php
//

/*
	Loop for Videos

*/

?>

<section id="videoPost">
	<div class="videos-container">
		<div class="tittle-videos">
			<h2>Videos</h2>
			<hr>
		</div>

		<div class="videos">
			<?php


				$args = array( 'post_type' => 'videos', 'posts_per_page' => 100 );
				$query = new WP_Query( $args );
				$cont=0;
				while ( $query->have_posts() ) : $query->the_post();
					$yt_id = get_field('youtube_id');
					$cont++;
			?>
			<div class="videos-item">
	
				<a  class="images" data-fancybox-type="iframe" href="https://www.youtube.com/embed/<?php echo $yt_id; ?>"data-fancybox="gallery">
	<img src="https://i.ytimg.com/vi/<?php echo $yt_id; ?>/hqdefault.jpg" alt="" width="100%" height="auto">
	<div class="video-news--caption">
		<p>
			<?php the_title(); ?>
		</p>
	</div>
		</a>
			</div>



			<?php
			wp_reset_query();
				endwhile;

			?>
		</div>

	</div>

</section>
