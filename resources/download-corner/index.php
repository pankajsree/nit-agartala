<?php
    require("../../common/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>About - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../../assets/css/resources.css" />
    </head>
    <body>
        <?= $nav ?>
            <main id="resources-page">
                <div class="container">
                    <h1><span class="b-b-theme-thick">Download Corner</span></h1>
                    <div class="row">
                        <div class="col-12">
                            <ul class='no-pad no-mar menu-left a-no-underline no-bullet line-h-2'>
                                <li class="menu-left-main active b-t-theme b-b-white">
                                    <a data-toggle="collapse" href="#collapseAbout" role="button">Administrative<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                                </li>
                                <div class="collapse expand-init" id="collapseAbout">
                                    <ul class="no-pad list-style-none">
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">The Institute</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">History</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">Director</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">Facilities</a></li>
                                    </ul>
                                </div>
                                <li class="menu-left-main active b-b-white">
                                    <a data-toggle="collapse" href="#collapseAbout" role="button">Academic<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                                </li>
                                <div class="collapse expand-init" id="collapseAbout">
                                    <ul class="no-pad list-style-none">
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">The Institute</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">History</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">Director</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">Facilities</a></li>
                                    </ul>
                                </div>
                                <li class="menu-left-main active b-b-white">
                                    <a data-toggle="collapse" href="#collapseAbout" role="button">Examination<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                                </li>
                                <div class="collapse expand-init" id="collapseAbout">
                                    <ul class="no-pad list-style-none">
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">The Institute</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">History</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">Director</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">Facilities</a></li>
                                    </ul>
                                </div>
                                <li class="menu-left-main active b-b-white">
                                    <a data-toggle="collapse" href="#collapseAbout" role="button">Hostl<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                                </li>
                                <div class="collapse expand-init" id="collapseAbout">
                                    <ul class="no-pad list-style-none">
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">The Institute</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">History</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">Director</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">Facilities</a></li>
                                    </ul>
                                </div>
                                <li class="menu-left-main active b-b-white">
                                    <a data-toggle="collapse" href="#collapseAbout" role="button">Feedback<span class="float-right"><i class="fas fa-sort-down"></i></span></a>
                                </li>
                                <div class="collapse expand-init" id="collapseAbout">
                                    <ul class="no-pad list-style-none">
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">The Institute</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">History</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">Director</a></li>
                                        <li class="menu-left-sub"><a href="<?= __ROOT__ ?>/docs/download-corner/xxxxxxxxxxxxxx.pdf" target="_blank">Facilities</a></li>
                                    </ul>
                                </div>
                                <li class='menu-left-main active b-b-white'><a href='index.php'>Ph. D Forms</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script>
            $(document).ready(function() {
                $("#nav-resources").addClass("active");
                $("main .collapse.expand-init").addClass("show");
            });
        </script>
    </body>
</html>
