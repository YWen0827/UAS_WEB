<?php //
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

$koneksi = mysqli_connect("localhost", "root", "", "a7219853_web");

$sql = "SELECT * FROM a7219853_web WHERE userName='$user'";
$hasil = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($hasil) == 0) {
	echo "Username tidak ditemukan";
}else {
	echo "username ada";
	$baris = mysqli_fetch_assoc($hasil);
	if($pass == $baris['password']) {
		echo "password cocok";
		$_SESSION['login'] = 1;
		header('Location: admin.php');
	}else{
		echo "password salah";
		
	}
}