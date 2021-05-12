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

	 <div id="contact-page" class="container">
    	<div class="bg">
	    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Sign up admin</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	
                      <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" enctype="multipart/form-data">
				           
				            <div class="form-group col-md-6">
				                <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" required="required" placeholder="Email">
				            </div>
                          <div class="form-group col-md-6">
				                <input type="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" class="form-control" required="required" placeholder="Password" title="Password should be of minimum 8 characters">
				            </div>
                          
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary center" value="Sign Up">
				            </div>
                          
				        </form>
                        
	    			</div>
	    		</div>
                
                <?php
                if(isset($_POST["submit"]))
			{
				include"db.php";
       
                    $pwd = $_POST['password'];
                    $hashed_pwd = password_hash( $pwd, PASSWORD_DEFAULT, ['cost' => 10]);
                    
                        $email1 = $_POST['email'];
                   
                        $email = mysqli_real_escape_string($con, $email1);
                        $pass = mysqli_real_escape_string($con, $hashed_pwd);
               
				$sql = mysqli_query($con,"INSERT INTO hero (id, email, password)
				 VALUES('','$email','$pass')");

                    if(boolval($sql) == 1)
                    { 
				echo "<script>window.location='hero_login.php'</script>";
                    }
		}

			?>


	    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	<?php
include"footer.php";
?>