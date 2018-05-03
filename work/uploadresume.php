<?php
	include "../db/connect.php";

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	// $resume = $_POST['resume'];
	$resume = $_FILES['resume']['name'];
	$resumelink = "https://shikharapi.vishalpandey.xyz/resume/".$resume;

	$sql = "insert into resume values ('{$fname}' , '{$lname}', '{$email}', '{$resumelink}')";



	$dir = "../resume/";
	$target_file = $dir.$resume;
	if(move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)){
		if($conn->query($sql)){
			echo "success";
		}
	}

?>