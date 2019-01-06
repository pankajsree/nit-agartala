<?php

    $profile_role = "";
    if($_SESSION['role_id'] == 1) {
        $profile_role = "Staff";
    }
    else if($_SESSION['role_id'] == 2) {
        $profile_role = "Faculty";
    }
    else if($_SESSION['role_id'] == 5) {
        $profile_role = "Liaison Officer";
    }
    else if($_SESSION['role_id'] == 7) {
        $profile_role = "Dean Academic";
    }
    else if($_SESSION['role_id'] == 8) {
        $profile_role = "HOD";
    }
    else if($_SESSION['role_id'] == 10) {
        $profile_role = "Super Admin";
    }
    else if($_SESSION['role_id'] == 15) {
        $profile_role = "Associate Dean (Examination)";
    }
    else {

    }

    $profile_nav = "
        <nav id='profile-nav' class='navbar navbar-expand-lg'>
            <li class=\"navbar-brand\">" . $profile_role;
    if($_SESSION['role_id'] == 8 || $_SESSION['role_id'] == 2 || $_SESSION['role_id'] == 1) {
        $profile_nav .= ", <span class='text-uppercase'>" . $_SESSION['dept_url'] . "</span>";
    }
    $profile_nav .= "
            </li>
            <button id='btn-collapse' class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
                <span class='navbar-toggler-icon'></span>
                <span class='cross'><i class='fas fa-times'></i></span>
            </button>
            <div class='collapse navbar-collapse flex-row-reverse' id='collapsibleNavbar'>
                <ul class='navbar-nav justify-content-end'>
                    <li class='nav-item dropdown'>
                        <a id='nav-profile' class='nav-link dropdown-toggle' href='#' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Profile</a>
                        <div class='dropdown-menu'>
                            <a id='nav-view-profile' class='dropdown-item' href='view-profile'>View Profile</a>
                            <a id='nav-edit-profile' class='dropdown-item' href='edit-profile'>Update Profile</a>
                            <a id='nav-change-password' class='dropdown-item' href='change-password'>Change Password</a>
                        </div>
                    </li>
    ";
    if($_SESSION['role_id'] == 10) {
        $profile_nav .= "
                    <li class=\"nav-item\"><a id='nav-add-user' class=\"nav-link\" href=\"add-user\">Add User</a></li>
                    <li class=\"nav-item\"><a id='nav-add-activity' class=\"nav-link\" href=\"add-activity\">Add Activity</a></li>
                    <li class=\"nav-item\"><a id='nav-upload-pdf' class=\"nav-link\" href=\"upload-pdf\">Upload PDF</a></li>
        ";
    }
    if($_SESSION['role_id'] == 15) {
        $profile_nav .= "
                    <li class=\"nav-item\"><a id='nav-academic-notice' class=\"nav-link\" href=\"upload-notice\">Upload Notice</a></li>
        ";
    }
    if($_SESSION['role_id'] == 8) {
        $profile_nav .= "
                    <li class=\"nav-item\"><a id='nav-add-user' class=\"nav-link\" href=\"add-user\">Add User</a></li>
        ";
    }
    if($_SESSION['role_id'] == 7) {
        $profile_nav .= "
                    <li class=\"nav-item\"><a id='nav-academic-notice' class=\"nav-link\" href=\"upload-notice\">Upload Notice</a></li>
                    <li class=\"nav-item\"><a id='nav-add-activity' class=\"nav-link\" href=\"add-activity\">Add Activity</a></li>
        ";
    }
    if($_SESSION['role_id'] == 5) {
        $profile_nav .= "
                    <li class=\"nav-item\"><a id='nav-grievances' class=\"nav-link\" href=\"grievances\">Grievances</a></li>
        ";
    }
    $profile_nav .= "
                    <li class='nav-item'><a class='nav-link' href='logout'><i class='fas fa-power-off'></i>&nbsp;&nbsp;Logout</a></li>
                </ul>
            </div>
        </nav>
    ";

    $reg_profile_nav = "
        <nav id='profile-nav' class='navbar navbar-expand-lg'>
            <button id='btn-collapse' class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
                <span class='navbar-toggler-icon'></span>
                <span class='cross'><i class='fas fa-times'></i></span>
            </button>
            <div class='collapse navbar-collapse flex-row-reverse' id='collapsibleNavbar'>
                <ul class='navbar-nav justify-content-end'>
                    <li class='nav-item'><a class='nav-link' href='logout'><i class='fas fa-power-off'></i>&nbsp;&nbsp;Logout</a></li>
                </ul>
            </div>
        </nav>
    ";

?>
