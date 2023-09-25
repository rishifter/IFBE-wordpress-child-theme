<?php
$title = the_title("", "", false);
$subtitle = get_field("subtitle");
$subtitle = strlen($subtitle) ? "<p>" . $subtitle . "</p>" : "";

$responsibilities = get_field("responsibilities");
$requirements = get_field("requirements");
?>

<section class="career-details title-container flex-col">
    <h3 class="subtitle-top">Careers</h3>
    <h1 class="title"><?php echo $title; ?></h1>

    <?php echo $subtitle; ?>
    <article>
        <h4 class="subtitle-bottom">Responsibilities</h4>
        <?php echo $responsibilities; ?>
    </article>
    <article>
        <h4 class="subtitle-bottom">Requirements</h4>
        <?php echo $requirements; ?>
    </article>
</section>

<section class="careers-form grey-bg grey-shadow-horizontal title-container flex-col">
    <!-- <h3 class="subtitle-top">Careers</h3> -->
    <h1 class="title">Lorem Ipsum</h1>

    <?php echo $subtitle; ?>

    <p>If you align with our intent and have ideas that need to be in IFBE, We are all ears and eyes.</p>

    <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="1526" title="Careers Form"]'); ?>

        <script>
            // Show file selected for upload from file input which is hidden using css
            const file = document.getElementById("proposal-file");
            const fileNameContainer = document.getElementById("file-name");

            file.addEventListener("change", () => {
                if (file.files.length) {
                    fileNameContainer.innerHTML = file.files[0].name;
                } else {
                    fileNameContainer.innerHTML = "";
                }

            });
        </script>
    </div>
</section>