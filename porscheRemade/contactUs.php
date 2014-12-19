<?php include("koneksi.php");?>
<?php include("head.php");?>
<?php
	   $sql = "SELECT * FROM contact";
	   $hasil = mysqli_query($koneksi, $sql);
?>
	<div id="divMid">
	<table>
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
	</div>
	<div id="divBtm">
	</div>	

</div>
</body>
</html>