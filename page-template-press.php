<?php
/*
Template Name: Press
*/
get_header();
?>

<script>
	document.querySelector("body").classList.add("press");
</script>

<div class="container no-sidebar">

	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
			get_template_part('partials/press');
			?>

		</article>

	<?php endwhile; ?>

</div>

<?php

get_footer();
