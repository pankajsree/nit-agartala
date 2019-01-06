<?php
    require("../common/common.php");
    require("../common/db-config.php");

    if(!isset($_GET['mem']) || !isset($_GET['role'])) {
        http_response_code(404);
        require("../404.php");
        die();
    }

    $member = $_GET['mem'];
    $role = $_GET['role'];

    // if(!isset($_POST['mem']) || !isset($_POST['role'])) {
    //     http_response_code(404);
    //     require("../404.php");
    //     die();
    // }
    //
    // $member = $_POST['mem'];
    // $role = $_POST['role'];
    //
    // // echo $member;
    // // echo $role;
    // // die();
    //
    // $tbl = "";
    //
    // if($role == 1) {
    //     $tbl = "staff";
    // }
    // else if($role == 2) {
    //     $tbl = "faculty";
    // }
    // else {
    //     // HAHAHAHAHA
    // }

    $query = "SELECT `f_name`, `m_name`, `l_name` FROM " . $role . " WHERE `user_id` = " . $member;
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 0) {
        http_response_code(404);
        require("../404.php");
        die();
    }
    $row = mysqli_fetch_assoc($result);
    $mem_name = $row['f_name'] . " " . $row['m_name'] . " " . $row['l_name'];

    $query = "SELECT `paper` FROM `publications` WHERE `paper_type` = 1 AND `user_id` = " . $member;
    $journal_result = mysqli_query($conn, $query);
    if(!$journal_result) {
        die("Query Failed" . mysqli_error($conn));
    }
    $journal_count = mysqli_num_rows($journal_result);

    $query = "SELECT `paper` FROM `publications` WHERE `paper_type` = 2 AND `user_id` = " . $member;
    $conf_result = mysqli_query($conn, $query);
    if(!$conf_result) {
        die("Query Failed" . mysqli_error($conn));
    }
    $conf_count = mysqli_num_rows($conf_result);

    if($journal_count == 0 && $conf_count == 0) {
        http_response_code(404);
        require("../404.php");
        die();
        break;
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Publications</title>
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/academics.css" />
    </head>
    <body>
        <?= $nav ?>
            <main id="academics-page">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1><span class="b-b-theme-thick"><?= $mem_name ?> - Publications</span></h1>
                            <?php
                                if($journal_count > 0) {
                            ?>
                                    <h4><span class="b-b-theme-normal">Papers in National and International Journals</span></h4>
                            <?php
                                }
                                $journal_content = "<ol>";
                                while($row = mysqli_fetch_assoc($journal_result)) {
                                    $journal_content .= "<li>" . $row['paper'] . "</li>";
                                }
                                $journal_content .= "</ol>";
                                echo $journal_content;
                            ?>

                            <?php
                                if($conf_count > 0) {
                            ?>
                                    <h4><span class="b-b-theme-normal">Papers in National and International Conferences</span></h4>
                            <?php
                                }
                                $conf_content = "<ol>";
                                while($row = mysqli_fetch_assoc($conf_result)) {
                                    $conf_content .= "<li>" . $row['paper'] . "</li>";
                                }
                                $conf_content .= "</ol>";
                                echo $conf_content;
                            ?>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/academics.js"></script>
    </body>
</html>
