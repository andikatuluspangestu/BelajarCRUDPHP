
<!-- Buatlah Session -->
<?php 

	// Mulai session
	session_start();

	// Cek status session
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>

	<!-- CSS only use Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- CSS -->
	<style type="text/css">
		body {
			padding: 20px;
		}

		.title {
			text-align: center;
			font-size: 24;
		}

		/* Buatlah tabel dengan warna background putih, kasih margin atas 0, margin kanan kiri auto, dan margin bawah 100px, setelah itu ratakan tengah teks */
		table {
  			background: #FFFFFF;
  			margin: 0 auto 100px;
  			padding: 55px;
  			text-align: center;
		} 

	</style>
</head>
<body>

	<!-- Buatlah tabel -->

	<!-- 

	- Class Table itu untuk membuat style tabel otomatis dengan bootstrap
	- Table-striped itu biar tabel nya ada garis-garis pemisah antar data
	- Table-hover itu biar kalau kursornya diarahkan ke tabel itu tabelnya jadi seperti berubah warna, artinya tabel itu sedang aktif disentuh
	- Cellpadding untuk mengatur jarak dalam tabel
	- Atur lebar tabel agar menyesuaikan layar yaitu 100%

	-->

	<h1 class="title"> Data Siswa </h1>

	<br>

	<table class="table table-striped table-hover" cellpadding="10" width="100%">

		<!-- 
		Buatlah baris tabel baru dan isikan dengan lima kolom 
		dan beri nama NO, NAMA, JURUSAN, ALAMAT, OPSI 
		-->

		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Alamat</th>
		</tr>


	<!-- Logika Formulir -->
	<?php 

		// Hubungkan ke koneksi.php
		include 'koneksi.php';

		/** Buat Variable untuk menampung index **/

		// Variable penampung
		$no = 1;

		// Cek Data
		$data = mysqli_query($koneksi,"select * from siswa");

		while($d = mysqli_fetch_array($data)){
			?>

			<!-- Buat baris tabel baru dan didalamnya buatlah lima tabel data (td) -->

			<tr> 

				<!-- Bagian PHP ininya kamu tanyakan aja ke aku secara lisan -->

				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jurusan']; ?></td>
				<td><?php echo $d['alamat']; ?></td>

			</tr>

	<?php } ?>
	</table>

	<!-- Javascript Print -->
	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>