<?php
$title = the_title("", "", false);
$total_items = 20;
?>

<section class="title-container flex-col">
    <h3 class="subtitle-top">Connect</h3>
    <h1 class="title"><?php echo $title; ?></h1>
    <?php the_content(); ?>

    <div id="search" class="search" data-message="">
        <input type="text" placeholder="Search for faqs">
    </div>

    <?php
    for ($i = 1; $i <= $total_items; $i++) {
        $heading = get_field("heading_" . $i);
        $content = get_field("content_" . $i);

        if (!empty($heading)) { ?>
            <article class="accordion">
                <div class="heading"><?php echo $heading; ?></div>
                <div class="content"><?php echo $content; ?></div>
            </article>
    <?php }
    }
    ?>

</section>