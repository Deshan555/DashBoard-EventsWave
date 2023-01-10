<?php 
    session_start();

	include("connection.php");
	include("functions.php");

    $admin_data = check_login($con);

	
    $currentP = md5($_POST['pswdcurrentpaswd']);
    $passwd = md5($_POST['password']); 

    $user_id = $user_data['User_ID'];
    $admin_pass = $admin_data['Password'];
   
    

    if(!empty($currentP) && !empty($passwd)  && $currentP===$passwd && $currentP==$admin_pass){
        $query = "DELETE users WHERE User_ID = $user_id";

		mysqli_query($con, $query);
		$_SESSION['status']="User Removed Successfully";
        header("Location: userlist.php");
		die;
    }
    else
    {
        $_SESSION['status']="Somethig wrong Please try again!";
        header("Location: userlist.php");
		die;
    }
    
    
?>   
