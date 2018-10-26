<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<center><H1>FORM REGISTER</H1></center>

<form method="post">
<table border="0">
	<tr>
		<td>Username</td>
		<td><input type="text" name="user"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email" placeholder="@gmail.com"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="pass"></td>
	</tr>
	<tr>
		<td>Re-Type Password</td>
		<td><input type="password" name="pass2"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" class="btn btn-primary" name="submit" value="Regis"></td>
	</tr>
</table>

<?php
session_start();
include'koneksi.php';
if(isset($_POST['submit'])){	
	$username = $_POST['user'];
	$email=$_POST['email'];
	$password = $_POST['pass'];
	$password2 = $_POST['pass2'];
	$panjangusername=strlen($_POST['user']);
	$panjangpass=strlen($_POST['pass']);
	$cek=true;

	if(empty($username)) {
		echo"username harus diisi !!<br>";
		$cek=false;
	}else if($panjangusername>20){
		echo"username max 20 digit !!<br>";
		$cek=false;
	}

	if(empty($email)) {
		echo"email harus diisi";
		$cek=false;
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo"format email salah";
		$cek=false;
	}else{
		$email=$_POST['email'];
	}

	if ($password!=$password2) {
		$cek=false;
	}else if ($panjangpass<6) {
		echo "Password minimal 6 karakter";
	}else{
		$password=$_POST['pass'];
	}

if($cek==true){
	$sql = "INSERT INTO jurnal VALUES (' ', ' ', ' ', ' ', ' ', ' ', ' ', '$username', '$email', '$password')";
	if(mysqli_query($konek , $sql)){
		header("Location: index.php");
		echo"berhasil";
		$konek->close();
	}else{
		echo"gagal";
	}
	
}else{
	echo"gagal diinput";
}

 }

?>
<br><br>
sudah punya akun? silahkan <a href ="index.php"> Masuk.</a>