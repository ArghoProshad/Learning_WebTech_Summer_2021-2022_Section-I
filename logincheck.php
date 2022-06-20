  <?php 
	session_start();

	$userID = $_REQUEST['ID'];
	$password = $_REQUEST['password'];
	//$confirm_password = $_REQUEST['COMpassword'];
    //$Name = $_REQUEST['username'];
	 //$user_type= $_REQUEST['user'];
	

	if ($userID == null || $password == null) {
		echo "invalid username/password <br>";
	}else{
		$file = fopen('user.txt', 'r');
		while (!feof($file)) {
				$line = fgets($file);
				$user = explode('|', $line);
				print_r($user);
				echo "<br>";
				if($userID == trim($user[0]) && $password == trim($user[1])){
					setcookie('status', 'true', time()+3600, '/');
					header('location: home.php');
				}
		}
		echo "invalid user!";
	}
	?>