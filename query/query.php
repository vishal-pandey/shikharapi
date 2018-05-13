<?php
	include "../db/connect.php";
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$query = $_POST['query'];

	$sql = "insert into contacts values ('{$name}','{$mobile}','{$email}','{$query}')";
	if($conn->query($sql)){
		echo "success";
	}
?>