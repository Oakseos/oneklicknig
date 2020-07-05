<?php
// session_start();
include('driver/session.php');

include('driver/profile_update.php');
   
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
                                <h4 class="mb-0 font-size-18">Edit Profile</h4>
                                <?php 
                                    echo $_SESSION['email'];
                                ?>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Edit Profile</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                </div>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-md-2">
                            </div>
                            <!-- contents -->
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header ">
                                            <h2>  Update Profile</h2>
                                                <center>                                                  
                                                    <span class="text-danger">   </span> 
                                                </center>

                                    </div>

                                    <?php  include('driver/error.php') ?>
                                    <?php 
                                      echo $message;
                                    ?>

                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">
                                         <!-- /.tab-pane -->
                                            <div class="active tab-pane" id="settings">
                                               <!--  form starts here  -->
                                                <form class="form-horizontal" action="" method="post">
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="fname" id="inputName" 

                                                            value="                             <?php 
                                                                echo $_SESSION['name'];
                                                             ?> "
                                                            placeholder="Name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="email" id="inputEmail"value=" 
                                                            <?php 
                                                            echo $_SESSION['email'];
                                                             ?> "
                                                              placeholder="Email" required="" readonly="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName2" class="col-sm-2 col-form-label">Phone Number</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="phone" id="inputName2" placeholder="" value="
                                                            <?php 
                                                                echo $_SESSION['phone'];
                                                            ?> "
                                                             required="">
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="user_id" value="
                                                        <?php 
                                                                echo $_SESSION['id'];
                                                        ?> " >

                                                    <div class="form-group row">
                                                        <label for="inputSkills" class="col-sm-2 col-form-label">Referral link</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputSkills" readonly="" value="https://www.setsub.com/register/SETSUB1579VL">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-sm-2 col-sm-10">
                                                            <button type="submit" class="btn btn-danger" name="submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                                    <!-- /.tab-pane -->
                                        </div>
                                                  <!-- /.tab-content -->
                                    </div><!-- /.card-body -->
                                </div>
                                              <!-- /.nav-tabs-custom -->
                            </div>
                                            <!-- /.col -->
                            <div class="col-md-2">
                            </div>
                        </div>
                                          <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            </div> <!-- container-fluid -->
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