<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<!-- Buatlah sebuah from dengan cara ketik 'form' lalu tekan Tab  -->
	<!-- Atur form tersebut dengan method 'POST' dan action 'tambah_aksi.php' -->
	<form method="post" action="tambah_aksi.php">

		<!-- Tambahkan Teks judul 'TAMBAH SISWA' dengan menggunakan tag h3 dan beri kelas title -->
		<h3 class="title">Tambah Siswa</h3>

		<!-- Buatlah sebuah tabel dan bikin 4 tabel baris (tr) -->
		<table>

			<!-- Didalam table row (tr) isikan table data (td) -->
			<tr>			
				<td><input class="kotakinput" type="text" name="nama" placeholder="Nama"></td>
			</tr>
			<tr>
				<td><input class="kotakinput" type="text" name="jurusan" placeholder="Jurusan"></td>
			</tr>
			<tr>
				<td><input class="kotakinput" type="text" name="alamat" placeholder="Alamat"></td>
			</tr>
				
		</table>

		<!-- Buatlah tombol SIMPAN menggunakan tag input dengan class 'button' dan 'simpan' -->
		<input type="submit" class="button simpan" value="SIMPAN"> &nbsp; 

		<!-- Buatlah tombol KEMBALI menggunakan tag input dengan class 'button' dan 'kembali' -->
		<input type="submit" class="button kembali" value="KEMBALI" href="index.php">
	</form>
	
</body>
</html>