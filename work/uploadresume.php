<?php
	include "../db/connect.php";

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	// $resume = $_POST['resume'];
	$resume = $_FILES['resume']['name'];

	$sql = "insert into resume values ('{$fname}' , '{$lname}', '{$email}')";

	if($conn->query($sql)){
		// echo "success";
		$dir = "../resume/";
		$target_file = $dir.$resume;
		if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)){
			echo "success";
		}else{
			echo $target_file;
		}
	}

?>