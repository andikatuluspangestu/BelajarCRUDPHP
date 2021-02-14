
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

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<!-- CSS -->
	<style type="text/css">
		body {
			padding: 20px;
		}

		table {
  			background: #FFFFFF;
  			margin: 0 auto 100px;
  			padding: 55px;
  			text-align: center;
  			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 3px 3px 0 rgba(0, 0, 0, 0.24);
  			border: none;
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
		.keluar {
			background-color: red !important;
		}
		.keluar:hover {
			background-color: darkred !important;
		}
		.button {
			border-radius: 3px;
			background-color: blue;
			padding: 5px;
			color: white;
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 3px 3px 0 rgba(0, 0, 0, 0.24);
		}
		.button:hover {
			background-color: darkblue;
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 3px 3px 0 rgba(0, 0, 0, 0.24);
			color: white;
		}

	</style>
</head>
<body>
	
	<br>
	<!-- Tombol Tambah Siswa -->
	<a class="button" href="tambah.php">+ TAMBAH SISWA</a>

	<!-- Tombol Print -->
	&nbsp; <a class="button" href="print.php" target="_blank">PRINT</a>

	<!-- Tombol Logout -->
	&nbsp; <a class="button keluar" href="logout.php">KELUAR</a>

	<div class="profil" style="float: right;">
		<?php 


		echo "Terakhir Login ". $_SESSION['username'] ." Pada Pukul ";
		date_default_timezone_set("Asia/Jakarta") . '<br>';
		echo date("H:i"). " WIB";

		?>
	</div>

	<br/><br>

	<!-- Formulir -->
	<table class="table table-striped table-hover" cellpadding="10" width="100%">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>


	<!-- Logika Formulir -->
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
				<td>
					<a class="edit" href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<span style="font-weight: bold;"> | </span>
					<a class="hapus" href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
	?>
	</table>
</body>
</html>