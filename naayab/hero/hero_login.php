<?php
   session_start();
include"db.php";

?>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lyrics&amp;Status - Service Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/venobox.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        body{
            scroll-behavior: smooth;
        }
    </style>
</head>

	 <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="post">
                    <div class="login-form-head">
                        <h4>Sign In To Manage Your Business Account</h4>
                       
                    </div>
                    <div class="login-form-body">
                        
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Username address</label>
                            <input type="email" id="exampleInputEmail1" name="email">
                            <i class="ti-email"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1" name="password">
                            <i class="ti-lock"></i>
                        </div>
                       
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" name="submit">Submit <i class="ti-arrow-right"></i></button>
                            
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->
                <?php
           if(isset($_POST["submit"])){
               $email = $_POST['email'];
               $upwd = $_POST['password'];
               
        $result = mysqli_query($con, "select * from `hero` where email='$email' order by id ");
               while($row = mysqli_fetch_array($result)){ 
               
                   $pass = $row['password'];
                   $uid = $row['id'];
                   
               $hashed_pwd = mysqli_real_escape_string($con, $pass);
               
               if( password_verify($upwd, $hashed_pwd))
               {
                   $_SESSION["hero"] = mysqli_real_escape_string($con, $email);
                   $_SESSION["uid"] = mysqli_real_escape_string($con, $uid);
                   ?>
                <script>
                
                window.location = "home.php";
                </script>
                <?php
               }
                else
               {
                   echo "<script>window.alert('Invalid Email or Password')</script>";
               }
               }
     }
               
			?>


	    	
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	