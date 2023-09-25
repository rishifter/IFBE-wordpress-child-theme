<?php
/*
Template Name: Spaces Main
*/
get_header();
?>

<script>
	document.querySelector("body").classList.add("transparent-header");
	document.querySelector("body").classList.add("spaces-page");
</script>

<div class="container no-sidebar">

	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
			the_content();
			get_template_part('partials/spaces-main');
			?>

		</article>

	<?php endwhile; ?>

</div>

<?php
get_footer();
