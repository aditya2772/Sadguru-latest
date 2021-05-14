<html>
<head>
	<title>Admin Login </title>
    <link rel="stylesheet" href="css/1.css">
</head>
<body style=" overflow: hidden;">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="POST">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="username" id="username" class="login__input" placeholder="User name / Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="password" id="password" class="login__input" placeholder="Password">
				</div>
				<button class="button login__submit">
					<span class="button__text" style="text-align: center;">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<!-- <div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div> -->
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</body>
</html>

<?php

ob_start();

$con =mysqli_connect("localhost","root","","alpha");

$name = $_POST['username'];
$pass = $_POST['password'];

$s = "SELECT * FROM `login` where username = '$name' && password ='$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
header("Location:Admin.php");

?>