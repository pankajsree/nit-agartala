<?php
    require_once("common/common.php");
    require_once("common/db-config.php");

    $notice_count = 6;

    $query_notice = "SELECT `file_name`, `display_text`, `uploaded_on` FROM `notice` ORDER BY `uploaded_on` DESC LIMIT " . $notice_count;
    $result_notice = mysqli_query($conn, $query_notice);

    $query_news = "SELECT `type`, `file_name`, `display_text`, `uploaded_on` FROM `news` ORDER BY `uploaded_on` DESC LIMIT " . $notice_count;
    $result_news = mysqli_query($conn, $query_news);

    $query_tenders = "SELECT `file_name`, `display_text`, `uploaded_on` FROM `tenders` ORDER BY `uploaded_on` DESC LIMIT " . $notice_count;
    $result_tenders = mysqli_query($conn, $query_tenders);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="assets/css/home.css" />
    </head>
    <body>
        <?= $nav ?>

        <!-- Carousel -->

        <div id="home-carousel"  class="carousel slide">
            <ul class="carousel-indicators bg-transparent">
                <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home-carousel" data-slide-to="1"></li>
                <li data-target="#home-carousel" data-slide-to="2"></li>
                <li data-target="#home-carousel" data-slide-to="3"></li>
                <li data-target="#home-carousel" data-slide-to="4"></li>
                <li data-target="#home-carousel" data-slide-to="5"></li>
                <li data-target="#home-carousel" data-slide-to="6"></li>
                <li data-target="#home-carousel" data-slide-to="7"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="prev-container" data-bg-img="8.jpg"></div>
                    <div class="img-container">
                        <img src="assets/img/carousel/1.jpg" title="" alt="" />
                        <div class="carousel-caption">
                            <h3>Administrative Building</h3>
                            <p>NIT Agartala is located in the midst of serene greenery having picturesque natural beauty.</p>
                        </div>
                    </div>
                    <div class="next-container" data-bg-img="2.jpg"></div>
                </div>
                <div class="carousel-item">
                    <div class="prev-container" data-bg-img="1.jpg"></div>
                    <div class="img-container">
                        <img src="assets/img/carousel/2.jpg" title="" alt="" />
                        <div class="carousel-caption">
                            <h3>Aryabhatta Hostel</h3>
                            <p>The Institute has both Boys’ hostel and Girls’ hostel facilities.</p>
                        </div>
                    </div>
                    <div class="next-container" data-bg-img="3.jpg"></div>
                </div>
                <div class="carousel-item">
                    <div class="prev-container" data-bg-img="2.jpg"></div>
                    <div class="img-container">
                        <img src="assets/img/carousel/3.jpg" title="" alt="" />
                        <div class="carousel-caption">
                            <h3>Visvesvaraya Auditorium</h3>
                            <p>The students actively participate in all co-curricular activities like drama competition, rallies on various themes, NSS programmes etc.</p>
                        </div>
                    </div>
                    <div class="next-container" data-bg-img="4.jpg"></div>
                </div>
                <div class="carousel-item">
                    <div class="prev-container" data-bg-img="3.jpg"></div>
                    <div class="img-container">
                        <img src="assets/img/carousel/4.jpg" title="" alt="" />
                        <div class="carousel-caption">
                            <h3>Sports Complex of NIT Agartala</h3>
                            <p>The students participate in games and sports along with other co-curricular activities.</p>
                        </div>
                    </div>
                    <div class="next-container" data-bg-img="5.jpg"></div>
                </div>
                <div class="carousel-item">
                    <div class="prev-container" data-bg-img="4.jpg"></div>
                    <div class="img-container">
                        <img src="assets/img/carousel/5.jpg" title="" alt="" />
                        <div class="carousel-caption">
                            <h3>Department of Computer Science &amp; Engineering</h3>
                            <p>This Institute offers B.Tech, M.Tech and MCA courses under Computer Science & Engineering.</p>
                        </div>
                    </div>
                    <div class="next-container" data-bg-img="6.jpg"></div>
                </div>
                <div class="carousel-item">
                    <div class="prev-container" data-bg-img="5.jpg"></div>
                    <div class="img-container">
                        <img src="assets/img/carousel/6.jpg" title="" alt="" />
                        <div class="carousel-caption">
                            <h3>NIT Agartala</h3>
                            <p>An Institute of National Importance.</p>
                        </div>
                    </div>
                    <div class="next-container" data-bg-img="7.jpg"></div>
                </div>
                <div class="carousel-item">
                    <div class="prev-container" data-bg-img="6.jpg"></div>
                    <div class="img-container">
                        <img src="assets/img/carousel/7.jpg" title="" alt="" />
                        <div class="carousel-caption">
                            <h3>Knowledge Park</h3>
                            <p>Education must focus on character-building assimilation of ideas.</p>
                        </div>
                    </div>
                    <div class="next-container" data-bg-img="8.jpg"></div>
                </div>
                <div class="carousel-item">
                    <div class="prev-container" data-bg-img="7.jpg"></div>
                    <div class="img-container">
                        <img src="assets/img/carousel/8.jpg" title="" alt="" />
                        <div class="carousel-caption">
                            <h3>Entrance Gate, NIT Agartala</h3>
                            <p>It is about 4 km away from the National Highway.</p>
                        </div>
                    </div>
                    <div class="next-container" data-bg-img="1.jpg"></div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- News | Announcements | Notices | Tenders Section -->

        <div class="official parallax">
            <div class="mask"></div>
            <div class="customed-fluid container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-xl-4">
                        <div id="news">
                            <div class="caption b-b-theme-center">News &amp; Announcements</div>
                            <ul class="news-container">
                                <?php
                                    while($news = mysqli_fetch_assoc($result_news)) {
                                        $date = date_create($news['uploaded_on']);
                                        $ddmm = date_format($date, "d M");
                                        $yyyy = date_format($date, "Y");
                                ?>
                                <li class="row">
                                    <div class="col-3">
                                        <div class="date">
                                            <div class="dd-mm"><?= $ddmm ?></div>
                                            <div class="yyyy"><?= $yyyy ?></div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                <?php
                                    if($news['type'] == 'file') {
                                ?>
                                        <a href="uploads/news/<?= $news['file_name'] ?>" target="_blank" class="content">
                                            <?= $news['display_text'] ?>
                                        </a>
                                <?php
                                    }
                                    else {
                                ?>
                                        <a href="<?= $news['file_name'] ?>" target="_blank" class="content">
                                            <?= $news['display_text'] ?>
                                        </a>
                                <?php
                                    }
                                ?>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                            <div class="show-more">
                                <a href="news-announcements">See More&nbsp;&gt;&gt;<div class="underline"></div></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-4">
                        <div id="notices">
                            <div class="caption b-b-theme-center">Notices</div>
                            <ul class="news-container">
                                <?php
                                    while($notice = mysqli_fetch_assoc($result_notice)) {
                                        $date = date_create($notice['uploaded_on']);
                                        $ddmm = date_format($date, "d M");
                                        $yyyy = date_format($date, "Y");
                                ?>
                                <li class="row">
                                    <div class="col-3">
                                        <div class="date">
                                            <div class="dd-mm"><?= $ddmm ?></div>
                                            <div class="yyyy"><?= $yyyy ?></div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <a href="uploads/notice/<?= $notice['file_name'] ?>" target="_blank" class="content">
                                            <?= $notice['display_text'] ?>
                                        </a>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                            <div class="show-more">
                                <a href="notices">See More&nbsp;&gt;&gt;<div class="underline"></div></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-4">
                        <div id="tenders">
                            <div class="caption b-b-theme-center">Tenders</div>
                            <ul class="news-container">
                                <?php
                                    while($tenders = mysqli_fetch_assoc($result_tenders)) {
                                        $date = date_create($tenders['uploaded_on']);
                                        $ddmm = date_format($date, "d M");
                                        $yyyy = date_format($date, "Y");
                                ?>
                                <li class="row">
                                    <div class="col-3">
                                        <div class="date">
                                            <div class="dd-mm"><?= $ddmm ?></div>
                                            <div class="yyyy"><?= $yyyy ?></div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <a href="uploads/tenders/<?= $tenders['file_name'] ?>" target="_blank" class="content">
                                            <?= $tenders['display_text'] ?>
                                        </a>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                            <div class="show-more">
                                <a href="tenders">See More&nbsp;&gt;&gt;<div class="underline"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Links -->

        <div id="featured-links" class="container-fluid">
            <div class="row">
                <div class="division col-12 col-md-4 div-1">
                    <img src="assets/img/director.jpg" alt="">
                    <div class="heading"><span class="b-b-white pad-btm-0-25">Director&apos;s Message</span></div>
                    <div class="content">The National Institute of Technology and Agartala has been constituted by the honorable Govt. of India with the mission to herald a new chapter of development in the country, particularly, in the North-East states, through pursuit of excellence in technical education and research.</div>
                    <div class="show-more">
                        <a href="docs/director_msg.pdf" target="_blank">See More&nbsp;&gt;&gt;<div class="underline"></div></a>
                    </div>
                </div>
                <div class="division col-12 col-md-4 div-2">
                    <img src="assets/img/laws.jpg" alt="">
                    <div class="heading"><span class="b-b-white pad-btm-0-25">Act, Statutes & Rules</span></div>
                    <div class="content">Acts, Statutes &amp; Rules along with other notifications regarding various rules for NIT Agartala. Details of those rules &amp; regulations are provided.</div>
                    <div class="show-more">
                        <a href="acts-statutes-rules">See More&nbsp;&gt;&gt;<div class="underline"></div></a>
                    </div>
                </div>
                <div class="division col-12 col-md-4 div-3">
                    <img src="assets/img/anti-ragging.jpg" alt="">
                    <div class="heading"><span class="b-b-white pad-btm-0-25">Anti-Ragging Policies</span></div>
                    <div class="content">Ragging means doing an act which causes or is likely to cause insult or annoyance of fear or apprehension or threat or intimidation or outrage of modesty or injury to a student. Ragging within or outside the NIT, Agartala campus is banned.</div>
                    <div class="show-more">
                        <a href="anti-ragging">See More&nbsp;&gt;&gt;<div class="underline"></div></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Important Links -->

        <div id="resource-activity" class="container mar-top-3">
            <h2 class="topic-caption mar-btm-1 text-center"><span class="b-b-black">Resources &amp; Activities</span></h2>
            <div class="row justify-content-center">
                <div class="division col-12 col-md-6 col-lg-4">
                    <div class="content">
                        <img src="assets/img/seminars.jpg" alt="">
                        <h4 class="heading"><span class="b-b-black pad-btm-0-5">Academic Activities</span></h4>
                        <div class="text">
                            Beginning with the Industrial Revolution era, a workshop may be a room, rooms or building which provides both the area and tools (or machinery) that may be required for the manufacture or repair of manufactured goods.
                        </div>
                        <div class="show-more">
                            <a href="academics/activities">See More&nbsp;&gt;&gt;<div class="underline"></div></a>
                        </div>
                    </div>
                </div>

                <div class="division col-12 col-md-6 col-lg-4">
                    <div class="content">
                        <img src="assets/img/library.jpg" alt="">
                        <h4 class="heading"><span class="b-b-black pad-btm-0-5">Library</span></h4>
                        <div class="text">
                            NITA central library is open access. The OPAC (Online Public Access Catalogue) facility having different search criteria has been launched to keep members aware of library holdings and is accessible 24 x 7 by the members.
                        </div>
                        <div class="show-more">
                            <a href="academics/library">See More&nbsp;&gt;&gt;<div class="underline"></div></a>
                        </div>
                    </div>
                </div>

                <div class="division col-12 col-md-6 col-lg-4">
                    <div class="content">
                        <img src="assets/img/teqip.jpg" alt="">
                        <h4 class="heading"><span class="b-b-black pad-btm-0-5">TEQIP - III</span></h4>
                        <div class="text">
                            Technical Education Quality Improvement Programme of Government of India (TEQIP), implemented as a World Bank assisted Project to improve the quality of technical education system in the country.
                        </div>
                        <div class="show-more">
                            <a href="resources/teqip-3">See More&nbsp;&gt;&gt;<div class="underline"></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Events -->

        <div id="upcoming-events" class="container-fluid">
            <div class="container">
                <h3 class="text-center"><span class="b-b-white">Upcoming Events</span></h3>
                <div id="events-carousel"  class="carousel slide">
                    <ul class="carousel-indicators">
                        <li data-target="#events-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#events-carousel" data-slide-to="1"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="http://www.nita.ac.in/aayam/" target="_blank">
                                <div class="row carousel-caption">
                                    <div class="col-4 col-sm-3 text-center">
                                        <div class="mon-dd text-center">
                                            <div class="dates">
                                                Nov<br />2
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 col-sm-9">
                                        <h5>Aayam 2018, Annual Technical Fest of NIT Agartala</h5>
                                        <p><span class="hyphen"></span>November 2-4, 2018</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="http://icciiot2018.iaasse.org/" target="_blank">
                                <div class="row carousel-caption">
                                    <div class="col-4 col-sm-3 text-center">
                                        <div class="mon-dd text-center">
                                            <div class="dates">
                                                Dec<br />26
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 col-sm-9">
                                        <h5>International Conference on Internet of Things, ICCIIoT 2018</h5>
                                        <p><span class="hyphen"></span>December 26-27, 2018</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- NITA Social Links -->

        <div id="social-media" class="customed-fluid container-fluid text-center">
            <h3 class="no-mar"><span class="b-b-black">NITA Social Links</span></h3>
            <div class="row justify-content-center no-mar">
                <div class="col-xl-4 col-lg-6 col-12 mar-top-2">
                    <div class="twitter col">
                        <a class="twitter-timeline" href="https://twitter.com/NITAgartalaoffi?ref_src=twsrc%5Etfw">Tweets by NITAgartalaoffi</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12 mar-top-2">
                    <div class="facebook col">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fnit.agartala.501%2Fposts%2F153675705518987%3A0&width=300"></iframe>
                        <!-- <iframe src="https://www.facebook.com/nit.agartala.501"></iframe> -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12 mar-top-2">
                    <div class="linkedin col">
                        <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:6438791118111932416" ></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Photo Gallery -->

        <div id="photo-gallery" class="container-fluid">
            <div class="container text-center">
                <h3><span class="b-b-white">Photo Gallery</span></h3>
                <div class="row justify-content-center">
                    <div class="col col-12 col-md-6 col-lg-4">
                        <!-- <img src="assets/img/gallery/2.jpg" alt="" class="img-res" /> -->
                        <a target="_blank" data-flickr-embed="true" data-context="true"  href="https://www.flickr.com/photos/155698633@N04/24512918968/in/album-72157662576920108/" title="NITA_convo10_1341"><img src="https://farm5.staticflickr.com/4574/24512918968_5853a171f6.jpg" width="320" height="213" alt="NITA_convo10_1341"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <!-- <img src="assets/img/gallery/3.jpg" alt="" class="img-res" /> -->
                        <a data-flickr-embed="true" data-context="true"  href="https://www.flickr.com/photos/155698633@N04/27690410229/in/album-72157691046234764/" title="DSC_3253"><img src="https://farm5.staticflickr.com/4588/27690410229_37aa2d3da9_n.jpg" width="320" height="212" alt="DSC_3253"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <!-- <img src="assets/img/gallery/4.jpg" alt="" class="img-res" /> -->
                        <a target="_blank" data-flickr-embed="true" data-context="true"  href="https://www.flickr.com/photos/155698633@N04/38353190862/in/album-72157662576920108/" title="NITA_convo10_1349"><img src="https://farm5.staticflickr.com/4530/38353190862_cbdd1f538d.jpg" width="320" height="213" alt="NITA_convo10_1349"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <!-- <img src="assets/img/gallery/4.jpg" alt="" class="img-res" /> -->
                        <a data-flickr-embed="true" data-context="true"  href="https://www.flickr.com/photos/155698633@N04/24600883897/in/album-72157691046234764/" title="DSC_3238"><img src="https://farm5.staticflickr.com/4640/24600883897_9b90566ea3_n.jpg" width="320" height="212" alt="DSC_3238"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <!-- <img src="assets/img/gallery/4.jpg" alt="" class="img-res" /> -->
                        <a data-flickr-embed="true" data-context="true"  href="https://www.flickr.com/photos/155698633@N04/38352973722/in/album-72157662576920108/" title="NITA_convo10_0096"><img src="https://farm5.staticflickr.com/4582/38352973722_a07aca28e1_n.jpg" width="320" height="213" alt="NITA_convo10_0096"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <!-- <img src="assets/img/gallery/4.jpg" alt="" class="img-res" /> -->
                        <a data-flickr-embed="true" data-context="true"  href="https://www.flickr.com/photos/155698633@N04/27690895189/in/album-72157691046234764/" title="_DSC2293"><img src="https://farm5.staticflickr.com/4681/27690895189_ee20690ce8_n.jpg" width="320" height="212" alt="_DSC2293"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="show-more">
                        <a href="https://www.flickr.com/photos/155698633@N04/" target="_blank">Explore&nbsp;&gt;&gt;<div class="underline"></div></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Join us Message -->

        <div class="join-institute parallax">
            <div class="mask-lite"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 position-relative">
                        <div class="content">
                            <div class="msg-header">
                                Why should you join NIT Agartala
                            </div>
                            <div class="msg-main">
                                If YOU are looking for a bright career in engineering look no further. Come and grow with us at NIT AGARTALA.
                            </div>

                            <script src="https://apis.google.com/js/platform.js"></script>
                            <div class="g-ytsubscribe" data-channelid="UCzHTTV2U4RW-e86YCjoePBw" data-layout="default" data-theme="dark" data-count="default"></div>

                            <div class="msg-footer">
                                <a class="join-explore" href="join-nita">Know More<div class="underline"></div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <iframe id="iframe-1" class="mar-top-2" src="https://www.youtube.com/embed/zoXWpm6Lj7o?rel=0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <?= $footer ?>
        <?= $script ?>
        <script src="assets/js/home.js"></script>

    </body>
</html>
