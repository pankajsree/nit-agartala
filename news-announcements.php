<?php
    require_once("common/common.php");
    require_once("common/db-config.php");

    if(!isset($_GET['page'])) {
        $page = 1;
    }
    else {
        $page = $_GET['page'];
    }

    $per_page = 15;

    $count = 1;

    $offset = ($page - 1) * $per_page;

    $query = "SELECT COUNT(1) FROM `news`";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    $page_count = ceil(($row[0] / $per_page));

    if($page > $page_count) {
        http_response_code(404);
        require("/error/404.php");
        die();
    }

    $query = "SELECT `type`, `file_name`, `display_text`, `uploaded_on` FROM `news` ORDER BY `uploaded_on` DESC LIMIT " . $offset . ", " . $per_page;
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

        <main>
            <div class="container custom">
                <h1><span class="b-b-theme-thick">News &amp Announcements</span></h1>
                <div class="pdf-container">
                    <div class="row subject">
                        <div class="col-left col-3 col-sm-2">
                            <div class="subject-heading">
                                Date
                            </div>
                        </div>
                        <div class="col-9 col-sm-10">
                            <div class="subject-heading">
                                News &amp; Announcements
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
                            <?php
                                if($notice['type'] == 'file') {
                            ?>
                            <a href="<?= __ROOT__ ?>/uploads/news/<?= $notice['file_name'] ?>" target="_blank" class="content">
                                <?= $notice['display_text'] ?>
                            </a>
                            <?php
                                }
                                else {
                            ?>
                            <a href="<?= $notice['file_name'] ?>" target="_blank" class="content">
                                <?= $notice['display_text'] ?>
                            </a>
                            <?php
                                }
                            ?>
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
                                        <a class=\"float-left\" href=\"" . __ROOT__ . "/news-announcements/1\">First</a>
                                        <a href=\"" . __ROOT__ . "/news-announcements/" . ($page - 1) . "\">&lt;&nbsp;Prev</a>
                                        <div id='dekstop-pages' class='d-none d-sm-inline-block'>
                                    ";
                                }
                                if($page_count <= 5) {
                                    for($i = 1; $i <= $page_count; $i++) {
                                        if($i == $page) {
                                            $display .= "<a class=\"active\" href=\"" . __ROOT__ . "/news-announcements/" . $i . "\">" . $i . "</a>";
                                        }
                                        else {
                                            $display .= "<a href=\"" . __ROOT__ . "/news-announcements/" . $i . "\">" . $i . "</a>";
                                        }
                                    }
                                }
                                else {
                                    if($page < 3) {
                                        for($i = 1; $i <= 5; $i++) {
                                            if($i == $page) {
                                                $display .= "<a class=\"active\" href=\"" . __ROOT__ . "/news-announcements/" . $i . "\">" . $i . "</a>";
                                            }
                                            else {
                                                $display .= "<a href=\"" . __ROOT__ . "/news-announcements/" . $i . "\">" . $i . "</a>";
                                            }
                                        }
                                    }
                                    else if($page > $page_count - 2) {
                                        for($i = $page_count - 4; $i <= $page_count; $i++) {
                                            if($i == $page) {
                                                $display .= "<a class=\"active\" href=\"" . __ROOT__ . "/news-announcements/" . $i . "\">" . $i . "</a>";
                                            }
                                            else {
                                                $display .= "<a href=\"" . __ROOT__ . "/news-announcements/" . $i . "\">" . $i . "</a>";
                                            }
                                        }
                                    }
                                    else {
                                        $display .= "
                                            <a href=\"" . __ROOT__ . "/news-announcements/" . $page - 2 . "\">" . $page - 2 . "</a>
                                            <a href=\"" . __ROOT__ . "/news-announcements/" . $page - 1 . "\">" . $page - 1 . "</a>
                                            <a class=\"active\" href=\"" . __ROOT__ . "/news-announcements/" . $page . "\">" . $page . "</a>
                                            <a href=\"" . __ROOT__ . "/news-announcements/" . $page + 1 . "\">" . $page + 1 . "</a>
                                            <a href=\"" . __ROOT__ . "/news-announcements/" . $page + 2 . "\">" . $page + 2 . "</a>
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
                                        <a href=\"" . __ROOT__ . "/news-announcements/" . ($page + 1) . "\">Next&nbsp;&gt;</a>
                                        <a class=\"float-right\" href=\"" . __ROOT__ . "/news-announcements/" . $page_count . "\">Last</a>
                                    ";
                                }
                                echo $display;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?= $footer ?>
        <?= $script ?>

        <script src="<?= __ROOT__ ?>/assets/js/home.js"></script>
    </body>
</html>
