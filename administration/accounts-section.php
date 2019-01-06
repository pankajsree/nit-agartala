<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Accounts Section - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Accounts Section</span>
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
                                    <span class="text-bold">Akhil Debbarma</span><br />
                                    <span class="text-bold">Designation: </span>Accountant<br />
                                    <span class="text-bold">Contact: </span>0381&nbsp;2346629&nbsp;(Office) | 94361&nbsp;34262&nbsp;(Mobile)
                                </li>
                                <li>
                                    <span class="text-bold">Akhil Debbarma</span><br />
                                    <span class="text-bold">Designation: </span>Accountant<br />
                                    <span class="text-bold">Contact: </span>0381&nbsp;2346629&nbsp;(Office) | 94361&nbsp;34262&nbsp;(Mobile)
                                </li>
                                <li>
                                    <span class="text-bold">Akhil Debbarma</span><br />
                                    <span class="text-bold">Designation: </span>Accountant<br />
                                    <span class="text-bold">Contact: </span>0381&nbsp;2346629&nbsp;(Office) | 94361&nbsp;34262&nbsp;(Mobile)
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
                $("#nav-administration, .nav-left-registrar, .nav-left-accounts").addClass("active");
                $("#collapseRegistrar, #collapseRegistrarMobile").addClass("show");
            });
        </script>
    </body>
</html>
