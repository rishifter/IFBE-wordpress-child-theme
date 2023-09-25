<?php

if (function_exists('wpcf7_enqueue_scripts')) {
	wpcf7_enqueue_scripts();
}

if (function_exists('wpcf7_enqueue_styles')) {
	wpcf7_enqueue_styles();
}
get_header(); ?>
<script>
	document.querySelector("body").classList.add("et_full_width_page");
</script>
<div class="container no-sidebar">

	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
			the_content();
			get_template_part('partials/careers-single');
			?>

		</article>

	<?php endwhile; ?>

</div>

<?php
get_footer();
