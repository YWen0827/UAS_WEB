<?php include("koneksi.php");?>
<?php include("head.php");?>
<?php
	   $sql = "SELECT * FROM contact";
	   $hasil = mysqli_query($koneksi, $sql);
?>
	<div id="divMid">
	<table border=1>
		<?php
			while($baris = mysqli_fetch_assoc($hasil)) {
				echo "<tr>";
				echo "<td>~~~~~~~~~~~~~~~~~~~~~~~</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>" . $baris['nama'] . "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>" . $baris['jabatan'] . "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>" . $baris['email'] . "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>~~~~~~~~~~~~~~~~~~~~~~~</td>";
				echo "</tr>";
			}
		?>
	</table>
	<table>
		<tr>
			<td><h3>Edit Contact</h3></td>
		<tr>
		<form action="edit_proses.php" method="POST">
		<tr>
		<td>Nama:</td> 		<td><input type="text"
					name="nama"
					value="<?php echo $baris['nama']; ?>" /><br /></td>
		</tr><tr>
		<td>Jabatan:</td> 	<td><input type="text"
					name="jabatan"
					value="<?php echo $baris['jabatan']; ?>" /><br /></td>
		</tr><tr>
		<td>Email:</td> 	<td><input type="text"
					name="email"
					value="<?php echo $baris['email']; ?>" /><br /></td>
		</tr><tr>	
		<td colspan=2>
					<input type="submit"
					name="simpan"
					value="SAVE" /></td>
		</tr>
		</form>
	</table>
	</div>
	<div id="divBtm">
	<a href="logout.php">Logout</a>
	</div>	

</div>
</body>
</html>