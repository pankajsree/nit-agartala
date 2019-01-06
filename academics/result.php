<?php
    require("../common/common.php");
    require("../common/academics.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Academics</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/academics.css" />
    </head>
    <body>
        <?= $nav ?>
            <main id="academics-page">
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Academics</span>
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
                            <div class="to-be-updated">
                                Content to be Updated Soon !!!
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/academics.js"></script>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(".sub-nav-result").addClass("active");
        </script>
    </body>
</html>
