<?php
$title = the_title("", "", false);

$uploads = wp_upload_dir()['baseurl'];

$ideal_img = $uploads . '/2022/06/spaces-ideal.jpg';
$contact_url = get_home_url(null, "/spaces/booking/");
?>

<section class="title-container flex-col">
    <h3 class="subtitle-top">Rentals</h3>
    <h1 class="title"><?php echo $title; ?></h1>
    <p>Limitless in scope, traditional yet contemporary, intimate yet scalable, IFBE invites you to host your next event in one or more of our incredible spaces perfectly geared for:
    </p>
    <ul>
        <li>Book launches</li>
        <li>Talks</li>
        <li>Dynamic theatre, music and dance performances</li>
        <li>Film screenings</li>
        <li>Literary and art festivals</li>
        <li>Design exhibitions and installations</li>
        <li>Curated pop-ups</li>
        <li>Workshops and launch events</li>
        <li>Auctions and fundraisers</li>
        <li>Gatherings that celebrate innovative product design, sustainable practices and more</li>
    </ul>
    <p>
        <strong>We at IFBE look forward to long-term collaborations with you.</strong>
    </p>
</section>

<section class="title-container dark">
    <div class="content flex flex-sb">
        <div class="left">
            <h3 class="heading">Still Cannot Decide? <br> Worry Not.</h3>
            <div class="blurb">
                <h3 class="title">Queries</h3>
                <h4 class="subtitle">Send us your questions and we shall reach you</h4>
                <a href="<?php echo $contact_url; ?>" class="button arrow">Contact Us</a>
            </div>
        </div>
        <img src="<?php echo $ideal_img; ?>" alt="">
    </div>
</section>