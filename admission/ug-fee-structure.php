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
                        <span class="b-b-theme-thick">Fee Structure</span>
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
                            <div class="text-center">
                                <h4><span class="b-b-theme-center">Bachelor of Technology (B. Tech)</span></h4>
                                <table class="d-inline-block">
                                    <tbody>
                                        <tr>
                                            <td colspan="10">INSTITUTION FEES (in <span class="text-bold">&#x20b9;</span>) WHO ADMITTED (B.TECH) DURING THE ACADEMIC SESSION 2017-18</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Sl. No.</td>
                                            <td rowspan="2">Items</td>
                                            <td rowspan="2">Fee to be Deposited at the time of Admission</td>
                                            <td colspan="7">Fee to be Deposited at the time of Registration of following semester</td>
                                        </tr>
                                        <tr>
                                            <td>2nd sem</td>
                                            <td>3rd sem</td>
                                            <td>4th sem</td>
                                            <td>5th sem</td>
                                            <td>6th sem</td>
                                            <td>7th sem</td>
                                            <td>8th sem</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Admission Fee</td>
                                            <td>1,000.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Inst. Development Fee</td>
                                            <td>5,000.00</td>
                                            <td>5,000.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>*Tuition Fee</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                        </tr>
                                        <tr class="text-bold">
                                            <td colspan="2">Total</td>
                                            <td>77,700.00</td>
                                            <td>70,000.00</td>
                                            <td>67,200.00</td>
                                            <td>66,000.00</td>
                                            <td>67,200.00</td>
                                            <td>66,000.00</td>
                                            <td>68,200.00</td>
                                            <td>68,450.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-bold text-underline">
                                *Note:
                            </div>
                            <ul class="lower-alpha">
                                <li>The SC/ST/PH Students shall get complete fee waiver.</li>
                                <li>The Most Economically Backward Students (whose family income is less than Rs 1.00 lakh per annum) shall get full remission of the fee.</li>
                                <li>The Other Economically Backward Students (whose family income is between Rs. 1.00 lakh to Rs. 5.00 lakh per annum) shall get remission of 2/3rd of the fee.</li>
                                <li>The revised fee would be applicable for students taking admission starting from academic year 2016-17 onwards. The students currently studying admitted prior to academic session 2016 -2017 would continue to pay the existing rates.</li>
                            </ul>
                            <div class="text-center">
                                <h4><span class="b-b-theme-center">Bachelor of Technology - Master of Technology (BT-MT)</span></h4>
                                <table class="d-inline-block">
                                    <tbody>
                                        <tr>
                                            <td rowspan="2">Sl. No.</td>
                                            <td rowspan="2">Items</td>
                                            <td rowspan="2">Fee to be Deposited at the time of Admission</td>
                                            <td colspan="7">Fee to be Deposited at the time of Registration of following semester</td>
                                        </tr>
                                        <tr>
                                            <td>2nd sem</td>
                                            <td>3rd sem</td>
                                            <td>4th sem</td>
                                            <td>5th sem</td>
                                            <td>6th sem</td>
                                            <td>7th sem</td>
                                            <td>8th sem</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Admission Fee</td>
                                            <td>1,000.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Inst. Development Fee</td>
                                            <td>5,000.00</td>
                                            <td>5,000.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>*Tuition Fee</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                        </tr>
                                        <tr class="text-bold">
                                            <td colspan="2">Total</td>
                                            <td>77,700.00</td>
                                            <td>70,000.00</td>
                                            <td>67,200.00</td>
                                            <td>66,000.00</td>
                                            <td>67,200.00</td>
                                            <td>66,000.00</td>
                                            <td>68,200.00</td>
                                            <td>68,450.00</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <br /><br />

                                <h4><span class="b-b-theme-center">Bachelor of Science - Master of Science (BS-MS)</span></h4>
                                <table class="d-inline-block">
                                    <tbody>
                                        <tr>
                                            <td rowspan="2">Sl. No.</td>
                                            <td rowspan="2">Items</td>
                                            <td rowspan="2">Fee to be Deposited at the time of Admission</td>
                                            <td colspan="7">Fee to be Deposited at the time of Registration of following semester</td>
                                        </tr>
                                        <tr>
                                            <td>2nd sem</td>
                                            <td>3rd sem</td>
                                            <td>4th sem</td>
                                            <td>5th sem</td>
                                            <td>6th sem</td>
                                            <td>7th sem</td>
                                            <td>8th sem</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Admission Fee</td>
                                            <td>1,000.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Inst. Development Fee</td>
                                            <td>5,000.00</td>
                                            <td>5,000.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>*Tuition Fee</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                            <td>62,500.00</td>
                                        </tr>
                                        <tr class="text-bold">
                                            <td colspan="2">Total</td>
                                            <td>77,700.00</td>
                                            <td>70,000.00</td>
                                            <td>67,200.00</td>
                                            <td>66,000.00</td>
                                            <td>67,200.00</td>
                                            <td>66,000.00</td>
                                            <td>68,200.00</td>
                                            <td>68,450.00</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <br /><br />

                                <h4><span class="b-b-theme-center">Hostel Fees</span></h4>
                                <table class="d-inline-block">
                                    <tbody>
                                        <tr>
                                            <td>Sl. No.</td>
                                            <td>Particulars</td>
                                            <td>Odd Semester</td>
                                            <td>Even Semester</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Hostel Admission Fee</td>
                                            <td>500.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mess Advance</td>
                                            <td>5,000.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Hostel Rent</td>
                                            <td>2,500.00</td>
                                            <td>2,500.00</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Mess Charge</td>
                                            <td>15,000.00</td>
                                            <td>15,000.00</td>
                                        </tr>
                                        <tr class="text-bold">
                                            <td colspan="2">Total</td>
                                            <td>23,000.00</td>
                                            <td>18,000.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        <?= $footer ?>
        <?= $script ?>
        <script src="../assets/js/sub-menu.js"></script>
        <script>
            $(document).ready(function() {
                $("#nav-admissions, .nav-left-UG, .nav-left-UG-fee").addClass("active");
                $("#collapseUG, #collapseUGMobile").addClass("show");
            });
        </script>
    </body>
</html>
