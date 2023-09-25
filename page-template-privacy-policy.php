<?php
/*
Template Name: Privacy Policy
*/
get_header();
?>

<script>
	document.querySelector("body").classList.add("privacy");
</script>

<div class="container no-sidebar">

	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
			get_template_part('partials/privacy-policy');
			?>

		</article>

	<?php endwhile; ?>

</div>

<?php
get_footer();
?>