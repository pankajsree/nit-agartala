<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Board of Governors</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Board of Governors</span>
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
                                    <span class="text-bold">Prof. Deepak B. Phatak</span><br />
                                    Chairperson, BoG, NIT Agartala<br />
                                    Professor, Computer Science &amp; Engineering<br />
                                    Indian Institute of Technology Bombay<br />
                                    Kanwal Rekhi Building<br />
                                    Powai, Mumbai – 400 076, India
                                </li>
                                <li>
                                    <span class="text-bold">Prof. H. K. Sharma</span><br />
                                    Director, NIT Agartala<br />
                                    Jirania - 799046, Tripura
                                </li>
                                <li>
                                    <span class="text-bold">Special Secretary / Addl. Secretary / Joint Secretary (Technical Education)</span><br />
                                    Department of Higher Education<br />
                                    Ministry of Human Resource Development<br />
                                    Govt. of India<br />
                                    Shastri Bhavan, New Delhi -110001
                                </li>
				                <li>
                                    <span class="text-bold">Financial Advisor</span><br />
                                    Integrated Finance Bureau, Department of Higher Education<br />
                                    Ministry of Human Resource Development<br />
                                    Govt. of India<br />
                                    Shastri Bhavan, New Delhi -110001
                                </li>
				                <li>
                                    <span class="text-bold">Secretary to the Govt. of Tripura</span><br />
                                    Department of Higher Education<br />
                                    New Secretariat Complex<br />
                                    Kunjaban, Agartala - 799 006, Tripura
                                </li>
				                <li>
                                    <span class="text-bold">Prof. A. Srinivasan</span><br />
                                    Professor, Department of Physics<br />
                                    Indian Institute of Technology Guwahati<br />
                                    Guwahati – 781039, Assam
                                </li>
				                <li>
                                    <span class="text-bold">Prof. (Mrs) Uma Bhattacharya</span><br />
                                    Professor, Department of Computer Science and Technology<br />
                                    Indian Institute of Engineering Science and Technology, Shibpur<br />
				(Formerly Bengal Engineering and Science University)<br />
                                    Botanic Garden, Howrah, West Bengal, India – 711 103
                                </li>
				                <li>
                                    <span class="text-bold">Shri Alok Roy Choudhury</span><br />
                                    Additional Chief Engineer<br />
                                    PWD, Govt. of Tripura, New Secretariat Complex<br />
				    Kunjaban, Agartala – 799006, Tripura
                                </li>
				                <li>
                                    <span class="text-bold">Dr. R. P. Sharma</span><br />
                                    Professor, Civil Engineering Department<br />
                                    NIT Agartala, Jirania – 799046, Tripura
				                </li>
				                <li>
                                    <span class="text-bold">Dr. John Debbarma</span><br />
                                    Assistant Professor, Mechanical Engineering Department<br />
                                    NIT Agartala, Jirania – 799046, Tripura
				                </li>
				                <li>
                                    <span class="text-bold">Dr. Govind Bhargava</span><br />
                                    Registrar & Secretary<br />
                                    NIT Agartala, Jirania – 799046, Tripura
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
                $("#nav-administration, .nav-left-bog").addClass("active");
            });
        </script>
    </body>
</html>
