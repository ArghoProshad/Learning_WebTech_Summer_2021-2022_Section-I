<?php 
	session_start();

	$ID = $_REQUEST['id'];
	$password = $_REQUEST['password'];
	$confirm_password = $_REQUEST['COMpassword'];
    $Name = $_REQUEST['username'];
	 $user_type= $_REQUEST['user'];
	

	if ($ID == null || $password == null || $confirm_password== null || $Name == null || $user_type== null ) {
		echo "invalid username/password <br>";
	}else{
		$data = $ID."|".$password."|".$confirm_password."|".$Name."|".$user_type."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $data);

			if($fname == "create"){
				header('location: home.php');	
			}else{
				header('location: login.html');
			}
	
	}



?>