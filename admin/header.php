<?php
    include "connection.php";
    session_start();
    if(!isset($_SESSION['log']))
    {
        header("location:index.php");
    }
    else
    {
        $log = $_SESSION['log'];
        $sql = "SELECT * FROM tbl_login WHERE email_id='$log'";
        $result = mysqli_query($con,$sql);
        $value = mysqli_fetch_array($result);
        $id = $value['login_id'];
        $sql1 = "SELECT profile_pic FROM tbl_detail WHERE login_id='$id'";
        $result2 = mysqli_query($con,$sql1);
        $value2 = mysqli_fetch_array($result2);
        $def =$value2['profile_pic'];
        $qry = "SELECT * FROM tbl_detail WHERE login_id='$id'";
        $result1 = mysqli_query($con,$qry);
        $value1 = mysqli_fetch_array($result1);
        $countusers = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(login_id) FROM tbl_login WHERE type=1"));
        $n = $value1['name'];
        $i = $value1['profile_pic'];
        $email=$value['email_id'];
        $countadmin = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(login_id) FROM tbl_login WHERE type=1"));
        $countuser = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(login_id) FROM tbl_login WHERE type=2"));
        $countaadmin = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(login_id) FROM tbl_login WHERE type=1 AND active=1"));
        $countausers = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(login_id) FROM tbl_login WHERE type=2 AND active=1"));
}?>     
<head>
    <meta charset="UTF-8">

    <title>Dashboard-2 | Admire</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!--global styles-->
    <link rel="stylesheet" href="css/components.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <!-- end of global styles-->
    <link rel="stylesheet" href="vendors/chartist/css/chartist.min.css" />
    <link rel="stylesheet" href="vendors/circliful/css/jquery.circliful.css">
    <link rel="stylesheet" href="css/pages/index.css">
    <link rel="stylesheet" href="#" id="skin_change" />
    <!--plugin styles-->
    <link rel="stylesheet" href="vendors/select2/css/select2.min.css"/>
    <link rel="stylesheet" href="vendors/datatables/css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" href="css/pages/dataTables.bootstrap.css"/>
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link rel="stylesheet" href="css/pages/tables.css"/>
    <!--Mobile first-->
    <link rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/>
    <link rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico" />
    <!-- global styles-->
    <link rel="stylesheet" href="css/components.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <!-- end fo global styles-->
    <!-- plugin styles-->
    <link rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css" />
    <link rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" />
    <!--end of page level css-->
    <link rel="stylesheet" href="#" id="skin_change" />
    <!--end of page level css-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- global styles-->
    <link rel="stylesheet" href="css/components.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <!--End of global styles-->
    <link rel="stylesheet" href="css/pages/mail_box.css"/>
    <link rel="stylesheet" href="#" id="skin_change"/>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    #myDiv {
    border: 2px solid lightgray;
    height:210px;
    width:210px;
    float: left;
    }
    </style>
</head>

<div id="wrap">
    <div id="top" class="fixed">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand mr-0" href="index.html">
                    <h4 class="text-white"><img src="img/logow2.png" class="admin_img" alt="logo"> PrediCotton</h4>
                </a>
                <div class="menu mr-sm-auto">
                        <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                </div>

                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="<?php echo $i; ?>" class="admin_img2 rounded-circle avatar-img" alt="avatar"> <strong><?php echo $n; ?></strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item" href="edit_user.php"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="../index.php"><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
</div>
<div class="wrapper">
        <div id="left">
            <div class="menu_scroll">
                <div class="media user-media">
                                    <div class="user-media-toggleHover">
                                        <span class="fa fa-user"></span>
                                    </div>
                                    <div class="user-wrapper" style="margin-top: 70px">
                                        <a class="user-link" href="">
                                            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src=" <?php echo $i; ?>">
                                            <p class="text-white user-info"> <?php echo $n; ?></p>
                                        </a>
                                    </div>
                </div>
                <ul id="menu">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="fa fa-book"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-user-circle-o"></i>
                            <span class="link-title menu_hide">&nbsp; User</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="add_user.php">
                                    <i class="fa fa-user-plus">&nbsp; Add User</i> &nbsp; 
                                </a>
                            </li>
                            <li>
                                <a href="manage_user.php">
                                    <i class="fa fa-cogs"></i>
                                    <span class="link-title">&nbsp; Manage User</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-user-secret"></i>
                            <span class="link-title menu_hide">&nbsp; Admin</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="add_admin.php">
                                    <i class="fa fa-user-plus">&nbsp; Add Admin</i> &nbsp; 
                                </a>
                            </li>
                            <li>
                                <a href="manage_admin.php">
                                    <i class="fa fa-cogs"></i>
                                    <span class="link-title">&nbsp; Manage Admin</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-database"></i>
                            <span class="link-title menu_hide">&nbsp; Data</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="add_data.php">
                                    <i class="fa fa-cart-plus">&nbsp; Add Data</i> &nbsp; 
                                </a>
                            </li>
                            <li>
                                <a href="manage_data.php">
                                    <i class="fa fa-cogs"></i>
                                    <span class="link-title">&nbsp; Manage Data</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                     <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-wrench"></i>
                            <span class="link-title menu_hide">&nbsp; Account</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="edit_user.php">
                                    <i class="fa fa fa-cogs">&nbsp; Account Settings</i> &nbsp; 
                                </a>
                            </li>
                            <li>
                                <a href="../index.php">
                                    <i class="fa fa-sign-out"></i>
                                    <span class="link-title">&nbsp; Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
