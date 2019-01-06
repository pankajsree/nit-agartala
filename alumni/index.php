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
    </head>
    <body>
        <?= $nav ?>
            <main id="alumni-page">
                <div class="container">
                    <h1><span class="b-b-theme-thick">Our Alumni</span></h1>
                    <p><a href="http://nitaa.in/">Click here for Alumni Web Portal</a></p>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script>
            $(document).ready(function() {
                $("#nav-alumni").addClass("active");
            });
        </script>
    </body>
</html>
