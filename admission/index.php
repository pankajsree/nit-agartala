<?php
    require("../common/common.php");
    require("../common/admission.php");
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
            <main>
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Admission</span>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta beatae, nulla perferendis sapiente facere temporibus debitis rerum animi? Quo impedit consequuntur, neque alias delectus maiores eos est. Illum magnam facilis cumque modi cupiditate quidem, placeat expedita porro vero est numquam culpa non alias, voluptatem aliquid nam corporis tempora, incidunt eum error dolores, deserunt in saepe. Ad dolores, alias quos sed corporis dignissimos totam veniam quasi, in nostrum tenetur, vero quisquam quam adipisci non omnis illo! Veritatis nesciunt eum perferendis ipsum dicta, reprehenderit quibusdam facere eos! Dolore atque provident impedit qui minima ipsa fugit asperiores tenetur accusantium molestiae id, illum minus!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta beatae, nulla perferendis sapiente facere temporibus debitis rerum animi? Quo impedit consequuntur, neque alias delectus maiores eos est. Illum magnam facilis cumque modi cupiditate quidem, placeat expedita porro vero est numquam culpa non alias, voluptatem aliquid nam corporis tempora, incidunt eum error dolores, deserunt in saepe. Ad dolores, alias quos sed corporis dignissimos totam veniam quasi, in nostrum tenetur, vero quisquam quam adipisci non omnis illo! Veritatis nesciunt eum perferendis ipsum dicta, reprehenderit quibusdam facere eos! Dolore atque provident impedit qui minima ipsa fugit asperiores tenetur accusantium molestiae id, illum minus!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta beatae, nulla perferendis sapiente facere temporibus debitis rerum animi? Quo impedit consequuntur, neque alias delectus maiores eos est. Illum magnam facilis cumque modi cupiditate quidem, placeat expedita porro vero est numquam culpa non alias, voluptatem aliquid nam corporis tempora, incidunt eum error dolores, deserunt in saepe. Ad dolores, alias quos sed corporis dignissimos totam veniam quasi, in nostrum tenetur, vero quisquam quam adipisci non omnis illo! Veritatis nesciunt eum perferendis ipsum dicta, reprehenderit quibusdam facere eos! Dolore atque provident impedit qui minima ipsa fugit asperiores tenetur accusantium molestiae id, illum minus!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta beatae, nulla perferendis sapiente facere temporibus debitis rerum animi? Quo impedit consequuntur, neque alias delectus maiores eos est. Illum magnam facilis cumque modi cupiditate quidem, placeat expedita porro vero est numquam culpa non alias, voluptatem aliquid nam corporis tempora, incidunt eum error dolores, deserunt in saepe. Ad dolores, alias quos sed corporis dignissimos totam veniam quasi, in nostrum tenetur, vero quisquam quam adipisci non omnis illo! Veritatis nesciunt eum perferendis ipsum dicta, reprehenderit quibusdam facere eos! Dolore atque provident impedit qui minima ipsa fugit asperiores tenetur accusantium molestiae id, illum minus!</p>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-admissions, .sub-nav-home").addClass("active");
            });
        </script>
    </body>
</html>
