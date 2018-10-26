<center><H1>FORM LOGIN</H1></center>

<form method="post">
<table border="0">
	<tr>
		<td>Username</td>
		<td><input type="text" name="user"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="pass"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit" value="Login"></td>
	</tr>
</table>


<?php
session_start();
include'koneksi.php';
if(isset($_POST['submit'])){	
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$data = mysqli_query($konek, "SELECT * FROM jurnal WHERE user= '$username' AND pass= '$password'");
	$result = mysqli_fetch_row($data); 
	header("Location: dashboard.php"); 
}
?>

<br><br>
belum punya akun? silahkan <a href ="register.php"> buat akun.</a>