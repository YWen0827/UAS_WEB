<?php

// edit_proses.php

include("koneksi.php");

$sql = "UPDATE contact SET
		nama = '$_POST[nama]',
		jabatan = '$_POST[jabatan]',
		email='$_POST[email]'";
mysqli_query($koneksi, $sql);
include("manage_contact.php");
?>

