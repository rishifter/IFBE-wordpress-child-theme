<?php

/** no direct access **/
defined('MECEXEC') or die();

/**
 * The Template for displaying all single events
 * 
 * @author Webnus <info@webnus.biz>
 * @package MEC/Templates
 * @version 1.0.0
 */
get_header('mec');

// wp_enqueue_style("owl", "https://128.199.21.9/ifbe/wp-content/themes/Divi-child/assets/owl.carousel.min.css");
?>

<section id="<?php echo apply_filters('mec_single_page_html_id', 'main-content'); ?>" class="<?php echo apply_filters('mec_single_page_html_class', 'mec-container'); ?>">

    <?php do_action('mec_before_main_content'); ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php $MEC = MEC::instance();
        echo MEC_Kses::full($MEC->single()); ?>

    <?php endwhile; // end of the loop. 
    ?>
    <?php comments_template(); ?>
</section>

<?php do_action('mec_after_main_content'); ?>

<?php get_footer('mec');
