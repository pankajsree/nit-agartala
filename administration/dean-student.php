<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dean Student Welfare - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
        <main id="administration-page">
            <div class="container pad-v-2">
                <h1 class="position-relative">
                    <span class="b-b-theme-thick">Office of Dean (Student Welfare)</span>
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
                        <ul class="no-bullet no-mar no-pad space-li-1">
                            <li>
                                <span class="text-bold">Dr. R. S. Panua</span>, Dean (SW - 1)<br />
                                Associate Professor<br />
                                Department of Mechanical Engineering<br />
                                <strong>Email:</strong> rajsekhar_panua@yahoo.co.in<br />
                                <strong>Phone:</strong> +91 80147 29553
                            </li>
                            <li>
                                <span class="text-bold">Dr. R.N. Rai</span>, Dean (SW - 2)<br />
                                Associate Professor<br />
                                Department of Production Engineering<br />
                                <strong>Email:</strong> nareshray@yahoo.co.in<br />
                                <strong>Phone:</strong> +91 89744 43620
                            </li>
                            <li>
                                <span class="text-bold">Dr. Uttam Bera</span>, Associate Dean (SW)<br />
                                Associate Professor<br />
                                Department of Mathematics<br />
                                <strong>Email:</strong> bera_uttam@yahoo.co.in<br />
                                <strong>Phone:</strong> +91 94367 67279
                            </li>
                            <li>
                                <span class="text-bold">Dr. John Debbarma</span>, Associate Dean (SW2)<br />
                                Associate Professor<br />
                                Department of Mechanical Engineering<br />
                                <strong>Email:</strong> debbarma_john@rediffmail.com<br />
                                <strong>Phone:</strong> +91 94361 20189
                            </li>
                            <li>
                                <span class="text-bold">Mr. R. K. Bhogendro Meitei</span>, Chief Warden<br />
                                Assistant Professor<br />
                                Department of Mechanical Engineering<br />
                                <strong>Email:</strong> bhogen_dei@yahoo.com<br />
                                <strong>Phone:</strong> +91 94368 90866
                            </li>
                            <li>
                                <span class="text-bold">Mr. Sukanta Goswami</span>, Physical Education Officer<br />
                                <strong>Phone:</strong> +91 94364 53434
                            </li>
                            <li>
                                <span class="text-bold">Mr. Anupam Pal</span>, Sports Officer<br />
                                <strong>Phone:</strong> +91 94365 62964
                            </li>
                            <hr class="bg-theme"/>
                            <address>
                                <span class="text-bold">Address:</span><br />
                                Dean of Students&apos; Welfare<br />
                                SAC Building (ADMIN-II)<br />
                                NIT-Agartala, Jirania<br />
                                West Tripura, PIN: 799046<br /><br />
                                Contact: 0381-2348514 (Office)
                            </address>
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
                $("#nav-administration, .nav-left-student, .nav-left-student-office").addClass("active");
                $("#collapseStudent, #collapseStudentMobile").addClass("show");
            });
        </script>
    </body>
</html>
