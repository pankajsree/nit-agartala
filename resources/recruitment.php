<?php
    require("../common/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>About - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/resources.css" />
    </head>
    <body>
        <?= $nav ?>
            <main id="resources-page">
                <div class="container">
                    <h1><span class="b-b-theme-thick">Recruitment</span></h1>
                    <div class="row justify-content-center text-center">

                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script>
            $(document).ready(function() {
                $("#nav-resources").addClass("active");
            });
        </script>
    </body>
</html>
