<?php
	include "connection.php";
	session_start();
	if(!isset($_SESSION['email_id']))
	{
		header("location:index.php");
	}
	else
	{
		$req = $_SESSION['email_id'];		
		$qry = "SELECT login_id FROM tbl_login WHERE email_id='$req' OR phone_no='$req'";
		$result = mysqli_query($con,$qry);
		$value = mysqli_fetch_array($result);
		$id = $value['login_id'];
		$sql = "SELECT otp FROM otp_tbl WHERE otp_id = (SELECT MAX(otp_id) FROM otp_tbl WHERE login_id='$id' )";
		$result1 = mysqli_query($con,$sql);
		$value1 = mysqli_fetch_array($result1);
		$otp = $value1['otp'];
?>
</html>
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
                          <span class="m-t-15" style="color: black">Password Assistance</span>
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
				    <form  method="post" style="color: black">
				      <div class="form-group has-feedback">
				        <input type="text" name="otp_num" class="form-control" placeholder="Enter OTP" style="color: black" required /> 
				        <span class="glyphicon glyphicon glyphicon-ok-circle form-control-feedback"></span>
				      </div>
				      <div class="form-group has-feedback">
				        <input type="password" name="pass1" id="pass1" class="form-control" placeholder="Enter New Password"  style="color: black" required />
				        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
				      </div>
					  <div class="form-group has-feedback">
				        <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Re Enter New Password" style="color: black" oninput="check(this)" required />
				        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
						<script language='javascript' type='text/javascript'>
										function check(input) {
											if (input.value != document.getElementById('pass1').value) {
												input.setCustomValidity('Password Must be Matching.');
											} else {
												// input is valid -- reset the error message
												input.setCustomValidity('');
											}
										}
						</script>
				      </div>
				      <div class="row">
				       <div class="col-xs-12">
				          <button type="submit" name="submit" class="btn btn-success btn-block btn-flat">Change</button>
				        </div></div>
						<?php
							  if(isset($_POST['submit']))
							  {
								  $otp_num = $_POST['otp_num'];
								  $passx = $_POST['pass1'];
								  $passw1=md5($passx);
								  $passy = $_POST['pass2'];
								  $passw2=md5($passy);							
								  if($otp==$otp_num)
								  {
									if($passw1==$passw2)
									{
									  $update = "UPDATE tbl_login SET password='$passw1' WHERE login_id='$id'";
									  $up = mysqli_query($con,$update);
									  if($up)
									  {
										echo "<br/><h4><font style='color:green'>Password Change Successfully....</font></h4>";
										unset($_SESSION['email_id']);
										session_destroy();
										header("refresh:5; url=index.php");
									  }
									}		
								}
								else
								{
									echo "<br/><font style='color:red'>OOPS!!! Incorrect OTP :(</font>";
								}
							  }
						?>
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
<?php

	}

?>
