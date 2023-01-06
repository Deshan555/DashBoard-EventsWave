<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		function password_generate($chars) 
        {
            $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
            return substr(str_shuffle($data), 0, $chars);
        }
        $generatedpass=password_generate(6);
		$fullname = $_POST['fullname'];
        $username = $_POST['username'];
		$password = md5($generatedpass);
        $clubmail = $_POST['clubmail'];
        $fb = $_POST['fb'];
        $whatsapp = $_POST['whatsapp'];
        $image = 'default.png';
        $mail_subject = 'Successfully created a Club Account';
        $email_body ='Registration from has benn created successfully<br><b>Your Password</b>:{$generatedpass}';
        



		if(!empty($fullname) && !empty($username)  && !empty($password) && !empty($clubmail) && !empty($fb) && !empty($whatsapp) && !empty($image) )
		{

			//save to database
			$usertype = 0;
			$query = "insert into Users (FULL_NAME,USER_NAME,USER_TYPE,PASSWORD_S,EMAIL,IMAGE,FACEBOOK,WHATSAPP) values ('$fullname','$username','$usertype','$password','$clubmail','$image','$fb','$whatsapp')";
            mail($clubmail,$mail_subject,$email_body);
			mysqli_query($con, $query);
            $_SESSION['status']="successfully added";
			header("Location: addclubs.php");
			die;
		}else
		{
			 $_SESSION['status']="Somethig wrong Please try again!";
			 header("Location: addclubs.php");
			 die;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo.png" rel="icon">
    <title>Add Clubs</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" >

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gray-900  sidebar sidebar-dark accordion " id="accordionSidebar">

              <!-- Sidebar - Brand -->
                    <div class="sidebar-brand-icon ">
                    <img class="mw-100 " src="img/logo.png" >               
                 </div>
         

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link " href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


              <!-- Nav Item - req -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="addclubs.php" >
                    <i class="fas fa-fw fa-plus-square"></i>
                    <span>Add Clubs</span>
                </a>
               
            </li>

            <!-- Nav Item - club list -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="clublist.php" >
                <i class="fa fa-list-ol"></i>


                    <span>Club List</span>
                </a>
               
            </li>

             <!-- Nav Item - user list -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="userlist.php" >
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>User List</span>
                </a>   
            </li>


                  <!-- Nav Item - special events -->
                  <li class="nav-item">
                <a class="nav-link collapsed" href="specialevents.php" >
                <i class="fa fa-th-large" aria-hidden="true"></i>
                 <span>Special Events</span>
                </a>   
            </li>
            
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="setting.php" >
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span>
                </a>
               
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mb-4 p-3  fixed-bottom">

            <li class="nav-item active ">
            <a class="nav-link" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-1x fa-fw ml-4 mb-3 text-gray-400  fixed-bottom"></i>
                <h6 class="fixed-bottom mb-0 ml-4 px-4 p-3">Logout</h6>
            </a>
        </li>

          

        </ul>
        <!-- End of Sidebar -->

        <div class="container">
		<?php
                      if(isset($_SESSION['status']))
                           {
							   ?>
							   <div class="alert alert-info alert-dismissible">
                                 <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                 <?php echo $_SESSION['status'];?>
                               </div>
                               <?php
			                	unset($_SESSION['status']);
		                	}
		       	?>
        <form action="" method="post" class="border border-2 m-4 p-3">
            <div class="row">
                <h3>Add Club</h3>
                <div class="col">
                    <label for="full-name">Full Name:</label>
                    <input type="text" name="fullname" class="form-control" id="full-name" required placeholder="Enter Full Name">
                </div>
                <div class="col">
                    <label for="user-name">User Name</label>
                    <input type="text"  name="username" id="user-name" class="form-control" required placeholder="Enter User Name">
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <label for="fb">Facebook</label>
                    <input type="text"  name="fb" id="fb" class="form-control" required placeholder="Enter the FaceBook link" title="Enter the FaceBook link">
                </div>
                <div class="col">
                    <label for="whatsapp">Whatsapp</label>
                    <input type="text" name="whatsapp"  id="whatsapp" class="form-control" required placeholder="Ente the whatApp Number" title="Ente the whatApp Number">
                </div>
            </div>  
            <div class="row">
                <div class="col-6">
                    <label for="club-mail">Club Mail</label>
                    <input type="email" name="clubmail" id="club-mail" class="form-control" required placeholder="Enter The email @sltc.ac.lk" pattern="[a-z0-9._%+-]+@sltc.ac.lk" title="Please Enter a SLTC email">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
