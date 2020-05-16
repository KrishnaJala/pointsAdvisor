<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Points Advisor - Admin</title>
    <!--favicon-->
    <!--<link rel="icon" href="./source/images/livon_64.png" type="image/x-icon">-->
    <!-- simplebar CSS-->
    <link href="./source/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="./source/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="./source/css/animate.css" rel="stylesheet" type="text/css"/>
    <!--Morris CSS -->
    <link href="./source/plugins/morris/css/morris.css" rel="stylesheet">
    <!--Data Tables -->
    <link href="./source/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="./source/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Icons CSS-->
    <link href="./source/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="./source/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="./source/css/app-style.css" rel="stylesheet"/>
    <!-- Livon Css Customized -->
    <link rel="stylesheet" href="./source/css/livon.css"/>
    <style>

    </style>
</head>

<body class="bg-theme bg-theme2">
<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
        <div class="loader-wrapper-inner">
            <div class="loader"></div>
        </div>
    </div>
</div>
<!-- end loader -->
<div class="ajax-loading" id="ajax-loader" style="display:none">Loading&#8230;</div>
<!-- Start wrapper-->
<div id="wrapper">
    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <!--<a href="index"><img src="./source/images/livon_with.png" alt="logo icon"></a>-->
        </div>
        <div class="user-details">
            <div class="media align-items-center user-pointer collapsed" data-toggle="collapse"
                 data-target="#user-dropdown">
                <div class="avatar">
                    <img class="mr-3 side-user-img" src="./source/images/2-seo.png" alt="user avatar">
                </div>
                <div class="media-body">
                    <h6 class="side-user-name">Admin</h6>
                </div>
            </div>
            <div id="user-dropdown" class="collapse">
                <ul class="user-setting-menu">
                    <li><a href="" data-toggle="modal" data-target=".modal-animation-2222"><i class="icon-lock"></i> Change Password</a></li>
                    <li><a href="logout.php"><i class="icon-power"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            <li>
                <a href="dashboard.php" class="waves-effect">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="fa fa-object-group"></i> <span>Data Management</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="malaysia-view.php"><i class="fa fa-arrow-right"></i>Malaysia</a></li>
                    <li><a href="singapore.php"><i class="fa fa-arrow-right"></i>Singapore</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!--End sidebar-wrapper-->
</div>
<!--End-wrapper-->
    <!--Start topbar header-->
    <header class="topbar-nav">
        <nav class="navbar navbar-expand fixed-top">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="javascript:void();">
<!--                        <i class="icon-menu menu-icon"></i>-->
                        <!--commented since toggle not working.-->
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="modal fade modal-animation-2222">
        <div class="modal-dialog">
            <div class="modal-content animated flipInX">
                <div class="modal-header">
                    <h5 class="modal-title" style="margin-left: 38%;">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span id="change-password-close-modal-id" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="margin-bottom: 2% !important;">
                    <form action="javascript:changePassword();" id="change-password-form-id" method="post">
                        <div class="form-group custom-form">
                            <label class="input-1">Old Password</label>
                            <div class="position-relative has-icon-right">
                                <input type="password" name="old_password" id="old_password_side_bar_id" required autocomplete="off" class="form-control input-shadow" placeholder="Enter Old Password">
                            </div>
                        </div>
                        <div class="form-group custom-form">
                            <label class="input-1">New Password</label>
                            <div class="position-relative has-icon-right">
                                <input type="password" name="new_password" id="new_password_side_bar_id" required autocomplete="off" class="form-control input-shadow" placeholder="Enter New Password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" style="margin-left: 40%;"> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
