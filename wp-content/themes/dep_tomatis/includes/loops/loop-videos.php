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
				<article class="">
					<figure>
					<a href="#popup<?php echo $cont; ?>"> <img src="https://i.ytimg.com/vi/<?php echo $yt_id; ?>/hqdefault.jpg" alt="" width="100%" height="auto"> </a>
					</figure>
					<div class="video-news--caption">
						<p>
							<?php the_title(); ?>
						</p>
					</div>
					<div id="popup<?php echo $cont; ?>" class="overlay">
					<div class="popup">
						<h2><?php the_title(); ?></h2>
						<hr>
						<a class="close" href="#">&times;</a>
						<div class="content video-responsive">
							<iframe src="https://www.youtube.com/embed/<?php echo $yt_id; ?>" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
						</div>
					</div>
				</div>
				</article>

			<?php
			wp_reset_query();
				endwhile;

			?>
		</div>

	</div>

</section>
