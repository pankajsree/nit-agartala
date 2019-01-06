<?php
    require("../common/common.php");
    require("../common/academics.php");
    require_once("../common/db-config.php");

    if(!isset($_GET['type'])) {
        $type = "upcoming";
    }
    else {
        $type = $_GET['type'];
    }

    if(!isset($_GET['page'])) {
        $page = 1;
    }
    else {
        $page = $_GET['page'];
    }

    // echo $type;
    // echo $page;
    // die("");

    $per_page = 15;

    $count = 1;

    $offset = ($page - 1) * $per_page;

    switch($type) {
        case "upcoming":
            $condition = "`from` > CURDATE()";
            break;
        case "past":
            $condition = "`to` <  CURDATE()";
            break;
        default:
            http_response_code(404);
            require("../404.php");
            die();
            break;
    }

    $query = "SELECT COUNT(1) FROM `activities` WHERE " . $condition;
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    $page_count = ceil(($row[0] / $per_page));

    if($page > $page_count && $page != 1) {
        http_response_code(404);
        require("../404.php");
        die();
    }

    $query = "SELECT `from`, `activity_name`, `file_name` FROM `activities` WHERE " . $condition . " ORDER BY `from` DESC LIMIT " . $offset . ", " . $per_page;
    $result = mysqli_query($conn, $query);

    // die($query);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>About - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="<?= __ROOT__ ?>/assets/css/home.css" />
        <link rel="stylesheet" href="<?= __ROOT__ ?>/assets/css/notices.css" />
    </head>
    <body>
        <?= $nav ?>
            <main id="activity-page">
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Academic Activities</span>
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
                    <?php
                        if($page > $page_count && $page == 1) {
                    ?>
                            <div class="to-be-updated">
                                No Upcoming Activities
                            </div>
                    <?php
                        }
                        else {
                    ?>
                            <div class="pdf-container">
                                <div class="row subject">
                                    <div class="col-left col-2">
                                        <div class="subject-heading">
                                            Date
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="subject-heading">
                                            Activity
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    while($notice = mysqli_fetch_assoc($result)) {
                                        if($count % 2 == 0) {
                                            $alternate = "even";
                                            $count++;
                                        }
                                        else {
                                            $alternate = "odd";
                                            $count++;
                                        }
                                        $date = date_create($notice['from']);
                                        $ddmm = date_format($date, "d M");
                                        $yyyy = date_format($date, "Y");
                                ?>
                                <div class="row <?= $alternate ?>">
                                    <div class="col-left col-2">
                                        <div class="date">
                                            <div class="dd-mm"><?= $ddmm ?></div>
                                            <div class="yyyy"><?= $yyyy ?></div>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <a href="uploads/tenders/<?= $notice['file_name'] ?>" target="_blank" class="content">
                                            <?= $notice['activity_name'] ?>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="pages-container text-center">
                                <input type="hidden" id="cur_page" value="<?= $page ?>">
                                <div class="row">
                                    <div class="col-12">
                                        <?php
                                            $display = "";
                                            if($page == 1) {
                                                $display .= "
                                                    <a class=\"float-left disabled\" href=\"javascript:void(0);\">First</a>
                                                    <a class=\"disabled\" href=\"javascript:void(0);\">&lt;&nbsp;Prev</a>
                                                ";
                                            }
                                            else {
                                                $display .= "
                                                    <a class=\"float-left\" href=\"" . __ROOT__ . "/academics/activities/" . $type . "/1\">First</a>
                                                    <a href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . ($page - 1) . "\">&lt;&nbsp;Prev</a>
                                                ";
                                            }
                                            if($page_count <= 5) {
                                                for($i = 1; $i <= $page_count; $i++) {
                                                    if($i == $page) {
                                                        $display .= "<a class=\"active\" href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . $i . "\">" . $i . "</a>";
                                                    }
                                                    else {
                                                        $display .= "<a href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . $i . "\">" . $i . "</a>";
                                                    }
                                                }
                                            }
                                            else {
                                                if($page < 3) {
                                                    for($i = 1; $i <= 5; $i++) {
                                                        if($i == $page) {
                                                            $display .= "<a class=\"active\" href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . $i . "\">" . $i . "</a>";
                                                        }
                                                        else {
                                                            $display .= "<a href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . $i . "\">" . $i . "</a>";
                                                        }
                                                    }
                                                }
                                                else if($page > $page_count - 2) {
                                                    for($i = $page_count - 4; $i <= $page_count; $i++) {
                                                        if($i == $page) {
                                                            $display .= "<a class=\"active\" href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . $i . "\">" . $i . "</a>";
                                                        }
                                                        else {
                                                            $display .= "<a href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . $i . "\">" . $i . "</a>";
                                                        }
                                                    }
                                                }
                                                else {
                                                    $display .= "
                                                        <a href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . $page - 2 . "\">" . $page - 2 . "</a>
                                                        <a href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . $page - 1 . "\">" . $page - 1 . "</a>
                                                        <a class=\"active\" href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . $page . "\">" . $page . "</a>
                                                        <a href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . $page + 1 . "\">" . $page + 1 . "</a>
                                                        <a href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . $page + 2 . "\">" . $page + 2 . "</a>
                                                    ";
                                                }
                                            }
                                            if($page == $page_count) {
                                                $display .= "
                                                    <a class=\"disabled\" href=\"javascript:void(0);\">Next&nbsp;&gt;</a>
                                                    <a class=\"float-right disabled\" href=\"javascript:void(0);\">Last</a>
                                                ";
                                            }
                                            else {
                                                $display .= "
                                                    <a href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . ($page + 1) . "\">Next&nbsp;&gt;</a>
                                                    <a class=\"float-right\" href=\"" . __ROOT__ . "/academics/activities/" . $type . "/" . $page_count . "\">Last</a>
                                                ";
                                            }
                                            echo $display;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="<?= __ROOT__ ?>/assets/js/campus.js"></script>
        <script src="<?= __ROOT__ ?>/assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-academics, .nav-left-<?= $type ?>, .nav-left-activity").addClass("active");
                $("#collapseActivities, #collapseActivitiesMobile").addClass("show");
            });
        </script>
    </body>
</html>
