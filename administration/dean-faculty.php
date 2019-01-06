<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dean Faculty - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Office of Dean (Faculty Welfare)</span>
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
                                    <span class="text-bold">Dr. Ardhendu Saha</span><br />
                                    Dean (F.W.)<br />
                                    Contact: 0381 2348505 (O)
                                </li>
                                <li>
                                    <span class="text-bold">Dr. Paritosh Bhattacharya</span><br />
                                    Associate Dean (F.W.) <br />
                                    Contact: 0381 2348505 (O)
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
                $("#nav-administration, .nav-left-dean, .nav-left-faculty").addClass("active");
                $("#collapseDean, #collapseDeanMobile").addClass("show");
            });
        </script>
    </body>
</html>
