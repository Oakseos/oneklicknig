<?php
// session_start();
include('driver/session.php');
   
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 06:50:27 GMT -->
<head>
    <meta charset="utf-8" />
    <title>One Klick Nigeria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

       <header id="page-topbar">
            <div class="navbar-header">

                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                   
                </div>

                <div class="d-flex align-items-center">
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h3> Welcome </h3>
                            <span class="d-none d-sm-inline-block ml-1">
                                <?php  
                                    
                                    echo $_SESSION['name'];

                                ?> 
                            </span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                           
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="profile.php">
                                <span>Profile</span>
                                <span>
                                    <span class="badge badge-pill badge-warning">1</span>
                                </span>
                            </a>
                            
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Lock Account</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="driver/logout.php">
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="index.php" class="logo">
                        <img src="assets/logo_white.png" style="height: 40px" />
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="index.php" class="waves-effect"><i class='bx bx-home-smile'></i><span class="badge badge-pill badge-primary float-right"></span><span>Dashboard</span></a>
                        </li>

                        <li>
                            <a href="../index.html" class="waves-effect"><i class='bx bx-home-smile'></i><span class="badge badge-pill badge-primary float-right"></span><span>official Website</span></a>
                        </li>

                          <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-file"></i><span>Account</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="profile.php"> Profile</a></li>
                                <li><a href="editprofile.php">Edit Profile</a></li>
                                <li>
                                    
                                    <a href="driver/logout.php">Log Out</a>

                                </li>
                                
                            </ul>
                        </li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-file"></i><span>One Klick Account</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="wallet.php">Wallet Balance</a></li>
                                <li><a href="fund_wallet.php">Fund Wallet</a></li>
                                <li><a href="buyAirtime.php">Buy Airtime</a></li>
                                <li><a href="transaction.php">Transaction</a></li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-file"></i><span>Data Menu</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="data-prices.php">Data Prices</a></li>
                                <li><a href="buy_mtn.php">MTN</a></li>
                                <li><a href="buy-glo.php">GLO</a></li>
                                <li><a href="buy_airtel.php">Airtel</a></li>
                                <li><a href="buy_etisalat.php">Etisalat</a></li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-file"></i><span>Pay Bills</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="dstv.php">DSTV</a></li>
                                <li><a href="gotv.php">GOTV</a></li>
                                <li><a href="startimes.php">STARTIMES</a></li>
                               <!--  <li><a href="#">SPECTRANET</a></li> -->
                                
                                
                            </ul>
                        </li>

                        <li class="menu-title">More</li>

                        <li>
                            <a href="referAndEarn.php" class="waves-effect"><i class='bx bx-home-smile'></i><span class="badge badge-pill badge-primary float-right"></span><span>Refer and Earn</span></a>
                        </li>

                         

                         <li>
                            <a href="contact.php" class="waves-effect"> <i class='bx bx-home-smile'></i><span class="badge badge-pill badge-primary float-right"></span><span>Contact Admin</span></a>
                        </li>

                        
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>

        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Data Prices</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Data Prices</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
               <section class="content">
      <div class="container-fluid">


<div class="row">

          <div class="col-md-12">
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <h3 class="card-title">MTN DATA PRICES</h3>
                <table class="table table-bordered table-striped">
                  <thead class="bg bg-primary text-white">
                    <tr>
                      <!-- <th style="width: 10px">#</th> -->
                      <th>S/N</th>
                      <th>Bundle</th>
                      <th>Price</th>

                    </tr>
                  </thead>
                    <tbody>
                      <?php 
                              
                              include('driver/database.php'); 
                              if ($db->connect_error) {
                                  $message = "db did not connect"; die("Connection failed: " . $db->connect_error);
                              }else{
                                  $checkBundle = "SELECT * FROM mtn_bundle  "; 
                                  $result = $db->query($checkBundle); 
                                  
                                  while($row = mysqli_fetch_array($result)){ 
                                      $id = $row['id'] ;
                                      $bundle =$row['data_volume'];
                                      $price =$row['price'];
                                      echo " <tr>
                                                <td> $id</td>
                                                <td>$bundle</td>
                                                <td><del>N</del>$price</td>
                                             </tr>";
                                  }
                              }
                       ?>

                                        
                  </tbody>
                </table>
              </div>

            </div>
            </div>
            <!-- /.card -->

  </div>



