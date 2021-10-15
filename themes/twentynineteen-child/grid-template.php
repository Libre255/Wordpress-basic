<?php
/** Template Name: Grid Template */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div id="imgGrid">
				<?php 
					$arguments = array(
						'post_type' => 'image'
					);
						$the_query = new WP_Query($arguments);
				?>
					<?php	if($the_query->have_posts() ): while ($the_query->have_posts() ) : $the_query->the_post(); ?>
				
					<div id="oneIMG">
						<?php the_content() ?>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();