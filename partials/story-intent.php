<?php
$title = the_title("", "", false);

$vision = get_field("vision");

$enable = get_field("mission_enable");
$connect = get_field("mission_connect");
$celebrate = get_field("mission_celebrate");
$inspire = get_field("mission_inspire");
$collaborate = get_field("mission_collaborate");
$provide = get_field("mission_provide");
?>

<section class="vision title-container flex-col full-width container-padding dark-medium">
    <div class="title-container">
        <h3 class="subtitle-top"><?php echo $title; ?></h3>
        <h1 class="title">The Vision</h1>
    </div>

    <div class="content">
        <?php echo $vision; ?>
    </div>
</section>

<section class="mission title-container flex-col">
    <div class="title-container">
        <h3 class="subtitle-top"><?php echo $title; ?></h3>
        <h1 class="title">The Mission</h1>
    </div>

    <div class="row flex flex-sb gap-5">
        <div class="col">
            <h4>To enable</h4>
            <div class="content"><?php echo $enable; ?></div>
        </div>
        <div class="col">
            <h4>To connect</h4>
            <div class="content"><?php echo $connect; ?></div>
        </div>
    </div>

    <div class="row flex flex-sb gap-5">
        <div class="col">
            <h4>To celebrate</h4>
            <div class="content"><?php echo $celebrate; ?></div>
        </div>
        <div class="col">
            <h4>To inspire</h4>
            <div class="content"><?php echo $inspire; ?></div>
        </div>
    </div>

    <div class="row flex flex-sb gap-5">
        <div class="col">
            <h4>To collaborate</h4>
            <div class="content"><?php echo $collaborate; ?></div>
        </div>
        <div class="col">
            <h4>To provide</h4>
            <div class="content"><?php echo $provide; ?></div>
        </div>
    </div>

</section>