<div class="row">

          <div class="col-md-12">
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <h3 class="card-title">GLO DATA PRICES</h3>
                <table class="table table-bordered table-striped">
                  <thead class="bg bg-primary text-white">
                    <tr>
                      <!-- <th style="width: 10px">#</th> -->
                      <th>S/N</th>
                      <th>Bundle</th>
                      <th>Price</th>

                    </tr>
                  </thead>
                    <tbody>
                      <?php 
                              
                              include('driver/database.php'); 
                              if ($db->connect_error) {
                                  $message = "db did not connect"; die("Connection failed: " . $db->connect_error);
                              }else{
                                  $checkBundle = "SELECT * FROM glo_bundle  "; 
                                  $result = $db->query($checkBundle); 
                                  
                                  while($row = mysqli_fetch_array($result)){ 
                                      $id = $row['id'] ;
                                      $bundle =$row['data_volume'];
                                      $price =$row['price'];
                                      echo " <tr>
                                                <td> $id</td>
                                                <td>$bundle</td>
                                                <td><del>N</del>$price</td>
                                             </tr>";
                                  }
                              }
                       ?>
                       
                    </tbody>
                </table>
              </div>

            </div>
            </div>
            <!-- /.card -->

  </div>




<div class="row">

          <div class="col-md-12">
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <h3 class="card-title">9MOBILE DATA PRICES</h3>
                <table class="table table-bordered table-striped">
                  <thead class="bg bg-primary text-white">
                    <tr>
                      <!-- <th style="width: 10px">#</th> -->
                      <th>S/N</th>
                      <th>Bundle</th>
                      <th>Price</th>

                    </tr>
                  </thead>
                    <tbody>
                      <?php 
                              
                              include('driver/database.php'); 
                              if ($db->connect_error) {
                                  $message = "db did not connect"; die("Connection failed: " . $db->connect_error);
                              }else{
                                  $checkBundle = "SELECT * FROM 9mobile_bundle  "; 
                                  $result = $db->query($checkBundle); 
                                  
                                  while($row = mysqli_fetch_array($result)){ 
                                      $id = $row['id'] ;
                                      $bundle =$row['data_volume'];
                                      $price =$row['price'];
                                      echo " <tr>
                                                <td> $id</td>
                                                <td>$bundle</td>
                                                <td><del>N</del>$price</td>
                                             </tr>";
                                  }
                              }
                       ?>
                              
                    </tbody>
                </table>
              </div>

            </div>
            </div>
            <!-- /.card -->

  </div>

<div class="row">

          <div class="col-md-12">
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div> -->
              <!-- /.card-header -->
              <!-- <div class="card-body">
                <h3 class="card-title">ETISALAT DATA PRICES</h3>
                <table class="table table-bordered table-striped">
                  <thead class="bg bg-primary text-white">
                    <tr> -->
                      <!-- <th style="width: 10px">#</th> -->
                     <!--  <th>Network</th>
                      <th>Bundle</th>
                      <th>Price</th>

                    </tr>
                  </thead>
                  <tbody>
                                        <tr>
                                            <td>etisalat</td>

                      <td>1GB</td>
                      <td><del>N</del>650</td>

                    </tr>
                          <tr>
                                            <td>etisalat</td>

                      <td>1.5GB</td>
                      <td><del>N</del>900</td>

                    </tr>
                          <tr>
                                            <td>etisalat</td>

                      <td>2GB</td>
                      <td><del>N</del>1050</td>

                    </tr>
                          <tr>
                                            <td>etisalat</td>

                      <td>3GB</td>
                      <td><del>N</del>1500</td>

                    </tr>
                          <tr>
                                            <td>etisalat</td>

                      <td>5GB</td>
                      <td><del>N</del>2500</td>

                    </tr>
                        </tbody>
                </table>
              </div>

            </div>
            </div> -->
            <!-- /.card -->

  </div>

</div>
</section>

                
            <!-- container-fluid -->
        </div>
       
            <!-- End Page-content -->

             <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2020 © OneKlick Nigeria
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by KlicNkreate
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay">
    </div>


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

    <!-- Morris Js-->
    <script src="../plugins/morris-js/morris.min.js"></script>
    <!-- Raphael Js-->
    <script src="../plugins/raphael/raphael.min.js"></script>

    <!-- Morris Custom Js-->
    <script src="assets/pages/dashboard-demo.js"></script>

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 06:51:20 GMT -->
</html>