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
                        <span class="b-b-theme-thick">Historical Background</span>
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
                            <p>National Institute of Technology Agartala, a centrally funded Institution is setup to impart quality technical education into various levels of higher learning. It may be mentioned here that the 23rd February 2006 is a Red Letter Day in the history of Tripura Engineering College as well as for the State of Tripura as the Union Cabinet approved the proposal of State Government for conversion of Tripura Engineering College to National Institute of Technology, a fully Central Government funded Institution with Deemed to be University status and would also to become a National Centre of Excellence.</p>
                            <p>The Institute (i.e. erstwhile Tripura Engineering College) was established in 1965 with the three traditional branches of Civil, Electrical and Mechanical Engineering. It was initially affiliated to Calcutta University and had the same curriculum structure and examination system at par with Bengal Engineering College (presently Bengal Engineering and Science University, Shibpur). After the establishment of Tripura University, the Institute was affiliated to the new Tripura University. The Institute is approved by All India Council for Technical Education (AICTE). Computer Science & Engineering degree course has been started in 1999-2000 session as well as three new courses viz. Electrical & Electronics, Production and Transportation Engineering have been introduced in this Institute during 2005-2006 sessions to cater the needs of the technical manpower in this region.</p>
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
                $("#nav-about, .sub-nav-history").addClass("active");
            });
        </script>
    </body>
</html>
