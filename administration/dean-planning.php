<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dean Planning &amp; Development - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Dean - Planning & Devolopment</span>
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
                            <ul class="no-bullet no-mar no-pad space-li-1">
                                <li>
                                    <span class="text-bold">Dr. Ajay Chakraborty</span><br />
                                    Dean (Planning & Development)<br />
                                    Contact: 0381 2348503 , 0381 2348005(O) <br />
                                    Fax: 0381 2546 360
                                </li>
                                <li>
                                    <span class="text-bold">Dr. Sima Ghosh</span><br />
                                    Associate Dean (P & D)
                                </li>
                                <li>
                                    <span class="text-bold">Dr. Sanjoy Paul</span><br />Associate Dean (P & D)
                                </li>
                                <li>
                                    <span class="text-bold">Dr. Subhadeep Bhattacharjee</span><br />Associate Dean (P & D)
                                </li>
                                <li>
                                    <span class="text-bold">Mr. Jayanta Paul</span><br />Associate Dean (P & D) 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-administration, .nav-left-planning, .nav-left-dean").addClass("active");
                $("#collapseDean, #collapseDeanMobile").addClass("show");
            });
        </script>
    </body>
</html>
