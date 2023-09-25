<?php
/*
Template Name: Media Coverage
*/
get_header();
?>

<script>
	document.querySelector("body").classList.add("media-coverage");
</script>

<div class="container no-sidebar">

	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
			the_content();
			get_template_part('partials/media-coverage');
			?>

		</article>

	<?php endwhile; ?>

</div>

<?php

get_footer();
