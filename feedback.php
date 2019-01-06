<?php
	session_start();
    require_once("common/common.php");
    require_once("common/db-config.php");

	//Code for Registration
	if(isset($_POST['submit']))
	{
	    $name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$feedback = $_POST['feedback'];
	    $cur_date = date('Y-m-d');

		if ($_SESSION["code"] != $_POST["captcha"]) {
			?>
			<script>
				alert("Captcha didn't match !!!");
			</script>
			<?php
		}
		else {
			$query = "INSERT INTO `feedback` (`name`, `email`, `phone`, `feedback`, `date`) VALUES ('$name', '$email', '$phone', '$feedback', '$cur_date')";
			$result = mysqli_query($conn, $query);
			if($result) {

				$mail_body = "
					<p>
	                    Thank you <b>" . $name . "</b>, for your Valuable Feedback.
	                </p>
					<p>
						<b>Your Feedback -</b> " . $feedback . "<br />
					</p>
				";

				$mail_subject = "Feedback Received";

				$from = "daspankajsree@gmail.com";
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= "From: 'Pankajsree Das' <daspankajsree@gmail.com>" . "\r\n";

				if(mail($email, $mail_subject, $mail_body, $headers)) {
				    ?>
						<script>alert("Thank You for giving your Valuable Feedback");</script>
					<?php
				}
				else {
				    ?>
				        <script>alert("Sorry for inconvenience, Feedback couldn't be sent !!!");</script>
					<?php
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
        <link rel="stylesheet" href="assets/css/profile.css" />
    </head>
    <body>

        <?= $nav ?>

		<div class="container">
            <h1><span class="b-b-theme-thick">Feedback</span></h1>
            <form id="add-form" method="post" action="feedback.php">
                <div class="row">
                    <div class="col-4 col-md-3">
						Name : <span style="color: red;">*</span>
					</div>
                    <div class="col-8 col-md-9">
                        <input type="text" id="name" name="name" class="tbl-col" value="" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 col-md-3">Email Address : <span style="color: red;">*</span> </div>
                    <div class="col-8 col-md-9">
                        <input type="email" id="email" name="email" class="tbl-col" placeholder="username@domain.com" required  />
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 col-md-3">
						Phone Number :
					 </div>
                    <div class="col-8 col-md-9">
                        <input type="text" id="phone" name="phone" class="tbl-col" placeholder="10-Digit Phone Number"  />
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 col-md-3">Complaint Details : <span style="color: red;">*</span> </div>
                    <div class="col-8 col-md-9">
                        <textarea class="tbl-col" row="7" name="feedback" id="feedback" maxlength="1000"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3" >Captcha : <span style="color: red;">*</span></div>
                    <div class="col-lg-4 text-center" >
                        <img id="img" height="35" width="90" src="common/captcha.php" />
	 				   <a id="captcha-refresh" href="javascript:void(0);"><i class="fas fa-sync-alt"></i></a>
                    </div>
                    <div class="col-lg-5">
                        <input type="text" class="tbl-col" placeholder="Enter Captcha Here" id="captcha" name="captcha" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-right">
                        <input id="submit" name="submit" type="submit" value="Submit" />
                    </div>
                </div>
            </form>
        </div>

        <?= $footer ?>
		<?= $script ?>
        <script>
            $(document).ready(function() {
                $("#captcha-refresh").click(function() {
                    $("#img").attr("src", "common/captcha.php?" + Math.random());
                });
            });
        </script>
    </body>
</html>
