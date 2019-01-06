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
                        <span class="b-b-theme-thick">Conduct &amp; Discipline</span>
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
                            <ul>
                                <li>The conduct of the Students within and outside the premises of the institute shall be such as is befitting to the students of an institution of national importance.</li>
                                <li>As per the order of the Hon’ble Supreme Court of India, ragging in any form is banned in the Institute. Acts of ragging will be considered as gross indiscipline and will be severely dealt with.</li>
                                <li>
                                    The following acts of omission and or commission shall amount to gross violation of the code of conduct and shall invoke disciplinary measures :
                                    <ul>
                                        <li>Ragging</li>
                                        <li>Lack of courtesy and decorum; indecent behaviour anywhere within or outside the campus.</li>
                                        <li>Wilful damage or removal of any property/belongings of the Institute/Hostel or of fellow students.</li>
                                        <li>Possession, consumption or distribution of alcoholic drinks or any kind of hallucinogenic drugs.</li>
                                        <li>Mutilation or unauthorized possession of library books</li>
                                        <li>Noisy behaviour, disturbing of studies of fellow students.</li>
                                        <li>Hacking in computer systems (such as entering other person’s area without prior permission, manipulation and/or damage of computer hardware and software etc.)</li>
                                        <li>
                                            Any other act of gross indiscipline -
                                            <ul>
                                                <li>Commensurate with the gravity of the offence, the punishment may be reprimand, fine, and expulsion from the hostel, debarring from an examination, rustication on attending classes for a specified period or even outright expulsion from the Institute.</li>
                                                <li>For an offence committed in (a) a Hostel (b) a Department or in a classroom and (c) elsewhere, the Hostel Superintendent, the Head of the Department and the Dean of Student welfare, respectively, shall have the authority to reprimand or impose fine with the approval of appropriate authority.</li>
                                                <li>All cases involving punishment other than reprimand shall be reported to the Chairman, Students Disciplinary Committee.</li>
                                                <li>All major acts of indiscipline, which may have serious implications on students in general, and/or which may warrant a uniform and more formalized nature of investigation, shall be handled by the Students Disciplinary Committee appointed by the Director.</li>
                                                <li>Cases of adoption of unfair means in an examination shall be reported to the Dean of Academic Affairs for taking appropriate action.</li>
                                                <li>For the benefit of the students and staff of the college private bus service has been arranged from Agartala to college campus and back. The students availing bus facility have to maintain discipline inside the buses. Such students are expected to make regular payment of bus fare in the interest of ensuring smooth running of the buses. Guardians are requested to make payment as per modalities to be decided by the bus committee of NIT Agartala.</li>
                                            </ul>
                                        </li>
                                    </ul>
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
                $("#nav-admissions, .sub-nav-conduct").addClass("active");
            });
        </script>
    </body>
</html>
