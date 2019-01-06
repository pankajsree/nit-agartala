<?php
    require("../common/common.php");
    require("../common/db-config.php");
    require("../common/departments.php");

    $query = "SELECT `dept_name` FROM departments WHERE dept_code = " . $dept_code;
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed" . mysqli_error($conn));
    }
    $row = mysqli_fetch_assoc($result);
    $dept_name = $row['dept_name'];

    $query = "SELECT s.`user_id`, s.`role_id`, s.`salutation`, s.`f_name`, s.`m_name`, s.`l_name`, s.`email2`, s.`designation`, s.`research_gate_id`, s.`photo`, s.`contact`, s.`qualification`, s.`interest`, s.`website`, s.`join_date`, l.`email`, (SELECT COUNT(*) FROM `publications` p WHERE p.`user_id` = s.`user_id` GROUP BY(p.`user_id`)) AS `publications`, (SELECT COUNT(*) FROM `books_authored` ba WHERE ba.`user_id` = s.`user_id` GROUP BY(ba.`user_id`)) AS `books_authored` FROM `staff` s INNER JOIN `login` l ON l.`id` = s.`user_id` WHERE s.`dept_code` = " . $dept_code . " ORDER BY s.`role_id` DESC";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die($query . mysqli_error($conn));
    }

    $query = "SELECT ba.`user_id`, ba.`books` FROM `books_authored` ba INNER JOIN `staff` s ON s.`user_id` = ba.`user_id` WHERE s.`dept_code` = " . $dept_code . " ORDER BY ba.`user_id`";
    $result_books = mysqli_query($conn, $query);
    if(!$result_books) {
        die($query . mysqli_error($conn));
    }

    $current = 0;

    while($book = mysqli_fetch_assoc($result_books)) {
        // echo $book['books'];
        if($book['user_id'] > $current) {
            $current = $book['user_id'];
            $books[$current] = [];
        }
        array_push($books[$current], $book['books']);
    }

    // print_r($books);
    // die("...");

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
            <main id="staff-page">
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick"><?= $dept_name ?> - Staff</span>
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
                                while($row = mysqli_fetch_assoc($result)) {
                                    $email = $row['email'];
                                    $name = $row['f_name'] . " " . $row['m_name'] . " " . $row['l_name'];
                                    if($row['email2'] != "") {
                                        $email .= ", " . $row['email2'];
                                    }
                                    $row_span = 8;
                                    $publication_flag = 0;
                                    $books_flag = 0;
                                    if($row['publications'] > 0) {
                                        $row_span ++;
                                        $publication_flag = 1;
                                    }
                                    if($row['books_authored'] > 0) {
                                        $row_span ++;
                                        $books_flag = 1;
                                    }
                                    $date = date_create($row['join_date']);
                                    $mmyyyy = date_format($date, "F Y");

                                    $books_content = "";

                                    $temp_user_id = $row['user_id'];

                                    foreach($books["$temp_user_id"] as $value) {
                                        $esc_value = $value;
                                        $books_content .= "<li>" . $esc_value . "</li>";
                                    }
                            ?>
                            <table class="fac-indv">
                                <tbody>
                                    <tr>
                                    <td class="w-22" rowspan="<?= $row_span ?>"><img src="<?= __ROOT__ ?>/assets/img/users/<?= $row['photo'] ?>" title="<?= $name ?>" alt="image" /><br /><h5 class="text-bold text-center"><?= $name ?></h5></td>
                                        <td class="w-18"><span class="text-bold">Designation&nbsp;:</span></td>
                                        <td class="w-60"><span class="text-normal"><?= $row['designation'] ?></span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-18"><span class="text-bold">Qualification&nbsp;:</span></td>
                                        <td class="w-60"><span class="text-normal"><?= $row['qualification'] ?></span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-18"><span class="text-bold">Areas of Interest&nbsp;:</span></td>
                                        <td class="w-60"><span class="text-normal"><?= $row['interest'] ?></span></td>
                                    </tr>
                                    <?php
                                        if($publication_flag == 1) {
                                    ?>
                                    <tr>
                                        <td class="w-18"><span class="text-bold">Publications&nbsp;:</span></td>
                                        <td class="w-60">
                                            <a href="<?= __ROOT__ ?>/academics/department/<?= $dept_url ?>/staff/<?= $row['user_id'] ?>/publications" target="_blank">Click Here</a>
                                            <!-- <form action="publications" method="post" target="_blank">
                                                <input type="hidden" name="mem" value="<?= $row['user_id'] ?>" />
                                                <input type="hidden" name="role" value="<?= $row['role_id'] ?>" />
                                                <input type="submit" name="submit" value="Click Here">
                                            </form> -->
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        if($books_flag == 1) {
                                    ?>
                                    <tr>
                                        <td class="w-18"><span class="text-bold">Books Authored&nbsp;:</span></td>
                                        <td class="w-60">
                                            <div class="text-normal">
                                                <ul class="no-mar pad-left-1">
                                                    <?= $books_content ?>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    <tr>
                                        <td class="w-18"><span class="text-bold">Email&nbsp;:</span></td>
                                        <td class="w-60"><span class="text-normal"><?= $email ?></span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-18"><span class="text-bold">Research GATE&nbsp;ID&nbsp;:</span></td>
                                        <td  class="w-60"><span class="text-normal"><?= $row['research_gate_id'] ?></span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-18"><span class="text-bold">Phone&nbsp;:</span></td>
                                        <td class="w-60"><span class="text-normal">+91&nbsp;<?= $row['contact'] ?>
                                        </span></td>
                                    </tr>
                                    <tr>
                                        <td class="w-18"><span class="text-bold">Web-profile&nbsp;:</span></td>
                                        <td class="w-60"><span class="text-normal"><a href="<?= $row['website'] ?>" target="_blank">Click Here</a></span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="font-italic text-center"><span class="text-normal">Joined the Institute in <?= $mmyyyy ?></span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="<?= __ROOT__ ?>/assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-academics, .sub-nav-staff").addClass("active");
            });
        </script>
    </body>
</html>
