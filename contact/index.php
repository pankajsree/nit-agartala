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
            <main id="contact-page">
                <div class="container">
                    <h1><span class="b-b-theme-thick">Contact</span></h1>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="text-bold">
                                Address:
                            </div>
                            <address>
                                National Institute of Technology, Agartala<br />
                                P.O.: NIT Agartala Sub Post Office<br />
                                Barjala, Jirania, TRIPURA (W)<br />
                                Pin: 799046<br />
                            </address>
                            <div class="text-bold">
                                How to Reach:
                            </div>
                            The Institute is 4 km off National Highway (NH-44) and about 20 km away from capital city. Agartala is well connected by Rail &amp; Air. Prepaid Taxi &amp; Auto services are available from Agartala Airport to the Institute.<br /><br />
                            <span class="text-bold">Nearest railstation:</span> 2 km away (Jirania)<br />
                            <span class="text-bold">Airlines:</span> Airlines connecting Delhi, Kolkata, Guwahati and Mumbai directly.<br /><br />
                            To know more about Tripura visit <a href="https://www.tripura.gov.in" target="_blank">https://www.tripura.gov.in</a>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=NIT%20Agartala&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                    <div class="row mar-top-1">
                        <div class="col-12">
                            <h2><span class="b-b-theme-thick">General Inquiries</span></h2>
                            <div class="text-bold">
                                Office of Director
                            </div>
                            Phone: 0381 2546630<br />
                            Fax: 0381-2546360
                            <div class="text-bold">
                                Office of Dean Academic
                            </div>
                            Phone: 0381-2548537 (O), 0381-2548510 (O)<br />
                            Fax: 0381-2548512, 0381-2546360
                            <div class="text-bold">
                                Office of Registrar
                            </div>
                            Phone: 0381 2546629 (O)<br />
                            Fax: 0381-2548512
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script>
            $(document).ready(function() {
                $("#nav-contact").addClass("active");
            });
        </script>
    </body>
</html>
