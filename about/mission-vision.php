<?php
    require("../common/common.php");
    require("../common/about.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>About - NIT Agartala</title>
        <meta charset="utf-8">
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/about.css" />
    </head>
    <body>
        <?= $nav ?>
            <main>
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Mission &amp; Vision</span>
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
                            <h2><span class="b-b-theme">Our Vision</span></h2>
                            <p>Institute is committed to develop highly competent young Engineers, Scientists, and Management Professionals to cater to the ever increasing techno-managerial needs of national and international standards fulfilling professional ethics and societal commitment.</p>

                            <h2><span class="b-b-theme">Our Mission</span></h2>
                            <ul>
                                <li>To produce techno-managerial human resource in line with global need offering state-of-the-art facility, research and training in engineering and allied disciplines.</li>
                                <li>To enhance the effectiveness of technical education with innovative system and devising a mechanism to facilitate application of research findings to solve real problems of industries/academics.</li>
                                <li>To nurture and sustain an academic ambience conducive to the development of intellectually capable and committed professionals so that an effective growth is obtained for the economic development of the region and the nation as a whole.</li>
                                <li>To establish as the corridor of higher education for the South East Asian countries.</li>
                            </ul>

                            <h2><span class="b-b-theme">Our Objective</span></h2>
                            <p>In order to response effectively to the needs of the society, the Institute aims at -</p>
                            <ul>
                                <li>To impart quality Education.</li>
                                <li>To develop professional attitude.</li>
                                <li>To make good human being possessing professional ethics.</li>
                                <li>To make responsible citizens with social commitment.</li>
                                <li>To develop entrepreneurial spirit among young professionals.</li>
                                <li>To foster Research and Development attitude.</li>
                                <li>To ensure all round development.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/about.js"></script>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-about, .sub-nav-mission-vision").addClass("active");
            });
        </script>
    </body>
</html>
