<?php

    $menu_left = "
    <div class='col-3 d-none d-md-flex'>
        <ul class='no-pad no-mar menu-left a-no-underline no-bullet line-h-2'>
            <li class='menu-left-main sub-nav-home b-t-theme'><a href='" . __ROOT__ . "/academics/'>Home</a></li>
            <li class='menu-left-main sub-nav-notice'><a href='" . __ROOT__ . "/notices/academic'>Academic Notices</a></li>
            <li class=\"nav-left-activity menu-left-main\">
                <a data-toggle=\"collapse\" href=\"#collapseActivitiesMobile\" role=\"button\">Academic Activities<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
            </li>
            <div class=\"collapse\" id=\"collapseActivitiesMobile\">
                <ul class=\"no-pad list-style-none\">
                    <li class=\"nav-left-upcoming menu-left-sub\"><a href=\"" . __ROOT__ . "/academics/activities/upcoming\">Upcoming Activities</a></li>
                    <li class=\"nav-left-past menu-left-sub\"><a href=\"" . __ROOT__ . "/academics/activities/past\">Past Activities</a></li>
                </ul>
            </div>
            <li class='menu-left-main sub-nav-regulations'><a href='regulations'>Academic Regulations</a></li>
            <li class='menu-left-main sub-nav-calender'><a href='" . __ROOT__ . "/docs/academic_calendar_2018_19.pdf' target='_blank'>Academic Calendar</a></li>
            <li class='menu-left-main sub-nav-result'><a href='result'>Academic Result</a></li>
            <li class='menu-left-main sub-nav-departments'><a href='departments'>Academic Departments</a></li>
            <li class='menu-left-main sub-nav-holidays'><a href='" . __ROOT__ . "/docs/holidays_2018_19.pdf' target='_blank'>List of Holidays</a></li>
            <li class='menu-left-main sub-nav-library'><a href='library'>Library</a></li>
        </ul>
    </div>
    ";

    $mobile_menu = "
    <div id='sub-mobile-menu' class='collapse d-md-none'>
        <div class='row no-mar pad-right-2'>
            <div class='col-12'>
                <ul class='no-pad no-mar menu-left a-no-underline no-bullet line-h-2'>
                    <li class='menu-left-main sub-nav-home b-t-theme'><a href='" . __ROOT__ . "/academics/'>Home</a></li>
                    <li class='menu-left-main sub-nav-notice'><a href='" . __ROOT__ . "/notices/academic'>Academic Notices</a></li>
                    <li class=\"nav-left-activity menu-left-main\">
                        <a data-toggle=\"collapse\" href=\"#collapseActivities\" role=\"button\">Academic Activities<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
                    </li>
                    <div class=\"collapse\" id=\"collapseActivities\">
                        <ul class=\"no-pad list-style-none\">
                            <li class=\"nav-left-upcoming menu-left-sub\"><a href=\"" . __ROOT__ . "/academics/activities/upcoming\">Upcoming Activities</a></li>
                            <li class=\"nav-left-past menu-left-sub\"><a href=\"" . __ROOT__ . "/academics/activities/past\">Past Activities</a></li>
                        </ul>
                    </div>
                    <li class='menu-left-main sub-nav-regulations'><a href='regulations'>Academic Regulations</a></li>
                    <li class='menu-left-main sub-nav-calender'><a href='" . __ROOT__ . "/docs/academic_calendar_2018_19.pdf' target='_blank'>Academic Calendar</a></li>
                    <li class='menu-left-main sub-nav-result'><a href='result'>Academic Result</a></li>
                    <li class='menu-left-main sub-nav-departments'><a href='departments'>Academic Departments</a></li>
                    <li class='menu-left-main sub-nav-holidays'><a href='" . __ROOT__ . "/docs/holidays_2018_19.pdf' target='_blank'>List of Holidays</a></li>
                    <li class='menu-left-main sub-nav-library'><a href='library'>Library</a></li>
                </ul>
            </div>
        </div>
    </div>
    ";

?>
