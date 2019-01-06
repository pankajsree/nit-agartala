<?php
    require("../common/db-config.php");

    $current_sem_session = "odd_2018-19";

    if(isset($_GET['dept_code'])) {
        $dept_url = $_GET['dept_code'];
    }
    else {
        $dept_code = 500;
    }

    switch ($dept_url) {
        case 'be':
            $dept_code = 1;
            break;
        case 'ch':
            $dept_code = 2;
            break;
        case 'ce':
            $dept_code = 3;
            break;
        case 'cse':
            $dept_code = 4;
            break;
        case 'ee':
            $dept_code = 5;
            break;
        case 'ece':
            $dept_code = 6;
            break;
        case 'eie':
            $dept_code = 7;
            break;
        case 'me':
            $dept_code = 8;
            break;
        case 'pe':
            $dept_code = 9;
            break;
        case 'som':
            $dept_code = 10;
            break;
        case 'hss':
            $dept_code = 11;
            break;
        case 'phy':
            $dept_code = 12;
            break;
        case 'cy':
            $dept_code = 13;
            break;
        case 'ma':
            $dept_code = 14;
            break;

        default:
            $dept_code = 500;
            break;
    }

    $query = "SELECT `routine_type`, `activity_flag` FROM `departments` WHERE `dept_code` = " . $dept_code;
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die($query);
    }
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $routine_type = explode('-', $row['routine_type']);
    $activity_flag = $row['activity_flag'];

    $routine_content_1 = "";
    $routine_content_desk = "";
    $routine_content_mob = "";
    $routine_content_2 = "";

    if(count($routine_type) > 1) {
        $routine_content_1 .= "
        <li class='menu-left-main sub-nav-routine'>
            <a data-toggle=\"collapse\" href=\"";
        $routine_content_desk .= "
            #collapseRoutine\" role=\"button\">Semester Schedule<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
        </li>
        <div class=\"collapse\" id=\"collapseRoutine\">
            <ul class=\"no-pad list-style-none\">
        ";
        $routine_content_mob .= "
            #collapseMobileRoutine\" role=\"button\">Semester Schedule<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
        </li>
        <div class=\"collapse\" id=\"collapseMobileRoutine\">
            <ul class=\"no-pad list-style-none\">
        ";
        foreach($routine_type as $routine) {
            switch ($routine) {
                case 'ug':
                    $routine_content_2 .= "
                    <li class=\"menu-left-sub\"><a href=\"" . __ROOT__ . "/docs/routine/" . $dept_url . "_ug_routine_" . $current_sem_session . ".pdf\" target='_blank'>B. Tech</a></li>
                    ";
                    break;
                case 'pg':
                    $routine_content_2 .= "
                    <li class=\"menu-left-sub\"><a href=\"" . __ROOT__ . "/docs/routine/" . $dept_url . "_pg_routine_" . $current_sem_session . ".pdf\" target='_blank'>M. Tech</a></li>
                    ";
                    break;
                case 'phd':
                    $routine_content_2 .= "
                    <li class=\"menu-left-sub\"><a href=\"" . __ROOT__ . "/docs/routine/" . $dept_url . "_phd_routine_" . $current_sem_session . ".pdf\" target='_blank'>Ph. D</a></li>
                    ";
                    break;
                case 'mca':
                    $routine_content_2 .= "
                    <li class=\"menu-left-sub\"><a href=\"" . __ROOT__ . "/docs/routine/" . $dept_url . "_mca_routine_" . $current_sem_session . ".pdf\" target='_blank'>MCA</a></li>
                    ";
                    break;

                default:
                    break;
            }
        }

        $routine_content_2 .= "
            </ul>
        </div>
        ";

        $routine_content = $routine_content_1 . $routine_content_desk . $routine_content_2;
        $routine_content_mobile = $routine_content_1 . $routine_content_mob . $routine_content_2;
    }
    else {
        $routine_content = "
        <li class='menu-left-main sub-nav-routine'>
            <a href=\"" . __ROOT__ . "/docs/routine/" . $dept_url . "_routine_" . $current_sem_session . ".pdf\" target='_blank'>Semester Schedule</a>
        </li>
        ";
        $routine_content_mobile = $routine_content;
    }


    $menu_left = "
        <div class='col-3 d-none d-md-flex'>
            <ul class='no-pad no-mar menu-left a-no-underline no-bullet line-h-2'>
                <li class='menu-left-main sub-nav-home b-t-theme'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "\">Home</a></li>
                <li class='menu-left-main sub-nav-programmes'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/programmes\">Programmes</a></li>
                <li class='menu-left-main sub-nav-faculty'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/faculty\">Faculty</a></li>
    ";
    if($dept_code != 10) {
        $menu_left .= "
                <li class='menu-left-main sub-nav-staff'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/staff\">Staff</a></li>
                <li class='menu-left-main sub-nav-facilities'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/facilities\">Facilities</a></li>
        ";
    }
    else {
        $menu_left .= "
                <li class='menu-left-main sub-nav-admission'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/admission\">Admission</a></li>
                <li class='menu-left-main sub-nav-placement'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/placement\">Placement</a></li>
        ";
    }
    if($dept_code != 10) {
        $menu_left .= "
                <li class='menu-left-main sub-nav-research'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/research\">Research</a></li>
        ";
    }
    if($activity_flag == 1) {
        $menu_left .= "
                    <li class='menu-left-main sub-nav-events'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/events\">Events / Student Activities</a></li>
        ";
    }

    $menu_left .= $routine_content . "
            </ul>
        </div>
    ";

    $mobile_menu = "
    <div id='sub-mobile-menu' class='collapse d-md-none'>
        <div class='row no-mar pad-right-2'>
            <div class='col-12'>
                <ul class='no-pad no-mar menu-left a-no-underline no-bullet line-h-2'>
                    <li class='menu-left-main sub-nav-home b-t-theme'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "\">Home</a></li>
                    <li class='menu-left-main sub-nav-programmes'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/programmes\">Programmes</a></li>
                    <li class='menu-left-main sub-nav-faculty'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/faculty\">Faculty</a></li>
        ";
        if($dept_code != 10) {
            $mobile_menu .= "
                    <li class='menu-left-main sub-nav-staff'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/staff\">Staff</a></li>
                    <li class='menu-left-main sub-nav-facilities'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/facilities\">Facilities</a></li>
            ";
        }
        else {
            $mobile_menu .= "
                    <li class='menu-left-main sub-nav-admission'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/admission\">Admission</a></li>
                    <li class='menu-left-main sub-nav-placement'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/placement\">Placement</a></li>
                    <li class='menu-left-main sub-nav-events'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/events\">Events / Student Activities</a></li>
            ";
        }
        if($activity_flag == 1) {
            $mobile_menu .= "
                        <li class='menu-left-main sub-nav-events'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/events\">Events / Student Activities</a></li>
            ";
        }
        if($dept_code != 10) {
            $mobile_menu .= "
                    <li class='menu-left-main sub-nav-research'><a href=\"" . __ROOT__ . "/academics/department/" . $dept_url . "/research\">Research</a></li>
            ";
        }
        $mobile_menu .= $routine_content_mobile . "
                </ul>
            </div>
        </div>
    </div>
    ";

?>
