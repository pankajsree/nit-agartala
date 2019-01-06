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
                        <span class="b-b-theme-thick">Administration</span>
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
                            <p align="justify">Recognizing  the growing need of quality technical education in the North Eastern Region, the Union Cabinet approved the proposal of  the State Government for the conversion of  the erstwhile Tripura Engineering College to National Institute of Technology, to a fully Central Government funded Institution with Deemed to be University status on 23rd February, 2006. The Ministry of Human Resource Development, Government of India issued the official notification No. F. 26-20/2004/TS-III dated 10.03.2006 that marked the emergence of National Institute of Technology Agartala with effect from 01.04.2006.<br /><br />

                            National Institute of Technology Agartala (NITA) is an autonomous statutory organization set up by NIT ACT.  NIT Act and first Statutes framed under the ACT have provision for 4 Authorities. Board of Governors (BOG) is the highest authority, responsible for overall administration and control of the Institution. Under the supervision of BOG, three (3) other authorities work in different areas for proper supervision, maintenance and implementation of decisions and policies of the Institution. The other authorities are (1) Finance Committee, (2) Building & Works Committee and (3) Senate. The functions, responsibilities, powers of BOG, Finance Committee, Building & Works Committee and Senate are provided in the NIT ACT and Statutes.</p>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-administration, .nav-left-administration").addClass("active");
            });
        </script>
    </body>
</html>
