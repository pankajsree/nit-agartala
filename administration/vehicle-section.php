<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>About - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Vehicle Section</span>
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
                                <li class=" pad-btm-2">
                                    <span class="text-bold">Dr.Madhujit Deb</span><br />
                                    Chairman Vehicle Committee<br />
                                    Mobile: 08413011560<br />
                                    Email: madhujit_deb@rediffmail.com
                                </li>
                            </ul>
                            <div class="text-bold pad-btm-1">List of Driving personals/Drivers:</div>
                            <ul class="space-li-0-5">
                                <li>
                                    Mr. Babul Chandra Deb<br />
                                    Contact No: +91-9862632734
                                </li>
                                <li>
                                    Mr. Dilip Ghosh<br />
                                    Contact No: +91-8256935604
                                </li>
                                <li>
                                    Mr. Dulu Miah<br />
                                    Contact No: +91-9863383218
                                </li>
                                <li>
                                    Mr. Gopal Chandra Das<br />
                                    Contact No: +91-9612462098
                                </li>
                                <li>
                                    Mr. Niranjan Ghosh<br />
                                    Contact No: +91-9862700352
                                </li>
                                <li>
                                    Mr. Rajesh Debbarma<br />
                                    Contact No: +91-9612220747
                                </li>
                                <li>
                                    Mr. Bikash Debbarma<br />
                                    Contact No: +91-9862936031
                                </li>
                                <li>
                                    Mr. Nirmal Debbarma<br />
                                    Contact No: +91-9862773381
                                </li>
                                <li>
                                    Mr. Bishnu Das<br />
                                    Contact No: +91-8730996393
                                </li>
                                <li>
                                    Mr. Sajal Saha<br />
                                    Contact No: +91-8119814110
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
                $("#nav-administration, .nav-left-vehicle, .nav-left-registrar").addClass("active");
                $("#collapseRegistrar, #collapseRegistrarMobile").addClass("show");
            });
        </script>
    </body>
</html>
