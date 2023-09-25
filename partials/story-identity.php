<?php
$subtitle = the_title("", "", false);

$n_title = get_field("title");
$n_subtitle = get_field("subtitle");
$n_subtitle2 = get_field("subtitle_2");
$n_if = get_field("ifbe_if");
$n_be = get_field("ifbe_be");

$i_title1 = get_field("identity_title_1");
$subtitle1 = get_field("identity_subtitle_1");
$i_title2 = get_field("identity_title_2");
$subtitle2 = get_field("identity_subtitle_2");
$i_title3 = get_field("identity_title_3");
$subtitle3 = get_field("identity_subtitle_3");
?>

<section class="noun title-container flex-col full-width container-padding">
    <div class="title-container">
        <h3 class="subtitle-top"><?php echo $subtitle; ?></h3>
        <h1 class="title"><?php echo $n_title; ?></h1>
        <h3 class="subtitle-bottom"><?php echo $n_subtitle; ?></h3>
    </div>

    <div class="content">
        <p><?php echo $n_subtitle2; ?></p>

        <div class="row flex flex-sb gap-5">
            <div class="col">
                <div class="ifbe-blurb if">
                    <span class="circle">IF</span>
                    <?php echo $n_if; ?>
                </div>
            </div>
            <div class="col">
                <div class="ifbe-blurb be">
                    <span class="circle">BE</span>
                    <?php echo $n_be; ?>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="identity title-container flex-col full-width container-padding dark-medium">

    <div class="content">
        <h3>
            <span class="highlight">IFBE</span><?php echo $i_title1; ?>
        </h3>
        <p><?php echo $subtitle1; ?></p>
    </div>

    <div class="content">
        <h3>
            <span class="highlight">IFBE</span><?php echo $i_title2; ?>
        </h3>
        <p><?php echo $subtitle2; ?></p>
    </div>

    <h2>
        <?php echo $subtitle3; ?> <br>
        <strong><?php echo $i_title3; ?></strong>
    </h2>

</section>