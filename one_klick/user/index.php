<?php
// session_start();
include('driver/session.php');
    
 $user_id= $_SESSION[ 'id'] ;
 $user =  $_SESSION[ 'username'] ;

 //connect to db
    include('driver/database.php'); 
    //$db = NEW Mysqli('localhost', 'root', '','one_klick_nig');

     if ($db->connect_error) {
            $message = "db did not connect";

          die("Connection failed: " . $db->connect_error);
    }else{

        //check if sum of money in wallet 
        $accountDeposit = $db->query("SELECT SUM(amount) AS sum FROM income_fund WHERE user_id = '$user_id' ");
        $row1 = $accountDeposit->fetch_assoc();               
        $sumFunds = $row1['sum']; 
                    //check if sum of money spent 

        $accExpense = $db->query("SELECT SUM(amount) AS sum FROM expenditures  WHERE user_id = '$user_id' ");
        $row2 = $accExpense->fetch_assoc();
        $sumSpent = $row2['sum']; 

        //available balance
        $balance = ($sumFunds - $sumSpent);
        $tr_checkUser = "SELECT * FROM transactions WHERE user_id = '$user_id' ";

        $result = $db->query($tr_checkUser );
        
        $row = mysqli_fetch_array($result);

            if ($result = $db->query($tr_checkUser )) {
                  // Return the number of rows in result set
                  $rowcount= mysqli_num_rows($result);

                  //$row = mysqli_fetch_array($rowcount);
                  //echo "number of rows: ",$rowcount;
                  // Free result set
                  mysqli_free_result($result);

                $_SESSION['balance'] =  $balance;
                $_SESSION['sumSpent'] =  $sumSpent;
                $_SESSION['sumFunds'] = $sumFunds;
                $_SESSION['tr_count'] = $rowcount;
                  }

                
               
       }


   
?>


<!DOCTYPE html>
<html lang="en">


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
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


 -->
    <style>
        .fas { 
            font-size: 21px;
         }
    </style>

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
                                <?php echo $_SESSION['name'];?> 
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
                            <a href="driver/home.php" class="waves-effect"><i class='bx bx-home-smile'></i><span class="badge badge-pill badge-primary float-right"></span><span>official Website</span></a>
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
                                <h4 class="mb-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                </div>

                <div class="container">
                     <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="bx bx-layer float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Referral Code</h6>
                                    <h3 class="mb-3" data-plugin="counterup">
                                        <?php echo $_SESSION['ref']; ?>

            
                                    </h3>
                                    <!-- <span class="badge badge-success mr-1"> +11% </span> <span class="text-muted">From previous period</span> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="bx bx-dollar-circle float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Account Number</h6>
                                    <h3 class="mb-3"><span data-plugin="counterup">
                                        <?php echo $_SESSION['id']; ?>
                                    </span></h3>
                                   <!--  <span class="badge badge-danger mr-1"> -29% </span> <span class="text-muted">From previous period</span> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="bx bx-bx bx-analyse float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Wallet Balance</h6>
                                    <h3 class="mb-3"><del>N</del><span data-plugin="counterup">
                                        <?php echo $_SESSION['balance']; ?>
                                    </span></h3>
                                   <!--  <span class="badge badge-warning mr-1"> 0% </span> <span class="text-muted">From previous period</span> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="bx bx-basket float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Transaction</h6>
                                    <h3 class="mb-3" data-plugin="counterup"> <?php echo $_SESSION['tr_count'] ; ?>   </h3>
                                    <!-- <span class="badge badge-success mr-1"> +89% </span> <span class="text-muted">Last year</span>
                                </div> --> 
                            </div>
                        </div>
                </div>
                    <!-- end row -->
                    

              
                   


                    <!-- start page title -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Quicklinks</h4>





                                

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <a href="contact.php">
                                    <div class="card-body">
                                        <i class="bx bx-layer float-right m-0 h2 text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">Fund Wallet</h6>
                                        <center>
                                             <a href="fund_wallet.php"><i class="fas fa-arrow-right"></i></a>
                                         </center>
                                     </div>
                                </a>
                               
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <a href="data-prices.php">
                                    <div class="card-body">
                                        <i class="bx bx-dollar-circle float-right m-0 h2 text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">Buy MTN Data</h6>
                                        <center>
                                             <a href="buy_mtn.php"><i class="fas fa-arrow-right"></i></a>
                                         </center>                                  
                                    </div>
                                </a>
                                
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <a href="buyAirtime.php">
                                    <div class="card-body">
                                        <i class="bx bx-bx bx-analyse float-right m-0 h2 text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">Buy Airtime</h6>
                                        <center>
                                             <a href="buyAirtime.php"><i class="fas fa-arrow-right"></i></a>
                                         </center>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <a href="contact.php">
                                    <div class="card-body">
                                        <i class="bx bx-basket float-right m-0 h2 text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">Contact Admin</h6>
                                        <center>
                                             <a href="contact.php"><i class="fas fa-arrow-right"></i></a>
                                         </center>
                                    </div>
                                </a>                              
                        </div>
                    </div>
                    <!-- end row -->
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-right position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                       
                                    </div>

                                    <h4 class="card-title overflow-hidden">Total Earnings</h4>
                                   
                                    <div class="table-responsive">
                                        <table class="table table-centered table-hover table-xl mb-0" id="recent-orders" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">S/N</th>
                                                    <th class="border-top-0">Description</th>
                                                    <th class="border-top-0">Amounts</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-truncate">1.</td>
                                                    <td class="text-truncate">wallet Fund</td>
                                                    <td>
                                                        <span class="badge badge-soft-success p-2"><del>N</del>
                                                            <?php echo $_SESSION['sumFunds']; ?></span>
                                                    </td>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate">2</td>
                                                    <td class="text-truncate">Amount Used from wallet</td>
                                                    <td>
                                                        <span class="badge badge-soft-success p-2"><del>N</del>
                                                         <?php echo $_SESSION['sumSpent']; ?></span>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate">3.</td>
                                                    <td class="text-truncate">Fund from Admin</td>
                                                    <td>
                                                        <span class="badge badge-soft-success p-2">N0.00</span>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate">4. </td>
                                                    <td class="text-truncate">Amount Earned From Referral</td>
                                                    <td>
                                                        <span class="badge badge-soft-success p-2">Amount Earned From Referral</span>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate"></td>
                                                    <td class="text-truncate">Balance</td>
                                                    <td>
                                                        <span class="badge badge-soft-success p-2">$ 1180.00</span>
                                                    </td>
                                                    
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                       <!-- end col -->
                    </div>
                    
                </div>
                    

                    

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2020 © One Klick Nigeria
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop KlicNKreate
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

</html>