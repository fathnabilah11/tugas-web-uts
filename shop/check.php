<?php 
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$log = mysqli_query($conn, "select * from shop where username = '$username' and password = '$password'");
$cek = mysqli_num_rows($log);

if ($cek > 0){
	header("location:home.html");
	}else{
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta http-equiv="refresh" content="2; url:http://localhost/shop/kosong.html">
		</head>
		<body>
		<center><h1>maaf username atau password anda salah</h1></center>
		</body>
		</html>
		<?php
	}
 
 ?>