<?php
    require_once("common/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">

        <?= $head ?>

        <link rel="stylesheet" href="assets/css/home.css" />
        <link rel="stylesheet" href="assets/css/notices.css" />
    </head>
    <body>

        <?= $nav ?>

        <main id="tenders-page">
            <div class="container">
                <h1><span class="b-b-theme-thick">Hyperlink Policy</span></h1>

                <div class="">
                    The hyperlinks given to external sites do not constitute an endorsement of information, products or services offered by these sites. Links to other websites are added after proper verifications. There is possibility that an apparent broken link may be due to net congestion or other causes beyond our control.
                </div>
            </div>
        </main>

        <?= $footer ?>
        <?= $script ?>

        <script>
            $("#nav-sitemap").addClass("active");
            $("main .collapse.expand-init").addClass("show");
        </script>
    </body>
</html>
