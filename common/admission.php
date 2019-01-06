<?php

    $menu_left = "
    <div class='col-3 d-none d-md-flex'>
        <ul class='no-pad no-mar menu-left a-no-underline no-bullet line-h-2'>
            <li class='menu-left-main sub-nav-home b-t-theme'><a href='" . __ROOT__ . "/admission/'>Home</a></li>
            <li class=\"nav-left-UG menu-left-main\">
                <a data-toggle=\"collapse\" href=\"#collapseUGMobile\" role=\"button\">Under-Graduate<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
            </li>
            <div class=\"collapse\" id=\"collapseUGMobile\">
                <ul class=\"no-pad list-style-none\">
                    <li class=\"nav-left-UG-procedure menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/ug-procedure\">Procedure & Eligibility</a></li>
                    <li class=\"nav-left-UG-intake menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/ug-capacity\">Intake Capacity</a></li>
                    <li class=\"nav-left-UG-fee menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/ug-fee-structure\">Fee Structure</a></li>
                    <li class=\"nav-left-UG-scholarships menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/ug-scholarship\">Scholarships</a></li>
                </ul>
            </div>
            <li class=\"nav-left-PG menu-left-main\">
                <a data-toggle=\"collapse\" href=\"#collapsePGMobile\" role=\"button\">Post-Graduate<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
            </li>
            <div class=\"collapse\" id=\"collapsePGMobile\">
                <ul class=\"no-pad list-style-none\">
                    <li class=\"nav-left-PG-procedure menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/pg-procedure\">Procedure & Eligibility</a></li>
                    <li class=\"nav-left-PG-intake menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/pg-capacity\">Intake Capacity</a></li>
                    <li class=\"nav-left-PG-fee menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/pg-fee-structure\">Fee Structure</a></li>
                    <li class=\"nav-left-PG-support menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/pg-financial-support\">Financial Support</a></li>
                </ul>
            </div>
            <li class='menu-left-main sub-nav-conduct'><a href='conduct-discipline'>Conduct & Discipline</a></li>
            <li class='menu-left-main sub-nav-prospectus'><a href='../docs/prospectus_2018.pdf' target='_blank'>Prospectus 2018</a></li>
            <li class='menu-left-main sub-nav-nimcet'><a href='#'>NIMCET 2018</a></li>
            <li class='menu-left-main sub-nav-ccmt'><a href='#'>CCMT 2018</a></li>
            <li class='menu-left-main sub-nav-dasa'><a href='#'>DASA 2018</a></li>
        </ul>
    </div>
    ";

    $mobile_menu = "
        <div id='sub-mobile-menu' class='collapse d-md-none'>
            <div class='row no-mar pad-right-2'>
                <div class='col-12'>
                    <ul class='no-pad no-mar menu-left a-no-underline no-bullet line-h-2'>
                        <li class='menu-left-main sub-nav-home b-t-theme'><a href='" . __ROOT__ . "/admission/'>Home</a></li>
                        <li class=\"nav-left-UG menu-left-main\">
                            <a data-toggle=\"collapse\" href=\"#collapseUG\" role=\"button\">Under-Graduate<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
                        </li>
                        <div class=\"collapse\" id=\"collapseUG\">
                            <ul class=\"no-pad list-style-none\">
                                <li class=\"nav-left-UG-procedure menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/ug-procedure\">Procedure & Eligibility</a></li>
                                <li class=\"nav-left-UG-intake menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/ug-capacity\">Intake Capacity</a></li>
                                <li class=\"nav-left-UG-fee menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/ug-fee-structure\">Fee Structure</a></li>
                                <li class=\"nav-left-UG-scholarships menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/ug-scholarship\">Scholarships</a></li>
                            </ul>
                        </div>
                        <li class=\"nav-left-PG menu-left-main\">
                            <a data-toggle=\"collapse\" href=\"#collapsePG\" role=\"button\">Post-Graduate<span class=\"float-right\"><i class=\"fas fa-sort-down\"></i></span></a>
                        </li>
                        <div class=\"collapse\" id=\"collapsePG\">
                            <ul class=\"no-pad list-style-none\">
                                <li class=\"nav-left-PG-procedure menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/pg-procedure\">Procedure & Eligibility</a></li>
                                <li class=\"nav-left-PG-intake menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/pg-capacity\">Intake Capacity</a></li>
                                <li class=\"nav-left-PG-fee menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/pg-fee-structure\">Fee Structure</a></li>
                                <li class=\"nav-left-PG-support menu-left-sub\"><a href=\"" . __ROOT__ . "/admission/pg-financial-support\">Financial Support</a></li>
                            </ul>
                        </div>
                        <li class='menu-left-main sub-nav-conduct'><a href='conduct-discipline'>Conduct & Discipline</a></li>
                        <li class='menu-left-main sub-nav-prospectus'><a href='../docs/prospectus_2018.pdf' target='_blank'>Prospectus 2018</a></li>
                        <li class='menu-left-main sub-nav-nimcet'><a href='#'>NIMCET 2018</a></li>
                        <li class='menu-left-main sub-nav-ccmt'><a href='#'>CCMT 2018</a></li>
                        <li class='menu-left-main sub-nav-dasa'><a href='#'>DASA 2018</a></li>
                    </ul>
                </div>
            </div>
        </div>
    ";

?>
