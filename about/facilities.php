<?php
    require("../common/common.php");
    require("../common/about.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>About - NIT Agartala</title>
        <meta charset="utf-8">
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/about.css" />
    </head>
    <body>
        <?= $nav ?>
            <main>
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Facilities</span>
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
                            <p>The Institute has all basic infrastructural facilities for conducting the undergraduate courses satisfactorily. It has got adequate number of well qualified and experienced faculty members and technical supporting staff. It has a well stocked library, computer facilities, workshop and laboratories relevant to the courses of study.</p>

                            <h2><span class="b-b-theme">Library</span></h2>
                            <ul>
                                <li>8 to 8 Lending Service</li>
                                <li>Well-Facilitated Reading Room</li>
                                <li>Back-Volume Section</li>
                                <li>Indexing and Reference Section</li>
                                <li>Stock room with more than 34,000 books & 200 Journals</li>
                                <li>Hi-speed Copying facility along with Scanning facilities</li>
                                <li>All e-journal facilities are available in the digital library</li>
                            </ul>

                            <h2><span class="b-b-theme">Computer</span></h2>
                            <ul>
                                <li>Central Computer Laboratory with Centralised Server</li>
                                <li>
                                    Four Departmental Modular Computer Laboratories with following additional facilities :
                                    <ul>
                                        <li>Seperate Broadband Connection for Every Terminal</li>
                                        <li>Dedicated Internet Connections through VSAT-ERNET (for official purpose)</li>
                                        <li>Campus Intranet Facility for File Sharing and Communication</li>
                                        <li>The campus is now totally connected through Wi-Fi with wimax wireless backbone</li>
                                    </ul>
                                </li>
                            </ul>

                            <h2><span class="b-b-theme">Hostel</span></h2>
                            <p>The Institute has both Boys’ hostel and Girls' hostel facilities. Presently there are six Boys' hostel and two Girls' hostel. In forthcoming, years more hostels will be available in the campus itself for which master planning is going on. Students interested for staying in the hostel have to fill up a prescribed form for admission to the hostel and have to deposit the necessary fees as decided by the concerned authorities.</p>

                            <h2><span class="b-b-theme">Banking &amp; Post Office</span></h2>
                            <p>The State Bank of India has a branch with ATM operating from the Institute campus. The campus also has a Sub-Post Office by the name ‘‘Tripura Engineering College’’, PIN No. 799 005.</p>

                            <h2><span class="b-b-theme">Health Care</span></h2>
                            <p>A well-equipped Medical Unit with two senior Medical Officers, Pharmacists and other supporting staffs is available in the campus for rendering medical care to the students, staff and other persons within the campus. In case of emergency, arrangements are available for transporting the patients to the Jirania Rural Hospital (Primary Health Centre) 4 km away or to the state hospital at Agartala.</p>

                            <h2><span class="b-b-theme">Communication</span></h2>
                            <p>The Institute runs private bus services from Agartala to Institute campus and back during working hours and in cases of emergency adequate number of buses, jeeps and private vehicles are available on NH-44 for traveling from Agartala. It is mandatory for all students to avail bus facility from Agartala to Institute Campus, however on special grounds some relaxation may be given to students.</p>

                            <h2><span class="b-b-theme">Extra Curricular Activities</span></h2>
                            <p>The students actively participate in all co-curricular activities like games and sports, debate, cultural-functions, essay competition, drama competition, rallies on various themes, NSS programmes etc. being sponsored by the state Government and other statutory bodies and by the Institute authority. N.S.S or N.C.C. is a compulsory subject for all students.</p>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/about.js"></script>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-about, .sub-nav-facilities").addClass("active");
            });
        </script>
    </body>
</html>
