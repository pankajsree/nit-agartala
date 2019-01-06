<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Buildings &amp; Works Committee - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Buildings & Works Committee</span>
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
                                    <span class="text-bold">Prof. H. K. Sharma</span><br />
                                    Director, NIT Agartala<br />
                                    &amp; Chairman, BWC, NIT Agartala<br />
                                    Jirania - 799046, Tripura
                                </li>
                                <li>
                                    <span class="text-bold">Director (NITs)</span><br />
                                    Ministry of Human Resource Development<br />
                                    Department of Higher Education<br />
                                    Govt. of India<br />
                                    Shastri Bhawan, New Delhi – 110001
                                </li>
                                <li>
                                    <span class="text-bold">Shri Asit Bhaumik</span><br />
                                    Additional Chief Engineer<br />
                                    PWD, Govt. of Tripura,<br />
                                    New Secretariat Complex,<br />
                                    Agartala, West Tripura – 799 006
                                </li>
				                <li>
                                    <span class="text-bold">Shri Kajal Banik</span><br />
                                    Superintending Engineer (Electrical)<br />
                                    Public Works Department, Govt. of Tripura<br />
                                    Gurkhabasti, Agartala, West Tripura – 799 006
                                </li>
				                <li>
                                    <span class="text-bold">Dean (Planning & Development)</span><br />
                                    NIT Agartala, Jirania - 799046, Tripura
                                </li>
				                <li>
                                    <span class="text-bold">Dr. R. P. Sharma</span><br />
                                    Professor, Civil Engineering Department<br />
                                    NIT Agartala, Jirania - 799046,<br />
                                    Tripura
                                </li>
				                <li>
                                    <span class="text-bold">Dr. Govind Bhargava</span><br />
                                    Registrar & Member Secretary<br />
                                    NIT Agartala, Jirania - 799046, Tripura
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
                $("#nav-administration, .nav-left-committee, .nav-left-buildings").addClass("active");
                $("#collapseCommittee, #collapseCommitteeMobile").addClass("show");
            });
        </script>
    </body>
</html>
