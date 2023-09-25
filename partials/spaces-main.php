<?php
// $title = the_title("", "", false);

$uploads = wp_upload_dir()['baseurl'];

$ss_hero = $uploads . '/2022/07/spaces-main-ss.jpg';
$cat_hero = $uploads . '/2022/07/spaces-main-cat.jpg';
$if_hero = $uploads . '/2022/07/spaces-main-if.jpg';

$courtyard_hero = $uploads . '/2022/07/spaces-main-the-courtyard.jpg';
$banyan_hero = $uploads . '/2022/07/spaces-main-the-banyan-tree.jpg';
$bombay = $uploads . '/2022/07/spaces-main-native-bombay.jpg';

$ss_url = get_home_url(null, "/spaces/the-substation/");
$cat_url = get_home_url(null, "/spaces/the-cathedral/");
$if_url = get_home_url(null, "/spaces/the-ice-factory/");
$ideal_url = "mailto: info@ifbe.space"; //get_home_url(null, "mailto: info@ifbe.space");

$plan = $uploads . '/2022/06/plan-cropped.png';
?>

<section class="hero full-width title-container flex-col-center dark">
    <h3 class="subtitle-top">SPACES AT IFBE</h3>
    <h1 class="heading body-text">From an intimate poetry - reading to an exhibition to an exclusive product launch, IFBE offers you three distinct spaces for your next event.</h1>
    <h2 class="subtitle-bottom">
        <ul>
            <li><a href="<?php echo $ss_url; ?>">The Substation</a></li>
            <li><a href="<?php echo $cat_url; ?>">The Cathedral</a></li>
            <li><a href="<?php echo $if_url; ?>">The Ice Factory</a></li>
        </ul>
        <img class="" src="<?php echo $plan; ?>" alt="">
    </h2>

    <div class="body-text">Steeped in character, with a profound sense of history, each of these contemporary spaces has been designed to be fluid and can be easily reconfigured depending on the nature of the event.</div>
</section>

<section class="spaces full-width title-container">
    <div class="title">SPACES AT IFBE</div>
    <div class="subtitle-bottom">EXPLORE THREE UNIQUE SPACES FOR PRIVATE EVENTS
        <!--Book these spaces together or individually to suit your needs.-->
    </div>
    <h3>A home for the city's creative community, this stunning 10,000 sqft former Ice Factory in the heritage precinct of Ballard Estate is now a vibrant cultural centre, a home for the city's creative community. Here history meets the contemporary. To experience our distinctive spaces, <a href="<?php echo $ideal_url; ?>">contact us.</a></h3>

    <article>
        <img src="<?php echo $ss_hero; ?>" alt="">
        <div class="content flex flex-sb">
            <div class="left">
                <h3 class="heading">The Substation</h3>
                <div class="desc">The gateway to the core spaces of IFBE, the linear Substation is perfect to host an intimate display or announce a larger exhibition inside.</div>
            </div>
            <a href="<?php echo $ss_url; ?>" class="button dark">View Details</a>
        </div>
    </article>
    <article>
        <img src="<?php echo $cat_hero; ?>" alt="">
        <div class="content flex flex-sb">
            <div class="left">
                <h3 class="heading">The Cathedral</h3>
                <div class="desc">A contemporary take on a shrine, IFBE's second- largest exhibition space, The Cathedral overlooks the banyan tree and the central courtyard. </div>
            </div>
            <a href="<?php echo $cat_url; ?>" class="button dark">View Details</a>
        </div>
    </article>
    <article>
        <img src="<?php echo $if_hero; ?>" alt="">
        <div class="content flex flex-sb">
            <div class="left">
                <h3 class="heading">The Ice Factory</h3>
                <div class="desc">Soaring to a height of 22 feet and entirely column- free, this is the beating heart of this vibrant complex. The Ice Factory is a versatile space that can be endlessly reimagined.</div>
            </div>
            <a href="<?php echo $if_url; ?>" class="button dark">View Details</a>
        </div>
    </article>
</section>

<section class="spaces spaces-addl full-width title-container light">
    <div class="title">Additional Spaces</div>
    <div class="subtitle-bottom">These spaces sit in conjunction with the core ones and complete IFBE.</div>

    <article>
        <div class="content flex flex-sb">
            <div class="left flex-col">
                <h3 class="heading">The Courtyard</h3>
                <div class="desc">The open courtyard is a feature of most traditional Indian dwellings. All paths at IFBE converge at the Courtyard, which is home to a magnificent banyan tree that inspired this project. First-time and regular visitors alike gravitate to this banyan tree to absorb and enjoy the nurturing, healing, and creative energies it exudes.</div>
            </div>
            <img src="<?php echo $courtyard_hero; ?>" alt="">
        </div>
    </article>
    <article>
        <div class="content flex flex-sb">
            <div class="left flex-col">
                <h3 class="heading">The Banyan Tree Café</h3>
                <div class="desc">This buzzy eatery is situated on the ground floor and serves a wholesome and healthy menu of salads, sandwiches and smoothies. It is the perfect spot for a catch-up with friends before or after a performance.</div>
            </div>
            <img src="<?php echo $banyan_hero; ?>" alt="">
        </div>
    </article>
    <article>
        <div class="content flex flex-sb">
            <div class="left flex-col">
                <h3 class="heading">Native Bombay Restaurant and Bar</h3>
                <div class="desc">With exposed brickwork and vintage Burma teak, Native Bombay Restaurant and Bar offers a contemporary spin on regional Indian cuisine.</div>
            </div>
            <img src="<?php echo $bombay; ?>" alt="">
        </div>
    </article>
</section>