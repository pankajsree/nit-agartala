<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>About - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Office of the Director</span>
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
                            <div class="row pad-btm-5">
                                <div class="col-3">
                                    <img class="img-res border-circle d-block middle" src="../assets/img/administration/director-nita.jpg" alt="Harish Kumar Sharma" />
                                </div>
                                <div class="col-9">
                                    <div class="name d-block middle">
                                        <div class="text-bold bigger l-s-1">Prof. H. K. Sharma</div>
                                        Director, NIT Agartala
                                        <br /><br />
                                        <span class="text-bold">Phone: </span>0381-2546630<br />
                                        <span class="text-bold">Fax: </span>0381-2546360<br />
                                        <span class="text-bold">Email: </span>director@nita.ac.in | nita.director@gmail.com<br /><br />
                                        <a class="color-theme" href="#">CV of Director</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
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
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-administration, .nav-left-director").addClass("active");
            });
        </script>
    </body>
</html>
