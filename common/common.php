<?php

    define('__ROOT__', "/nita");
    define('__EMAIL_ROOT__', "http://127.0.0.1:81/nita");

    // session_start();
    if(isset($_SESSION['uid'])) {
        $user_f_name = $_SESSION['f_name'];
        $icon_class = "fas fa-user";
    }
    else {
        $user_f_name = "Member Login";
        $icon_class = "fas fa-sign-in-alt";
    }

    $head = "
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <link rel='shortcut icon' type='image/png' href='" . __ROOT__ . "/assets/img/logo/favicon.png' />
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous' />
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.1.1/css/all.css' integrity='sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ' crossorigin='anonymous' />
        <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=EB+Garamond|Exo|Josefin+Sans|Merriweather|Playfair+Display|Poppins|Satisfy' rel='stylesheet'>
        <link rel='stylesheet' href='" . __ROOT__ . "/assets/css/common.css' />
    ";

    $nav = "
        <nav id='nav-1'>
            <ul class='ul-1'>
                <li class='b-r-w'>
                    <a href='https://mis.nita.ac.in/mis/' target='_blank'><i class='fas fa-lock'></i>MIS</a>
                </li><li>
                    <a id='nav-login' href='" . __ROOT__ . "/login' target='_blank'><i class='" . $icon_class . "'></i>" . $user_f_name . "</a>
                </li>
            </ul>
            <ul class='ul-2 float-right d-none d-lg-block'>
                <li>
                    <a id='nav-administration' href='" . __ROOT__ . "/administration/'>Administration</a>
                </li><li>
                    <a id='nav-resources' href='" . __ROOT__ . "/resources/'>Resources</a>
                </li><li>
                    <a id='nav-students' href='" . __ROOT__ . "/students/'>Students</a>
                </li><li>
                    <a id='nav-alumni' href='" . __ROOT__ . "/alumni/'>Alumni</a>
                </li><li>
                    <a id='nav-old-site' href='http://www.nita.ac.in/' target='_blank'>Old Website</a>
                </li><li class='b-r-w'>
                    <a id='nav-sitemap' href='" . __ROOT__ . "/sitemap'>Sitemap</a>
                </li><li>
                    <div id=\"google_translate_element\" style=\"display:none\"></div>
                    <a id='d-nav-hindi' class='nav-hindi' onclick=\"toHindi()\" href='javascript:void(0);'>हिंदी में</a>
                </li><li>
                    <a class='nav-a-plus' href='javascript:void(0);'>A+</a>
                </li><li>
                    <a class='nav-a' href='javascript:void(0);'>A</a>
                </li><li>
                    <a class='nav-a-minus' href='javascript:void(0);'>A-</a>
                </li><li>
                    <a class='nav-light' href='javascript:void(0);'><i class=\"fas fa-sun\"></i></a>
                </li><li>
                    <a class='nav-dark' href='javascript:void(0);'><i class=\"fas fa-sun\"></i></a>
                </li>
            </ul>
            <button id='hamburger-container' class=' d-inline-block d-lg-none' data-toggle='collapse' data-target='#mobile-menu'>
                <div id='ham-one' class='ham'></div>
                <div id='ham-two' class='ham'></div>
                <div id='ham-three' class='ham'></div>
            </button>
            <div id='mobile-menu' class='collapse d-lg-none'>
                <div class='row no-mar pad-right-2'>
                    <div class='col-6'>
                        <ul class='no-pad float-right text-right'>
                            <li>
                                <a href='" . __ROOT__ . "/administration/'>Administration</a>
                            </li><li>
                                <a href='" . __ROOT__ . "/resources/'>Resources</a>
                            </li><li>
                                <a href='" . __ROOT__ . "/students/'>Students</a>
                            </li><li>
                                <a href='" . __ROOT__ . "/alumni/'>Alumni</a>
                            </li><li>
                                <a href='http://www.nita.ac.in/' target='_blank'>Old Website</a>
                            </li><li>
                                <a href='" . __ROOT__ . "/sitemap'>Sitemap</a>
                            </li>
                        </ul>
                    </div>

                    <div class='col-6'>
                        <ul class='pad-left-2'>
                            <li>
                                <a class='menu-link' href='" . __ROOT__ . "/'>Home</a>
                            </li><li>
                                <a class='menu-link' href='" . __ROOT__ . "/about/'>About</a>
                            </li><li>
                                <a class='menu-link' href='" . __ROOT__ . "/admission/'>Admission</a>
                            </li><li>
                                <a class='menu-link' href='" . __ROOT__ . "/academics/'>Academics</a>
                            </li><li>
                                <a class='menu-link' href='" . __ROOT__ . "/academics/departments'>Departments</a>
                            </li><li>
                                <a class='menu-link' href='" . __ROOT__ . "/research/'>Research</a>
                            </li><li>
                                <a class='menu-link' href='" . __ROOT__ . "/ccd/'>CCD</a>
                            </li><li>
                                <a class='menu-link' href='" . __ROOT__ . "/campus/'>Campus Life</a>
                            </li><li>
                                <a class='menu-link' href='" . __ROOT__ . "/contact/'>Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class='row no-mar'>
                    <div class='col-12 text-center'>
                        <div id='aid-buttons'>
                            <a id='m-nav-hindi' class='nav-hindi' href='javascript:void(0);'>हिंदी में</a><a class='nav-a-plus' href='javascript:void(0);'>A+</a><a class='nav-a' href='javascript:void(0);'>A</a><a class='nav-a-minus' href='javascript:void(0);'>A-</a><a class='nav-light' href='javascript:void(0);'><i class=\"fas fa-sun\"></i></a><a class='nav-dark' href='javascript:void(0);'><i class=\"fas fa-sun\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class='institute-caption'>
            <a href='" . __ROOT__ . "/'><img src='" . __ROOT__ . "/assets/img/logo/nav-banner.png' title='National Institute of Technology, Agartala' alt='NIT Agartala'></a>
        </div>
        <nav id='nav-2' class='d-none d-lg-block'>
            <ul class='ul-1'>
                <li>
                    <a id='nav-home' class='menu-link' href='" . __ROOT__ . "/'>Home</a>
                </li><li>
                    <a id='nav-about' class='menu-link' href='" . __ROOT__ . "/about/'>About</a>
                    <div class='sub-menu'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-3 blocks'>
                                    <div class='content middle'>
                                        <ul class='d-inline-block'>
                                            <li><a href='" . __ROOT__ . "/about/'>The Institute</a></li>
                                            <li><a href='" . __ROOT__ . "/about/history'>History</a></li>
                                            <li><a href='" . __ROOT__ . "/about/director'>Director</a></li>
                                            <li><a href='" . __ROOT__ . "/about/mission-vision'>Mission &amp; Vision</a></li>
                                            <li><a href='" . __ROOT__ . "/about/facilities'>Facilities</a></li>
                                            <li><a href='https://www.flickr.com/photos/155698633@N04/' target='_blank'>Photo Gallery</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class='col-4 text-justify blocks'>
                                    <div class='content middle'>
                                        The Institute (i.e. erstwhile Tripura Engineering College) was established in 1965 with three branches at UG level viz. Civil, Electrical and Mechanical Engineering. It was initially affiliated to Calcutta University and had the same curriculum structure and examination system of Bengal Engineering College, like other institutes affiliated to the University.
                                    </div>
                                </div>
                                <div class='col-1'></div>
                                <div class='col-4 blocks'>
                                    <div class='content middle'>
                                        <img src='" . __ROOT__ . "/assets/img/nav/about.jpg' alt='' />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li><li>
                    <a id='nav-admissions' class='menu-link' href='" . __ROOT__ . "/admission/'>Admission</a>
                    <div class='sub-menu'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-4 blocks'>
                                    <div class='content'>
                                        <ul class='d-inline-block'>
                                            <li class='text-bold cur-def'>Under-Graduate</li>
                                            <li><a href='" . __ROOT__ . "/admission/ug-procedure'>Procedure &amp; Eligibility</a></li>
                                            <li><a href='" . __ROOT__ . "/admission/ug-capacity'>Intake Capacity</a></li>
                                            <li><a href='" . __ROOT__ . "/admission/ug-fee-structure'>Fee Structure</a></li>
                                            <li><a href='" . __ROOT__ . "/admission/ug-scholarship'>Scholarships</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class='col-4 blocks'>
                                    <div class='content'>
                                        <ul class='d-inline-block'>
                                            <li class='text-bold cur-def'>Post-Graduate</li>
                                            <li><a href='" . __ROOT__ . "/admission/pg-procedure'>Procedure &amp; Eligibility</a></li>
                                            <li><a href='" . __ROOT__ . "/admission/pg-capacity'>Intake Capacity</a></li>
                                            <li><a href='" . __ROOT__ . "/admission/pg-fee-structure'>Fee Structure</a></li>
                                            <li><a href='" . __ROOT__ . "/admission/pg-financial-support'>Financial Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class='col-3 blocks b-l-sub-menu'>
                                    <div class='content middle'>
                                        <ul class='d-inline-block pad-left-1'>
                                            <li><a href='" . __ROOT__ . "/admission/conduct-discipline'>Conduct &amp; Discipline</a></li>
                                            <li><a href='" . __ROOT__ . "/docs/prospectus_2018.pdf' target='_blank'>Prospectus 2018</a></li>
                                            <li><a href='#'>NIMCET 2018</a></li>
                                            <li><a href='#'>CCMT 2018</a></li>
                                            <li><a href='#'>DASA 2018</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li><li>
                    <a id='nav-academics' class='menu-link' href='" . __ROOT__ . "/academics/'>Academics</a>
                    <div class='sub-menu'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-9 blocks'>
                                    <div class='middle'>
                                        <div class='text-center nav-dept-caption'><span class='b-b-theme-normal pad-l-0-5'>Departments</span></div>
                                        <div class='row'>
                                            <div class='col-4 blocks'>
                                                <div class='content middle'>
                                                    <ul class='d-inline-block'>
                                                        <li><a href='" . __ROOT__ . "/academics/department/be'>Bio Engineering</a></li>
                                                        <li><a href='" . __ROOT__ . "/academics/department/ch'>Chemical Engineering</a></li>
                                                        <li><a href='" . __ROOT__ . "/academics/department/ce'>Civil Engineering</a></li>
                                                        <li><a href='" . __ROOT__ . "/academics/department/cse'>Computer Science &amp; Engineering</a></li>
                                                        <li><a href='" . __ROOT__ . "/academics/department/ee'>Electrical Engineering</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class='col-4 blocks'>
                                                <div class='content middle'>
                                                    <ul class='d-inline-block'>
                                                        <li><a href='" . __ROOT__ . "/academics/department/ece'>Electronics &amp; Communication Engineering</a></li>
                                                        <li><a href='" . __ROOT__ . "/academics/department/eie'>Electronics &amp; Instrumentation Engineering</a></li>
                                                        <li><a href='" . __ROOT__ . "/academics/department/me'>Mechanical Engineering</a></li>
                                                        <li><a href='" . __ROOT__ . "/academics/department/pe'>Production Engineering</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class='col-4 blocks'>
                                                <div class='content middle'>
                                                    <ul class='d-inline-block'>
                                                        <li><a href='" . __ROOT__ . "/academics/department/som'>School of Management</a></li>
                                                        <li><a href='" . __ROOT__ . "/academics/department/hss'>Humanities &amp; Social Sciences</a></li>
                                                        <li><a href='" . __ROOT__ . "/academics/department/phy'>Physics</a></li>
                                                        <li><a href='" . __ROOT__ . "/academics/department/cy'>Chemistry</a></li>
                                                        <li><a href='" . __ROOT__ . "/academics/department/ma'>Mathematics</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-3 blocks b-l-sub-menu'>
                                    <div class='content middle'>
                                        <ul class='d-inline-block pad-left-1'>
                                            <li><a href='" . __ROOT__ . "/notices/academic'>Academic Notice</a></li>
                                            <li><a href='" . __ROOT__ . "/academics/activities'>Academic Activities</a></li>
                                            <li><a href='" . __ROOT__ . "/docs/academic_calendar_2018_19.pdf'>Academic Calender</a></li>
                                            <li><a href='" . __ROOT__ . "/academics/result'>Academic Result</a></li>
                                            <li><a href='" . __ROOT__ . "/docs/holidays_2018_19.pdf'>List of Holidays</a></li>
                                            <li><a href='" . __ROOT__ . "/academics/library'>Library</a></li>
                                            <li><a href='" . __ROOT__ . "/academics/convocation'>Convocation</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li><li>
                    <a id='nav-research' class='menu-link' href='" . __ROOT__ . "/research/'>Research</a>
                    <div class='sub-menu'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-3 blocks'>
                                    <div class='content middle'>
                                        <ul class='d-inline-block'>
                                            <li><a href='" . __ROOT__ . "/research/'>Research at NITA</a></li>
                                            <li><a href='" . __ROOT__ . "/research/'>Research &amp; Innovation Cell</a></li>
                                            <li><a href='" . __ROOT__ . "/research/news-announcement'>News / Announcement</a></li>
                                            <li><a href='" . __ROOT__ . "/research/sponsors'>List of Sponsors Project</a></li>
                                            <li><a href='" . __ROOT__ . "/research/people'>People</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class='col-4 text-justify blocks'>
                                    <div class='content middle'>
                                        Research seeks improvements in theory and practice in fields such as (for example) high-speed computation, bioengineering, earthquake prediction, power systems, nanotechnology and construction. Major contributors to engineering research around the world include governments, private business, and academia.
                                    </div>
                                </div>
                                <div class='col-1'></div>
                                <div class='col-4 blocks'>
                                    <div class='content middle'>
                                        <img src='" . __ROOT__ . "/assets/img/nav/research.jpg' alt='' />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li><li>
                    <a id='nav-ccd' class='menu-link' href='" . __ROOT__ . "/ccd/'>CCD</a>
                    <div class='sub-menu'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-3 blocks'>
                                    <div class='content middle'>
                                        <ul class='d-inline-block'>
                                            <li><a href='" . __ROOT__ . "/ccd/motivation'>Office</a></li>
                                            <li><a href='" . __ROOT__ . "/ccd/motivation'>Motivation</a></li>
                                            <li><a href='" . __ROOT__ . "/ccd/t-n-p'>Training &amp; Placement</a></li>
                                            <li><a href='" . __ROOT__ . "/docs/ccd_brochure.pdf' target='_blank'>Download Brochure</a></li>
                                            <li><a href='" . __ROOT__ . "/docs/JNF-2016-17.pdf' target='_blank'>Job Notification Form</a></li>
                                            <li><a href='" . __ROOT__ . "/ccd/summer-internship-training'>Summer Internship &amp; Training</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class='col-4 text-justify blocks'>
                                    <div class='content middle'>
                                        <div class='text-bold'>Centre for Career Development</div>
                                        Innovation and challenge are words synonymous with engineering. It caters to bright and dedicated students, a broad spectrum of opportunities and interesting career prospects. But it is important that they are facilitated with indispensable life skills and careful guidance so that they are more prepared to navigate through the tides of life with confidence.
                                    </div>
                                </div>
                                <div class='col-1'></div>
                                <div class='col-4 blocks'>
                                    <div class='content middle'>
                                        <img src='" . __ROOT__ . "/assets/img/nav/ccd.jpg' alt='' />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li><li>
                    <a id='nav-campus' class='menu-link' href='" . __ROOT__ . "/campus/'>Campus Life</a>
                    <div class='sub-menu'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-3 blocks'>
                                    <div class='content middle'>
                                        <ul class='d-inline-block'>
                                            <li><a href='" . __ROOT__ . "/campus/hostel'>Hostel</a></li>
                                            <li><a href='" . __ROOT__ . "/campus/medical-unit'>Medical Unit</a></li>
                                            <li><a href='" . __ROOT__ . "/campus/banking-and-post-office'>Banking and Post Office</a></li>
                                            <li><a href='" . __ROOT__ . "/campus/communication'>Communication</a></li>
                                            <li><a href='" . __ROOT__ . "/campus/activities'>Extra-Curricular Activities</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class='col-4 text-justify blocks'>
                                    <div class='content middle'>
                                        COLLEGE IS MORE THAN STUDYING<br />
                                        It’s a time to challenge preconceived notions and pursue your passions. So jump in. Lead a student organization. Discover new lands through study abroad. Join an intercollegiate team. Volunteer in the community. Now is the time!

                                    </div>
                                </div>
                                <div class='col-1'></div>
                                <div class='col-4 blocks'>
                                    <div class='content middle'>
                                        <img src='" . __ROOT__ . "/assets/img/nav/campus.jpg' alt='' />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li><li>
                    <a id='nav-contact' class='menu-link' href='" . __ROOT__ . "/contact/'>Contact</a>
                </li>
            </ul>
        </nav>
        <div id='anchor-top'>
            <i class='fas fa-angle-up'></i>
        </div>
    ";

    $footer = "
        <footer class='container-fluid'>
            <div class='row b-b-footer pad-btm-3'>
                <div id='footer-block-1' class='col-6 col-sm-3 col-lg-2 text-right b-r-footer'>
                    <ul class='no-mar no-pad no-bullet'>
                        <li><a href='" . __ROOT__ . "/administration/'>Administration</a></li>
                        <li><a href='" . __ROOT__ . "/resources/'>Resources</a></li>
                        <li><a href='" . __ROOT__ . "/students/'>Students</a></li>
                        <li><a href='" . __ROOT__ . "/alumni/'>Alumni</a></li>
                        <li><a href='http://www.nita.ac.in/'>Old Website</a></li>
                        <li><a href='" . __ROOT__ . "/sitemap'>Sitemap</a></li>
                        <li class='mar-top-0-25'>
                            <a id='footer-hindi' class='nav-hindi' href='javascript:void(0);'>हिंदी में</a>
                        </li>
                    </ul>
                </div>
                <div id='footer-block-2' class='col-6 col-sm-3 col-lg-2 text-left text-sm-right b-r-footer'>
                    <ul class='no-mar no-pad no-bullet'>
                        <li><a href='" . __ROOT__ . "/resources/download-corner/'>Download Corner</a>&nbsp;<img src='" . __ROOT__ . "/assets/img/icons/new.gif' /></li>
                        <li><a href='" . __ROOT__ . "/resources/recruitment'>Recruitment</a></li>
                        <li><a href='" . __ROOT__ . "/resources/teqip-3'>TEQIP - III</a></li>
                        <li><a href='" . __ROOT__ . "/resources/rti'>RTI Act</a></li>
                        <li><a href='" . __ROOT__ . "/docs/NIRF-NITA-2018.pdf' target='_blank'>NIRF Data</a></li>
                        <li><a href='" . __ROOT__ . "/resources/sc-st-obc-cell/'>SC/ST/OBC Cell</a></li>
                    </ul>
                </div>
                <div id='footer-block-3' class='col-6 col-sm-4 d-block d-sm-none d-lg-block text-right text-sm-center'>
                    <img class='v-middle limit-img' src='" . __ROOT__ . "/assets/img/logo/nita.png' alt=''>
                </div>
                <div id='footer-block-4' class='col-6 col-sm-3 col-lg-2 d-none d-sm-block text-center b-l-footer'>
                    <div id='ext-links' class='row'>
                        <div class='col-6'>
                            <a href='https://data.gov.in/' target='_blank'><img class='img-res' src='" . __ROOT__ . "/assets/img/data-gov.png' /></a>
                        </div>
                        <div class='col-6'>
                            <a href='http://mhrd.gov.in/' target='_blank'><img class='img-res' src='" . __ROOT__ . "/assets/img/mhrd.png' /></a>
                        </div>
                        <div class='col-6'>
                            <a href='https://www.india.gov.in/' target='_blank'><img class='img-res' src='" . __ROOT__ . "/assets/img/india-gov.png' /></a>
                        </div>
                        <div class='col-6'>
                            <a href='https://www.studyinindia.gov.in/' target='_blank'><img class='img-res' src='" . __ROOT__ . "/assets/img/study-in-india.png' /></a>
                        </div>
                    </div>
                </div>
                <div id='footer-block-5' class='col-6 col-sm-3 col-lg-2 text-left b-l-footer'>
                    <ul class='no-mar no-pad no-bullet'>
                        <li>
                            National Institute of Technology Agartala<br />
                            Jirania - 799046<br />
                            Tripura, India<br />
                            <i class='fas fa-phone'></i>&nbsp;+91-381-2546630<br />
                            <i class='fas fa-fax'></i>&nbsp;+91-381-2546360<br />
                            <i class='far fa-envelope'></i>&nbsp;<a href=\"javascript:location='mailto:\u0064\u0069\u0072\u0065\u0063\u0074\u006f\u0072\u0040\u006e\u0069\u0074\u0061\u002e\u0061\u0063\u002e\u0069\u006e';void 0\"><script type=\"text/javascript\">document.write('\u0064\u0069\u0072\u0065\u0063\u0074\u006f\u0072\u0040\u006e\u0069\u0074\u0061\u002e\u0061\u0063\u002e\u0069\u006e')</script></a>
                        </li>
                        <li><i class='fas fa-address-book'></i>&nbsp;<a href='" . __ROOT__ . "/resources/telephone-directory'>Telephone Directory</a></li>
                    </ul>
                </div>
            </div>
            <div class='social text-center'>
                <a class='social-icon' href='https://www.facebook.com/nit.agartala.501' target='_blank'>
                <i class='fab fa-facebook-square'></i></a><a class='social-icon' href='https://twitter.com/NITAgartalaoffi' target='_blank'>
                <i class='fab fa-twitter'></i></a><a class='social-icon' href='https://www.youtube.com/channel/UCzHTTV2U4RW-e86YCjoePBw' target='_blank'>
                <i class='fab fa-youtube'></i></a><a class='social-icon' href='https://www.linkedin.com/in/nit-agartala-15664a16b/' target='_blank'>
                <i class='fab fa-linkedin'></i></a><a class='social-icon' href='https://www.flickr.com/photos/155698633@N04/' target='_blank'>
                <i class='fab fa-flickr'></i></a>
            </div>
            <div class='website-developer'>
                Website developed by <a href='" . __ROOT__ . "/web-team'>Web Team @ NIT Agartala</a>
            </div>
            <div class='copyright d-block d-sm-inline-block'>
                &copy;2018 NIT AGARTALA - All rights reserved
            </div>
            <div class='disclaimer d-block d-sm-inline-block float-sm-right text-center'>
                <a href='" . __ROOT__ . "/disclaimer'>Disclaimer</a> |
                <a href='" . __ROOT__ . "/hyperlink-policy'>Hyperlink Policy</a> |
                <a href='" . __ROOT__ . "/feedback'>Feedback</a>
            </div>
        </footer>
    ";

    $script = "
        <script src='https://code.jquery.com/jquery-3.3.1.min.js' integrity='sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=' crossorigin='anonymous'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
        <script src='" . __ROOT__ . "/assets/js/common.js'></script>
        <script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
    ";

?>
