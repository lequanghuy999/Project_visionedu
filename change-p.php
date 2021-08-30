<?php 
session_start();

    if($_SESSION['email']==true) {

    include "db/connection.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    if(empty($op)){
      header("Location: change-password.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: change-password.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: change-password.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	  //$op = md5($op);
    	  //$np = md5($np);
        $email=$_SESSION['email'];
    
        $sql = "SELECT *
                FROM admin_login WHERE 
                email='$email'";
        $result = mysqli_query($conn, $sql);
        // foreach ($result as $item)
        // {
        //     $password =  $item['password'];
    
        // }
        $item = mysqli_fetch_assoc($result);
        $password = $item['password'];
        
        if ($op == $password) {
            if ($np == $c_np){
                $sql_2 = "UPDATE admin_login SET password='$np'WHERE email='$email'";
        	    mysqli_query($conn, $sql_2);
        	    header("Location: change-password.php?success=Your password has been changed successfully");
	            exit();
            }
            else{
                echo 'mk khong khop';
            }
        }
        else {
            header("Location: change-password.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: change-password.php");
	exit();
}

}else{
     header("Location: admin-home.php");
     exit();
}