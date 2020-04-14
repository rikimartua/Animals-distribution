<?php 
session_start();

if (isset($_SESSION["login"])) {
	header("Location:indexcrud.php");
	exit();
}

include'koneksi.php';
if (isset($_POST["login"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];


	$result=mysqli_query($koneksi,"select * from admin where email='$email' and password='$password'");
	$cek=mysqli_num_rows($result);
	if ($cek>0) {
	//set session
	$_SESSION['login']=true;//untuk di cek di tiap halaman
	header("Location:indexcrud.php");
	exit;
}

$error=true;
}
?>
<html lang="en">
<head>
	<title>LOGIN</title>
	<link rel="icon" type="image/png" href="img/logo-fauna.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--===============================================================================================-->
</head>
<body> 
	<!--Navbar -->
	<nav class="navbar fixed navbar-inverse" style="margin-bottom: -10px;">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">WEBSIDE FAUNA</a>
			</div>
		</div>
	</nav>
	<!--/.Navbar -->
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/hutan.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" method="POST" action="login.php">
					

					<span class="login100-form-title p-t-20 p-b-45">
						LOGIN
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<?php if (isset($error)) :?>
						<p style="color:red; padding-left: 10px; font-style: italic; font-style: bold;">E-mail/Password Salah</p>

					<?php endif; ?>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>