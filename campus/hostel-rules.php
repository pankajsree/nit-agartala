<?php
    require("../common/common.php");
    require("../common/campus.php");
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
                        <span class="b-b-theme-thick">Hostel Rules &amp; Regulations</span>
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
                            <ol>
                                <li>Keep calm and quiet to maintain the peace and harmony inside the hostel and mess.</li>
                                <li>Your room/floor corridor/toilet must be kept neat and clean enough for healthy living for all individuals.</li>
                                <li>Personal laptop without external speaker, mobile phone, power bank are only allowed for use. Use of any other electrical appliances for any reason is strictly prohibited and ₹5000 INR will be imposed as penalty.</li>
                                <li>Ragging (verbal/physical/psychological) is a crime and it is strictly prohibited on campus & off campus. Punishment for raggers will obey the orders of the Hon'ble Supreme Court of India.</li>
                                <li>Fighting among each other in a group or as an individual is punishable offence at any circumstances. ₹5000 INR will be imposed as penalty against each individual for each case and further disciplinary action will be imposed with immediate effect.</li>
                                <li>Cooking is not allowed inside the hostel room and ₹5000 INR will be imposed as penalty for each event against each individual.</li>
                                <li>Using any kind of motor vehicles is strictly prohibited in the campus premises. If caught, respective bikes will be seized till the end of academic program of owner and rider/riders.</li>
                                <li>Smoking/chewing tobacco/consumption of alcoholic drinks or supplying any of these items to others is strictly prohibited in campus premises and ₹5000 INR will be imposed as penalty for each individual.</li>
                                <li>No hosteller is allowed to take any article/utensils from mess to outside, even in hostel room and ₹5000 INR will be imposed as penalty against each individual for each case.</li>
                                <li>Any unauthorized accommodation by the hosteller for friends/visitors/relatives at hostel room is strictly prohibited and ₹5000 INR will be imposed as penalty against each individual. Entry of friends/visitors/relatives is restricted upto entrance gate of the respective hostel.</li>
                                <li>Photograph pasting/Drawing/Writing on the wall of room/furniture/door/bathrooms/common area of the hostel is strictly prohibited and ₹5000 INR will be imposed as penalty for each case against each individual.</li>
                                <li>Allotted room of the hostel should not be interchanged/altered at any circumstances without written approval of competent authority; otherwise ₹5000 INR will be imposed as penalty against each individual for each alteration and further disciplinary action may be taken. Hostel administration reserves right to shift the resident from one room to another room of same hostel/another hostel at any point of time in order to maintain discipline at hostel and campus premises.</li>
                                <li>Do not write your name/roll number/department on the room door because your room will be used further by others in the following years.</li>
                                <li>Birthday Celebration inside the hostel room is strictly prohibited.</li>
                                <li>Hosteller is not allowed to remain absent from hostel at night time without written permission from the supervisor of that hostel. If found, disciplinary action will be imposed with immediate effect.</li>
                                <li>Using roof of any hostel/mess by hosteller/anyone for any reason is strictly prohibited.</li>
                                <li>Boys’ hostellers are not allowed to stay outside of the hostel from 8.00PM to 4.30AM for any reason except medical issues/ Girls’ hostellers are not allowed to stay outside of the hostel from 6.00PM to 6.00AM for any reason except medical issues.</li>
                                <li>Intentional damage of any item in hostel room/floor/corridor is liability of occupant to get it repaired/replaced further. Moreover, damage to hostel property such as doors, windows, electrical fittings, toilet fittings, glass panes, etc., will lead to disciplinary action.</li>
                                <li>Misuse of water, electricity and others facilities are liable to disciplinary action.</li>
                                <li>Hosteller is solely responsible for keeping valuable belongings with him/her. Hostel administration shall not be liable for loss/damage of such valuable items.</li>
                                <li>
                                    Mess timing must be strictly adhered as following:<br />
                                    <ul class="no-bullet">
                                        <li>Breakfast: 7.30AM to 9.00AM</li>
                                        <li>Lunch: 12.30PM to 2.15PM</li>
                                        <li>Dinner: 7.30PM to 9.30PM</li>
                                    </ul>
                                    Food will not be served before or after the prescribed timing. Sometimes, unintentional delay may happen to prepare food ready in mess by the mess staffs. Keep patience and obey the mess rule for this occurrence.
                                </li>
                                <li>Do not waste food in mess. Take all you Want, but Eat all you Take.</li>
                                <li>Any short of complaint for electrical/civil/carpentry/plumbing for maintenance must be reported in complaint register of respective hostel.</li>
                                <li>Playing of outdoor game inside the hostel is strictly prohibited.</li>
                                <li>
                                    <strong>PUNISHMENT:</strong> All residents of the hostel are governed by the rules, regulations, statues and ordinance of the hostel of NITA. Surprise visit will be made in hostels on regular basis by the hostel administration and authority of the Institute. In case, a resident fails to maintain any of the “RULES AND REGULATIONS OF NITA HOSTEL”, he/she will render himself/herself liable to appropriate punishment, which may include fines/expulsion from hostel/forfeiting of mess charges/expulsion or suspension from academic program, etc. <br />

                                    Further, for the misconduct/violation of any &quot;RULES AND REGULATIONS OF NITA HOSTEL&quot; by the student, he/she has to pay a fixed deposit bond of <strong>₹50000</strong> INR in the name of &quot;<strong>Student Welfare Fund</strong>&quot; (SBI A/C No. 30534089717). This fixed deposit bond of <strong>₹50000 INR</strong> may be refunded after completion of the academic course for which he/she took admission at NIT Agartala, if he/she is not involved in any in-disciplinary activity further. Otherwise, the aforementioned bond value will not be refunded after completion of the course.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-campus, .nav-left-hostel-life, .nav-left-hostel-rules").addClass("active");
                $("#collapseHostel, #collapseHostelMobile").addClass("show");
            });
        </script>
    </body>
</html>
