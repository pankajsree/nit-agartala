<?php
    require("../common/common.php");
    require("../common/db-config.php");
    require("../common/departments.php");

    // echo $dept_code;
    // die("");

    $query = "SELECT `content` FROM dept_programmes WHERE `dept_code` = $dept_code";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Academics</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="<?= __ROOT__ ?>/assets/css/academics.css" />
    </head>
    <body>
        <?= $nav ?>
            <main id="academics-page">
                <img src="<?= __ROOT__ ?>/assets/img/departments/<?= $dept_code ?>.jpg" class="dept-banner" alt="" />
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Programmes</span>
                        <button id="sub-hamburger-container" class=" d-inline-block d-md-none" data-toggle="collapse" data-target="#sub-mobile-menu">
                            <div id="sub-ham-one" class="sub-ham"></div>
                            <div id="sub-ham-two" class="sub-ham"></div>
                            <div id="sub-ham-three" class="sub-ham"></div>
                        </button>
                    </h1>
                    <?= $mobile_menu ?>
                    <div class="row">
                        <?= $menu_left ?>
                        <div class="col-12 col-md-9 blue-links">
                            <?= $row['content'] ?>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="<?= __ROOT__ ?>/assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-academics, .sub-nav-programmes").addClass("active");
            });
        </script>
    </body>
</html>
