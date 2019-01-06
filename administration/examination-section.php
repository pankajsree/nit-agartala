<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Examination Section - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Examination Section</span>
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
                            <ul class="b-b-theme no-bullet no-mar no-pad space-li-1">
                                <li>
                                    <span class="text-bold">Dr. Mrinmoy Majumder</span><br />
                                    Associate Dean(Exam)<br />
                                    Contact: +91 9612946791, +91 9830887194
                                </li>
                                <li>
                                    <span class="text-bold">Dr. Biswajit Saha</span><br />
                                    Faculty<br />
                                    Contact: +91 8014088540 (Mobile)
                                </li>
                                <li>
                                    <span class="text-bold">Dr. Biswanath Bhunia</span><br />
                                    Faculty<br />
                                    Contact: +91 908904715 (Mobile)
                                </li>
                                <li>
                                    <span class="text-bold">Dr.Abhijit Mondal</span><br />
                                    Faculty<br />
                                    Contact: +91 9612625248 (Mobile)
                                </li>
                                <li>
                                    <span class="text-bold">Mr. Sukhdeb Chakraborty</span><br />
                                    Exam Superintendent<br />
                                    Contact: +91 9436501267 (Mobile)
                                </li>
                                <li>
                                    <span class="text-bold">Mrs. Payel Sarkar</span><br />
                                    Senior Assistant<br />
                                    Contact: +91 8974055168 (Mobile)
                                </li>
                                <li>
                                    <span class="text-bold">Mr. Sourav Mahajan</span><br />
                                    Junior Assistant<br />
                                    Contact: +91 8794703303 (Mobile)
                                </li>
                            </ul>
                            <br />
                            Email Address : <span class="text-bold">exam.nitagartala@gmail.com</span>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-administration, .nav-left-exam, .nav-left-academic-dean").addClass("active");
                $("#collapseAcademic, #collapseAcademicMobile").addClass("show");
            });
        </script>
    </body>
</html>
