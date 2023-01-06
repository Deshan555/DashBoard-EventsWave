<?php 
    session_start();

	include("connection.php");
	include("functions.php");

    $admin_data = check_login($con);

	
    $currentpwd = md5($_POST['pswd']); 
    $passwd = md5($_POST['password']); 
    $currentP = md5($_POST['pswdcurrentpaswd']);

    $admin_id = $admin_data['Admin_ID'];
    $admin_pass = $admin_data['Password'];
   
    

    if(!empty($currentpwd) && !empty($passwd) && !empty($currentP) && $currentpwd===$passwd && $currentP==$admin_pass){
        $query = "UPDATE Admin SET Password='$passwd' WHERE Admin_ID = $admin_id";

		mysqli_query($con, $query);
		$_SESSION['status']="password changed successfully ";
        header("Location: setting.php");
		die;
    }
    else
    {
        $_SESSION['status']="Somethig wrong Please try again!";
        header("Location: setting.php");
		die;
    }
    
    
?>   
