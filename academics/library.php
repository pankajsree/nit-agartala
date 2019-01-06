<?php
    require("../common/common.php");
    require("../common/academics.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Academics</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/academics.css" />
    </head>
    <body>
        <?= $nav ?>
            <main id="academics-page">
                <div class="container">
                    <h1 class="position-relative">
                        <span class="b-b-theme-thick">Library</span>
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
                            <p>NIT Agartala started its journey in 2006 when it was converted from Tripura Engineering college to National Institute of Technology Agartala to impart quality technical education into various levels of higher learning.</p>
                            <p>In the Year 2010, the Institute central library shifted to its present two storied premises comprising of a sprawling, 7827 sq. ft . Starting with a modest book bank, the Institute Central Library has since its inception has steadily evolved into a Central hub of the Institute rendering an indispensible service in the pivotal facets of day to day academic dissemination and research outreach of NIT Agartala. The Institute Library has inherited its preliminary resources from the then TEC(Tripura Engineering College) which had only 3 branches of engineering namely Civil, Mechanical and Electrical. The total book volume in 2008-09 was 48762 which had built up starting from 1965 to 2008. As on 20.01.2016 the number has reached to 84323 (As per accession register: general=59546 & BookBank=24777). The Library had only 495 members in 2008-09. At present the library has 3634 no's of registered members. The number of visitors and books issued per year have increased by many folds which is typically from 4050 in 2008-09 to 19562 in 2014-15.</p>
                            <p>NITA central library is open access. The OPAC (Online Public Access Catalogue) facility having different search criteria has been launched to keep members aware of library holdings and is accessible 24 x 7 by the members. The library is equipped with the modern facilities and resource in the form of books, Journals (printed and electronic) dissertation, thesis, CD- ROM, back volume of journals etc. Library automation is being introduced for the betterment of the institute library and being managed by the LIBMAN, master software. At present data entry and bar-coding of 29,921 books out of 68427 volumes have been completed. After the completion of data entries for remaining volumes the library will be fully computerised. With a view to modernize the central library RFID (Radio Frequency Identification) project has been executed at the library under which 26000 selected book volumes have already been tagged. This RFID systems includes a check in and check-out, station (RFID staff station), EAS security gate etc. A digital library was started in August 2012 having 55 seating capacity to extend perfect academic environment for readers to study inside the library.</p>
                            <p>The NITA Central Library subscribes to various E- Resources from time to time. It subscribed to Science Direct 9 subject collection and IEL -L2 online (IEEE) in 2014-15.</p>
                            <p>The NITA Central Library subscribes to various E- Resources from time to time. It subscribed to Science Direct 9 subject collection and IEL -L2 online (IEEE) in 2014-15.</p>
                            <p>The drive to modernize the Institute Library in its e-portal based resources had been primarily initiated from 2010 has been sustained through succeeding years in response to its immense impact by the institute on the academic and research footprint in the international arena which is evident from the increasing number of publications indexed in MHRD approved bibliographic portals like Scopus. The Institute Library charters out in its quest of greater distinction to the cause of quality research at the Institute.</p>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/academics.js"></script>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(".sub-nav-library").addClass("active");
        </script>
    </body>
</html>
