<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">

		body {

  			/* Atur warna background halaman menjadi Hijau*/
			background: green;      
		}

		/* CSS Untuk Kotak Formulir Login*/
		form {

			/*Posisi agar Kotak Formulir Login bisa mengambang*/
  			position: absolute;

  			/*Posisi Kotak Formulir Login di tengah-tengah*/
  			top: 25%; 
  			left: 40%;

  			/*Warna Kotak Formulir Login*/
  			background: #FFFFFF;

  			/*Lebar Kotak Formulir Login Otomatis*/
  			width: auto;

  			/* Margin Kotak Formulir Login*/
  			margin: 0 auto;

  			/*Jarak di dalam Kotak Formulir Login*/
  			padding: 45px;

  			/*Tulisan judul LOGIN*/
  			text-align: center;

  			/*Lengkungan sudut Kotak Formulir Login*/
  			border-radius: 5px;
		}

		input {

			/* Atur kotak input lebarnya menjadi otomatis*/
			width: auto;
		}

		.title {

			/* Atur teks 'TAMBAH SISWA' menjadi ketengah secara horizontal*/
			text-align: center; 

			/* Atur warna teks menjadi hijau*/
			color: green;

		}

		.kotakinput {

			/* Atur sudut lengkungan jadi 5px agar sedikit membulat*/
			border-radius: 5px;

			/* Atur atau hilangkan garis tepi atau border menjadi 0*/
			border: none;

			/* Atur batas dalam atau padding menjadi 5px dan sesuaikan saja*/
			padding: 5px;

			/* Atur tinggi kotak inputnya dan sesuaikan saja*/
			height: 25px;
		}

		.button {

			/*Warna tombol*/
			background-color: green;

			/* Atur batas luar atas atau margin atas ke 55px*/
			margin-top: 55px;

			/* Atur sudut lengkungan jadi 5px agar sedikit membulat*/
			border-radius: 5px;

			/* Atur atau hilangkan garis tepi atau border menjadi 0*/
			border: none;

			/* Atur batas dalam atau padding menjadi 5px dan sesuaikan saja*/
			padding: 5px;

			/* Atur tinggi kotak inputnya dan sesuaikan saja*/
			height: 35px;

			/*Warna teks tombol*/
			color: white;

			/*Lebar tombol*/
			width: 100px;
		}

		/*CSS Ketika tombol di hover atau entuh*/
		.button:hover {

			/* Atur warna agak sedikit memudar ketika tombol di arahkan dengan kursor*/
			opacity: 0.6;

		}

	</style>
</head>
<body>
	
	<!-- Notifikasi atau Pesan jika gagal login -->

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		} else if($_GET['pesan'] == "logout"){
			$notif = "Sudah berhasil logout!";
		} else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

	<br/>
	<br/>


	<!-- Buatlah sebuah from dengan cara ketik 'form' lalu tekan Tab  -->
	<!-- Atur form tersebut dengan method 'POST' dan action 'cek_login.php' -->
	<form method="post" action="cek_login.php">

		<!-- Tambahkan Teks judul 'MASUK' dengan menggunakan tag h1 dan beri class title -->
		<h1 class="title"> Masuk </h1>
		<br>

		<!-- Buatlah sebuah tabel dan bikin 2 tabel baris (tr) -->
		<table>

			<!-- Didalam table row (tr) isikan table data (td) -->
			<tr>
				<td><input class="kotakinput" type="text" name="username" placeholder="Username"></td>
			</tr>
			<tr>
				<td><input class="kotakinput" type="password" name="password" placeholder="Password"></td>
			</tr>
		</table>

		<!-- Buatlah tombol SIMPAN menggunakan tag input dengan class 'button' dan value 'LOGIN' -->
		<input class="button" type="submit" value="LOGIN">	
	</form>

</body>
</html>