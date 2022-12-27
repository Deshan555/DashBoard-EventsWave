<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo.png" rel="icon">
    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
                <a class="nav-link collapsed" href="#" >
                    <i class="fas fa-fw fa-plus-square"></i>
                    <span>Add Clubs</span>
                </a>
               
            </li>



            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" >
                    <i class="fas fa-fw fa-signal"></i>
                    <span>Pending Req</span>
                </a>
           
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" >
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span>
                </a>
               
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mb-4 p-3  fixed-bottom">

            <li class="nav-item active ">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-1x fa-fw ml-4 mb-3 text-gray-400  fixed-bottom"></i>
                <h6 class="fixed-bottom mb-0 ml-4 px-4 p-3">Logout</h6>
            </a>
        </li>

          

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h3 class="collapse-header text-dark font-weight-bold">Overview</h3>

                    <!-- Topbar Search-->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                          <a class="nav-link  dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw text-dark"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right p-1  shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="navbar-search">
                              <div class="input-group">
                                <input type="text" class="form-control bg-light border-2 large " placeholder="search.."
                                  aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                <div class="input-group-append">
                                  <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw text-dark"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-check-square text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-dark">December 7, 2019</div>
                                        new event has added to the event calender!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-dark">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-900" href="#">Show All Alerts</a>
                            </div>
                        </li>

                       

                        

                    <!-- Nav Item - User Information -->
                       <li class="nav-item angle-down">
                           <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg"> 
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ml-2 font-weight-bold text-dark">Name name</span>
                                        <span class="d-none d-xl-block ml-2 fs-12 text-dark small">id155555</span>
                                    </span>                                    
                            </a>


                     <!-- Dropdown - User Information -->
                         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                                </a>
                         </div>
                    </li>
                        
              </ul>
                        
        </nav>
        <!-- End of Topbar -->
              
        
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

             <br>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- users Card Example -->
                        <div class="col-xl-4 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body bg-gradient-success">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 ">
                                            <div class="h3 font-weight-bold text-light  mb-1">
                                               Total Users</div>
                                            <div class="h1 mb-0 font-weight-bold text-light">1015</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- comments Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4 ">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body bg-gradient-primary">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h3 font-weight-bold text-light mb-1">
                                                Total Comments</div>
                                            <div class="h1 mb-0 font-weight-bold text-light">5562</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

         

                        <!-- clubs Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body bg-gradient-success">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h3 font-weight-bold text-light mb-1">
                                                Total Clubs</div>
                                            <div class="h1 mb-0 font-weight-bold text-light">12</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row ">

                        <!-- Area Chart-->
                        <div class="col-xl-8 col-lg-7 ">
                            <div class="card shadow mb-4 ">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header bg-info py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 h-8 font-weight-bold text-light">Total User Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">



                        <?php 

                        $dataPoints = array( 
                            array("y" => 3373.64, "label" => "Germany" ),
                            array("y" => 2435.94, "label" => "France" ),
                            array("y" => 1842.55, "label" => "China" ),
                            array("y" => 1828.55, "label" => "Russia" ),
                            array("y" => 1039.99, "label" => "Switzerland" ),
                            array("y" => 765.215, "label" => "Japan" ),
                            array("y" => 612.453, "label" => "Netherlands" )
                        );


                                $connection = new mysqli("localhost","root","", "event");
                                
                                if(!$connection)
                                die("could not connect" .mysqli_connect_error());

                                $test=array();
                                $count=0;

                                $res=mysqli_query($connection,"SELECT *
                                FROM users
                                ORDER BY STR_TO_DATE(CONCAT('0001 ', Month, ' 01'), '%Y %M %d')");

                               while($row = mysqli_fetch_array($res)){
                                    $test[$count] ["label"]=$row["Month"];
                                    $test[$count] ["y"]=$row["Total"];
                                    $count=$count+1;
                                }


                                
                                ?>
                                <!DOCTYPE HTML>
                                <html>
                                <head>
                                <script>
                                window.onload = function() {
                                
                                var chart = new CanvasJS.Chart("chartContainer", {
                                    animationEnabled: true,
                                    theme: "light2",
                                   
                                    axisY: {
                                        title: "Total Users"
                                        },
                                        axisX: {
                                        interval: 1,

                                        },
                                        
                                    data: [{
                                        type: "spline",
                                        markerSize: 5,
                                        yValueFormatString: "#,##0.## users",
                                        dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
                                    }]
                                });
                                chart.render();
                                
                                }
                                </script>
                                </head>
                                <body>
                                <div id="chartContainer" style="height: 330px; width: 100%; "></div>
                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                                </body>
                                </html>   
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header bg-info py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-light">Total Comments Overview</h6>
                                  
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                    <html>
                                    <head>
                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                                        <script type="text/javascript">
                                            function drawChart() {

                                                var jsonData = $.ajax({
                                                    url: "data.php",
                                                    dataType: "json",
                                                    async: false
                                                }).responseText;
                                            
                                                var data = new google.visualization.DataTable(jsonData);

                                                
                                                var chart = new google.visualization.PieChart(document.getElementById('comments'));
                                                chart.draw(data, {
                                                width: 440,
                                                height: 260,
                                                colors: ['#1cc88a', '#858796','#4e73df'],
                                                is3D: true
                                                });     
                                                }
                                         

                                            google.charts.load('current', {'packages':['corechart']});

                                        
                                            google.charts.setOnLoadCallback(drawChart);
                                        </script>
                                    </head>
                                    <body>
                                        <div id="comments"></div>
                                    </body>
                                </html>
                                    </div>
                                  
                            </div>
                        </div>
                
                    <!-- Content Row -->
                    <div class="row">

                   
                    
                       
                   
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; EventsWave 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="#">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>



    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="data.php></script>

</body>

</html>