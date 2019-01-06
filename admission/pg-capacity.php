<?php
    require("../common/common.php");
    require("../common/admission.php");
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
            <main>
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Intake Capacity - Post Graduate</span>
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
                            <p>M.Tech programme is offered in the institute by 7(seven) academic departments in 20 (twenty) specializations. Department wise specializations and number of seats available in each specialization for direct admission through CCMT, admission under DASA scheme and seats under sponsored category have been given below:</p>
                            <div class="text-center">
                                <h4><span class="b-b-theme-center">Master of Technology (M. Tech) Programmes</span></h4>
                                <table class="d-inline-block">
                                    <tbody>
                                        <tr>
                                            <td>Department Name</td>
                                            <td>Programme Name</td>
                                            <td>Seat for CCMT</td>
                                            <td>Sponsored Seat</td>
                                            <td>DASA</td>
                                            <td>Total</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="7">Civil Engineering</td>
                                            <td>Geotechnical Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Structural  Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Environmental  Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Transportation   Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Water Resources  Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Seismic Science &amp; Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Hydro Informatics Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Mechanical Engineering</td>
                                            <td>Geotechnical Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Water Resources  Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Seismic Science &amp; Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Hydro Informatics Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">Electrical Engineering</td>
                                            <td>Geotechnical Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Water Resources  Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Seismic Science &amp; Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Hydro Informatics Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Electronics &amp; Communication Engineering</td>
                                            <td>VLSI  Design</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Communication Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Computer Science &amp; Engineering</td>
                                            <td>Computer Science &amp; Engineering</td>
                                            <td>15</td>
                                            <td>03</td>
                                            <td>03</td>
                                            <td>21</td>
                                        </tr>
                                        <tr class="text-bold">
                                            <td colspan="2">Total</td>
                                            <td>252</td>
                                            <td>60</td>
                                            <td>54</td>
                                            <td>366</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <br /><br />

                            <div class="text-left">
                                <h2><span class="b-b-theme">Reservation of seats</span></h2>
                                <p>For reservation of seats for Scheduled Caste, Scheduled Tribe, and physically handicapped candidates and Other Backward Community the Central Government norms are followed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-admissions, .nav-left-PG, .nav-left-PG-intake").addClass("active");
                $("#collapsePG, #collapsePGMobile").addClass("show");
            });
        </script>
    </body>
</html>
