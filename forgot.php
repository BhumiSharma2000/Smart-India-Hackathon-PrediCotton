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
                        <form action="" method="post">
                            <div class="form-group" >
                                <label for="email" class="col-form-label text-black" > <h4><b>E-mail</b></h4></label>
                                <div class="input-group input-group-append ">
                                    <input type="text" class="form-control b_r_20" id="email" name="email-phone" placeholder="E-mail" style="background-color:black">
                                    <span class="input-group-text" style="background-color:black">
                                        <i class="fa fa-envelope text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <button type="submit" name="submit" class="btn btn-success btn-block b_r_20 m-t-20">Generate OTP</button>
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
		include "connection.php";	
		session_start();
		$id = $_POST['email-phone'];
		$_SESSION['email_id'] = $id;
    require_once 'PHPMailer-master/src/PHPMailer.php';
    require_once 'PHPMailer-master/src/Exception.php';
    require_once 'PHPMailer-master/src/SMTP.php';
    $otp = rand(100000,999999);
    $qry="INSERT INTO otp_tbl(otp_id,login_id,otp) VALUES('','$id','$otp')";
    $rs=mysqli_query($con,$qry);
    echo $qry;
    $to=$id;
    $subject="PrediCotton OTP MAIL";
    $msg="Hi, your one time password for first time verfication is <b> ".$otp."</b>";
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);                      // Passing `true` enables exceptions
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sbhumi921@gmail.com';                 // SMTP username
    $mail->Password = 'bhumi@123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('sbhumi921@gmail.com');
    $mail->addAddress($to);
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $msg;
    if(!$mail->send()) 
    {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
		$sql = "SELECT login_id FROM tbl_login WHERE email_id='$id' OR phone_no='$id'";
		$result = mysqli_query($con,$sql);
		$value = mysqli_fetch_array($result);
		$id = $value['login_id'];
		$qry = "INSERT INTO otp_tbl(otp_id,login_id,otp) VALUES('','$id','$otp')";
		$result1 = mysqli_query($con,$qry);
		if($result1)
		{
			header("location:otp.php");
		}
		else
		{
      echo "<br/><font style='color:red'>OOPS!!! Incorrect OTP :(</font>";
		}
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