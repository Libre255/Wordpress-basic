<?php
/** Template Name: FrontPage */
get_header();
?>
	<?php 
					$arguments = array(
						'post_type' => 'image'
					);
						$the_query = new WP_Query($arguments);
		?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main centerFront">
			<div id="myWorld">
				<img src="http://localhost:90/BrianSlutprojekt/wp-content/uploads/2020/11/Screenshot_2020-11-24-10-Most-famous-painters-of-all-time-Online-Gallery.png" class="rounded float-left" alt="...">
				<img src="http://localhost:90/BrianSlutprojekt/wp-content/uploads/2020/11/dfdfdf.jpg" class="rounded float-center" alt="...">
				<img src="http://localhost:90/BrianSlutprojekt/wp-content/uploads/2020/11/bav.jpg" class="rounded float-right" alt="...">
			</div>

		</main><!-- #main -->
	
	</div><!-- #primary -->

<?php
get_footer();