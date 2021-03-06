<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dean Academic - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Office of Dean (Academic)</span>
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
                                    <span class="text-bold">Dr. Ajoy Kumar Das</span><br />
                                    Dean (Academic)<br />
                                    Contact: 0381-2548537 (O), 0381-2548510 (O)<br />
                                    Fax: 0381-2548512, 0381-2546360
                                    Email:nitadeanacademic@gmail.com | dean.academic@nita.ac.in
                                </li>
                                <li>
                                    <span class="text-bold">Mr. Suman Deb</span><br />
                                    Associate Dean (Academic)<br />
                                    Contact: 0381-2548510 (Office)
                                </li>
                                <li>
                                    <span class="text-bold">Dr. Vidyut Dey</span><br />
                                    Associate Dean (Academic)<br />
                                    Contact: 0381-2548510 (Office)
                                </li>
                                <li>
                                    <span class="text-bold">Dr. Pritam Das</span><br />
                                    Associate Dean (Academic)<br />
                                    Contact: 0381-2548510 (Office)
                                </li>
                                <li>
                                    <span class="text-bold">Dr. Barnik Saha Roy</span><br />
                                    Deputy Registrar (Academic)<br />
                                    Contact: 0381-2548510 (Office)
                                </li>
                                <li>
                                    <span class="text-bold">Mr. Tanmoy Ghoshal</span><br />
                                    Assistant Registrar (Academic)<br />
                                    Contact: 0381-2348537 (Office)<br />
                                    Email-: nitaaracademic@gmail.com
                                </li>
                                <li>
                                    <span class="text-bold">Mr. Milan Ch. Sarkar</span><br />
                                    Assistant Registrar (Academic)<br />
                                    Contact: 0381-2348537 (Office), +91 9436138269 (Mobile)
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
                $("#nav-administration, .nav-left-academic-office, .nav-left-academic-dean").addClass("active");
                $("#collapseAcademic, #collapseAcademicMobile").addClass("show");
            });
        </script>
    </body>
</html>
