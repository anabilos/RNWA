<?php
	include("../connection.php");
	include("../functions.php");
	$valid_passwords = array ("admin" => "rest3");
	$valid_users = array_keys($valid_passwords);

	$user = $_SERVER['PHP_AUTH_USER'];
	$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

		if (!$validated) {
			header('WWW-Authenticate: Basic realm="My Realm"');
			header('HTTP/1.0 401 Unauthorized');
			die ("Not authorized");
}
	$db = new dbObj();
	$connection =  $db->getConnstring();
 
	$request_method=$_SERVER["REQUEST_METHOD"];
	switch($request_method)
	{
		case 'GET':
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				get_buildings($id);
			}
			else
			{
				get_buildings();
			}
			break;
			case 'POST':
			insert_building();
			break;	
			
			case 'PUT':		
			if (isset($_GET["id"])){
				$id=intval($_GET["id"]);
				update_building($id);				
			}
			else{
				header('Content-Type: application/json');
				echo json_encode("Error while calling method and parametars");
				
			}				
			
			break;				
			case 'DELETE':
			$id=intval($_GET["id"]);
			delete_building($id);
			break;
			
		default:
			
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}
?>
