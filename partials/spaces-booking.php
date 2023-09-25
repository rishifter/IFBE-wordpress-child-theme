<?php
$title = the_title("", "", false);

$uploads = wp_upload_dir()['baseurl'];

$booking_img = $uploads . '/2022/06/spaces-enquiry.jpg';
$ideal_url = get_home_url(null, "/spaces/does-ifbe-work-for-your-event/");
?>

<section class="title-container flex-col">
    <h3 class="subtitle-top">Rentals</h3>
    <h1 class="title">Want to book a space?</h1>
    <p>Fill in our rental enquiry form below to reach us quickly.</p>
    <div class="booking-form">
        <?php echo do_shortcode('[contact-form-7 id="887" title="Spaces Booking Form"]'); ?>
        <script>
            const dateFields = document.querySelectorAll("input[type=date]");
            dateFields.forEach(dateField => {
                // Change all date fields to text so placeholders can be used
                dateField.type = "text";

                // On focus, change the text fields back to date so datepicker can be used
                dateField.addEventListener("focus", () => {
                    dateField.type = "date";
                });
            })
        </script>
    </div>
</section>

<section class="full-width title-container dark">
    <div class="content flex flex-sb">
        <img src="<?php echo $booking_img; ?>" alt="">
        <div class="right">
            <div class="blurb">
                <h3 class="title">Decide on IF.BE</h3>
                <h4 class="subtitle">Know if IF.BE fits your event</h4>
                <a href="<?php echo $ideal_url; ?>" class="button arrow">Learn More</a>
            </div>
        </div>
    </div>
</section>