<?php
$title = the_title("", "", false);

$opening_times = get_field("opening_times");
$phone = get_field("phone_no");
$email = get_field("email");
$address = get_field("address");
$map = get_field("map");
$local_travel = get_field("local_travel");
$international_travel = get_field("international_travel");
?>

<section class="title-container flex-col gap-2">
    <div class="row contact flex flex-sb gap-5">
        <div class="opening-times" id="opening-times">
            <h3 class=" subtitle-top"><?php echo $title; ?></h3>
            <h1 class="title">Opening Hours</h1>
            <div class="content">
                <?php echo $opening_times; ?>
            </div>
        </div>
        <div class="contact" id="contact">
            <h3 class="subtitle-top"><?php echo "" ?></h3>
            <h1 class="title">Contact</h1>
            <div class="row flex gap-5">
                <div class="enquiries">
                    <h4>General Enquiries</h4>
                    <div class="phone"><strong>Call: </strong><a href="tel://<?php echo $phone; ?>"><?php echo $phone; ?></a></div>
                    <div class="email"><strong>Email: </strong><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?>
						</a></div><br>
					<h4>Booking Enquiries</h4>
					<div class="phone"><strong>Call: </strong><a href="tel://<?php echo "9619024000"; ?>"><?php echo "9619024000"; ?></a></div>
					<div class="email"><strong>Email: </strong><a href="mailto:<?php echo "events@ifbe.space
"; ?>"><?php echo "events@ifbe.space"; ?>
						</a></div>
                </div>
				
				
                <div class="address">
                    <h4>Address</h4>
                    <div class="address"><?php echo $address; ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row map" id="map">
        <h3 class="subtitle-top"><?php echo ""; ?></h3>
        <h1 class="title">Directions</h1>
        <?php echo $map; ?>
    </div>

    <div class="row info flex flex-sb gap-5">
        <div class="info-left">
            <h4>Local Travel</h4>
            <div class="content"><?php echo $local_travel; ?></div>
        </div>
        <div class="info-right">
            <h4>Regional & International Travel</h4>
            <div class="content"><?php echo $international_travel; ?></div>
        </div>
    </div>
</section>