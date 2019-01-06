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
                        <span class="b-b-theme-thick">Financial Support</span>
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
                            <h2><span class="b-b-theme">M. Tech Students</span></h2>
                            <p>Students admitted to the M. Tech. Programme will be considered for assistantships, fellowships, tuition fee waiver, etc. subject to the following norms:</p>
                            <ul>
                                <li>A student must have a valid GATE score at the time of admission.</li>
                                <li>Students receiving assistantship from the Institute or from any other funding agencies will be required to perform academic duties assigned to them by the departments as per rules in force from time to time.</li>
                                <li>The continuation of the assistantship/fellowship will be subject to satisfactory performance of the duties assigned by the department and satisfactory progress in the post-graduate programme.</li>
                                <li>Financial assistance will normally be for a period of two years.</li>
                                <li>No financial assistance from the Institute will be available to part time students.  Project staff will get funding from projects as per rules but will not get any additional assistance from the Institute.</li>
                                <li>Only those students who are registered in a semester in the post-graduate programme shall be entitled to scholarships.  The students on leave longer than the specified period under the leave rules, and those who are not registered, are not entitled to scholarship.</li>
                                <li>The number and amount of assistantship will be fixed on availability of funds.</li>
                                <li>Institute Tuition fee waiver will be as per decisions of the authority from time to time.</li>
                            </ul>
                            <h2><span class="b-b-theme">PhD Scholars</span></h2>
                            <p>Students admitted to the Ph.D. Programme will be considered for assistantship according to the following norms:</p>
                            <ul>
                                <li>Full time Scholars with post graduate qualification in Engineering/ Technology at the time of admission are eligible for the award of MHRD scholarship as per MHRD and Institute guidelines.</li>
                                <li>Full time Scholars with post graduate qualification in Science/ Humanities and with valid GATE/NET score at the time of 	admission are eligible for the award of MHRD scholarship as per MHRD and Institute guidelines.</li>
                                <li>Full time Scholars with Bachelor’s degree in Engineering/Technology must have a valid GATE score at the time of admission for the award of MHRD scholarship as per MHRD and Institute guidelines.</li>
                                <li>Full time Scholars with post graduate degree in Science/ Humanities and without GATE/NET score at the time of admission are eligible for the award of Institute Scholarship as per Institute norms/ guidelines. Such scholars are referred to as Institute Scholars.</li>
                                <li>For Institute Scholarship the candidate has to qualify a Test/Examination organized by the concerned Department followed by recommendation of the Interview board and subsequent approval of the authority.</li>
                                <li>Students with fellowship tenable at the time of admission from CSIR/UGC/NBHM or any other organization recognized by the Institute will also be permitted.</li>
                                <li>Students receiving assistantship from the Institute or from any other funding agencies will be required to perform academic duties assigned to them by the departments as per rules in force from time to time.</li>
                                <li>
                                    Assistantship will initially be for a period of one year and it can be extended by one year at a time, to a maximum of total.
                                    <ul>
                                        <li>5 years for scholars with Post graduate qualification in Engineering/ Technology.</li>
                                        <li>5 years for scholars with Post graduate qualification in Science/Humanities with a valid NET/ GATE score.</li>
                                        <li>5 years for scholars with Bachelor’s Degree in Engineering/ Technology with a valid NET/ GATE score.</li>
                                        <li>4 years for Institute scholars (Scholars with a post graduate qualification in Science/ Humanities and without a valid GATE/ NET score). Assistantship rate and tenure is subject to change as per MHRD/ Institute guidelines applicable from time to time.</li>
                                    </ul>
                                </li>
                                <li>Extension of scholarship will be subject to the recommendation of the concerned DC and HOD based on the satisfactory performance of the scholar in research and in the assigned Departmental duties. Progress will be evaluated by the DC on the basis of written report and presentation.</li>
                                <li>No financial assistance from the Institute will be available to part time students. Project staff will get  funding from project as per rules but will not get any additional assistance from the Institute.</li>
                                <li>All the Research Scholars have to pay the admission fee one time during admission in the respective programme and also the registration fees at the beginning of each semester till the submission of thesis within stipulated dates.</li>
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
                $("#nav-admissions, .nav-left-PG, .nav-left-PG-support").addClass("active");
                $("#collapsePG, #collapsePGMobile").addClass("show");
            });
        </script>
    </body>
</html>
