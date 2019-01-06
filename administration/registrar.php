<?php
    require("../common/common.php");
    require("../common/administration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registrar - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/administration.css">
    </head>
    <body>
        <?= $nav ?>
            <main id="administration-page">
                <div class="container pad-v-2">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Office of Registrar</span>
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
                                    <img class="img-res border-circle d-block middle" src="../assets/img/administration/registrar.jpg" alt="Govind Bhargava" />
                                </div>
                                <div class="col-9">
                                    <div class="name d-block middle">
                                        <div class="text-bold bigger l-s-1">Dr. Govind Bhargava</div>
                                        Registrar, NIT Agartala
                                        <br /><br />
                                        <span class="text-bold">Contact: </span>0381-2546629<br />
                                        <span class="text-bold">Fax: </span>0381-2548512<br />
                                        <span class="text-bold">Email: </span>registrarnita@rediffmail.com
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 pad-btm-2">
                                    <div class="text-bold">Mr. Tanmoy Ghosal</div>
                                    Dy. Registrar(Admin-I/C),<br />
				    National Institute of Technology Agartala<br />
                                    <span class="text-bold">Email: </span>tanmoyg@nita.ac.in<br />
				</div>
				<div class="col-12 pad-btm-2">
                                    <div class="text-bold">Mr. N. N. Mukherjee</div>
                                    Administrative Officer, Office of the Registrar,<br />
				    National Institute of Technology Agartala
                    <span class="text-bold">Contact: </span>0381 2548507(Office)
                                </div>
				<div class="col-12 pad-btm-2">
                                    <div class="text-bold">Mr. Tanumay Pal</div>
                                    Jr. Assistant, Office of the Registrar,<br />
				    National Institute of Technology Agartala
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
                $("#nav-administration, .nav-left-registrar-office, .nav-left-registrar").addClass("active");
                $("#collapseRegistrar, #collapseRegistrarMobile").addClass("show");
            });
        </script>
    </body>
</html>
