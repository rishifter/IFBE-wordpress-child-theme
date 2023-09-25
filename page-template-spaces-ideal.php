<?php
/*
Template Name: Spaces Ideal
*/

get_header();
?>
<script>
	document.querySelector("body").classList.add("spaces-ideal");
</script>
<div class="container no-sidebar">

	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
			the_content();
			get_template_part('partials/spaces-ideal');
			?>

		</article>

	<?php endwhile; ?>

</div>

<?php

get_footer();
