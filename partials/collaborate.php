<?php
$title = the_title("", "", false);

$uploads = wp_upload_dir()['baseurl'];

$booking_img = $uploads . '/2022/06/spaces-enquiry.jpg';
$ideal_url = get_home_url(null, "/spaces/does-ifbe-work-for-your-event/");
?>

<section class="title-container flex-col">
    <h3 class="subtitle-top"><?php echo $title; ?></h3>
    <h1 class="title" style="font-size:5vw">GET IN TOUCH WITH US</h1>
    <p>If you have an idea for a compelling exhibition, performance, talk or event, please reach out to us with your proposal using the form below or write to us at <a href="mailto:info@ifbe.space ">info@ifbe.space</a> with the details.
    </p>
    <div class="booking-form">
        <?php echo do_shortcode('[contact-form-7 id="921" title="Collaborate Form"]'); ?>

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