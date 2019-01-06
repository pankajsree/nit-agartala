<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Stipend &amp; Scholarship - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Stipend &amp; Scholarship Section</span>
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
                                    <span class="text-bold">Mr. Tanmoy Ghoshal</span><br />Assistant Registrar (Academic) & In-charge Stipend and Scholarship Section<br />
                                    Contact: 0381-2348537 (Office), +91 8414886084 (Mobile)
                                </li>
                                <li>
                                    <span class="text-bold">Mr. Dhyanajoyti Kar</span><br />
                                    Accountant, Scholarship & Stipend Section<br />
                                    Contact: 9436136212<br />
                                    E-mail: dhyanajyotikar@gmail.com
                                </li>
                                <li>
                                    <span class="text-bold">Mr. Tarun Debbarma</span><br />
                                    Sr. Assistant, Scholarship & Stipend Section<br />
                                    Contact: 9436136212<br />
                                    E-mail: tarundebbarmag@gmail.com
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
                $("#nav-administration, .nav-left-stipend, .nav-left-academic-dean").addClass("active");
                $("#collapseAcademic, #collapseAcademicMobile").addClass("show");
            });
        </script>
    </body>
</html>
