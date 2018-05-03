<?php
	use \Firebase\JWT\JWT;
	require '../vendor/autoload.php';
	
	$json = file_get_contents("php://input");
	if ($json) {
		$obj = json_decode($json);
		// echo $obj->id;
		// echo $obj->pwd;

		if ($obj->id == 'admin' && $obj->pwd == 'abc@123') {
			$key = "Vishalisgre8";
			$token = array(
				"secret" => "IronMan",
			);
			$jwt = JWT::encode($token, $key);
			
			echo '{
					"key": "success",
					"value": "'.$jwt.'"
				}';
		}
		else{
			echo '{
					"key": "Wrong id or password Try Again",
					"value": ""
				}';
		}
	}

?>