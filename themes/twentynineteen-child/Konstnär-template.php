<?php
/** Template Name: Könstnär Template */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div id="KonstSite">
			<?php 
				$arguments = array(
					'post_type' => 'konstnar'
				);
					$the_query = new WP_Query($arguments);
			?>
				<?php	if($the_query->have_posts() ): while ($the_query->have_posts() ) : $the_query->the_post(); ?>
			
			<div id="oneArtist">
				<h2><?php the_field('artistnamn') ?></h2>
				<?php the_post_thumbnail(); ?>
				<br/>
				<p><?php the_field('bio') ?></p>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
