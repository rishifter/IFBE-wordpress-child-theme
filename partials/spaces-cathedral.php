<?php
$title = the_title("", "", false);

$uploads = wp_upload_dir()['baseurl'];

$hero = $uploads . '/2022/07/cat-hero.jpg';
$img_1 = $uploads . '/2022/07/cat-1.jpg';
$img_2 = $uploads . '/2022/07/cat-2.jpg';
$img_3 = $uploads . '/2022/07/cat-3.jpg';

$plan = $uploads . '/2022/07/plan-bg.png';
$plan_overlay = $uploads . '/2022/07/plan-overlay-cat.png';
$plan_overlay_color = $uploads . '/2022/07/plan-overlay-red-cat.png';

$plan1 = $uploads . '/2022/07/IFBE_Overall_Space.pdf';
$plan2 = $uploads . '/2022/07/IFBE_The_Cathedral.pdf';

$icon_area = $uploads . '/2022/06/icon-area.svg';
$icon_height = $uploads . '/2022/06/icon-height.svg';
$icon_capacity = $uploads . '/2022/06/icon-capacity.svg';
$icon_seating = $uploads . '/2022/06/icon-seating.svg';
$icon_wall = $uploads . '/2022/06/icon-wall.svg';
$icon_cullinary = $uploads . '/2022/06/icon-cullinary.svg';

$icon_video = $uploads . '/2022/06/icon-video.svg';
$icon_lighting = $uploads . '/2022/06/icon-lighting.svg';
$icon_audio = $uploads . '/2022/06/icon-audio.svg';
$icon_outlet = $uploads . '/2022/06/icon-outlet.svg';
$icon_wifi = $uploads . '/2022/06/icon-wifi.svg';

$design_1 = $uploads . '/2022/07/cat-courtyard-connect.jpg';
$design_2 = $uploads . '/2022/07/cat-contemporary-cut.jpg';
$design_3 = $uploads . '/2022/07/cat-quiet-capacity.jpg';
$design_4 = $uploads . '/2022/07/cat-cathedral.jpg';

?>
<section class="hero full-width title-container flex-col-center">
    <div class="background">
        <img src="<?php echo $hero; ?>" alt="">
        <?php get_template_part('partials/back'); ?>
    </div>
    <h3 class="subtitle-top">Spaces at IFBE</h3>
    <h1 class="title"><?php echo $title; ?></h1>
    <h2 class="subtitle-bottom">OPEN AND VOLUMINOUS: A MODERN TAKE ON A SHRINE</h2>
</section>

<section class="parallax one full-width flex-col-center">
    <p class="body-text center center-left-on-mobile">
        <span>In a city that often feels claustrophobic and cramped,</span>
        <span>the Cathedral is a <strong class="highlight">celebration of space, light, and air</strong>.</span>
    </p>
</section>

<section class="parallax two full-width flex-col-center">
    <p class="body-text">
        <span>It is a contemporary extrusion of the North light-lit ice factory</span>
        <span>morphing into East light as a response to adjacent structures.</span>
    </p>
    <img class="right-90" src="<?php echo $img_1; ?>" alt="">
</section>

<section class="parallax three full-width flex-col-center flex-jc-top">
    <img class="full-width" src="<?php echo $img_2; ?>" alt="">
    <p class="body-text">
        <span>The Cathedral, the IFBE's second-largest exhibition space, </span>
        <span>overlooks the banyan tree and the central courtyard.</span>
    </p>
</section>

<section class="parallax four full-width flex-col-center">
    <!-- <p class="body-text">
        <span>The Cathedral connects to the Ice Factory,</span>
        <span>making it suitable for a larger event as well.</span>
    </p> -->
    <img class="center-80" src="<?php echo $img_3; ?>" alt="">
</section>

<section class="parallax1 five plan-view full-width">
    <div class="title">
        <span>Space</span>
        <span><strong>Specifications</strong></span>
    </div>

    <img class="plan-bg" src="<?php echo $plan; ?>" alt="">
    <img class="plan-overlay-color" src="<?php echo $plan_overlay_color; ?>" alt="">
    <img class="plan-overlay" src="<?php echo $plan_overlay; ?>" alt="">

    <div class="details">
        <div class="features">
            <h3 class="heading">Features</h3>
            <div class="feature"><img src="<?php echo $icon_area; ?>" alt="" class="icon"> Area: 1,320 sq ft</div>
            <div class="feature"><img src="<?php echo $icon_height; ?>" alt="" class="icon">Max Usable Height: 16 ft (along brick wall)<br /> 11 ft 6 in (along stone wall)</div>
            <div class="feature"><img src="<?php echo $icon_capacity; ?>" alt="" class="icon">Standing capacity: About 65 people</div>
            <div class="feature"><img src="<?php echo $icon_seating; ?>" alt="" class="icon">Configurable Seating</div>
            <div class="feature"><img src="<?php echo $icon_wall; ?>" alt="" class="icon">Wall Space & Hanging Facility</div>
            <div class="feature"><img src="<?php echo $icon_cullinary; ?>" alt="" class="icon">In-house Culinary Team</div>
        </div>
        <div class="features equipment">
            <h3 class="heading">Equipment</h3>
            <div class="feature"><img src="<?php echo $icon_video; ?>" alt="" class="icon"> Video:
                <ul>
                    <li>BenQ Short Throw Projector</li>
                    <li>Screen Size: 120 inches (diagonal)</li>
                    <li>Aspect Ratio: 16:9</li>
                    <li>HDMI Input (underneath projector, AV Rack)</li>
                </ul>
            </div>
            <div class="feature"><img src="<?php echo $icon_lighting; ?>" alt="" class="icon"> Lighting:
                <ul>
                    <li>Built-in Adjustable Track Lighting (Warm Colour Temperature)</li>
                </ul>
            </div>
            <div class="feature"><img src="<?php echo $icon_audio; ?>" alt="" class="icon"> Audio:
                <ul>
                    <li>Built-in Speaker/PA System</li>
                    <li>Lapel Mic Available</li>
                </ul>
            </div>
            <div class="feature"><img src="<?php echo $icon_outlet; ?>" alt="" class="icon"> Built-in Floor and Wall Outlets</div>
            <div class="feature"><img src="<?php echo $icon_wifi; ?>" alt="" class="icon"> Wifi</div>
        </div>
    </div>

    <div class="details-blurb flex-col">
        <div class="blurb">
            <h3 class="title">IFBE FLOOR PLAN</h3>
            <h4 class="subtitle">Complete floor plan of IFBE</h4>
            <a href="<?php echo $plan1 ?>" class="button arrow" target="_blank">Download</a>
        </div>
        <div class="blurb">
            <h3 class="title">THE CATHEDRAL FLOOR PLAN</h3>
            <h4 class="subtitle">Complete floor plan of The Cathedral</h4>
            <a href="<?php echo $plan2 ?>" class="button arrow" target="_blank">Download</a>
        </div>
    </div>

    <div class="footer title-container">
        <div class="subtitle-top">Space Purpose</div>
        <ul>
            <li class="body-text">Exhibitions</li>
            <li class="body-text">Performances</li>
            <li class="body-text">Product Launches</li>
            <li class="body-text">Workshops</li>
        </ul>
    </div>
