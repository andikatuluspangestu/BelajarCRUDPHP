
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

		/* Buatlah tabel dengan warna background putih, kasih margin atas 0, margin kanan kiri auto, dan margin bawah 100px, setelah itu ratakan tengah teks */
		table {
  			background: #FFFFFF;
  			margin: 0 auto 100px;
  			padding: 55px;
  			text-align: center;
		} 

		/* Hilangkan garis bawah link*/
		a { text-decoration: none; } 

		/* Tebalkan huruf aksi HAPUS & EDIT*/
		.aksi { font-weight: bold; }

		/* Buatloh tombol dengan sudut lengkung 3px, berwarna biru, teks warna putih dan kasih padding 5px */
		.button {
			border-radius: 3px;
			background-color: blue;
			color: white;
			padding: 5px;
		}

		/* Atur keterlihatan/opasitas tombol saat di klik */
		.button:hover {

			/* Atur warna agak sedikit memudar ketika tombol di arahkan dengan kursor*/
			opacity: 0.6;

			/* Atur warna teks tombol menjadi putih*/
			color: white;
			
		}

		/* Buat warna tombol KELUAR jadi merah*/
		.keluar { background-color: red !important; }

	</style>
</head>
<body>
	
	<br>
	<!-- Buatlah Tombol Tambah Siswa -->
	<a class="button" href="tambah.php">+ TAMBAH SISWA</a>

	<!-- Buatlah Tombol Print -->
	&nbsp; <a class="button" href="print.php" target="_blank">PRINT</a>

	<!-- Buatlah Tombol Logout -->
	&nbsp; <a class="button keluar" href="logout.php">KELUAR</a>

	<br/>
	<br/>

	<!-- Buatlah tabel -->

	<!-- 

	- Class Table itu untuk membuat style tabel otomatis dengan bootstrap
	- Table-striped itu biar tabel nya ada garis-garis pemisah antar data
	- Table-hover itu biar kalau kursornya diarahkan ke tabel itu tabelnya jadi seperti berubah warna, artinya tabel itu sedang aktif disentuh
	- Cellpadding untuk mengatur jarak dalam tabel
	- Atur lebar tabel agar menyesuaikan layar yaitu 100%

	-->

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
			<th>OPSI</th>
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

				<td>
					<!-- Buatlah Tombol Edit dan beri class aksi -->
					<a class="aksi" href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>

					<!-- Buatlah Pemisah antara Tombol Edit dan beri ketebalan -->
					<span style="font-weight: bold;"> | </span>

					<!-- Buatlah Tombol Hapus dan beri class aksi -->
					<a class="aksi" href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>

	<?php } ?>
	</table>

</body>
</html>