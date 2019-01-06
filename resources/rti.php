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
                    <h1><span class="b-b-theme-thick">RTI Act 2005</span></h1>
                    <div class="row justify-content-center text-center">
                        <div class="col-6 col-md-3 pad-btm-2">
                            <a class="d-inline-block indv-resource-block" href="<?= __ROOT__ ?>/docs/rti/RTI_TransperencyAudit-Final-Sept2018.pdf" target="_blank">
                                <i class="fas fa-file-pdf"></i>
                                <br />
                                <div class="d-inline-block underline-60-100"></div>
                                <br />
                                <div class="d-inline-block w-90">Mandatory Disclosure vide Section 4 of RTI Act 2005</div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 pad-btm-2">
                            <a class="d-inline-block indv-resource-block" href="http://rti.gov.in/" target="_blank">
                                <i class="fas fa-globe"></i>
                                <br />
                                <div class="d-inline-block underline-60-100"></div>
                                <br />
                                <div class="d-inline-block w-90">Right to Information Act, 2005</div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 pad-btm-2">
                            <a class="d-inline-block indv-resource-block" href="<?= __ROOT__ ?>/docs/rti/rti-act.pdf" target="_blank">
                                <i class="fas fa-file-pdf"></i>
                                <br />
                                <div class="d-inline-block underline-60-100"></div>
                                <br />
                                <div class="d-inline-block w-90">Right to Information Act, 2005</div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 pad-btm-2">
                            <a class="d-inline-block indv-resource-block" href="<?= __ROOT__ ?>/docs/rti/rtiguide_aa.pdf" target="_blank">
                                <i class="fas fa-file-pdf"></i>
                                <br />
                                <div class="d-inline-block underline-60-100"></div>
                                <br />
                                <div class="d-inline-block w-90">Guidelines for the Officers designated as first appellate authority under the RTI Act, 2005</div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 pad-btm-2">
                            <a class="d-inline-block indv-resource-block" href="<?= __ROOT__ ?>/docs/rti/rtiguide_info.pdf" target="_blank">
                                <i class="fas fa-file-pdf"></i>
                                <br />
                                <div class="d-inline-block underline-60-100"></div>
                                <br />
                                <div class="d-inline-block w-90">Guidelines for information seekers under the Right to Information Act, 2005</div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 pad-btm-2">
                            <a class="d-inline-block indv-resource-block" href="<?= __ROOT__ ?>/docs/rti/rtiguide_pa.pdf" target="_blank">
                                <i class="fas fa-file-pdf"></i>
                                <br />
                                <div class="d-inline-block underline-60-100"></div>
                                <br />
                                <div class="d-inline-block w-90">Guidelines for the public authorities under the RTI Act, 2005</div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 pad-btm-2">
                            <a class="d-inline-block indv-resource-block" href="<?= __ROOT__ ?>/docs/rti/nita_rti_circular.pdf" target="_blank">
                                <i class="fas fa-file-pdf"></i>
                                <br />
                                <div class="d-inline-block underline-60-100"></div>
                                <br />
                                <div class="d-inline-block w-90">Circular for engagement of PIO and CPIO under the RTI Act, 2005</div>
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
