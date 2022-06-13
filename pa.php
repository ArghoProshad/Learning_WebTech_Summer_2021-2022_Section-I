<?php 
	session_start();

	

	$name = $_REQUEST['username'];
	$id = $_REQUEST['id'];
	$email = $_REQUEST['email'];
	$date = $_REQUEST['date'];
	$password = $_REQUEST['password'];

	if ($name == null || $id == null || $email == null || password == null) {
		echo "invalid type everythings <br>";
	}else{
		if($name == $password){
			$_SESSION['status'] = true;
			header('location: argho.php');
		}else{
			echo "invalid user";
		}
	}



?> 