<?php
// koneksi.php
//1. Buat koneksi ke database
//1.a. Siapkan argumen yang diperlukan untuk koneksi ke database
	   $host = "localhost";
	   $user = "root";
	   $pass = "";
	   $name = "a7219853_web";
//1.b. Buat koneksi ke database
	   $koneksi = mysqli_connect($host, $user, $pass, $name);
//1.c. Periksa koneksi apakah berhasil
	   if(mysqli_connect_errno()) {
			echo "Error Code: ";
			echo mysqli_connect_errno();
			die("<br />KONEKSI DB GAGAL: " . mysqli_connect_error());
	   }