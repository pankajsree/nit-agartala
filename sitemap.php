<?php
    require_once("common/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">

        <?= $head ?>

        <link rel="stylesheet" href="assets/css/home.css" />
        <link rel="stylesheet" href="assets/css/notices.css" />
    </head>
    <body>

        <?= $nav ?>

        <main id="tenders-page">
            <div class="container">
                <h1><span class="b-b-theme-thick">Sitemap</span></h1>

                <div class="row">
                    <div class="col-12">
                        <ul class='no-pad no-mar menu-left a-no-underline no-bullet line-h-2'>
                            <li class='menu-left-main active b-t-theme b-b-white'><a href='index.php'>Home</a></li>
                            <li class="menu-left-main active b-b-white">
                                <a data-toggle="collapse" href="#collapseAbout" role="button">About<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                            </li>
                            <div class="collapse expand-init" id="collapseAbout">
                                <ul class="no-pad list-style-none">
                                    <li class="menu-left-sub"><a href="about/index.php">The Institute</a></li>
                                    <li class="menu-left-sub"><a href="about/history.php">History</a></li>
                                    <li class="menu-left-sub"><a href="about/director.php">Director</a></li>
                                    <li class="menu-left-sub"><a href="about/facilities.php">Facilities</a></li>
                                    <li class="menu-left-sub"><a href="https://www.flickr.com/photos/155698633@N04/">Photo Gallery</a></li>
                                </ul>
                            </div>
                            <li class="menu-left-main active b-b-white">
                                <a data-toggle="collapse" href="#collapseAdmission" role="button">Admission<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                            </li>
                            <div class="collapse expand-init" id="collapseAdmission">
                                <ul class="no-pad list-style-none">
                                    <li class='menu-left-sub'><a href='index.php'>Home</a></li>
                                    <li class="menu-left-sub">
                                        <a data-toggle="collapse" href="#collapseUG" role="button">Under-Graduate<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                                    </li>
                                    <div class="collapse" id="collapseUG">
                                        <ul class="no-pad list-style-none">
                                            <li class="menu-left-sub sub-2"><a href="admission/ug-procedure.php">Procedure & Eligibility</a></li>
                                            <li class="menu-left-sub sub-2"><a href="admission/ug-capacity.php">Intake Capacity</a></li>
                                            <li class="menu-left-sub sub-2"><a href="admission/ug-fee-structure.php">Fee Structure</a></li>
                                            <li class="menu-left-sub sub-2"><a href="admission/ug-scholarship.php">Scholarships</a></li>
                                        </ul>
                                    </div>
                                    <li class="menu-left-sub">
                                        <a data-toggle="collapse" href="#collapsePG" role="button">Post-Graduate<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                                    </li>
                                    <div class="collapse" id="collapsePG">
                                        <ul class="no-pad list-style-none">
                                            <li class="menu-left-sub sub-2"><a href="admission/pg-procedure.php">Procedure & Eligibility</a></li>
                                            <li class="menu-left-sub sub-2"><a href="admission/pg-capacity.php">Intake Capacity</a></li>
                                            <li class="menu-left-sub sub-2"><a href="admission/pg-fee-structure.php">Fee Structure</a></li>
                                            <li class="menu-left-sub sub-2"><a href="admission/pg-financial-support.php">Financial Support</a></li>
                                        </ul>
                                    </div>
                                    <li class='menu-left-sub'><a href='conduct-discipline.php'>Conduct & Discipline</a></li>
                                    <li class='menu-left-sub'><a href='../docs/prospectus_2018.pdf' target='_blank'>Prospectus 2018</a></li>
                                    <li class='menu-left-sub'><a href='#'>NIMCET 2018</a></li>
                                    <li class='menu-left-sub'><a href='#'>CCMT 2018</a></li>
                                    <li class='menu-left-sub'><a href='#'>DASA 2018</a></li>
                                </ul>
                            </div>
                            <li class="menu-left-main active b-b-white">
                                <a data-toggle="collapse" href="#collapseAcademics" role="button">Academics<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                            </li>
                            <div class="collapse expand-init" id="collapseAcademics">
                                <ul class="no-pad list-style-none">
                                    <li class='menu-left-sub'><a href='index.php'>Home</a></li>
                                    <li class="nav-left-activity menu-left-sub">
                                        <a data-toggle="collapse" href="#collapseDept" role="button">Departments<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                                    </li>
                                    <div class="collapse" id="collapseDept">
                                        <ul class="no-pad list-style-none">
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=1'>Bio Engineering</a></li>
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=2'>Chemical Engineering</a></li>
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=3'>Civil Engineering</a></li>
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=4'>Computer Science &amp; Engineering</a></li>
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=5'>Electrical Engineering</a></li>
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=6'>Electronics &amp; Communication Engineering</a></li>
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=7'>Electronics &amp; Instrumentation Engineering</a></li>
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=8'>Mechanical Engineering</a></li>
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=9'>Production Engineering</a></li>
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=10'>School of Management</a></li>
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=11'>Humanities &amp; Social Sciences</a></li>
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=12'>Physics</a></li>
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=13'>Chemistry</a></li>
                                            <li class="menu-left-sub sub-2"><a href='academics/department.php?dept_code=14'>Mathematics</a></li>
                                        </ul>
                                    </div>
                                    <li class='menu-left-sub'><a href='../notices.php?type=2'>Academic Notices</a></li>
                                    <li class="nav-left-activity menu-left-sub">
                                        <a data-toggle="collapse" href="#collapseActivities" role="button">Academic Activities<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                                    </li>
                                    <div class="collapse" id="collapseActivities">
                                        <ul class="no-pad list-style-none">
                                            <li class="nav-left-upcoming menu-left-sub sub-2"><a href="academics/academic-activities.php?type=upcoming">Upcoming Activities</a></li>
                                            <li class="nav-left-past menu-left-sub sub-2"><a href="academics/academic-activities.php?type=past">Past Activities</a></li>
                                        </ul>
                                    </div>
                                    <li class='menu-left-sub'><a href='academics/academic-regulations.php'>Academic Regulations</a></li>
                                    <li class='menu-left-sub'><a href='docs/academic_calendar_2018_19.pdf' target='_blank'>Academic Calendar</a></li>
                                    <li class='menu-left-sub'><a href='academics/academic-result.php'>Academic Result</a></li>
                                    <li class='menu-left-sub'><a href='academics/departments.php'>Academic Departments</a></li>
                                    <li class='menu-left-sub'><a href='docs/holidays_2018_19.pdf' target='_blank'>List of Holidays</a></li>
                                    <li class='menu-left-sub'><a href='academics/library.php'>Library</a></li>
                                </ul>
                            </div>
                            <li class="menu-left-main active b-b-white">
                                <a data-toggle="collapse" href="#collapseResearch" role="button">Research<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                            </li>
                            <div class="collapse expand-init" id="collapseResearch">
                                <ul class="no-pad list-style-none">
                                    <li class="menu-left-sub"><a href="research/ug-procedure.php">Research at NITA</a></li>
                                    <li class="menu-left-sub"><a href="research/ug-capacity.php">Research Area</a></li>
                                    <li class="menu-left-sub"><a href="research/ug-fee-structure.php">News / Announcement</a></li>
                                    <li class="menu-left-sub"><a href="research/ug-scholarship.php">List of Sponsors</a></li>
                                    <li class="menu-left-sub"><a href="research/ug-scholarship.php">People</a></li>
                                </ul>
                            </div>
                            <li class="menu-left-main active b-b-white">
                                <a data-toggle="collapse" href="#collapseCCD" role="button">CCD<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                            </li>
                            <div class="collapse expand-init" id="collapseCCD">
                                <ul class="no-pad list-style-none">
                                    <li class="menu-left-sub"><a href="ccd/ug-procedure.php">Motivation</a></li>
                                    <li class="menu-left-sub"><a href="ccd/ug-capacity.php">Training &amp; Placement</a></li>
                                    <li class="menu-left-sub"><a href="ccd/ug-fee-structure.php">Download Brochure</a></li>
                                    <li class="menu-left-sub"><a href="ccd/ug-scholarship.php">Job Notification Form</a></li>
                                    <li class="menu-left-sub"><a href="ccd/ug-scholarship.php">Summer Internship & Training</a></li>
                                </ul>
                            </div>
                            <li class="menu-left-main active b-b-white">
                                <a data-toggle="collapse" href="#collapseCampus" role="button">Campus Life<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                            </li>
                            <div class="collapse expand-init" id="collapseCampus">
                                <ul class="no-pad list-style-none">
                                    <li class="menu-left-sub"><a href="campus/ug-procedure.php">Hostel</a></li>
                                    <li class="menu-left-sub"><a href="campus/ug-capacity.php">Medical Unit</a></li>
                                    <li class="menu-left-sub"><a href="campus/ug-fee-structure.php">Banking and Post Office</a></li>
                                    <li class="menu-left-sub"><a href="campus/ug-scholarship.php">Communication</a></li>
                                    <li class="menu-left-sub"><a href="campus/ug-scholarship.php">Extra-Curricular Activities</a></li>
                                </ul>
                            </div>
                            <li class='menu-left-main active b-b-white'><a href='index.php'>Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>

        <?= $footer ?>
        <?= $script ?>

        <script>
            $("#nav-sitemap").addClass("active");
            $("main .collapse.expand-init").addClass("show");
        </script>
    </body>
</html>
