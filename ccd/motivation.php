<?php
    require("../common/common.php");
    require("../common/ccd.php");
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
                        <span class="b-b-theme-thick">Motivation</span>
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
                            <p>With its strong infrastructure and resources, support and guidance of the Chairman BOG and Director of NIT Agartala and above all, the able & dedicated staff of CCD , I strongly believe that Centre for Career Development (CCD) at NIT Agartala will always make the recruitment drive a comfortable process for recruiters  and an enriching experience for the students.</p>
                            <ul>
                                <li>Providing placement assistance</li>
                                <li>Ensuring placement drive</li>
                                <li>Providing National and International internship / summer training opportunities</li>
                                <li>Organising entrepreneurship development programs </li>
                                <li>Organising training programs in association with the corporate and industries</li>
                                <li>Arranging special lectures by executives from Industries and corporate to cater to different geographies and Industry Meets</li>
                                <li>Conducting value-added programs such as the personality development and communication skills /Foreign Languages</li>
                                <li>Conducting awareness programs for the students in the form of workshops, seminars and conferences in association with IITs/NITs and CSIR research labs to pursue higher studies and engage in R &D projects</li>
                            </ul>
                            <div class="text-center">
                                <table class="d-inline-block">
                                    <tbody>
                                        <tr>
                                            <td>Sl. No.</td>
                                            <td>Company</td>
                                            <td>Total Students Recruited</td>
                                            <td>CTC (LPA)*</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Yodlee Software</td>
                                            <td>2</td>
                                            <td>8.75</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Oracle GBU</td>
                                            <td>7</td>
                                            <td>9</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Yodlee Software</td>
                                            <td>2</td>
                                            <td>8.75</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Oracle GBU</td>
                                            <td>7</td>
                                            <td>9</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Yodlee Software</td>
                                            <td>2</td>
                                            <td>8.75</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Oracle GBU</td>
                                            <td>7</td>
                                            <td>9</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br />
                                <span class="text-bold">*</span> Cost to Company CTC (Lakh Per Annum)
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
                $("#nav-ccd, .sub-nav-motivation").addClass("active");
            });
        </script>
    </body>
</html>
