<?php
    require("../common/common.php");
    require("../common/about.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>About - NIT Agartala</title>
        <meta charset="utf-8">
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Director - NIT Agartala</span>
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
                            <div class="fac-indv b-b-theme pad-btm-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="text-bold">Prof. H. K. Sharma</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="text-bold">Designation&nbsp;:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <span class="text-normal">Director, NIT Agartala</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="text-bold">Phone&nbsp;:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <span class="text-normal">0381-2546630</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="text-bold">Fax&nbsp;:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <span class="text-normal">0381-2546360</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="text-bold">Email&nbsp;:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <span class="text-normal"><a href="#">director@nita.ac.in</a> | <a href="#">nita.director@gmail.com</a></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="text-bold">Profile&nbsp;:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <span class="text-normal"><a class="color-theme" href="#">CV of Director</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <img class="img-res" src="../assets/img/administration/director-nita.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pad-top-5">
                                <div class="col-12 pad-btm-2">
                                    <div class="text-bold">Jyotilal Debbarma</div>
                                    PA to Director, National Institute of Technology Agartala
                                    <br />
                                    <span class="text-bold">Email: </span>patodirector@nita.ac.in<br />
                                    <span class="text-bold">Phone: </span>0381-2546630 (O), +91 9436126548 (M)<br />
                                    <span class="text-bold">Fax: </span>0381-2546360<br />
                                </div>
                                <div class="col-12 pad-btm-2">
                                    <div class="text-bold">Sajal Kumar Ganguly</div>
                                    PS (Contractual) to the Director, NIT Agartala
                                    <br />
                                    <span class="text-bold">Phone: </span>0381-2546630 (O)<br />
                                    <span class="text-bold">Fax: </span>0381-2546360<br />
                                </div>
                                <div class="col-12 pad-btm-2">
                                    <div class="text-bold">Shri Bidyut Kumar Ghosh</div>
                                    Junior Assistant (Contractual), Office of the Director, NIT Agartala
                                    <br />
                                    <span class="text-bold">Phone: </span>0381-2546630 (O), +91 9436450809 (M)<br />
                                    <span class="text-bold">Fax: </span>0381-2546360<br />
                                </div>
                                <div class="col-12 pad-btm-2">
                                    <div class="text-bold">Smt. Shampa Pal (Bhowmik)</div>
                                    Junior Assistant (Contractual), Office of the Director, NIT Agartala
                                    <br />
                                    <span class="text-bold">Phone: </span>0381-2546630 (O)<br />
                                    <span class="text-bold">Fax: </span>0381-2546360<br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/about.js"></script>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-about, .sub-nav-director").addClass("active");
            });
        </script>
    </body>
</html>
