<?php 
	session_start();
require_once('usermodel.php');
	$id = $_REQUEST['id'];
	$password= $_REQUEST['password'];

	if ($id == null || $password == null) {
		echo "invalid username/password <br>";
	}else{
		
		$status = login($id, $password);

		if($status){
			
			header('home.php');
		}else{
			echo "invalid user!";
		}
		
	}



?>
