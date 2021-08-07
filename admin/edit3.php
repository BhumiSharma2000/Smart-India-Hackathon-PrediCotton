<?php
    include("header.php");
    include "connection.php";
    session_start();
    if(!isset($_SESSION['log']))
    {
        header("location:index.php");
    }
    else
    {
        $log = $_GET['id'];
        $a = "SELECT * FROM tbl_data WHERE data_id='$log'";
        $aa = mysqli_query($con,$a);
        $value = mysqli_fetch_array($aa);
        $id = $value['data_id'];
        $variety = $value['variety'];
        $date= $value['date'];
        $month=$value['month'];
        $state=$value['state'];
?>
<?php
    if(isset($_POST['submit']))
    {   
            $name = $_POST['cotton'];
            $month = $_POST['month'];
            $date = $_POST['date'];
            $state = $_POST['state'];
            $updated = mysqli_query($con,"UPDATE tbl_data SET variety='$name',date='$date',month='$month',state='$state' WHERE data_id='$id'");
            if($updated)
            {
                echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Updated');window.location.href='manage_data.php?flag=1';</script>");                
            }
            else
            {
                echo "<font style='color:red'>Error...</font>";
            }
        }   
?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <style>
    #myDiv {
    border: 2px solid lightgray;
    height:210px;
    width:210px;
    float: left;
    }
    </style> 
<div id="content" class="bg-container">
                <header class="head">
                    <div class="main-bar">
                        <div class="row">
                            <div class="col-lg">
                                <h4 class="nav_top_align">
                                    <i class="fa fa-pencil"></i>
                                    Edit User
                                </h4>
                            </div>
                            <div class="col-lg">
                                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Users</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Data</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body m-t-25">
                                        <div>
                                            <h4>Personal Information</h4>
                                        </div>
                                        <form class="form-horizontal login_validator" action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Variety of Cotton *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                    <input type="text" name="cotton" class="form-control" value="<?php echo $variety; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">month *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                    <input type="text" name="month" class="form-control" value="<?php echo $month; ?>" placeholder="Enter month ..." required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">date*</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                    <input type="date" name="date" class="form-control" value="<?php echo $date; ?>" placeholder="Enter date ..." required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">state *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                    <input type="text" name="state" class="form-control" placeholder="Enter address ..." value="<?php echo $state; ?>"required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    <div class="form-group row">
                                            <div class="col-lg-9 ml-auto">
                                                <button class="btn btn-primary" type="submit" name="submit">
                                                    <i class="fa fa-user"></i>
                                                    Edit
                                                </button>
                                                <button class="btn btn-warning" type="reset" id="clear">
                                                    <i class="fa fa-refresh"></i>
                                                    Reset
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
        </div>
        <!--wrapper-->
        <div id="right">
            <div class="right_content">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Welcome Micheal
                        <br/></strong> Set Your Skin Here. Checkout Admin Statistics. Good Day!.
                </div>
                <div class="well well-small dark">
                    <div class="xs_skin_hide hidden-sm-up toggle-right"> <i class="fa fa-cog"></i></div>
                    <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
                </span>
                        Skins
                    </h4>
                    <br/>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.css','css')">
                        <div class="skin_blue skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.css','css')">
                        <div class="skin_green skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('purple_black_skin.css','css')">
                        <div class="skin_purple skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.css','css')">
                        <div class="skin_orange skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.css','css')">
                        <div class="skin_red skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.css','css')">
                        <div class="skin_mint skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('brown_black_skin.css','css')">
                        <div class="skin_brown skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('black_skin.css','css')">
                        <div class="skin_black skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skin_btn skin_blue" onclick="javascript:loadjscssfile('blue_skin.css','css')"></div>
                    <div class="skin_btn skin_green" onclick="javascript:loadjscssfile('green_skin.css','css')"></div>
                    <div class="skin_btn skin_purple" onclick="javascript:loadjscssfile('purple_skin.css','css')"></div>
                    <div class="skin_btn skin_orange" onclick="javascript:loadjscssfile('orange_skin.css','css')"></div>
                    <div class="skin_btn skin_red" onclick="javascript:loadjscssfile('red_skin.css','css')"></div>
                    <div class="skin_btn skin_mint" onclick="javascript:loadjscssfile('mint_skin.css','css')"></div>
                    <div class="skin_btn skin_brown" onclick="javascript:loadjscssfile('brown_skin.css','css')"></div>
                    <div class="skin_btn skin_black" onclick="javascript:loadjscssfile('black_skin.css','css')"></div>
                </div>
                <div class="well well-small dark">
                    <h4 class="brown_txt margin15_bottom">
                        <img src="img/admin.jpg" width="32" height="32" class="rounded-circle avatar-img" alt="avatar"> &nbsp;Admin
                        Statistics</h4>
                    <br/>
                    <ul class="list-unstyled">
                        <li class="green_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                    <i class="fa fa-circle fa-stack-2x text-mint"></i>
                    <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                </span> &nbsp; Last Login
                            <span class="inlinesparkline float-right">2hrs Back</span>
                        </li>
                        <li class="warning_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Pending Tasks
                            <span class="dynamicsparkline float-right">12</span>
                        </li>
                        <li class="primary_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Weather Today
                            <span class="dynamicbar float-right">Rainy</span>
                        </li>
                        <li class="margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Events
                            <span class="inlinebar float-right">Team Out</span>
                        </li>
                        <li class="success_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-success"></i>
                      <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Notifications
                            <span class="inlinebar float-right">5</span>
                        </li>
                    </ul>
                </div>
                <div class="well well-small dark right_progressbar_section">
                    <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-hand-o-down fa-stack-1x fa-inverse"></i>
                    </span>
                        Alerts
                    </h4>
                    <br/>
                    <span>Sales Improvement</span>
                    <span class="float-right">
                <small>20%</small>
            </span>
                    <div class="progress">
                        <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Server Load</span>
                    <span class="float-right">
                <small>80%</small>
            </span>
                    <div class="progress">
                        <div class="progress-bar bg-mint w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Traffic Improvement</span>
                    <span class="float-right">
                <small>55%</small>
            </span>
                    <div class="progress">
                        <div class="progress-bar bg-primary w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- # right side -->
    </div>
    <!-- /#wrap -->
    <!-- /#footer -->
    <!-- global scripts-->
    <script src="js/components.js"></script>
    <script src="js/custom.js"></script>
    <!-- end of global scripts-->
    <!-- plugin scripts-->
    <script src="js/pluginjs/jasny-bootstrap.js"></script>
    <script src="vendors/holderjs/js/holder.js"></script>
    <script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
    <!-- end of plugin scripts-->
    <script src="js/pages/validation.js"></script>
    <script>
    </script>
    <!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script>
$(document).ready(function () {
$('#datepicker').datepicker({    
    endDate: '+1d',
    autoclose: true
});  });
</script>
<!-- Bootstrap 3.3.7 -->


<?php

    }

?>

</body>

</html>
