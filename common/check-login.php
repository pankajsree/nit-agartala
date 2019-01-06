<?php
	if(!isset($_SESSION['uid'])) {
		header("Location: " . __ROOT__ . "/login");
	}

	$timeout_duration = 1800;
	if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
		header("Location: " . __ROOT__ . "/profile/logout");
	}
	else{
		$_SESSION['last_activity'] = time();
	}
?>
