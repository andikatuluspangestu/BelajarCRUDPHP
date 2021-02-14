
<!-- Kode PHP -->
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>

	<!-- CSS -->
	<style type="text/css">
		body {
			padding: 20px;
		}
		a {
			text-decoration: none;
			}

		.hapus {
			color: red;
			font-weight: bold;
		}
		.edit {
			font-weight: bold;
		}
		.button {
			border-radius: 3px;
			background-color: blue;
			padding: 5px;
			color: white;
		}
		.button:hover {
			background-color: darkblue;
		}

	</style>
</head>
<body>

	<div class="profil" style="float: right;">
		<?php 

		date_default_timezone_set("Asia/Jakarta") . '<br>';
		echo date("d-m-Y H:i"). " WIB";

		?>
	</div>

	<br/><br>

	<!-- Formulir -->
	<table border="1" cellpadding="10" width="100%">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Alamat</th>
		</tr>

	<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jurusan']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
			</tr>
			<?php 
		}
	?>
	</table>

	<!-- Script buat ngeprint -->
	<script>
		window.print();
	</script>
</body>
</html>