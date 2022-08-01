<?php 
    session_start();
    require_once('../model/userModel.php');

      //$User_Type=$_REQUEST['users'];
     #$fname = $_REQUEST['formname'];
$json = $_POST['data'];
$student = json_decode($json);
//$student = ['username'=> $Name,'id'=> $Id, 'password'=>$Password,'Pnumber'=> $Phone_Number, 'email'=>$Email,'dob'=>$DOB,'type'=>'user'];

    




        $status = AddBuyer($student);

        if($status){
            setcookie('status', 'true', time()+3600, '/');
            header('location: ../view/home.php');
        }else{
            echo "invalid user!";
        }

?>
