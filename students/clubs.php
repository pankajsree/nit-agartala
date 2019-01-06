<?php
    require("../common/common.php");
    require("../common/students.php");
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
            <main id="students-page">
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Student Clubs</span>
                        <button id="sub-hamburger-container" class=" d-inline-block d-md-none" data-toggle="collapse" data-target="#sub-mobile-menu">
                            <div id="sub-ham-one" class="sub-ham"></div>
                            <div id="sub-ham-two" class="sub-ham"></div>
                            <div id="sub-ham-three" class="sub-ham"></div>
                        </button>
                    </h1>
                    <?= $mobile_menu ?>
                    <div class="row">
                        <?= $menu_left ?>
                        <div class="col-12 col-md-9 underline-links">
                            <p>Following are the student clubs in NIT Agartala :-</p>
                            <p>
                                <a href="http://www.anarc.in/index.php" target="_blank">&quot;A-NARC&quot;, Robotics club of NIT Agartala</a><br />
                                <a href="http://www.thefifthdimension.in/" target="_blank">&quot;The Fifth Dimension&quot;, e-magazine of NIT Agartala</a><br />
                                <a href="#" target="_blank">We Can</a><br />
                                <a href="http://www.asimov.co.in" target="_blank">NIT Agartala Robotics Club</a><br />
                                <a href="http://nitsparrows.com/" target="_blank">Link of NIT Sparrows</a>
                            </p>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script>
            $(document).ready(function() {
                $("#nav-students, .sub-nav-clubs").addClass("active");
            });
        </script>
    </body>
</html>
