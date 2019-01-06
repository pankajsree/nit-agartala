<?php
    require("../common/common.php");
    require("../common/campus.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>About - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/campus.css" />
    </head>
    <body>
        <?= $nav ?>
            <main>
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Communication</span>
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
                            <p>The Institute runs private bus services from Agartala to Institute and back along with CNG bus service which run regularly between NIT to Agartala city. Adequate number of buses, jeeps, and private vehicles are available on NH-44 for travelling to and from Agartala. It is mandatory for all the day-scholars (boys only) staying in Agartala and surrounding areas to avail private bus facility arranged by NIT, Agartala. However on special grounds some relaxation is given to some students on case to case basis depending on the merit of the cases.</p>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-campus, .sub-nav-communication").addClass("active");
            });
        </script>
    </body>
</html>
