<?php

/** no direct access **/
defined('MECEXEC') or die();

/** @var MEC_skin_single $this */

// wp_enqueue_style('mec-lity-style', $this->main->asset('packages/lity/lity.min.css'));
// wp_enqueue_script('mec-lity-script', $this->main->asset('packages/lity/lity.min.js'));

// $booking_options = get_post_meta(get_the_ID(), 'mec_booking', true);
// if (!is_array($booking_options)) $booking_options = array();

// Compatibility with Rank Math
$rank_math_options = '';
include_once(ABSPATH . 'wp-admin/includes/plugin.php');
if (is_plugin_active('schema-markup-rich-snippets/schema-markup-rich-snippets.php')) $rank_math_options = get_post_meta(get_the_ID(), 'rank_math_rich_snippet', true);

// $bookings_limit_for_users = isset($booking_options['bookings_limit_for_users']) ? $booking_options['bookings_limit_for_users'] : 0;

$more_info = (isset($event->data->meta['mec_more_info']) and trim($event->data->meta['mec_more_info']) and $event->data->meta['mec_more_info'] != 'http://') ? $event->data->meta['mec_more_info'] : '';
if (isset($event->date) and isset($event->date['start']) and isset($event->date['start']['timestamp'])) $more_info = MEC_feature_occurrences::param($event->ID, $event->date['start']['timestamp'], 'more_info', $more_info);

$more_info_target = MEC_feature_occurrences::param($event->ID, $event->date['start']['timestamp'], 'more_info_target', (isset($event->data->meta['mec_more_info_target']) ? $event->data->meta['mec_more_info_target'] : '_self'));
$more_info_title = MEC_feature_occurrences::param($event->ID, $event->date['start']['timestamp'], 'more_info_title', ((isset($event->data->meta['mec_more_info_title']) and trim($event->data->meta['mec_more_info_title'])) ? $event->data->meta['mec_more_info_title'] : esc_html__('Read More', 'modern-events-calendar-lite')));

// Event Cost
// $cost = $this->main->get_event_cost($event);

// $location_id = $this->main->get_master_location_id($event);
// $location = ($location_id ? $this->main->get_location_data($location_id) : array());

// $organizer_id = $this->main->get_master_organizer_id($event);
// $organizer = ($organizer_id ? $this->main->get_organizer_data($organizer_id) : array());

// $sticky_sidebar = isset($settings['sticky_sidebar']) ? $settings['sticky_sidebar'] : '';
// if ($sticky_sidebar == 1) $sticky_sidebar = 'mec-sticky';
?>




<!-- CUSTOM TEMPLATE -->

<?php
// Load back button
get_template_part('partials/back');


// Categories
if (isset($event->data->categories) and !empty($event->data->categories)) {
	foreach ($event->data->categories as $category) {
		$categories = '<a class="categories" href="' . esc_url(get_term_link($category['id'], 'mec_category')) . '" rel="tag">' . MEC_kses::element(esc_html($category['name'])) . '</a>';
	}
}

// Date and time
if (isset($event->data->meta['mec_date']['start']) and !empty($event->data->meta['mec_date']['start'])) {
	$date = MEC_kses::element($this->main->date_label((trim($occurrence) ? array('date' => $occurrence) : $event->date['start']), (trim($occurrence_end_date) ? array('date' => $occurrence_end_date) : (isset($event->date['end']) ? $event->date['end'] : NULL)), $this->date_format1, '–', true, 0, $event));

	if (isset($event->data->meta['mec_hide_time']) and $event->data->meta['mec_hide_time'] == '0') {
		$allday = isset($event->data->meta['mec_allday']) ? $event->data->meta['mec_allday'] : 0;
		if ($allday == '0' and isset($event->data->time) and trim($event->data->time['start'])) {
			$time = '<span class="time">' . esc_html(str_replace(" ", "", $event->data->time['start'])) . (trim($event->data->time['end']) ? '-' . esc_html(str_replace(" ", "", $event->data->time['end'])) : '') . '</span>';
		} else {
			$time = '<span class="time">' . esc_html($this->main->m('all_day', esc_html__('All Day', 'modern-events-calendar-lite'))) . '</span>';
		}
	}
	$date_time = '<span class="date-time">' . $date . " – " . $time . '</span>';
}

// Extras 

$show_extras = get_field("show_extras");
if ($show_extras) {
	$banner = get_field("banner");
	$gallery = get_field("gallery");
}
?>

