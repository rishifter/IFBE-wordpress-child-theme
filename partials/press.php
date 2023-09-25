<?php
$title = the_title("", "", false);
$total_items = 3
?>

<section class="title-container flex-col">
    <h3 class="subtitle-top">Connect</h3>
    <h1 class="title"><?php echo $title; ?></h1>
    <?php the_content(); ?>

    <div class="row">
        <?php
        for ($i = 1; $i <= $total_items; $i++) {
            $title = get_field("blurb_" . $i . "_title");
            $subtitle = get_field("blurb_" . $i . "_subtitle");
            $button_text = get_field("blurb_" . $i . "_button_text");
            $button_url = get_field("blurb_" . $i . "_button_url");
            $button_url = empty($button_url) ? "#" :  $button_url;

            if (!empty($title)) { ?>
                <div class="blurb borderless">
                    <h3 class="title"><?php echo $title; ?></h3>
                    <h4 class="subtitle"><?php echo $subtitle; ?></h4>
                    <a href="<?php echo $button_url; ?>" class="button arrow"><?php echo $button_text; ?></a>
                </div>
        <?php }
        }
        ?>
    </div>
</section>