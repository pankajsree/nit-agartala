<?php

    $menu_left = "
    <div class='col-3 d-none d-md-flex'>
        <ul class='no-pad no-mar menu-left a-no-underline no-bullet line-h-2'>
            <li class='menu-left-main nav-left-home b-t-theme'><a href='" . __ROOT__ . "/campus/'>Campus Life</a></li>
            <li class='menu-left-main nav-left-hostel-life'><a data-toggle=\"collapse\" href=\"#collapseHostel\" role=\"button\">Hostel Life<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a></li>
            <div class=\"collapse\" id=\"collapseHostel\">
                <ul class=\"no-pad list-style-none\">
                    <li class=\"nav-left-hostelffffff menu-left-sub\"><a href=\"dean-academic\">Hostel Admin</a></li>
                    <li class=\"nav-left-hostel-rules menu-left-sub\"><a href=\"hostel-rules\">Rules &amp; Regulations</a></li>
                    <li class=\"nav-left-stipend menu-left-sub\"><a href=\"#\">Photo Gallery</a></li>
                    <li class=\"nav-left-stipend menu-left-sub\"><a href=\"#\">Student Database</a></li>
                    <li class=\"nav-left-stipend menu-left-sub\"><a href=\"#\">Anti-Ragging Measures</a></li>
                    <li class=\"nav-left-stipend menu-left-sub\"><a href=\"#\">Anti-Ragging Committee</a></li>
                </ul>
            </div>
            <li class='menu-left-main nav-left-medical'><a href='medical-unit'>Medical Unit</a></li>
            <li class='menu-left-main nav-left-activities'><a href='activities'>Extra-Curricular Activities</a></li>
            <li class='menu-left-main nav-left-banking'><a href='banking-and-post-office'>Banking and Post Office</a></li>
        </ul>
    </div>
    ";

    $mobile_menu = "
    <div id='sub-mobile-menu' class='collapse d-md-none'>
        <div class='row no-mar pad-right-2'>
            <div class='col-12'>
            <ul class='no-pad no-mar menu-left a-no-underline no-bullet line-h-2'>
                <li class='menu-left-main nav-left-home b-t-theme'><a href='" . __ROOT__ . "/campus/'>Campus Life</a></li>
                <li class='menu-left-main nav-left-hostel-life'><a data-toggle=\"collapse\" href=\"#collapseHostelMobile\" role=\"button\">Hostel Life<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a></li>
                <div class=\"collapse\" id=\"collapseHostelMobile\">
                    <ul class=\"no-pad list-style-none\">
                        <li class=\"nav-left-hostelffffff menu-left-sub\"><a href=\"dean-academic\">Hostel Admin</a></li>
                        <li class=\"nav-left-hostel-rules menu-left-sub\"><a href=\"hostel-rules\">Rules &amp; Regulations</a></li>
                        <li class=\"nav-left-stipend menu-left-sub\"><a href=\"#\">Photo Gallery</a></li>
                        <li class=\"nav-left-stipend menu-left-sub\"><a href=\"#\">Student Database</a></li>
                        <li class=\"nav-left-stipend menu-left-sub\"><a href=\"#\">Anti-Ragging Measures</a></li>
                        <li class=\"nav-left-stipend menu-left-sub\"><a href=\"#\">Anti-Ragging Committee</a></li>
                    </ul>
                </div>
                <li class='menu-left-main nav-left-medical'><a href='medical-unit'>Medical Unit</a></li>
                <li class='menu-left-main nav-left-activities'><a href='activities'>Extra-Curricular Activities</a></li>
                <li class='menu-left-main nav-left-banking'><a href='banking-and-post-office'>Banking and Post Office</a></li>
            </ul>
            </div>
        </div>
    </div>
    ";

?>