<article class="programme <?php if ($show_extras) echo "extras-theme"; ?>">

	<?php if ($show_extras) { ?>
		<img src="<?php echo $banner; ?>" alt="" class="banner">
	<?php } else {
		echo MEC_kses::element($event->data->thumbnails['full']);
	}
	?>
	<div class="details">
		<h1 class="heading"><?php the_title(); ?></h1>
		<div class="meta">
			<?php echo $categories; ?>
			<?php echo $date_time; ?>
			<?php if (!$show_extras) echo MEC_kses::full($this->main->module('export.details', array('event' => $event))); ?>
		</div>
		<div class="desc">
			<h4 class="heading">About the event</h4>
			<div class="content"><?php the_content(); ?></div>
		</div>

		<?php if ($show_extras) { ?>
			<div class="mec-wrap mec-event-carousel-type2" id="owl-gallery"><?php echo $gallery; ?></div>
			<?php
			wp_enqueue_style('owl-styles', get_stylesheet_directory_uri() . '/assets/owl.carousel.min.css');
			?>
			<script>
				document.addEventListener("DOMContentLoaded", () => {

					// const g = document.getElementById("owl-gallery");
					const imageLinks = document.querySelectorAll("#owl-gallery .gallery a");
					const removeElements = document.querySelectorAll("#owl-gallery .gallery br");

					// Remove extra <br> tags 
					removeElements.forEach(element => {
						// element.parentElement.removeChild(element);
						element.remove();
					});

					document.querySelector("#owl-gallery style").remove();

					// Setup featherlight lightbox for images
					imageLinks.forEach(image => {
						image.dataset.featherlight = "image";
					});


					// Initialize Owl gallery
					jQuery("#owl-gallery .gallery").addClass("owl-carousel owl-theme");
					var owl = jQuery("#owl-gallery .gallery").owlCarousel({
						items: 2,
						nav: true,
						navText: ["<i class='mec-sl-arrow-left'></i>", " <i class='mec-sl-arrow-right'></i>"],
						dots: false,
						singleItem: true,
						autoHeight: false,
						margin: 10,
						// stagePadding: 54,
						loop: true,
						pagination: true,
						responsive: {
							0: {
								items: 1
							},
							480: {
								items: 2
							},
							980: {
								items: 3
							}
						}
					});

				});
			</script>
		<?php } ?>
	</div>
</article>

<div class="exhibitor">
	<?php
	$exhibitor_post = get_field('exhibitor')[0];
	$exhibitor_id = $exhibitor_post->ID;
	$ig = get_field("instagram_url", $exhibitor_id);
	$fb = get_field("facebook_url", $exhibitor_id);
	$tt = get_field("twitter_url", $exhibitor_id);

	echo get_the_post_thumbnail($exhibitor_post, "medium", array("class" => "featured-img"));
	?>
	<div class="details">
		<h4 class="heading">In collaboration with</h4>
		<div class="desc">
			<p><strong><?php echo $exhibitor_post->post_title; ?></strong></p>
			<?php echo $exhibitor_post->post_content; ?>
		</div>
		<div class="social">
			<!-- <ul class="social et_pb_module et_pb_social_media_follow et_pb_social_media_follow_0_tb_footer clearfix"><li class="et_pb_social_media_follow_network_0_tb_footer et_pb_social_icon et_pb_social_network_link  et-social-instagram">
				<a href="<?php echo get_field("instagram_url", $exhibitor_id) ?>" class="icon et_pb_with_border" title="Follow on Instagram" target="_blank"></a>
			</li>
			<li class="et_pb_social_media_follow_network_1_tb_footer et_pb_social_icon et_pb_social_network_link  et-social-facebook">
				<a href="<?php echo get_field("facebook_url", $exhibitor_id) ?>" class="icon et_pb_with_border" title="Follow on Facebook" target="_blank"></a>
			</li>
			<li class="et_pb_social_media_follow_network_2_tb_footer et_pb_social_icon et_pb_social_network_link  et-social-twitter">
				<a href="<?php echo get_field("twitter_url", $exhibitor_id) ?>" class="icon et_pb_with_border" title="Follow on Twitter" target="_blank"></a>
			</li></ul> -->

			<?php if (!empty($ig)) { ?>
				<div class="et_pb_with_border et_pb_module et_pb_icon et_pb_icon_0_tb_footer social-icon">
					<a href="<?php echo $ig ?>" target="_blank" title="(de)Coding at IFBE Poster"><span class="et_pb_icon_wrap "><span class="et-pb-icon"></span></span></a>
				</div>
			<?php } ?>

			<?php if (!empty($fb)) { ?>
				<div class="et_pb_with_border et_pb_module et_pb_icon et_pb_icon_1_tb_footer social-icon">
					<a href="<?php echo $fb ?>" target="_blank" title="(de)Coding at IFBE Poster"><span class="et_pb_icon_wrap "><span class="et-pb-icon"></span></span></a>
				</div>
			<?php } ?>

			<?php if (!empty($tt)) { ?>
				<div class="et_pb_with_border et_pb_module et_pb_icon et_pb_icon_2_tb_footer social-icon">
					<a href="<?php echo $tt ?>" target="_blank" title="(de)Coding at IFBE Poster"><span class="et_pb_icon_wrap "><span class="et-pb-icon"></span></span></a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>




<?php
// MEC Schema
if ($rank_math_options != 'event') do_action('mec_schema', $event);
?>
<script>
	// Fix modal speaker in some themes
	jQuery(".mec-speaker-avatar a").on('click', function(e) {
		e.preventDefault();

		var id = jQuery(this).attr('href');
		lity(id);
	});

	// Fix modal booking in some themes
	jQuery(window).on('load', function() {
		jQuery(".mec-booking-button.mec-booking-data-lity").on('click', function(e) {
			e.preventDefault();

			var book_id = jQuery(this).attr('href');
			lity(book_id);
		});
	});
</script>