<?php 
    session_start();

	include("connection.php");
	include("functions.php");

	
    $username = $_POST['username']; 
    $passwd = md5($_POST['password']); 
   
    // next code block 
    $checkuser = mysqli_query($con, "SELECT * FROM Admin WHERE User_Name='{$username}'");
    $unumber = mysqli_num_rows($checkuser);

    if(!empty($username) && !empty($passwd)){
        $query = "insert into Admin (User_Name,Password) values ('$username','$passwd')";

		mysqli_query($con, $query);
		$_SESSION['status']="Successfully added a new admin";
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
