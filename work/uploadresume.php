<?php
	include "../db/connect.php";

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	// $resume = $_POST['resume'];

	$sql = "insert into resume values ('{fname}' , '{lname}', '{email}')";

	if($conn->query($sql)){
		echo "success";
	}

?>