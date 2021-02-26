<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br><br>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from siswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

		<!-- Buatlah sebuah from dengan cara ketik 'form' lalu tekan Tab  -->
		<!-- Atur form tersebut dengan method 'POST' dan action 'update.php' -->
		<form method="post" action="update.php">

			<!-- Tambahkan Teks judul 'TAMBAH SISWA' dengan menggunakan tag h3 dan beri kelas title -->
		<h3 class="title">Tambah Siswa</h3>

		<!-- Buatlah sebuah tabel dan bikin 3 tabel baris (tr) -->
			<table>
				<tr>			
					<td>
						<input class="kotakinput" type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input class="kotakinput" type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td><input class="kotakinput" type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
				</tr>
				<tr>
					<td><input class="kotakinput" type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>	
			</table>


			<!-- Buatlah tombol SIMPAN menggunakan tag input dengan class 'button' dan 'simpan' -->
			<input type="submit" class="button simpan" value="SIMPAN"> &nbsp; 

			<!-- Buatlah tombol KEMBALI menggunakan tag input dengan class 'button' dan 'kembali' -->
			<input type="submit" class="button kembali" value="KEMBALI" href="index.php">
			
		</form>
		<?php 
	}
?>

</body>
</html>
