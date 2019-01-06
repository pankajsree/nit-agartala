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
                        <span class="b-b-theme-thick">Procedure &amp; Eligibility</span>
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
                            <h2><span class="b-b-theme">Procedure</span></h2>
                            <p>Candidates are admitted in M.Tech programme through centralized counseling conducted by CCMT. This counseling is applicable only to the candidates who are GATE qualified. The seats are allotted by the Institute conducting centralized counseling through CCMT-2017 being conducted by S.V. NIT Surat on the basis of their rank in GATE examination.</p>
                            <p>There are 60 seats which are earmarked for the sponsored candidates. Candidates who are employed in any Govt., Semi Govt., and Undertaking etc. and complete two years of continuous service may apply under this category if they are sponsored by their employer. Candidates under sponsored category are selected by the Institute on the basis of their performance in the oral / written examination etc. conducted by the Academic Departments.</p>
                            <p>There are another 54 seats covering all the 20 specializations for admission under Direct Admission of Students Abroad (DASA) scheme. Admission under the scheme is conducted by VNIT Nagpur for 2017-18 academic session. Admission is made under the scheme on the basis of allotment of seats by the institute conducting DASA 2017.</p>

                            <h2><span class="b-b-theme">Eligibility Condition</span></h2>
                            <p>The candidates with 60% marks or CPI / CGPA of 6.5 at a scale of 10 for General/ OBC category candidates and 55% marks or CPI/CGPA of 6.0 at a scale of 10 for SC/ST candidates are eligible for admission in M.Tech programme. The candidates must have valid GATE score for admission under centralized counseling. </p>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-admissions, .nav-left-PG, .nav-left-PG-procedure").addClass("active");
                $("#collapsePG, #collapsePGMobile").addClass("show");
            });
        </script>
    </body>
</html>
