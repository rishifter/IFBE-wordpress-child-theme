<?php
$title = the_title("", "", false);

$f_hero = get_field("founders_founder_image");
$f_caption = get_field("founders_founder_image_caption");
$f_title = get_field("founders_title");
$f_subtitle = get_field("founders_subtitle");
$f_content = get_field("founders_content");

$show_more = get_field("show_more");
$total_persons = $show_more ? 6 : 3; //Show upto 3 persons by default, upto 6 if show_more is selected.

?>

<section class="founders title-container flex full-width container-padding dark">
    <div class="img-container flex-col">
        <img src="<?php echo $f_hero; ?>" alt="">
        <div class="caption"><?php echo $f_caption; ?></div>
    </div>

    <div class="content flex-col">
        <div class="title-container">
            <h3 class="subtitle-top"><?php echo $title; ?></h3>
            <h1 class="title"><?php echo $f_title; ?></h1>
            <div class="subtitle-bottom"><?php echo $f_subtitle; ?></div>
        </div>
        <div class="desc"><?php echo $f_content; ?></div>
    </div>
</section>

<section class="team title-container flex-col">
    <div class="title-container">
        <h3 class="subtitle-top">People</h3>
        <h1 class="title">Team IFBE</h1>
    </div>

    <?php
    // Render persons from acf fields
    for ($i = 1; $i <= $total_persons; $i++) {
		if($i==2)continue; else true;
        $img = get_field("person_" . $i . "_image");
        $title = get_field("person_" . $i . "_title");
        $role = get_field("person_" . $i . "_role");
        $content = get_field("person_" . $i . "_content");

        //Render a person only if they have their name filled in
        if (!empty($title)) { ?>
            <article class="person flex">
                <img src="<?php echo $img; ?>" alt="">

                <div class="content flex-col">
                    <div class="name-role">
                        <h2 class="name"><?php echo $title; ?></h2>
                        <h3 class="role"><?php echo $role; ?></h3>
                    </div>

                    <div class="desc"><?php echo $content; ?></div>

                    <!-- Show blurb only for 1st person -->
                    <?php if ($i == 1) {

                        $cta_title = get_field("person_" . $i . "_cta_title");
                        $cta_subtitle = get_field("person_" . $i . "_cta_subtitle");
                        $cta_button_text = get_field("person_" . $i . "_cta_button_text");
                        $cta_button_url = get_field("person_" . $i . "_cta_button_url");
                    ?>
                        <div class="blurb">
                            <h3 class="title"><?php echo $cta_title; ?></h3>
                            <h4 class="subtitle"><?php echo $cta_subtitle; ?></h4>
                            <a href="<?php echo $cta_button_url; ?>" class="button arrow"><?php echo $cta_button_text; ?></a>
                        </div>

                    <?php } ?>

                </div>

            </article>
    <?php }
    }
    ?>

</section>