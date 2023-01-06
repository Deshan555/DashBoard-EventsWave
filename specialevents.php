<?php 
session_start();

	include("connection.php");
	include("functions.php");


	$admin_data = check_login($con);

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
    <title>Special Events</title>
  <!-- MDB icon -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="mdbcss/mdb.min.css" />
  <link rel="stylesheet" href="css/sb-admin-2.css" />
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

<!-- Nav Item - add & remove clubs -->
<li class="nav-item">
  <a class="nav-link collapsed" href="clublist.php" >
      <i class="fa fa-list-ol" ></i>


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


<body>
    <div class="box">
        <div class="header">
            <p>Special Event Regestration Form</p>
        </div>

        <form action="insert.php" method="post">

        

            <div class="row">
                <div class="col-2">
                    <p>Event ID </p>
                </div>
                <div class="col-8">
                    <input type="text" name="Event_ID" id="Event_ID" required>  
                </div>
               
            </div>

            <div class="row">
                <div class="col-2">
                    <p>Caption</p>
                </div>
                <div class="col-8">
                  <textarea  name="Caption" id="Caption" required>
                    </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <p>Event Time</p>
                </div>
                <div class="col-8">
                    <input type="time" id="Event_Time" name="Event_Time" required>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                <p>Event Date</p>
                </div>
                <div class="col-8">
                    <input type="date" name="Event_Date" id="Event_Date" required>
                </div>
            
            </div>

            <div class="row">
                <div class="col-2">
                    <p>Invite Link</p>
                </div>
                <div class="col-8">
                    <input type="text"  name="Invite_Link" id="Invite_Link" required>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <p>Date Upload</p>
                </div>
                <div class="col-8">
                    <input type="date" name="Date_Upload" id="Date_Upload" required>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <p>Are You register this event earlier?</p>
                    <input type="radio" name="r1">Yes &nbsp
                    <input type="radio" name="r1">No
                </div> 
            </div>

            <div class="row">

            <div class="text-center">
                  <button  method="post" type="submit" class="btn btn-primary">Register</button>
              </div>             
              </div> 
           </div>
            </div>

        </form>

    </div>

</body>

</html>