</section>

<section class="plan-zoomed full-width flex-col-center dark">
    <img class="full-width cat" src="<?php echo $plan_overlay; ?>" alt="">
</section>

<section class="plan-details full-width flex-col-center dark">
    <div class="img-container"><img class="full-width cat" src="<?php echo $plan_overlay; ?>" alt=""></div>

    <div class="details">
        <div class="features">
            <h3 class="heading">Features</h3>
            <div class="feature"><img src="<?php echo $icon_area; ?>" alt="" class="icon"> Area: 1,320 SQ FT</div>
            <div class="feature"><img src="<?php echo $icon_height; ?>" alt="" class="icon">Max Usable Height: 16 ft (along brick wall)<br /> 11 ft 6 in (along stone wall)</div>
            <div class="feature"><img src="<?php echo $icon_capacity; ?>" alt="" class="icon">Standing capacity: About 65 people</div>
            <div class="feature"><img src="<?php echo $icon_seating; ?>" alt="" class="icon">Configurable Seating</div>
            <div class="feature"><img src="<?php echo $icon_wall; ?>" alt="" class="icon">Wall Space & Hanging Facility</div>
            <div class="feature"><img src="<?php echo $icon_cullinary; ?>" alt="" class="icon">In-house Culinary Team</div>
        </div>
        <div class="features equipment">
            <h3 class="heading">Equipment</h3>
            <div class="feature"><img src="<?php echo $icon_video; ?>" alt="" class="icon"> Video:
                <ul>
                    <li>BenQ Short Throw Projector</li>
                    <li>Screen Size: 120 inches (diagonal)</li>
                    <li>Aspect Ratio: 16:9</li>
                    <li>HDMI Input (underneath projector, AV Rack)</li>
                </ul>
            </div>
            <div class="feature"><img src="<?php echo $icon_lighting; ?>" alt="" class="icon"> Lighting:
                <ul>
                    <li>Built-in Adjustable Track Lighting (Warm Colour Temperature)</li>
                </ul>
            </div>
            <div class="feature"><img src="<?php echo $icon_audio; ?>" alt="" class="icon"> Audio:
                <ul>
                    <li>Built-in Speaker/PA System</li>
                    <li>Lapel Mic Available</li>
                </ul>
            </div>
            <div class="feature"><img src="<?php echo $icon_outlet; ?>" alt="" class="icon"> Built-in Floor and Wall Outlets</div>
            <div class="feature"><img src="<?php echo $icon_wifi; ?>" alt="" class="icon"> Wifi</div>
        </div>
    </div>

    <div class="footer title-container">
        <div class="subtitle-top">Space Purpose</div>
        <ul>
            <li class="body-text">Exhibitions</li>
            <li class="body-text">Performances</li>
            <li class="body-text">Product Launches</li>
            <li class="body-text">Workshops</li>
        </ul>
    </div>
</section>

<section class="design-details full-width">
    <div class="title">Design <strong>Details</strong></div>
    <div class="scrollable-cards">
        <div class="card">
            <img class="" src="<?php echo $design_1; ?>" alt="">
            <div class="heading">The Courtyard Connect</div>
            <div class="content">The glass wall on the Northern side means the Cathedral overlooks the lush foliage of the ancient banyan tree and a dappled courtyard.</div>
        </div>
        <div class="card">
            <img class="" src="<?php echo $design_2; ?>" alt="">
            <div class="heading">The Contemporary Cut</div>
            <div class="content">The sculpted geometry of the roof – in cut bison board and exposed steel – gives the Cathedral its unorthodox ambience.</div>
        </div>
        <div class="card">
            <img class="" src="<?php echo $design_3; ?>" alt="">
            <div class="heading">A Quiet Capacity</div>
            <div class="content">The largest, most complex installations can be housed here with a subtle service entry for easy access.</div>
        </div>
        <div class="card">
            <img class="" src="<?php echo $design_4; ?>" alt="">
            <div class="heading">The Cathedral</div>
            <div class="content">Dynamically composed, the Cathedral brings together a full glass facade, stone, brickwork and steel to create a space that’s rich in light, views, and volume.</div>
        </div>
    </div>
</section>

<?php get_template_part('partials/spaces-animations-cat'); ?>