<head>
    <meta charset="UTF-8">

    <title>PrediCotton | Registration</title>
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
</head>
  <!-- /#left -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <style>
    #myDiv
    {
      border: 2px solid lightgray;
      height:210px;
      width:250px;
      float: left;
    }
  </style>
        <div id="content" class="bg-container">
       
            <div class="outer">
                <div class="inner bg-container">
                    <div class="card">
                        <div class="card-body m-t-35">
                            <div>
                                <h4>Personal Information</h4>
                            </div>
                            <form class="form-horizontal login_validator" action="insert1.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">User Name *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                    <input type="text" name="name" class="form-control" placeholder="Enter name ..." required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="email" class="col-form-label">Email*</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-envelope text-primary"></i></span>
                                                    <input type="email" name="email" class="form-control" placeholder="Enter Email ...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="pwd" class="col-form-label">Password*</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-lock text-primary"></i></span>
                                                     <input type="password"pattern=.{8,12} title="Enter 8 to 12 characters" name="pass1" id ="pass1" class="form-control" placeholder="Enter Password ..." required />                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="cpwd" class="col-form-label">Confirm Password *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-lock text-primary"></i></span>
                                                    <input type="password" name="pass2" pattern=.{8,12} title="Enter 8 to 12 characters" id="pass2" class="form-control" placeholder="Re-Enter Password ..." oninput="check(this)" required />
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
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="phone" class="col-form-label">Phone*</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-phone text-primary"></i></span>
                                                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone no ..." pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile number starting with 6 or 7 or 8 or 9' required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group gender_message row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label class="col-form-label">Gender *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-radio">
                                                        <input id="radio1" type="radio" name="gender" value="male" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                        <span class="custom-control-description">Male</span>
                                                    </label>
                                                    <label class="custom-control custom-radio">
                                                        <input id="radio2" type="radio" name="gender" value="female" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                        <span class="custom-control-description">Female</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="address" class="col-form-label">User Type*</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-plus text-primary"></i></span>
                                                   <select class="form-control" name="user_type" class="custom-control-input" class="col-xl-6 col-lg-8">
                                            <option value="1" selected >Admin</option>                   
                                          </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="address" class="col-form-label">Address*</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" name="address"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-center text-lg-right">
                                                <label class="col-form-label">Profile Pic</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                              <input type="file" id="profile-img" name="image" accept="image/png,image/jpg,image/jpeg" class="form-control" placeholder="" class="btn btn-warning fileinput-exists">
                                                <div id="myDiv" align="center" class="col-xl-6 col-lg-8"> 
                                                    <!--<p class="square"> -->
                                                  <img src="img/default.png" id="profile-img-tag" alt="Profile Pic" width="200px" height="200px" style="border:5px solid #ffffff; background-color: #ffffff;" />
                                                    <script type="text/javascript">
                                                        function readURL(input)
                                                        {
                                                            if (input.files && input.files[0]) 
                                                            {
                                                                var reader = new FileReader();
                                                                reader.onload = function (e) 
                                                                {
                                                                    $('#profile-img-tag').attr('src', e.target.result);
                                                                }
                                                                reader.readAsDataURL(input.files[0]);
                                                            }
                                                        }
                                                        $("#profile-img").change(function()
                                                        {
                                                            readURL(this);
                                                        });
                                                    </script>
                                                </div> 
                                            </div>
                                        </div>
                                            <br/>
                                            <br/>
                                    <div class="form-group row">
                                            <div class="col-lg-9 ml-auto">
                                                <button class="btn btn-primary" type="submit" name="submit">
                                                    <i class="fa fa-user"></i>
                                                    Add User
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
                <!-- /.inner -->
            </div>
            <!-- /.outer -->
            <!-- # right side -->
        </div>
        <!-- /#content -->
    </div>

<!-- global scripts-->
<script src="js/components.js"></script>
<script src="js/custom.js"></script>
<!--end of global scripts-->
<!--  plugin scripts -->
<script src="vendors/countUp.js/js/countUp.min.js"></script>
<script src="vendors/flip/js/jquery.flip.min.js"></script>
<script src="js/pluginjs/jquery.sparkline.js"></script>
<script src="vendors/chartist/js/chartist.min.js"></script>
<script src="js/pluginjs/chartist-tooltip.js"></script>
<script src="vendors/swiper/js/swiper.min.js"></script>
<script src="vendors/circliful/js/jquery.circliful.min.js"></script>
<script src="vendors/flotchart/js/jquery.flot.js" ></script>
<script src="vendors/flotchart/js/jquery.flot.resize.js"></script>
<!--end of plugin scripts-->

<script src="js/pages/index.js"></script>


<!-- global scripts-->
<script src="js/components.js"></script>
<script src="js/custom.js"></script>

<!-- end of global scripts-->
<!-- plugin scripts -->
<script src="vendors/select2/js/select2.js"></script>
<script src="vendors/datatables/js/jquery.dataTables.js"></script>
<script src="vendors/datatables/js/dataTables.bootstrap.js"></script>
<!-- end plugin scripts -->
<!--Page level scripts-->
<script src="js/pages/advanced_tables.js"></script>
<script src="js/components.js"></script>
<script src="js/custom.js"></script>
<!-- end of global scripts-->
<!-- plugin scripts-->
<script src="js/pluginjs/jasny-bootstrap.js"></script>
<script src="vendors/holderjs/js/holder.js"></script>
<script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<!-- end of plugin scripts-->
<script src="js/pages/validation.js"></script>