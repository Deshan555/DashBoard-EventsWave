<?php 
    include("connection1.php");
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
    <title>User List</title>


    <!-- jquery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>

    <!-- bootstrap growl js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-growl-ifightcrime@1.1.0/jquery.bootstrap-growl.min.js"></script>

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

            <!-- Nav Item - add & remove clubs -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="clublist.html" >
                    <i class="fa fa-list-ol" ></i>


                    <span>Club List</span>
                </a>   
            </li>

             <!-- Nav Item - user list -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="userlist.html" >
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>User List</span>
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



        <div class="container-lg border border-2 m-3 p-3">

            <h2 class="m-1 p-2">User List</h2>
            <div class="input-group mb-3 ">
                <div class="form-outline">
                <input type="search" id="form1" class="form-control" placeholder="Search User" aria-label="Search" />
                  </div>
                <button type="button" class="btn btn-primary">
                  <i class="fas fa-search"></i>
                </button>
            </div>
    
        <form method="$_POST">   
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                    <div class="row">
                    <div class="col-sm-8">
                    </div>
                    </div>
                    </div>
                    <table class="table table-hover">
                    <thead>
                    <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php
                    
                    $sql = "select * from `Users`";
                    $result = mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['User_ID'];
                            $name=$row['FULL_NAME'];
                            echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>

                            <td>
                                
                            <a href="users_delete.php? deleteid='.$id.'" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a class="keep  keepbtn" onclick="bootstrapAlert()" title="Keep" data-toggle="tooltip"><i class="fa fa-check-circle" aria-hidden="true"></i></a>
                            
                            </td>
                        </tr>';
                        }
                    }
                    ?>
                    
            
                    </tbody>
                    </table>
                    </div>
                </div>
            
            </div>
        </form> 
        
        <script>

        function bootstrapAlert() {
            $(".bootstrap-growl").remove();
            $.bootstrapGrowl(" viewed!",{
                type: "success",
                offset: {from:"top",amount:250},
                align:"center",
                delay:500,
                allow_dismiss: true,
                stackup_spacing:10
            });
        }
        
        </script>
       
</body>
</html>
