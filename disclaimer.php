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
                <h1><span class="b-b-theme-thick">Disclaimer</span></h1>

                <div class="">
                    All efforts have been made to ensure the provided information of the portal as accurate as possible, the same should not be construed as a statement of law or used for any legal purposes. National Institute of Technology Agartala, will not be responsible for any loss to any person caused by inaccuracy in the information available on this Website. It is likely that the details such as contact numbers, email-id, name of the officers holding a post etc. may change prior to its updating in the web site. The content of these websites are owned by the respective department/section.
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
