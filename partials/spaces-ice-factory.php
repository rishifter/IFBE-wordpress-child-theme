<?php
$title = the_title("", "", false);

$uploads = wp_upload_dir()['baseurl'];

$hero = $uploads . '/2022/07/if-hero.jpg';
$img_1 = $uploads . '/2022/07/if-1.jpg';
$img_2 = $uploads . '/2022/07/if-2.jpg';
$img_3 = $uploads . '/2022/07/if-3.jpg';

$plan = $uploads . '/2022/07/plan-bg.png';
$plan_overlay = $uploads . '/2022/07/plan-overlay-if.png';
$plan_overlay_color = $uploads . '/2022/07/plan-overlay-red-if.png';

$plan1 = $uploads . '/2022/07/IFBE_Overall_Space.pdf';
$plan2 = $uploads . '/2022/07/IFBE_The_Ice_Factory.pdf';

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

$design_1 = $uploads . '/2022/07/if-legacy.jpg';
$design_2 = $uploads . '/2022/07/if-salvage.jpg';
$design_3 = $uploads . '/2022/07/if-light.jpg';
$design_4 = $uploads . '/2022/07/if-ice-factory.jpg';
?>

<section class="hero full-width title-container flex-col-center">
    <div class="background">
        <img src="<?php echo $hero; ?>" alt="">
        <?php get_template_part('partials/back'); ?>
    </div>
    <h3 class="subtitle-top">Spaces at IFBE</h3>
    <h1 class="title"><?php echo $title; ?></h1>
    <h2 class="subtitle-bottom if">THE BEATING HEART OF IFBE</h2>
</section>

<section class="one full-width flex-col-center">
    <p class="body-text center center-left-on-mobile">
        <span>Entirely column-free, The Ice Factory is <strong class="highlight">a rare, expansive and meditative space</strong></span>
        <span> in the midst of the city’s hustle and bustle.</span>
    </p>
</section>

<section class="two full-width flex-col-center">
    <p class="body-text">
        <span><strong class="highlight">Natural light filters through the North light trusses</strong></span>
        <span> expressing the movement of the sun through the day.</span>
    </p>
    <img class="right-90" src="<?php echo $img_1; ?>" alt="">
</section>

<section class="three full-width flex-col-center flex-jc-top">
    <img class="full-width" src="<?php echo $img_2; ?>" alt="">
    <p class="body-text">
        <span>At night, the <strong class="highlight">original Burma Teak trusses and roof panels</strong> are accentuated</span>
        <span> through the use of precision lighting and optics.</span>
    </p>
</section>

<section class="four full-width flex-col-center">
    <p class="body-text">
        <span><strong class="highlight">The gantry, which once lifted ice blocks, is operational and can be used innovatively to partition the space or to create dynamic art and installations.</strong></span>

    </p>
    <img class="center-80" src="<?php echo $img_3; ?>" alt="">
</section>

<section class="five plan-view full-width">
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
            <div class="feature"><img src="<?php echo $icon_area; ?>" alt="" class="icon">Area: 1,770 sq ft</div>
            <div class="feature"><img src="<?php echo $icon_height; ?>" alt="" class="icon">Max Usable Height: 14 ft</div>
            <div class="feature"><img src="<?php echo $icon_capacity; ?>" alt="" class="icon">Standing capacity: About 180 people</div>
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
            <h3 class="title">IFBE Floor plan</h3>
            <h4 class="subtitle">Complete floor plan of IFBE</h4>
            <a href="<?php echo $plan1 ?>" class="button arrow" target="_blank">Download</a>
        </div>
        <div class="blurb">
            <h3 class="title">THE ICE FACTORY FLOOR PLAN</h3>
            <h4 class="subtitle">Complete floor plan of The Ice Factory</h4>
            <a href="<?php echo $plan2 ?>" class="button arrow" target="_blank">Download</a>
        </div>
    </div>

    <div class="footer title-container">
        <div class="subtitle-top">Space Purpose</div>
        <ul>
            <li class="body-text">Exhibitions</li>
            <li class="body-text">Performances</li>
            <li class="body-text">Film Screenings</li>
            <li class="body-text">Panel Discussions</li>
            <li class="body-text">Interactive Sessions</li>
            <li class="body-text">Workshops</li>
        </ul>
    </div>
</section>

<section class="plan-zoomed full-width flex-col-center dark">
    <img class="full-width if" src="<?php echo $plan_overlay; ?>" alt="">
</section>

<section class="plan-details full-width flex-col-center dark">
    <div class="img-container"><img class="full-width if" src="<?php echo $plan_overlay; ?>" alt=""></div>

    <div class="details">
        <div class="features">
            <h3 class="heading">Features</h3>
            <div class="feature"><img src="<?php echo $icon_area; ?>" alt="" class="icon">Area: 1,770 sq ft</div>
            <div class="feature"><img src="<?php echo $icon_height; ?>" alt="" class="icon">Max Usable Height: 14 ft</div>
            <div class="feature"><img src="<?php echo $icon_capacity; ?>" alt="" class="icon">Standing capacity: About 180 people</div>
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
            <li class="body-text">Film Screenings</li>
            <li class="body-text">Panel Discussions</li>
            <li class="body-text">Interactive Sessions</li>
            <li class="body-text">Workshops</li>
        </ul>
    </div>
</section>

<section class="design-details full-width">
    <div class="title">Design <strong>Details</strong></div>
    <div class="scrollable-cards">
        <div class="card">
            <img class="" src="<?php echo $design_1; ?>" alt="">
            <div class="heading">The Legacy</div>
            <div class="content">This is where it all began: A space with history and character. The ground zero for ‘ice making’ since the 1880s, when Bombay Ice Manufacturing Co was established by Nanabhoy Byramjee Jeejeebhoy and JA Forbes.</div>
        </div>
        <div class="card">
            <img class="" src="<?php echo $design_2; ?>" alt="">
            <div class="heading">The Heritage</div>
            <div class="content">The Ice Factory’s original gantry, once used to move blocks of ice, has been carefully preserved. Variously mobilised as part of performances hosted in the space, and to innovatively partition the room, the gantry stands testimony to the industrial heritage of IFBE.</div>
        </div>
        <div class="card">
            <img class="" src="<?php echo $design_3; ?>" alt="">
            <div class="heading">The Light</div>
            <div class="content">The space is awash in soft northern light that filters in through the Burma teak trusses during the day. At night, custom lighting illuminates the dramatic form of the roof, the gantry and the space at large. </div>
        </div>
        <div class="card">
            <img class="" src="<?php echo $design_4; ?>" alt="">
            <div class="heading">The Ice Factory</div>
            <div class="content">The site’s biggest exhibition space blends volume, intricate brickwork and teak to create a sense of warmth and grandeur. Endlessly versatile, the space can be reimagined to suit a variety of needs and purposes. </div>
        </div>
    </div>
</section>

<?php get_template_part('partials/spaces-animations-if'); ?>