<?php
include('database_connect.php');
if(isset($_POST['btn_log'])){
	$a=$_POST['email'];
	$b=$_POST['password'];
   $log="SELECT * FROM `costumer` WHERE `email`='$a' AND `password`='$b'";
   
    $res=$con->query($log);
    
        if($res->num_rows > 0){
         session_start();
          $_SESSION['id']=$a;
          $_SESSION['pass']=$b;
          echo "<script>location.href='./index.php';</script>";
            }else{
                $fail="INSERT INTO `error_fail_report` (`efr_id`, `date`, `time`, `c_id`, `admin_id`, `url`, `failed_query_n`) VALUES (NULL, '$date', '$time', '$_SESSION[id]', '', '$url', 'Login Query');";
    	        $con->query($fail);
            echo "<script>alert('Failed ! Login Fail plz try again'); location.href='login.php';</script>";
        }
}

	if(isset($_POST[btn_reg])){
	   
	 $t="SELECT * FROM `costumer` WHERE `email`='$_POST[email]'";
	 $r=$con->query($t);
	 $num=$r->num_rows;
	 
	 if($num>0){
	   echo "<script>alert('Already Registered');location.href='./register.php';</script>";
	   
	 }else{
	      $qry="INSERT INTO `costumer`(`c_id`, `name`, `email`, `password`, `mobile`, `gender`, `profile`, `address`, `r_date`, `r_time`) VALUES (NULL,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mobile]','$_POST[gender]','','$_POST[address]','$date','$time')";  
             if($con->query($qry)===TRUE){
                 echo "<script>alert('Registered Successfully');location.href='./login.php#signin-2';</script>";
             }else{
                 echo "<script>alert('Registration Fail');location.href='./register.php?fail';</script>";
             }
	 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="page-wrapper">
       <?php 
       include('include/header.php');
       ?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							    <li class="nav-item">
							        <a class="nav-link active " id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="true">Login</a>
							    </li>
							    <!--<li class="nav-item">-->
							    <!--    <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="false">Register</a>-->
							    <!--</li>-->
							</ul>
							<div class="tab-content">
							    <div class="tab-pane fade show active" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
							    	<form method="post">
							    		<div class="form-group">
							    			<label for="singin-email-2">Username or email address *</label>
							    			<input type="text" class="form-control" id="singin-email-2" name="email" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-group">
							    			<label for="singin-password-2">Password *</label>
							    			<input type="password" class="form-control" id="singin-password-2" name="password" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-footer">
							    			<button type="submit" class="btn btn-outline-primary-2" name="btn_log">
			                					<span>LOG IN</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button><br>

			                				
							    		</div>
							    		<a href="register.php" class="forgot-link" style="font-size:20px;">Register?</a><!-- End .form-footer -->
							    	</form>
							    	
							    </div><!-- .End .tab-pane -->
							    
							    <!-- .End .tab-pane -->
							</div><!-- End .tab-content -->
						</div><!-- End .form-tab -->
            		</div><!-- End .form-box -->
            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
        </main><!-- End .main -->

        <?php 
        include('include/footer.php');
        ?>
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

        <?php 
        include('include/mobileheader.php');
        ?>

    

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
</html>