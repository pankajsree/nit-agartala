<?php
    require("../common/common.php");
    require("../common/ccd.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>About - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
    </head>
    <body>
        <?= $nav ?>
            <main>
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Centre for Career Development (CCD)</span>
                        <button id="sub-hamburger-container" class=" d-inline-block d-md-none" data-toggle="collapse" data-target="#sub-mobile-menu">
                            <div id="sub-ham-one" class="sub-ham"></div>
                            <div id="sub-ham-two" class="sub-ham"></div>
                            <div id="sub-ham-three" class="sub-ham"></div>
                        </button>
                    </h1>
                    <?= $mobile_menu ?>
                    <div class="row">
                        <?= $menu_left ?>
                        <div class="col-12 col-md-9">
                            <p>Innovation and challenge are words synonymous with engineering. It caters to bright and dedicated students, a broad spectrum of opportunities and interesting career prospects. But it is important that they are facilitated with indispensable life skills and careful guidance so that they are more prepared to navigate through the tides of life with confidence. Here comes the necessity of a Career Development support provided by an Institute to assist in unleashing the potential of every student, exposing them to requirements of the highly competitive environment today and provide the platform to extract, accumulate and assimilate the strategies and skills required to tackle them.</p>
                            <p> NIT Agartala has therefore taken an initiative to renovate its Training and Placement section into <span class="text-bold">&apos;Centre for Career Development (CCD)&apos;</span> to assist its students in their career exploration and a successful job search. The centre will provide career development programs like Soft Skills training, Foreign Language Certification, Career Counselling by professionals, industry-oriented workshops and lectures, leadership talks, management development programmes and facilitate industry-sponsored research besides providing placement and internship support for their  better and successful career in engineering and management  profession. Keeping in view of its mission and vision, the CCD will provide regular guidance to the students regarding their career ambitions.  The aim and objective of the centre will be to motivate students to adopt career oriented mindset rather than job oriented.</p>
                            <p>We believe that Practical Training or Internship is an integral portion of a student’s overall development and we encourage students to take up projects in industry and academia so that they can be better prepared for their future careers. CCD facilitates this by providing a convenient interface for the companies to interact with students they will be hiring at a later stage, something that can only be mutually beneficial for both the student mass and for industry and corporate sectors. We believe such programs could inspire and motivate young talents towards core engineering sectors in order to meet the demands of the corporate world, requirement for national progress, and to become productive citizens.</p>
                            <p>We always invite and welcome different industries, organizations and experts from various engineering and management sectors to visit our campus for interaction with the students and facilitate them with a sound platform to interact with our young talented and dynamic students to meet their recruitment needs. With the diverse skill acquired by the students and the extensive theoretical knowledge they have gained from their curriculum will definitely make them an asset to any organisation. To make available to our industry and company visitors, unable to visit the campus, the CCD at NIT Agartala provides them with adequate infrastructure for remote interaction through Skype and video conferencing. By gathering consistent feedback from corporate visitors, CCD draws the attention of the authority and makes students aware regarding themselves to set their career path towards excellence. </p>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-ccd, .sub-nav-home").addClass("active");
            });
        </script>
    </body>
</html>
