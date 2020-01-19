<?php
session_start();
include "connect.php";
include "functions.php";
if(isset($_POST['login2']))
	{	
		$name = $_POST['name'];
		$mob = $_POST['mob'];
		$dept = $_POST['dept'];
		$desig = $_POST['desig'];
		$email = $_POST['email'];
		$sal = $_POST['salary'];
		$pass = $_POST['pass'];
		$join_year = $_POST['join_year'];
		$q = "select * from login_details where email = '$email'";
		$res = mysqli_query($con,$q);
		$n = mysqli_fetch_array($res);
		if($n>0)
		{
				alert("Email Already Registered","2");
		}
		else
		{
			$q = "insert into login_details values ('$email','$pass')";
			if(mysqli_query($con,$q))
			{
					$p = "insert into user_details values ('$name','$mob','$email','$dept','$desig','$sal','$join_year')";
					if(mysqli_query($con,$p))
					{
						alert("Registered Successfully","0");
					}
					else
					{
						alert("Failed 1","2");
					}
			}
			else
			{
				alert("Failed 2","2");
			}
		}

	}
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" method = "post">
					<span class="login100-form-title p-b-33">
						 Register
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Full Name">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Mobile is required">
						<input class="input100" type="text" name="mob" placeholder="Mobile Number">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Department is required">
						<input class="input100" type="text" name="dept" placeholder="Department">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Designation is required">
						<input class="input100" type="text" name="desig" placeholder="Designation">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Salary is required">
						<input class="input100" type="text" name="salary" placeholder="Monthly Salary">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "This field is required">
						<input class="input100" type="text" name="join_year" placeholder="Joining Year">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<input class="login100-form-btn" name = "login2" type = "submit" value = "Sign up">
				
					</div>
					</br>
					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="register.php" class="txt2 hov1">
							Sign up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>