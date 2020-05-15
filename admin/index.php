<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Livon Paints - Admin</title>
    <!--favicon-->
    <link rel="icon" href="./source/images/livon_64.png" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="./source/css/bootstrap.min.css" />
    <!-- animate CSS-->
    <link rel="stylesheet" type="text/css" href="./source/css/animate.css" />
    <!-- Icons CSS-->
    <link rel="stylesheet" type="text/css" href="./source/css/icons.css" />
    <!-- Custom Style-->
    <link rel="stylesheet" href="./source/css/app-style.css" />
    <!-- Livon Css Customized -->
    <link rel="stylesheet" href="./source/css/livon.css" />
</head>

<body class="bg-theme bg-theme2">

<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div>
<!-- end loader -->
<!-- Start wrapper-->
<div id="wrapper">
    <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
    <div class="card card-authentication1 mx-auto my-5">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="card-title text-uppercase text-center py-3">Sign In</div>
                <form action="dashboard.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputUsername" class="input-1">Username</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="exampleInputUsername" name="email" class="form-control input-shadow" placeholder="Enter Username">
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword" class="input-1">Password</label>
                        <div class="position-relative has-icon-right">
                            <input type="password" id="exampleInputPassword" name="password" class="form-control input-shadow" placeholder="Enter Password">
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-light btn-block">Sign In</button>
                </form>
            </div>
        </div>
    </div>
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
</div><!--wrapper-->
<!-- Bootstrap core JavaScript-->
<script src="./source/js/jquery.min.js"></script>
<script src="./source/js/popper.min.js"></script>
<script src="./source/js/bootstrap.min.js"></script>
<!-- sidebar-menu js -->
<script src="./source/js/sidebar-menu.js"></script>
<!-- Custom scripts -->
<script src="./source/js/app-script.js"></script>

</body>
</html>