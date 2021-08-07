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
		$qry = "SELECT login_id FROM tbl_login WHERE email_id='$log'";
		$result = mysqli_query($con,$qry);
		$value = mysqli_fetch_array($result);
		$id = $value['login_id'];
		$sql = "SELECT otp FROM otp_tbl WHERE otp_id = (SELECT MAX(otp_id) FROM otp_tbl WHERE login_id='$id' )";
		$result1 = mysqli_query($con,$sql);
		$value1 = mysqli_fetch_array($result1);
		$otp = $value1['otp'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login 3 | Admire</title>
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
                            <span class="m-t-15" style="color: black">Verification Page</span>
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
                        <form action="" method="post">
                            <div class="form-group" >
                                <label for="email" class="col-form-label text-black" > <h4><b>Enter OTP</b></h4></label>
                                <div class="input-group input-group-append ">
                                    <input type="text" class="form-control b_r_20" id="email" name="otp_num" placeholder="Enter OTP" style="background-color:black">
                                    <span class="input-group-text" style="background-color:black">
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <button type="submit" name="submit" class="btn btn-success btn-block b_r_20 m-t-20">Verify</button>
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
<?php
	if(isset($_POST['submit']))
	{
		$otp_num = $_POST['otp_num'];
    $type = $_SESSION['utype'];
		if($otp_num==$otp && $type==1)
		{
			$update = "UPDATE tbl_login SET status='1' WHERE login_id='$id'";
			$result2 = mysqli_query($con,$update);
			if($result2)
			{
				header("location:admin/dashboard.php");
			}
		}
		else if($otp_num==$otp && $type==2)
    {
      $update = "UPDATE tbl_login SET status='1' WHERE login_id='$id'";
      $result2 = mysqli_query($con,$update);
      if($result2)
      {
        header("location:admin/dashboard.php");
      }
    }
    else
    {
       header("location:verification.php?flag=1");
    }
	}
?>	
</div>
</div>
<?php
	 }
?>
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