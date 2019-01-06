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
                        <span class="b-b-theme-thick">Intake Capacity - Under Graduate</span>
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
                            <p>National Institute of Technology Agartala runs four-year Degree Courses in the following disciplines at undergraduate level. The intake capacity against each branch of engineering at B.Tech level along with dual degree programme in science & engineering has been shown below:-</p>
                            <div class="text-center">
                                <h4><span class="b-b-theme-center">Bachelor of Technology (B. Tech)</span></h4>
                                <table class="d-inline-block">
                                    <tbody>
                                        <tr>
                                            <td>Sl. No.</td>
                                            <td>Course</td>
                                            <td>Intake Capacity</td>
                                            <td>Intake capacity under DASA</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Civil Engineering</td>
                                            <td>184</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mechanical Engineering</td>
                                            <td>90</td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Electrical Engineering</td>
                                            <td>90</td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Civil Engineering</td>
                                            <td>184</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mechanical Engineering</td>
                                            <td>90</td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Electrical Engineering</td>
                                            <td>90</td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Civil Engineering</td>
                                            <td>184</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mechanical Engineering</td>
                                            <td>90</td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Electrical Engineering</td>
                                            <td>90</td>
                                            <td>14</td>
                                        </tr>
                                        <tr class="text-bold">
                                            <td colspan="2">Total</td>
                                            <td>787</td>
                                            <td>121</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <br /><br />

                                <h4><span class="b-b-theme-center">BS-MS (Dual degree programme in science)</span></h4>
                                <table class="d-inline-block">
                                    <tbody>
                                        <tr>
                                            <td>Sl. No.</td>
                                            <td>Course</td>
                                            <td>Intake Capacity</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Physics</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Chemistry</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>20</td>
                                        </tr>
                                        <tr class="text-bold">
                                            <td colspan="2">Total</td>
                                            <td>60</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <br /><br />

                                <h4><span class="b-b-theme-center">BT-MT (Dual degree programme in Engineering)</span></h4>
                                <table class="d-inline-block">
                                    <tbody>
                                        <tr>
                                            <td>Sl. No.</td>
                                            <td>Course</td>
                                            <td>Intake Capacity</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Engineering Physics</td>
                                            <td>20</td>
                                        </tr>
                                        <tr class="text-bold">
                                            <td colspan="2">Total</td>
                                            <td>20</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br /><br />
                            </div>
                            <h2><span class="b-b-theme">Reservation of seats</span></h2>
                            <p>Out of the total 867 seats, 50% seats are reserved for the candidates of Tripura State. The students of All India category are admitted against the remaining seats selected on merit basis by Joint Seat Allocation Authority (JoSAA). Against seats under home state quota 31% are reserved for ST candidates and 17% for SC candidates.</p>
                            <p>For seats under Central pool the reservation policy of Government of India is followed where 15% seats are reserved for Scheduled Caste, 7.5% for Scheduled Tribe and 27% for OBC candidates apart from reservation for physically handicapped candidates.</p>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-admissions, .nav-left-UG, .nav-left-UG-intake").addClass("active");
                $("#collapseUG, #collapseUGMobile").addClass("show");
            });
        </script>
    </body>
</html>
