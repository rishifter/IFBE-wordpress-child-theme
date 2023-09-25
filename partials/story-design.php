<?php
// $title = the_title("", "", false);

$uploads = wp_upload_dir()['baseurl'];

$hero = $uploads . '/2022/07/Design-Hero.jpg';
$img1 = $uploads . '/2022/07/Design-1.jpg';
$img2 = $uploads . '/2022/07/Design-2.jpg';
$img3 = $uploads . '/2022/07/Design-3.jpg';

$courtyard_hero = $uploads . '/2022/07/spaces-main-the-courtyard.jpg';
$banyan_hero = $uploads . '/2022/07/spaces-main-the-banyan-tree.jpg';
$bombay = $uploads . '/2022/07/spaces-main-native-bombay.jpg';

$ss_url = get_home_url(null, "/spaces/the-substation/");
$cat_url = get_home_url(null, "/spaces/the-cathedral/");
$if_url = get_home_url(null, "/spaces/the-ice-factory/");
$ideal_url = get_home_url(null, "/spaces/does-ifbe-work-for-your-event/");

$plan = $uploads . '/2022/06/plan-cropped.png';
?>

<section class="hero full-width title-container flex-col dark">
    <div class="background"><img src="<?php echo $hero; ?>" alt=""></div>
    <h3 class="subtitle-top">architecture</h3>
    <h1 class="heading">IFBE is an outstanding example of adaptive reuse. This 145-year-old ice factory was repurposed into a contemporary space for architecture, design and the arts.</h1>
</section>

<section class="one grid">

    <img src="<?php echo $img1; ?>" alt="">

    <div class="content">
        <p>The Bombay Ice Manufacturing Co. (later renamed Ambico Ice Factory) was established in 1880 in a bid to break the European monopoly and provide Mumbai (then Bombay) with a regular supply of ice.
        </p>
        <p>The factory, believed to be the first steam-powered ice production factory, enjoyed a pivotal location in the heritage precinct of Ballard Estate bounded by Cochin and Calicut Streets. The area’s ship and rail connectivity made the factory an intrinsic part of trade in the region.</p>
    </div>
    <div class="bg-accent">
    </div>
    <div class="content footer">
        “My first encounter with the Ice Factory is vividly etched in my memory! Sunlight streaming in from the north-light Burma teak trusses and piercing the blocks of ice being moved by the gantry and giving way to a courtyard shaded by the canopy of a huge banyan tree... a fertile environment for contemplation and transformation.”
        <p class="signature">-Kamal Malik, Founder - IFBE and Malik Architecture, a 45-year-old architectural practice</p>
    </div>

</section>

<section class="two flex-col">

    <img src="<?php echo $img2; ?>" alt="">

    <div class="content flex flex-sb">
        Restoration & Adaptation: Like in any archaeological site, each day led to both, discovery and new challenges. Dedicated teams of architects, designers and structural engineers addressed the complexity of resurrecting a hugely deteriorated structure, comprising primarily of a 150-year-old wooden structure, while simultaneously developing a contemporary syntax for new additions. The extrusion of the Substation's old wood gable roof into a steel structure, the extension of the wooden North-light trusses of the Ice Factory and their adaptation in steel along with the final transformation into East lights exemplify the interweaving of an old and modern design matrix.
    </div>

</section>

<section class="three flex">
    <img src="<?php echo $img3; ?>" alt="">

    <div class="content flex-col">
        <div class="desc">Layers of plaster were stripped off the original brickwork, revealing a series of hidden doorways and openings. Components of the original Ice Factory - namely the cooling coils - were retrieved and embedded into the ground, quite like precious artefacts in a museum.</div>

        <h3 class="heading">IFBE is a humble attempt to plant the seed of mindful regeneration in a city starved of such spaces.</h3>
    </div>

</section>