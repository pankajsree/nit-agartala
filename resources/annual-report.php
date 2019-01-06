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
                    <h1><span class="b-b-theme-thick">Annual Report</span></h1>
                    <div class="row justify-content-center text-center">
                        <div class="col-6 col-md-3 pad-btm-2">
                            <a class="d-inline-block indv-resource-block" href="<?= __ROOT__ ?>/docs/annual-report/AnnualReport-2015-2016-English.pdf" target="_blank">
                                <i class="fas fa-file-pdf"></i>
                                <br />
                                <div class="d-inline-block underline-60-100"></div>
                                <br />
                                <div class="d-inline-block w-90">Annual Report and Account details for the year 2015-16</div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 pad-btm-2">
                            <a class="d-inline-block indv-resource-block" href="<?= __ROOT__ ?>/docs/annual-report/AnnualReport-2014-2015-English.pdf" target="_blank">
                                <i class="fas fa-file-pdf"></i>
                                <br />
                                <div class="d-inline-block underline-60-100"></div>
                                <br />
                                <div class="d-inline-block w-90">Annual Report and Account details for the year 2014-15</div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 pad-btm-2">
                            <a class="d-inline-block indv-resource-block" href="<?= __ROOT__ ?>/docs/annual-report/AnnualReport-2013-2014-English.pdf" target="_blank">
                                <i class="fas fa-file-pdf"></i>
                                <br />
                                <div class="d-inline-block underline-60-100"></div>
                                <br />
                                <div class="d-inline-block w-90">Annual Report and Account details for the year 2013-14</div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 pad-btm-2">
                            <a class="d-inline-block indv-resource-block" href="<?= __ROOT__ ?>/docs/annual-report/AnnualReport-2012-2013-English.pdf" target="_blank">
                                <i class="fas fa-file-pdf"></i>
                                <br />
                                <div class="d-inline-block underline-60-100"></div>
                                <br />
                                <div class="d-inline-block w-90">Annual Report and Account details for the year 2012-13</div>
                            </a>
                        </div>
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
