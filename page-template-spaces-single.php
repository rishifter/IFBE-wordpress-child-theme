<?php
/*
Template Name: Spaces Single
*/
get_header();
?>

<script>
	document.querySelector("body").classList.add("no-header");
	document.querySelector("body").classList.add("spaces-single");
</script>

<div class="container no-sidebar">

	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
			the_content();

			if (is_page('the-substation')) get_template_part('partials/spaces-substation');
			if (is_page('the-ice-factory')) get_template_part('partials/spaces-ice-factory');
			if (is_page('the-cathedral')) get_template_part('partials/spaces-cathedral');
			if (is_page('the-cathedral-edit')) get_template_part('partials/spaces-cathedral-edit');

			get_template_part('partials/spaces-cta');
			?>

		</article>

	<?php endwhile; ?>

</div>

<?php
get_footer();
