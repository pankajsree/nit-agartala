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
        <link rel="stylesheet" href="../assets/css/students.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="students-page">
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Students</span>
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
                            <p>The word student is etymologically derived through Middle English from the Latin second-type conjugation verb studere, meaning &quot;to direct one&apos;s zeal at&quot;; hence a student could be described as &quot;one who directs zeal at a subject&quot;. In its widest use, student is used for anyone who is learning.</p>
                            <p>Even being in the remote Norh Eastern part of India, the students of NIT Agartala are not lagging behind in any of the activities.The students take active part in all sorts of activities held in cultural fests, in or outside the campus. The history of the college speaks of the students of NIT Agartala, their achievements in various events relating to science and technology and thier success in competitions being organized in various elite institues from various parts of thee country. The senior students feel their responsibility to help the junior students. It is very much true that the students and the faculty members help an institution to reach their persuing goal. This environment can be found in reality in this college. Needless to say, the effective and high quality feedback has been identified as a key element of quality teaching, and such arguments are well supported by the findings of meta-analysed studies that faculty members have coupled from their experiences and expertises with research on teams to create a number of resources that hopefully will help faculty members increase the effectiveness of students in their courses.</p>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script>
            $(document).ready(function() {
                $("#nav-students, .sub-nav-home").addClass("active");
            });
        </script>
    </body>
</html>
