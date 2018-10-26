<center><H1>FORM NEW DATA</H1></center>
<form method="post">
<table border="0">
	
	<tr>
		<td><label for="nama">Nama </label></td>
		<td><input type="text" name="nama" id="nama" required></td>
	</tr>
	<tr>
		<td><label for="nim">NIM </label></td>
		<td><input type="text" name="nim" id="nim" required></td>
	</tr>
	<tr>
		<td><label for="kelas">Kelas  </label></td>
		<td><input type="text" name="kelas" id="kelas"></td>
	</tr>
	<tr>
		<td><label for="hobi">Hobi </label></td>
		<td><input type="text" name="hobi" id="hobi"></td>
	</tr>
	<tr>
		<td>Genre Film </td>
		<td><select name="genre" >
				<option value="Horror">Horror</option>
				<option value="Anime">Anime</option>
				<option value="Action">Action</option>
				<option value="Drama">Drama</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Tempat Wisata </td>
		<td><select name="wisata">
				<option value="Bali">Bali</option>
				<option value="Tanjung Selor">Tanjung Selor</option>
				<option value="Jakarta">Jakarta</option>
				<option value="Lombok">Lombok</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Tanggal  </td>
		<td><input type="date" name="tgl"></td>
	</tr>
	
	<tr>
		<td colspan="2"><button type="submit" name="submit">Submit</button></td>
	</tr>
</table>


<?php
session_start();
include'koneksi.php';
if(isset($_POST['submit'])){
$nama= $_POST['nama'];
$nim=$_POST['nim'];
$kelas=$_POST['kelas'];
$hobi=$_POST['hobi'];
$genre=$_POST['genre'];
$wisata=$_POST['wisata'];
$tgl=$_POST['tgl'];

$panjangnim=strlen($_POST['nim']);
$panjangnama=strlen($_POST['nama']);
$cek=true;

	if(empty($nim)) {
		echo"nim harus diisi !!<br>";
		$cek=false;
	}else if($panjangnim>10){
		echo"nim max 10 digit !!<br>";
		$cek=false;
	}else if(!is_numeric($nim)){
		echo "nim harus angka!!<br>";
		$cek=false;
	}

	if(empty($nama)) {
		echo"nama harus diisi !!<br>";
		$cek=false;
	}else if($panjangnama>25){
		echo"nama max 25 digit!!<br>";
		$cek=false;
	}else if(is_numeric($nama)){
		echo"nama harus huruf!!<br>";
		$cek=false;
	}

	if($cek==true){
	$sql = "UPDATE jurnal SET (
			 nama='$nama' , nim='$nim' , kelas='$kelas',hobi='$hobi', genre='$genre', wisata='$wisata', tgl='$tgl'
			) WHERE `jurnal`.`nim` = '$nim'";
	if(mysqli_query($konek , $sql)){
		header("Location: dashboard.php");
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