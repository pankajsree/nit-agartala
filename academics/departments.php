<?php
    require("../common/common.php");
    require("../common/db-config.php");

    $query = "SELECT `dept_code`, `url`, `dept_name` FROM `departments` WHERE `dept_code` <> 99";
    $result = mysqli_query($conn, $query);
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
                <div class="container">
                    <h1><span class="b-b-theme-thick">Departments</span></h1>
                    <div class="row justify-content-center text-center">
                        <?php
                            while($row = mysqli_fetch_assoc($result)) {
                                $dept_code = $row['dept_code'];
                                $url = $row['url'];
                                $dept_name = $row['dept_name'];
                        ?>
                        <div class="col-6 col-md-4 col-lg-3 pad-btm-2">
                            <a class="d-inline-block indv-dept-block" href="<?= __ROOT__ ?>/academics/department/<?= $url ?>">
                                <img src="<?= __ROOT__ ?>/assets/img/departments/<?= $dept_code ?>.jpg" alt="<?= $dept_name ?>" />
                                <?= $dept_name ?>
                            </a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="<?= __ROOT__ ?>/assets/js/academics.js"></script>
    </body>
</html>
