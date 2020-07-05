<?php require('driver/validate.php')  ?>


<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 06:57:04 GMT -->
<head>
        <meta charset="utf-8" />
        <title>One Klick Nigeria Login</title>
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

<body class="bg-primary">

    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block my-5">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center mb-4 mt-3">
                                                <a href="index.html">
                                                     <span><img src="assets/logo_small.png" alt="" height="60px"></span>
                                                </a>
                                            </div>

                                             <center> 
                                               <?php include('driver/error.php') ?>
                                                
                                            </center>

                                            <form action="" class="p-2" method="POST">
                                                <div class="form-group">
                                                    <label for="emailaddress">Username</label>
                                                    <input class="form-control" type="text" id="emailaddress" required="" placeholder="username" name="username">
                                                </div>
                                                <div class="form-group">
                                                    <a href="forgot_password.php" class="text-muted float-right">Forgot your password?</a>
                                                    <label for="password">Password</label>
                                                    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="password">
                                                </div>
            
                                                <div class="form-group mb-4 pb-3">
                                                    <div class="custom-control custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="mb-3 text-center">
                                                    <button class="btn btn-primary btn-block" type="submit" name="login_user"> Sign In </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end card-body -->
                                    </div>
                                    <!-- end card -->
            
                                    <div class="row mt-4">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-white-50 mb-0">Create an account? <a href="register.php" class="text-white-50 ml-1"><b>Sign Up</b></a></p>
                                        </div>
                                    </div>
            
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 06:57:04 GMT -->
</html>