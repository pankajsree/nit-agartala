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
                        <span class="b-b-theme-thick">Scholarships</span>
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
                            <p>Scholarship are awarded to the students at undergraduate level of this institute based on the guidelines of State Government and Central Government subject to the fulfilment of academic and other criteria. The scholarship that are available for the B.Tech students of this Institute showing category, income and duration of stipend are given below:-</p>
                            <div class="pad-btm-5 text-center">
                                <table class="d-inline-block">
                                    <tbody>
                                        <tr>
                                            <td>Sl. No.</td>
                                            <td>Name of the Scholarship Scheme</td>
                                            <td>Eligibility Criteria</td>
                                            <td>Procedure to apply for the Scholarship</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Post Matric Scholarship (SC)</td>
                                            <td class="text-left">
                                                <ol>
                                                    <li>Total annual family income from all sources under the Scheme is Rs. 2.5 lakh</li>
                                                    <li>
                                                        No Mark Bar<br />
                                                         (SC students are eligible to apply for the same after Advt./announcement by their respective State Govt. in the leading newspapers of the State and through their respective Websites and other media outfits. (criteria-As per state norms)<br />
                                                         For detailed scholarship scheme and eligibility criteria for PMS-SC, all the students are requested to visit the following link: <a href="http://socialjustice.nic.in/pmsscd.php">http://socialjustice.nic.in/pmsscd.php</a>
                                                    </li>
                                                </ol>
                                            </td>
                                            <td>Through National Scholarship Portal System</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Post Matric Scholarship (OBC)</td>
                                            <td class="text-left">
                                                <ol>
                                                    <li>
                                                        Total annual family income from all sources under the Scheme is Rs. 1 lakh
                                                    </li>
                                                    <li>
                                                        No Mark Bar<br />
                                                         (OBC students are eligible to apply for the same after Advt./announcement by their state govt. in the leading newspapers of the state and through their respective websites and other media outfits.(criteria - As per state norms)<br />
                                                         For detailed scholarship scheme and eligibility criteria for PMS-OBC, all the students are requested to visit the following link: <a href="http://socialjustice.nic.in/postmatric.php">http://socialjustice.nic.in/postmatric.php</a>
                                                    </li>
                                                </ol>
                                            </td>
                                            <td>Through National Scholarship Portal System</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Post Matric Scholarship (SC)</td>
                                            <td class="text-left">
                                                <ol>
                                                    <li>Total annual family income from all sources under the Scheme is Rs. 2.5 lakh</li>
                                                    <li>
                                                        No Mark Bar<br />
                                                         (SC students are eligible to apply for the same after Advt./announcement by their respective State Govt. in the leading newspapers of the State and through their respective Websites and other media outfits. (criteria-As per state norms)<br />
                                                         For detailed scholarship scheme and eligibility criteria for PMS-SC, all the students are requested to visit the following link: <a href="http://socialjustice.nic.in/pmsscd.php">http://socialjustice.nic.in/pmsscd.php</a>
                                                    </li>
                                                </ol>
                                            </td>
                                            <td>Through National Scholarship Portal System</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Post Matric Scholarship (OBC)</td>
                                            <td class="text-left">
                                                <ol>
                                                    <li>
                                                        Total annual family income from all sources under the Scheme is Rs. 1 lakh
                                                    </li>
                                                    <li>
                                                        No Mark Bar<br />
                                                         (OBC students are eligible to apply for the same after Advt./announcement by their state govt. in the leading newspapers of the state and through their respective websites and other media outfits.(criteria - As per state norms)<br />
                                                         For detailed scholarship scheme and eligibility criteria for PMS-OBC, all the students are requested to visit the following link: <a href="http://socialjustice.nic.in/postmatric.php">http://socialjustice.nic.in/postmatric.php</a>
                                                    </li>
                                                </ol>
                                            </td>
                                            <td>Through National Scholarship Portal System</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold" colspan="4">
                                                NOTE:  It is to be noted that a student can avail only one scholarship at a time from any one source
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2 class="pad-btm-2"><span class="b-b-theme">Award / Accolade</span></h2>
                            <ul>
                                <li class="pad-btm-2">The Gold Medal awarded to the student from both the undergraduate and postgraduate studies who have been secured highest marks among all the branches.</li>
                                <li class="pad-btm-2">The Gold Plated Silver Medal awarded to the branch topper only.</li>
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
                $("#nav-admissions, .nav-left-UG, .nav-left-UG-scholarships").addClass("active");
                $("#collapseUG, #collapseUGMobile").addClass("show");
            });
        </script>
    </body>
</html>
