<?php
// session_start();
include('driver/session.php');

?>
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jun 2020 13:26:45 GMT -->
<head>
        <meta charset="utf-8" />
        <title>One klick Nigeria - Expenditure Table</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />    

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-small.png" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo_white.png" alt="" height="50">
                                </span>
                            </a>

                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-small.png" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo_white.png" alt="" height="50">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="d-none d-sm-block">
                            <div class="dropdown pt-3 d-inline-block">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Create <i class="mdi mdi-chevron-down"></i>
                                    </a>

                               <!--  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                          <!-- App Search-->

                          <form class="app-search d-none d-lg-block">
                            <center>
                                <h5>Welcome <br> <?php echo $_SESSION['name'];?>
                                </h5>
                            </center>

                        </form>

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                
                            </div>
                        </div>

                        

                        <div class="dropdown d-none d-lg-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        

                        
                        
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="index.php" class="waves-effect">
                                    <i class="ti-home"></i><span class="badge badge-pill badge-primary float-right"></span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="registeredUsers.php" class=" waves-effect">
                                    <i class="ti-calendar"></i>
                                    <span>View Users</span>
                                </a>
                            </li>

                            <li>
                                <a href="transactions.php" class=" waves-effect">
                                    <i class="ti-calendar"></i>
                                    <span>Transaction Table</span>
                                </a>
                            </li>

                            <li>
                                <a href="income_table.php" class=" waves-effect">
                                    <i class="ti-calendar"></i>
                                    <span>Income Table</span>
                                </a>
                            </li>

                             <li>
                                <a href="expenditures.php" class=" waves-effect">
                                    <i class="ti-calendar"></i>
                                    <span>Expenditure Table</span>
                                </a>
                            </li>

                            <li>
                                <a href="fundWallet.php" class=" waves-effect">
                                    <i class="ti-calendar"></i>
                                    <span>Fund User Account</span>
                                </a>
                            </li>

                            <li>
                                <a href="driver/logout.php" class=" waves-effect">
                                    <i class="ti-calendar"></i>
                                    <span>Logout</span>
                                </a>
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
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Data Table</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">One Klick</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Expenditures</li>
                                    </ol>
                                </div>
                            </div>

                            
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Total Amount</h4>
                                        <p class="card-title-desc">List of users and amount used to fund the wallet<!--  <code>$().DataTable();</code>. -->
                                        </p>
                                        </p>

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>User_ID</th>
                                                <th>Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $message ='';
                                                    include('driver/database.php'); 
                                                    if ($db->connect_error) {
                                                        $message = "db did not connect"; die("Connection failed: " . $db->connect_error);
                                                    }else{
                                                        $checkUser = "SELECT * FROM expenditures "; 
                                                        $result = $db->query($checkUser); 
                                                        
                                                        while($row = mysqli_fetch_array($result)){ 
                                                            $user = $row['username'] ;
                                                            $userId =$row['user_id'];
                                                            $amt =$row['amount'];
                                                            // $id = $row['id'];
                                                            // $tr_id =$row['trans_id'];
                                                            // //get date and time
                                                            // $datetimeFormat = 'Y-m-d H:i:s';
                                                            // $date = new \DateTime();
                                                            // $date->setTimestamp($tr_id);
                                                            // $tr_date = $date->format($datetimeFormat);

                                                            echo "<tr role='row' class='odd'>
                                                                
                                                                    <td> $user </td>
                                                                    <td> $userId </td>
                                                                    <td>$amt</td>
                                                                </tr>";

                                                        }
                                                    }
                                                    ?>
                                            </tbody>

                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                      

                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                
                 <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                © <script>document.write(new Date().getFullYear())</script> One Klick Nigeria<span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by KlicNKreate</span>
                            </div>
                        </div>
                    </div>
                </footer> 

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                            data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <a href="https://1.envato.market/grNDB" class="btn btn-primary btn-block mt-3" target="_blank"><i class="mdi mdi-cart mr-1"></i> Purchase Now</a>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script> 

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jun 2020 13:27:04 GMT -->
</html>
