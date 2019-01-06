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
                            <p>NIT Agartala follows the schedule of JoSAA 2017 for admission to under-graduate courses.</p>
                            <h2><span class="b-b-theme">Academic Eligibility Criterion</span></h2>
                            <p>The academic eligibility criteria for admission in NIT, Agartala is same as the criteria laid down in the <span class="text-bold">Joint Seat Allocation Authority (JoSAA)</span> information brochure.</p>
                            <p>Eligible Candidates (as per the criteria laid down by JoSAA 2017 in the information brochure) who are allotted an academic course at NIT Agartala, have to, first, take provisional admission at any reporting centre of JoSAA-2017 during counselling sessions.</p>
                            <p class="text-bold">Only such candidates, who possess valid provisional admission letter (for NIT Agartala) issued by JoSAA 2017,  are eligible to get admission at NIT Agartala.</p>

                            <h2><span class="b-b-theme">Financial Requirements</span></h2>
                            <p>Candidates have to pay the Institution fee as per the rate specified for admission in B.Tech programme of NIT Agartala during 2015-16 session.</p>
                            <p>Candidates willing to avail Institute bus service have to deposit <span class="text-bold">&#x20b9; 5400/-</span> (Rupees Five  thousand Four Hundred only) in advance for one semester and it may be deposited in the form of Demand Draft to be drawn in favour of <span class="text-bold">&quot;Vidyarthi Engineering College Bus Owners Association&quot;</span> payable at Indian Overseas Bank, Agartala.</p>
                            <p>Provisionally admitted candidates for NIT Agartala need to pay the balance fee (refer to fees in section 8 ) at SBI counter in the Institute premises. Candidates who are allotted hostel by the chief warden will pay the requisite fee at the Canara Bank counter in the institute.</p>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-admissions, .nav-left-UG, .nav-left-UG-procedure").addClass("active");
                $("#collapseUG, #collapseUGMobile").addClass("show");
            });
        </script>
    </body>
</html>
