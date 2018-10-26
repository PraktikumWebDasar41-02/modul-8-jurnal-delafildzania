<center><H1>DASHBOARD</H1></center>

<?php
require 'function.php';
$mahasiswa=query("SELECT * FROM jurnal");
?> 
<a href="newData.php"><button>INPUT</button></a>
<form method="post">
<table border="1" cellpadding="10" cellspacing="0">
<tr>
	<td colspan="11"><input type="text" name="nim" placeholder="Cari NIM">
		<input type="submit" name="cari" value="Cari">
		<?php
		if (isset($_POST['cari'])){
			$nim = $_POST['nim'];
			$cari= "SELECT nim, nama FROM jurnal WHERE nim = '$nim'";
			$que=mysqli_query($konek, $cari);
			}
				?>
		
	
	</td>
</tr>
	<tr>
		<th>Nama</th>
		<th>NIM</th>
		<th>Kelas</th>
		<th>Hobi</th>
		<th>Genre Film</th>
		<th>Tempat Wisata</th>
		<th>Tgl</th>
		<th>Username</th>
		<th>Email</th>
		<th>Password</th>
		<th>Aksi</th>

	</tr>
	<?php foreach($mahasiswa as $row ) :?>
	<tr>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["nim"]; ?></td>
		<td><?= $row["kelas"]; ?></td>
		<td><?= $row["hobi"]; ?></td>
		<td><?= $row["genre"]; ?></td>
		<td><?= $row["wisata"]; ?></td>
		<td><?= $row["tgl"]; ?></td>
		<td><?= $row["username"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["password"]; ?></td>

		
		<td>
			<?php echo "<a href=hapus.php?id=".$row["username"].">Hapus</a>"; ?> |
			<?php echo "<a href=newData.php?id=".$row["username"]."
			>NewData</a>"; ?> |
			<?php echo "<a href=profile.php?id=".$row["username"]."
			>Profile</a>"; ?>

		</td>
	</tr>
<?php endforeach; ?>
</table>
</form>

<?php
if(mysqli_affected_rows($konek) >0){
		echo"berhasil ditambahkan";
}else{
		echo "gagal ditambahkan";
		echo "<br>";
		echo mysqli_error($konek);
	}
?>