<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SENATE Committee - NIT Agartala</title>
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">SENATE Committee</span>
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
				    & Chairman SENATE, NIT Agartala<br />
                                    Jirania - 799046, Tripura
                                </li>
				<li>
                    <span class="text-bold">Dr. Aloysius Henry Sequeira</span><br />
                    Department of Humanities, Social Science & Management<br />
				    National Institute of Technology, Karnataka<br />
				    Surathkal, P.O- Srinivasanagar Mangalore – 575025<br />
                    & Member, SENATE of NIT Agartala
                    <!-- Mobile: 9448152725<br />
                    Phone : 0824 (R) 2474225 (O) 2474000 (Extn. 3225)<br />
                    E-mail : aloysiushs@gmail.com / ahs@nitk.ac.in -->
				</li>
				<li>
                                    <span class="text-bold">Prof. Kehar Singh</span><br />
                                    Prof. Dept. of Physics<br />
				    IIT Delhi<br />
                                    & Member, SENATE of NIT Agartala
				</li>
                                <li>
                                    <span class="text-bold"> Prof. Manoj Mitra</span><br />
                                    Prof. of Metallurgy & Dean of Engineering<br />
				    Jadavpur University<br />
                                    & Member, SENATE of NIT Agartala
				</li>
				<li>
                                   <span class="text-bold">Prof. Subhas Chandra Saha</span><br />
                                    Professor, Civil Engineering Department<br />
                                    NIT Agartala, Jirania – 799046, Tripura<br />
				    & Member, SENATE of NIT Agartala
				</li>
				<li>
                                    <span class="text-bold">Prof. Umesh Mishra</span><br />
                                    Professor, Civil Engineering Department<br />
                                    NIT Agartala, Jirania – 799046, Tripura<br />
				    & Member, SENATE of NIT Agartala
				</li>
                                <li>
                                    <span class="text-bold">Dr. R. P. Sharma</span><br />
                                    Professor, Civil Engineering Department<br />
                                    NIT Agartala, Jirania – 799046, Tripura<br />
				    & Member, SENATE of NIT Agartala
				</li>
				<li>
                                    <span class="text-bold">Dr. Govind Bhargava</span><br />
                                    Registrar & Member Secretary<br />
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
                $("#nav-administration, .nav-left-senate, .nav-left-committee").addClass("active");
                $("#collapseCommittee, #collapseCommitteeMobile").addClass("show");
            });
        </script>
    </body>
</html>
