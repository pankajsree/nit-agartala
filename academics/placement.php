<?php
    require("../common/common.php");
    require("../common/db-config.php");
    require("../common/departments.php");

    $query = "SELECT `dept_name` FROM departments WHERE `dept_code` = $dept_code";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $dept_name = $row['dept_name'];
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
                        <span class="b-b-theme-thick">Department of <?= $dept_name ?></span>
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
                            <h3 class="text-bold mar-btm-2"><span class="b-b-theme-thick">Placement</span></h3>
                            <a class="default-links" href="#"><strong>Placement Brochure (2017-19) of School of Management</strong></a>
                            <div class="mar-btm-3">

                            </div>
                            <div class="mar-v-1 pad-0-5 caption-bg-gradient">Placement of 2016-18 Batch</div>
                            <div class="row mar-btm-1 justify-content-center">
                                <div class="col-4">
                                    <img src="<?= __ROOT__ ?>/assets/img/academics/placement/MBA_Placement_2018-1.jpg" class="img-res" alt="" />
                                </div>
                                <div class="col-4">
                                    <img src="<?= __ROOT__ ?>/assets/img/academics/placement/MBA_Placement_2018-2.jpg" class="img-res" alt="" />
                                </div>
                                <div class="col-4">
                                    <img src="<?= __ROOT__ ?>/assets/img/academics/placement/MBA_Placement_2018-3.jpg" class="img-res" alt="" />
                                </div>
                            </div>
                            <div class="row mar-btm-1 justify-content-center">
                                <div class="col-4">
                                    <img src="<?= __ROOT__ ?>/assets/img/academics/placement/MBA_Placement_2018-4.jpg" class="img-res" alt="" />
                                </div>
                                <div class="col-4">
                                    <img src="<?= __ROOT__ ?>/assets/img/academics/placement/MBA_Placement_2018-5.jpg" class="img-res" alt="" />
                                </div>
                            </div>


                            <div class="mar-v-1 pad-0-5 caption-bg-gradient">Placement of 2015-17 Batch</div>
                            <div class="row mar-btm-1 justify-content-center">
                                <div class="col-4">
                                    <img src="<?= __ROOT__ ?>/assets/img/academics/placement/MBA_Placement-1.jpg" class="img-res" alt="" />
                                </div>
                                <div class="col-4">
                                    <img src="<?= __ROOT__ ?>/assets/img/academics/placement/MBA_Placement-2.jpg" class="img-res" alt="" />
                                </div>
                                <div class="col-4">
                                    <img src="<?= __ROOT__ ?>/assets/img/academics/placement/MBA_Placement-3.jpg" class="img-res" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="<?= __ROOT__ ?>/assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-academics, .sub-nav-placement").addClass("active");
            });
        </script>
    </body>
</html>
