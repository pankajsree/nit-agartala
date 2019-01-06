<?php
    require_once("common/common.php");
    require_once("common/db-config.php");

    if(!isset($_GET['type'])) {
        $type_url = 'all';
    }
    else {
        $type_url = $_GET['type'];
    }

    switch ($type_url) {
        case 'all':
            $type = 1;
            break;

        case 'limited':
            $type = 2;
            break;

        case 'open':
            $type = 3;
            break;

        case 'cancellation':
            $type = 4;
            break;

        case 'interest':
            $type = 5;
            break;

        case 'registration':
            $type = 6;
            break;

        default:
            $type = 1;
            break;
    }

    if(!isset($_GET['page'])) {
        $page = 1;
    }
    else {
        $page = $_GET['page'];
    }

    $per_page = 15;

    $count = 1;

    $offset = ($page - 1) * $per_page;

    switch($type) {
        case 1:
            $condition = "1 = 1";
            break;
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            $condition = "`type` = " . $type;
            break;
        default:
            http_response_code(404);
            require("/error/404.php");
            die();
            break;
    }

    $query = "SELECT COUNT(1) FROM `tenders` WHERE " . $condition;
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    $page_count = ceil(($row[0] / $per_page));

    if($page > $page_count) {
        http_response_code(404);
        require("/error/404.php");
        die();
    }

    $query = "SELECT `file_name`, `display_text`, `uploaded_on` FROM `tenders` WHERE " . $condition . " ORDER BY `uploaded_on` DESC LIMIT " . $offset . ", " . $per_page;
    $result = mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">

        <?= $head ?>

        <link rel="stylesheet" href="<?= __ROOT__ ?>/assets/css/home.css" />
        <link rel="stylesheet" href="<?= __ROOT__ ?>/assets/css/notices.css" />
    </head>
    <body>

        <?= $nav ?>

        <main id="tenders-page">
            <div class="container">
                <h1 class="position-relative">
                    <span class="b-b-theme-thick">Tenders</span>
                    <button id="sub-hamburger-container" class=" d-inline-block d-md-none" data-toggle="collapse" data-target="#sub-mobile-menu">
                        <div id="sub-ham-one" class="sub-ham"></div>
                        <div id="sub-ham-two" class="sub-ham"></div>
                        <div id="sub-ham-three" class="sub-ham"></div>
                    </button>
                </h1>

                <div id="sub-mobile-menu" class="collapse d-md-none">
                    <div class="row no-mar pad-right-2">
                        <div class="col-12">
                            <ul class="no-pad no-mar menu-left a-no-underline no-bullet line-h-2">
                                <li class="menu-left-main nav-left-1 b-t-theme"><a href="<?= __ROOT__ ?>/tenders/all">All Tenders</a></li>
                                <li class="menu-left-main nav-left-2"><a href="<?= __ROOT__ ?>/tenders/limited">Limited Tenders</a></li>
                                <li class="menu-left-main nav-left-3"><a href="<?= __ROOT__ ?>/tenders/open">Open Tenders</a></li>
                                <li class="menu-left-main nav-left-4"><a href="<?= __ROOT__ ?>/tenders/cancellation">Tender Cancellation</a></li>
                                <li class="menu-left-main nav-left-5"><a href="<?= __ROOT__ ?>/tenders/interest">Expression of Interest</a></li>
                                <li class="menu-left-main nav-left-6"><a href="<?= __ROOT__ ?>/tenders/registration">Registration of Firm</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 d-none d-md-flex">
                        <ul class="no-pad no-mar menu-left a-no-underline no-bullet line-h-2">
                            <li class="menu-left-main nav-left-1 b-t-theme"><a href="<?= __ROOT__ ?>/tenders/all">All Tenders</a></li>
                            <li class="menu-left-main nav-left-2"><a href="<?= __ROOT__ ?>/tenders/limited">Limited Tenders</a></li>
                            <li class="menu-left-main nav-left-3"><a href="<?= __ROOT__ ?>/tenders/open">Open Tenders</a></li>
                            <li class="menu-left-main nav-left-4"><a href="<?= __ROOT__ ?>/tenders/cancellation">Tender Cancellation</a></li>
                            <li class="menu-left-main nav-left-5"><a href="<?= __ROOT__ ?>/tenders/interest">Expression of Interest</a></li>
                            <li class="menu-left-main nav-left-6"><a href="<?= __ROOT__ ?>/tenders/registration">Registration of Firm</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="pdf-container">
                            <div class="row subject">
                                <div class="col-left col-3 col-sm-2">
                                    <div class="subject-heading">
                                        Date
                                    </div>
                                </div>
                                <div class="col-9 col-sm-10">
                                    <div class="subject-heading">
                                        Tenders
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
                                    $date = date_create($notice['uploaded_on']);
                                    $ddmm = date_format($date, "d M");
                                    $yyyy = date_format($date, "Y");
                            ?>
                            <div class="row <?= $alternate ?>">
                                <div class="col-left col-3 col-sm-2">
                                    <div class="date">
                                        <div class="dd-mm"><?= $ddmm ?></div>
                                        <div class="yyyy"><?= $yyyy ?></div>
                                    </div>
                                </div>
                                <div class="col-9 col-sm-10">
                                    <a href="<?= __ROOT__ ?>/uploads/tenders/<?= $notice['file_name'] ?>" target="_blank" class="content">
                                        <?= $notice['display_text'] ?>
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
                                                <div id='dekstop-pages' class='d-none d-sm-inline-block'>
                                            ";
                                        }
                                        else {
                                            $display .= "
                                                <a class=\"float-left\" href=\"" . __ROOT__ . "/tenders/" . $type . "/1\">First</a>
                                                <a href=\"" . __ROOT__ . "/tenders/" . $type . "/" . ($page - 1) . "\">&lt;&nbsp;Prev</a>
                                                <div id='dekstop-pages' class='d-none d-sm-inline-block'>
                                            ";
                                        }
                                        if($page_count <= 5) {
                                            for($i = 1; $i <= $page_count; $i++) {
                                                if($i == $page) {
                                                    $display .= "<a class=\"active\" href=\"" . __ROOT__ . "/tenders/" . $type . "/" . $i . "\">" . $i . "</a>";
                                                }
                                                else {
                                                    $display .= "<a href=\"" . __ROOT__ . "/tenders/" . $type . "/" . $i . "\">" . $i . "</a>";
                                                }
                                            }
                                        }
                                        else {
                                            if($page < 3) {
                                                for($i = 1; $i <= 5; $i++) {
                                                    if($i == $page) {
                                                        $display .= "<a class=\"active\" href=\"" . __ROOT__ . "/tenders/" . $type . "/" . $i . "\">" . $i . "</a>";
                                                    }
                                                    else {
                                                        $display .= "<a href=\"" . __ROOT__ . "/tenders/" . $type . "/" . $i . "\">" . $i . "</a>";
                                                    }
                                                }
                                            }
                                            else if($page > $page_count - 2) {
                                                for($i = $page_count - 4; $i <= $page_count; $i++) {
                                                    if($i == $page) {
                                                        $display .= "<a class=\"active\" href=\"" . __ROOT__ . "/tenders/" . $type . "/" . $i . "\">" . $i . "</a>";
                                                    }
                                                    else {
                                                        $display .= "<a href=\"" . __ROOT__ . "/tenders/" . $type . "/" . $i . "\">" . $i . "</a>";
                                                    }
                                                }
                                            }
                                            else {
                                                $display .= "
                                                    <a href=\"" . __ROOT__ . "/tenders/" . $type . "/" . $page - 2 . "\">" . $page - 2 . "</a>
                                                    <a href=\"" . __ROOT__ . "/tenders/" . $type . "/" . $page - 1 . "\">" . $page - 1 . "</a>
                                                    <a class=\"active\" href=\"" . __ROOT__ . "/tenders/" . $type . "/" . $page . "\">" . $page . "</a>
                                                    <a href=\"" . __ROOT__ . "/tenders/" . $type . "/" . $page + 1 . "\">" . $page + 1 . "</a>
                                                    <a href=\"" . __ROOT__ . "/tenders/" . $type . "/" . $page + 2 . "\">" . $page + 2 . "</a>
                                                ";
                                            }
                                        }
                                        if($page == $page_count) {
                                            $display .= "
                                                </div>
                                                <div id='mobile-pages' class='d-inline-block d-sm-none'>
                                                    " . $page . " of  " . $page_count . "
                                                </div>
                                                <a class=\"disabled\" href=\"javascript:void(0);\">Next&nbsp;&gt;</a>
                                                <a class=\"float-right disabled\" href=\"javascript:void(0);\">Last</a>
                                            ";
                                        }
                                        else {
                                            $display .= "
                                                </div>
                                                <div id='mobile-pages' class='d-inline-block d-sm-none'>
                                                    " . $page . " of  " . $page_count . "
                                                </div>
                                                <a href=\"" . __ROOT__ . "/tenders/" . $type . "/" . ($page + 1) . "\">Next&nbsp;&gt;</a>
                                                <a class=\"float-right\" href=\"" . __ROOT__ . "/tenders/" . $type . "/" . $page_count . "\">Last</a>
                                            ";
                                        }
                                        echo $display;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?= $footer ?>
        <?= $script ?>

        <script src="<?= __ROOT__ ?>/assets/js/home.js"></script>
        <script src="<?= __ROOT__ ?>/assets/js/sub-menu.js"></script>
        <script>
            $(".nav-left-<?= $type ?>").addClass("active");
        </script>
    </body>
</html>
