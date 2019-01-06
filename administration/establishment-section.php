<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Establishment Section - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Establishment Section</span>
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
                                    <span class="text-bold">Sanjoy Deb Rupini</span><br />
                                    U D Clerk<br />
                                    Contact: 0381 2346629 (Office), +91 94361 88791 (Mobile)
                                </li>
                                <li>
                                    <span class="text-bold">Jadulal Debnath</span><br />
                                    U D Clerk<br />
                                    Contact: 0381 2346629 (Office)
                                </li>
                                <li>
                                    <span class="text-bold">Smt. Bakul Debbarma</span><br />
                                    U D Clerk<br />
                                    Contact: 0381 2346629 (Office), +91 98624 36082 (Mobile)
                                </li>
                                <li>
                                    <span class="text-bold">Jitendra Debnath</span><br />
                                    L D Clerk & Care-Taker (I/C)<br />
                                    Contact: 0381 2346629 (Office), +91 98623 20139 (Mobile)
                                </li>
                                <li>
                                    <span class="text-bold">Tapan Debnath</span><br />
                                    Duplicating Operator<br />
                                    Contact: 0381 2346629 (Office), +91 98620 72734 (Mobile) 
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
                $("#nav-administration, .nav-left-establishment, .nav-left-registrar").addClass("active");
                $("#collapseRegistrar, #collapseRegistrarMobile").addClass("show");
            });
        </script>
    </body>
</html>
