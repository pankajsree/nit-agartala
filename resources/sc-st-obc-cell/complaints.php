<?php
	session_start();
    require_once("../../common/common.php");
    require_once("../../common/db-config.php");

	//Code for Registration
if(isset($_POST['compsubmit']))
{
	$unique_id = mysqli_real_escape_string($conn, $_POST['unique_id']);
	$complainant = mysqli_real_escape_string($conn, $_POST['name']);
	$category = mysqli_real_escape_string($conn, $_POST['category']);
	$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$complainee = mysqli_real_escape_string($conn, $_POST['complainee']);
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$details = mysqli_real_escape_string($conn, $_POST['details']);
	$cur_date = date('YmdHis');

	$complaint_id = $cur_date . '/' . $unique_id . '/' . $category;

	if ($_SESSION["code"] != $_POST["captcha"]) {
		?>
		<script>
			alert("Captcha didn't match !!!");
		</script>
		<?php
	}
	else {
        $target_dir = "../../sc-st-obc-cell/uploads/grievances/";
        $target_file = $target_dir . $unique_id . ".pdf";
        if (file_exists($target_file)) {
            unlink($target_file);
        }
        if (!move_uploaded_file($_FILES['id_card']['tmp_name'], $target_file)) {
            die("Sorry, there was an error uploading image, try to Upload it Later. MAX Upload Size 200kb.");
        }

		$query = "INSERT INTO `sc_st_obc_complaints` (unique_id, complainant, category, dept_code, email, contact, complainee, subject, details, complaint_id) VALUES ('$unique_id', '$complainant', '$category', '$dept', '$email', '$contact', '$complainee', '$subject', '$details', '$complaint_id')";
		$result = mysqli_query($conn, $query);
		if($result) {

			$mail_body = "
				<p>
					Hi " . $name . "<br />
					Your Complaint has been Registered Successfully.<br />
					Your Complaint ID is <b>" . $complaint_id . "</b>
				</p>
				<p><b>Complaint Contents -</b></p>
				<p>
					<b>Complainee -</b> " . $complainee . "<br />
					<b>Complaint Subject -</b> " . $subject . "<br />
					<b>Complaint Details -</b> " . $details . "<br />
				</p>
			";

			$mail_subject = "Complaint" . $complaint_id;

			require_once("../../assets/phpmailer/PHPMailerAutoload.php");

			$mail = new PHPMailer;
			$mail->SMTPDebug = 0;
			$mail->IsSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'XXXXXXXXXXXXXXXXXX';
			$mail->Password = 'XXXXXXXXXXXXXXXXXX';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = '465';
			// $mail->SMTPSecure = 'tls';
			// $mail->Port = '587';
			$mail->setFrom('XXXXXXXXXXXXXXXXXX', 'SC/ST/OBC Complaints Section');
			// $mail->addAddress('daspankajsree@gmail.com');
			$mail->AddAddress($email);
			$mail->addReplyTo('XXXXXXXXXXXXXXXXXX');
			$mail->addCC('XXXXXXXXXXXXXXXXXX');
			$mail->WordWrap = 50;
			$mail->IsHTML(true);
			$mail->Subject = $mail_subject;
			$mail->Body = $mail_body;
			if($mail->Send()) {
				?>
					<script>alert("Complaint has been registered successfully");</script>
				<?php
			}
			else {
				die($mail->ErrorInfo);
			}
		}
		else {
			die($query);
		}
	}
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SC / ST / OBC Complaint Registration - NIT Agartala</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../../assets/css/profile.css" />
    </head>
    <body>

        <?= $nav ?>

		<div class="container">
            <h1><span class="b-b-theme-thick">Complaint Details</span></h1>
            <form id="add-form" method="post" action="complaints.php" enctype="multipart/form-data" >
                <input type="hidden" value="" name="updated_col" id="updated-col" />

				<div class="row">
                    <div class="col-4 col-md-3">
						<label for="subject">Your Name : <span style="color: red;">*</span></label>
					</div>
                    <div class="col-8 col-md-9">
                        <input type="text" id="name" name="name" class="tbl-col" value="" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 col-md-3">
						<label for="subject">Your College ID : <span style="color: red;">*</span></label><br />
						( Enrollment No. / Employee Code&nbsp;)
					</div>
                    <div class="col-8 col-md-9">
                        <input type="text" id="unique_id" name="unique_id" class="tbl-col" value="" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 col-md-3"><label for="subject">Your Category : <span style="color: red;">*</span></label></div>
                    <div class="col-8 col-md-9">
                        <select id="category" name="category" class="tbl-col">
                            <option value="">-- Select --</option>
                            <option value="ST">ST</option>
                            <option value="SC">SC</option>
                            <option value="OBC">OBC</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 col-md-3"><label for="subject">Your Department : <span style="color: red;">*</span></label></div>
                    <div class="col-8 col-md-9">
                        <select id="dept" name="dept" class="tbl-col">
                            <option value="">-- Select --</option>
                            <option value="99">Administration</option>
                            <option value="1">Bio Engineering</option>
                            <option value="2">Chemical Engineering</option>
                            <option value="3">Civil Engineering</option>
                            <option value="4">Computer Science Engineering</option>
                            <option value="5">Electrical Engineering</option>
                            <option value="6">Electronics &amp; Communication Engineering</option>
                            <option value="7">Electronics &amp; Instrumentation Engineering</option>
                            <option value="8">Mechanical Engineering</option>
                            <option value="9">Production Engineering</option>
                            <option value="10">School of Management</option>
                            <option value="12">Department of Physics</option>
                            <option value="13">Department of Chemistry</option>
                            <option value="14">Department of Mathematics</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 col-md-3"><label for="subject">Your Email Address : <span style="color: red;">*</span></label></div>
                    <div class="col-8 col-md-9">
                        <input type="email" id="email" name="email" class="tbl-col" value="" required  />
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 col-md-3">
						<label for="subject">Your Contact Number : <span style="color: red;">*</span></label><br />
						( 10 Digit )
					 </div>
                    <div class="col-8 col-md-9">
                        <input type="text" id="contact" name="contact" class="tbl-col" value="" required  />
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 col-md-3">
						<label for="subject">Your ID card : <span style="color: red;">*</span></label><br />
						( PDF Format )
					</div>
                    <div class="col-8 col-md-9">
                        <input class="no-border" type="file" id="id_card" name="id_card" accept="application/pdf" />
                    </div>
                </div>

				<div class="row">
                    <div class="col-4 col-md-3">
						<label for="subject">Name of Complainee : <span style="color: red;">*</span></label><br />
						(Complaint Against)
					</div>
                    <div class="col-8 col-md-9">
                        <input type="text" id="complainee" name="complainee" class="tbl-col" value="" required />
                    </div>
                </div>

				<div class="row">
                    <div class="col-4 col-md-3"><label for="subject">Complaint Subject : <span style="color: red;">*</span></label></div>
                    <div class="col-8 col-md-9">
                        <input type="text" id="subject" name="subject" class="tbl-col" value="" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 col-md-3"><label for="details">Complaint Details : <span style="color: red;">*</span></label></div>
                    <div class="col-8 col-md-9">
                        <textarea class="tbl-col" rows="5" name="details" id="details" maxlength="1500"></textarea>
                    </div>
                </div>

                <div class="row" style="padding-top: 7px;">
               <div class="col-lg-3" ><label for="subject">Captcha : <span style="color: red;">*</span></label></div>
               <div class="col-lg-4 text-center" >
				   <img id="img" size height="35" width="90" src="../../common/captcha.php" />
				   <a id="captcha-refresh" href="javascript:void(0);"><i class="fas fa-sync-alt"></i></a>
			   </div>
                <div class="col-lg-5"><input type="text" class="tbl-col" placeholder="Enter Captcha Here" id="captcha" name="captcha" />
                 </div>
			 	</div>


                <div class="row">
                    <div class="col-12 text-right">
                        <input id="compsubmit" name="compsubmit" type="submit" value="Submit" />

                    </div>
                </div>
            </form>
        </div>

        <?= $footer ?>
		<?= $script ?>
        <script>
            $(document).ready(function() {
                $("#captcha-refresh").click(function() {
                    $("#img").attr("src", "../../common/captcha.php?" + Math.random());
                });
            });
        </script>
    </body>
</html>
