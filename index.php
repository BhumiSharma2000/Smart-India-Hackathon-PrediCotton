<!DOCTYPE html>
<html>
<head>
    <title>Login | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!--Global styles -->
    <link rel="stylesheet" href="css/components.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <!--End of Plugin styles-->
    <link rel="stylesheet" href="css/pages/login3.css"/>
</head>
<body class="login_backimg">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 mx-auto login_section">
            <div class="row">
                <div class=" col-lg-4 col-md-8 col-sm-12  mx-auto login2_border login_section_top">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center text-white">
                            <img src="img/logow2.png" alt="logo" class="admire_logo" style="height: 170px; width: 250px;"><br />
                             
                        </h3>
                    </div>
                    <?php
                        if(isset($_GET['flag']))
                        {
                            if($_GET['flag']==1)
                            {
                                echo "<center><font style='color:red; text-align:center;font-size:15px'>OOPS!!   Incorrect Details.... :(</font></center><br/>";
                            
                            }
                            else if($_GET['flag']==2)
                            {
                                echo "<center><font style='color:red; text-align:center;font-size:15px'>OOPS !! Contact Admin :(</font></center><br/>";
                            
                            }
                            else
                            {
                            }
                        }
                    ?>  
                    <div class="m-t-15">
                        <form action="check.php" id="login_validator" method="post">
                            <div class="form-group" >
                                <label for="email" class="col-form-label text-black" > <h4><b>E-mail</b></h4></label>
                                <div class="input-group input-group-append ">
                                    <input type="email" class="form-control b_r_20" id="email" name="email" placeholder="E-mail" style="background-color:black">
                                    <span class="input-group-text" style="background-color:black">
                                        <i class="fa fa-envelope text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-black"><h4><b>Password</b></h4></label>
                                <div class="input-group input-group-append">
                                    <input type="password" class="form-control b_r_20" id="password" name="password" placeholder="Password" style="background-color:black">
                                    <span class="input-group-text" style="background-color:black">
                                        <i class="fa fa-key text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m-t-10">
                                    <a href="add_user.php" class="forgottxt_clr text-black"><i class="fa fa-external-link"></i> Register Now</a>
                                </div>
                                <div class="col p-l-0 m-t-10">
                                    <div class="float-right">
                                        <a href="forgot.php" class="forgottxt_clr text-black">Forgot password ?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-block b_r_20 m-t-20">LOG IN</button>
                                    </div>
                                </div>
                            </div>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script src="vendors/jquery.backstretch/js/jquery.backstretch.js"></script>
<!--End of plugin js-->
<script src="js/pages/login3.js"></script>
</body>

</html>