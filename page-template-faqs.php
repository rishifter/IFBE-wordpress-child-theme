<?php
/*
Template Name: FAQs
*/
get_header();
?>

<script>
	document.querySelector("body").classList.add("faqs");
</script>

<div class="container no-sidebar">

	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
			get_template_part('partials/faqs');
			?>

		</article>

	<?php endwhile; ?>

</div>

<?php
get_footer();
