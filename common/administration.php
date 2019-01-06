<?php

    $mobile_menu = "
        <div id='sub-mobile-menu' class='collapse d-md-none'>
            <div class='row no-mar pad-right-2'>
                <div class='col-12'>
                <ul class=\"no-pad no-mar menu-left a-no-underline no-bullet line-h-2\">
                    <li class=\"nav-left-administration menu-left-main b-t-theme\"><a href=\"" . __ROOT__ . "/administration/\">Administration</a></li>
                    <li class=\"nav-left-bog menu-left-main\"><a href=\"board-of-governors\">Board of Governors</a></li>
                    <li class=\"nav-left-profile-bog menu-left-main\"><a href=\"profile-chairperson-bog\">Profile of Chairperson, BOG</a></li>
                    <li class=\"nav-left-director menu-left-main\"><a href=\"director-office\">Office of Director</a></li>
                    <li class=\"nav-left-director-profile menu-left-main\"><a href=\"profile-director\">Profile of Director</a></li>
                    <li class=\"nav-left-committee menu-left-main\">
                        <a data-toggle=\"collapse\" href=\"#collapseCommitteeMobile\" role=\"button\">Committee Members<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
                    </li>
                    <div class=\"collapse\" id=\"collapseCommitteeMobile\">
                        <ul class=\"no-pad list-style-none\">
                            <li class=\"nav-left-senate menu-left-sub\"><a href=\"senate-committee\">The Senate Committee</a></li>
                            <li class=\"nav-left-finance menu-left-sub\"><a href=\"finance-committee\">The Finance Committee</a></li>
                            <li class=\"nav-left-buildings menu-left-sub\"><a href=\"buildings-works\">The Buildings and Works Committee</a></li>
                        </ul>
                    </div>
                    <li class=\"nav-left-registrar menu-left-main\">
                        <a data-toggle=\"collapse\" href=\"#collapseRegistrarMobile\" role=\"button\">Office of Registrar<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
                    </li>
                    <div class=\"collapse\" id=\"collapseRegistrarMobile\">
                        <ul class=\"no-pad list-style-none\">
                            <li class=\"nav-left-registrar-office menu-left-sub\"><a href=\"registrar\">Office</a></li>
                            <li class=\"nav-left-establishment menu-left-sub\"><a href=\"establishment-section\">Establishment Section</a></li>
                            <li class=\"nav-left-accounts menu-left-sub\"><a href=\"accounts-section\">Accounts Section</a></li>
                            <li class=\"nav-left-library menu-left-sub\"><a href=\"library-section\">Library Section</a></li>
                            <li class=\"nav-left-vehicle menu-left-sub\"><a href=\"vehicle-section\">Vehicle Section</a>
                        </ul>
                    </div>
                    <li class=\"nav-left-academic-dean menu-left-main\">
                        <a data-toggle=\"collapse\" href=\"#collapseAcademicMobile\" role=\"button\">Dean Academic<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
                    </li>
                    <div class=\"collapse\" id=\"collapseAcademicMobile\">
                        <ul class=\"no-pad list-style-none\">
                            <li class=\"nav-left-academic-office menu-left-sub\"><a href=\"dean-academic\">Office</a></li>
                            <li class=\"nav-left-exam menu-left-sub\"><a href=\"examination-section\">Examination Section</a></li>
                            <li class=\"nav-left-stipend menu-left-sub\"><a href=\"stipend-scholarship\">Stipend & Scholarship</a></li>
                        </ul>
                    </div>
                    <li class=\"nav-left-faculty menu-left-main\">
                        <a href=\"dean-faculty\">Dean Faculty Welfare</a>
                    </li>
                    <li class=\"nav-left-planning menu-left-main\">
                        <a href=\"dean-planning\">Dean Planning & Devolopment</a>
                    </li>
                    <li class=\"nav-left-research menu-left-main\">
                        <a href=\"dean-research\">Dean Research &amp; Consultancy</a>
                    </li>
                    <li class=\"nav-left-student menu-left-main\">
                        <a data-toggle=\"collapse\" href=\"#collapseStudentMobile\" role=\"button\">Dean Student Welfare<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
                    </li>
                    <div class=\"collapse\" id=\"collapseStudentMobile\">
                        <ul class=\"no-pad list-style-none\">
                            <li class=\"nav-left-student-office menu-left-sub\"><a href=\"dean-student\">Office</a></li>
                            <li class=\"nav-left-sports menu-left-sub\"><a href=\"sports\">Sports</a></li>
                            <li class=\"nav-left-hostel menu-left-sub\"><a href=\"hostel\">Hostel</a></li>
                        </ul>
                    </div>
                    <li class=\"nav-left-alumni-affairs menu-left-main\"><a href=\"alumni-affairs\">Alumni Affairs &amp; Institutional Relations</a></li>
                </ul>
                </div>
            </div>
        </div>
    ";

    $menu_left = "
        <div class=\"col-3 d-none d-md-flex\">
            <ul class=\"no-pad no-mar menu-left a-no-underline no-bullet line-h-2\">
                <li class=\"nav-left-administration menu-left-main b-t-theme\"><a href=\"" . __ROOT__ . "/administration/\">Administration</a></li>
                <li class=\"nav-left-bog menu-left-main\"><a href=\"board-of-governors\">Board of Governors</a></li>
                <li class=\"nav-left-profile-bog menu-left-main\"><a href=\"profile-chairperson-bog\">Profile of Chairperson, BOG</a></li>
                <li class=\"nav-left-director menu-left-main\"><a href=\"director-office\">Office of Director</a></li>
                <li class=\"nav-left-director-profile menu-left-main\"><a href=\"profile-director\">Profile of Director</a></li>
                <li class=\"nav-left-committee menu-left-main\">
                    <a data-toggle=\"collapse\" href=\"#collapseCommittee\" role=\"button\">Committee Members<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
                </li>
                <div class=\"collapse\" id=\"collapseCommittee\">
                    <ul class=\"no-pad list-style-none\">
                        <li class=\"nav-left-senate menu-left-sub\"><a href=\"senate-committee\">The Senate Committee</a></li>
                        <li class=\"nav-left-finance menu-left-sub\"><a href=\"finance-committee\">The Finance Committee</a></li>
                        <li class=\"nav-left-buildings menu-left-sub\"><a href=\"buildings-works\">The Buildings and Works Committee</a></li>
                    </ul>
                </div>
                <li class=\"nav-left-registrar menu-left-main\">
                    <a data-toggle=\"collapse\" href=\"#collapseRegistrar\" role=\"button\">Office of Registrar<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
                </li>
                <div class=\"collapse\" id=\"collapseRegistrar\">
                    <ul class=\"no-pad list-style-none\">
                        <li class=\"nav-left-registrar-office menu-left-sub\"><a href=\"registrar\">Office</a></li>
                        <li class=\"nav-left-establishment menu-left-sub\"><a href=\"establishment-section\">Establishment Section</a></li>
                        <li class=\"nav-left-accounts menu-left-sub\"><a href=\"accounts-section\">Accounts Section</a></li>
                        <li class=\"nav-left-library menu-left-sub\"><a href=\"library-section\">Library Section</a></li>
                        <li class=\"nav-left-vehicle menu-left-sub\"><a href=\"vehicle-section\">Vehicle Section</a>
                    </ul>
                </div>
                <li class=\"nav-left-academic-dean menu-left-main\">
                    <a data-toggle=\"collapse\" href=\"#collapseAcademic\" role=\"button\">Dean Academic<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
                </li>
                <div class=\"collapse\" id=\"collapseAcademic\">
                    <ul class=\"no-pad list-style-none\">
                        <li class=\"nav-left-academic-office menu-left-sub\"><a href=\"dean-academic\">Office</a></li>
                        <li class=\"nav-left-exam menu-left-sub\"><a href=\"examination-section\">Examination Section</a></li>
                        <li class=\"nav-left-stipend menu-left-sub\"><a href=\"stipend-scholarship\">Stipend & Scholarship</a></li>
                    </ul>
                </div>
                <li class=\"nav-left-faculty menu-left-main\">
                    <a href=\"dean-faculty\">Dean Faculty Welfare</a>
                </li>
                <li class=\"nav-left-planning menu-left-main\">
                    <a href=\"dean-planning\">Dean Planning & Devolopment</a>
                </li>
                <li class=\"nav-left-research menu-left-main\">
                    <a href=\"dean-research\">Dean Research &amp; Consultancy</a>
                </li>
                <li class=\"nav-left-student menu-left-main\">
                    <a data-toggle=\"collapse\" href=\"#collapseStudent\" role=\"button\">Dean Student Welfare<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
                </li>
                <div class=\"collapse\" id=\"collapseStudent\">
                    <ul class=\"no-pad list-style-none\">
                        <li class=\"nav-left-student-office menu-left-sub\"><a href=\"dean-student\">Office</a></li>
                        <li class=\"nav-left-sports menu-left-sub\"><a href=\"sports\">Sports</a></li>
                        <li class=\"nav-left-hostel menu-left-sub\"><a href=\"hostel\">Hostel</a></li>
                    </ul>
                </div>
                <li class=\"nav-left-alumni-affairs menu-left-main\"><a href=\"alumni-affairs\">Alumni Affairs &amp; Institutional Relations</a></li>
            </ul>
        </div>
    ";
?>
