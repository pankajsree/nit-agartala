<?php

	require_once("../common/db-config.php");

	$newPW = mysqli_real_escape_string($conn, $_POST['new-password']);
    $user_id = mysqli_real_escape_string($conn, $_POST['user-id']);
    $password_hash = password_hash($newPW, PASSWORD_DEFAULT);

    $query = "UPDATE `login` SET `password` = '$password_hash' WHERE id = $user_id";
	$result = mysqli_query($conn,$query);
	if(!$result)
	{
		die("Query Failed !!!!" . mysqli_error($conn));
	}

?>
