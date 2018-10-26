<?php

session_start();
include'koneksi.php';

$sql="SELECT * FROM jurnal";
$query=mysqli_query($konek, $sql);
$halo= mysqli_fetch_array($query);


echo "Nama : " .$halo['nama']."<br>";
echo "NIM : " .$halo['nim']."<br>";
echo "kelas : " .$halo['kelas']."<br>";
echo "Hobi : " .$halo['hobi']."<br>";
echo "Genre : " .$halo['genre']."<br>";
echo "Wisata : " .$halo['wisata']."<br>";
echo "Tanggal Lahir : " .$halo['tgl']."<br>";
echo "Username : " .$halo['username']."<br>";
echo "Email : " .$halo['email']."<br>";
echo "Password : " .$halo['password']."<br>";


 
?>

<a href ="dashboard.php"> Dashboard.</a>
