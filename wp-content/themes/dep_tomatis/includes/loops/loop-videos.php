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
	<img class="imagen"src="https://i.ytimg.com/vi/<?php echo $yt_id; ?>/hqdefault.jpg" alt="" width="100%" height="auto">

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
	<div class="videos-container">
		<div class="tittle-videos">
			<h2>Audios</h2>
			<hr>
			<iframe src="//alacarta.caracol.com.co/widget/audio/097RD130000001078343/" width="100%" height="102" frameborder="0" allowfullscreen></iframe>
			<iframe src="//alacarta.caracol.com.co/widget/audio/097RD010000000468480/" width="100%" height="102" frameborder="0" allowfullscreen></iframe>
			<iframe src="//alacarta.caracol.com.co/widget/audio/097RD130000001005936/" width="100%" height="102" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</section>
