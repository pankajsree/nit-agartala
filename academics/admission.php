<?php
    require("../common/common.php");
    require("../common/db-config.php");
    require("../common/departments.php");

    $query = "SELECT `dept_name` FROM departments WHERE `dept_code` = $dept_code";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $dept_name = $row['dept_name'];
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
                <img src="<?= __ROOT__ ?>/assets/img/departments/<?= $dept_code ?>.jpg" class="dept-banner" alt="" />
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Department of <?= $dept_name ?></span>
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
                            <h3 class="text-bold mar-btm-2"><span class="b-b-theme-thick">Admission Procedure</span></h3>
                            <div class="row justify-content-center text-center">
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/RTI_TransperencyAudit-Final-Sept2018.pdf" target="_blank">
                                        <i class="fas fa-file-pdf"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Mandatory Disclosure vide Section 4 of RTI Act 2005</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/nita_rti_circular.pdf" target="_blank">
                                        <i class="fas fa-file-pdf"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Circular for engagement of PIO and CPIO under the RTI Act, 2005</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/nita_rti_circular.pdf" target="_blank">
                                        <i class="fas fa-file-pdf"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Circular for engagement of PIO and CPIO under the RTI Act, 2005</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/nita_rti_circular.pdf" target="_blank">
                                        <i class="fas fa-file-pdf"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Circular for engagement of PIO and CPIO under the RTI Act, 2005</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/nita_rti_circular.pdf" target="_blank">
                                        <i class="fas fa-file-pdf"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Circular for engagement of PIO and CPIO under the RTI Act, 2005</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/nita_rti_circular.pdf" target="_blank">
                                        <i class="fas fa-file-pdf"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Circular for engagement of PIO and CPIO under the RTI Act, 2005</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/nita_rti_circular.pdf" target="_blank">
                                        <i class="fas fa-file-pdf"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Circular for engagement of PIO and CPIO under the RTI Act, 2005</div>
                                    </a>
                                </div>
                            </div>

                            <div class="d-block underline-80-center mar-btm-3"></div>

                            <div class="row justify-content-center text-center">
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/RTI_TransperencyAudit-Final-Sept2018.pdf" target="_blank">
                                        <i class="fas fa-file-word"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Mandatory Disclosure vide Section 4 of RTI Act 2005</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/nita_rti_circular.pdf" target="_blank">
                                        <i class="fas fa-file-word"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Circular for engagement of PIO and CPIO under the RTI Act, 2005</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/RTI_TransperencyAudit-Final-Sept2018.pdf" target="_blank">
                                        <i class="fas fa-file-pdf"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Mandatory Disclosure vide Section 4 of RTI Act 2005</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/nita_rti_circular.pdf" target="_blank">
                                        <i class="fas fa-file-word"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Circular for engagement of PIO and CPIO under the RTI Act, 2005</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/nita_rti_circular.pdf" target="_blank">
                                        <i class="fas fa-file-word"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Circular for engagement of PIO and CPIO under the RTI Act, 2005</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/RTI_TransperencyAudit-Final-Sept2018.pdf" target="_blank">
                                        <i class="fas fa-file-pdf"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Mandatory Disclosure vide Section 4 of RTI Act 2005</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3 pad-btm-2">
                                    <a class="d-inline-block indv-block" href="<?= __ROOT__ ?>/docs/rti/nita_rti_circular.pdf" target="_blank">
                                        <i class="fas fa-file-word"></i>
                                        <br />
                                        <div class="d-inline-block underline-60-100"></div>
                                        <br />
                                        <div class="d-inline-block w-90">Circular for engagement of PIO and CPIO under the RTI Act, 2005</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="<?= __ROOT__ ?>/assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-academics, .sub-nav-admission").addClass("active");
            });
        </script>
    </body>
</html>
