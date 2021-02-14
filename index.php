<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		body {
  			background: #76b852; /* fallback for old browsers */
  			font-family: "Roboto", sans-serif;      
		}
		form {
  			position: absolute;
  			top: 25%;
  			left: 40%;
  			background: #FFFFFF;
  			width: auto;
  			margin: 0 auto 100px;
  			padding: 45px;
  			text-align: center;
  			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  			border-radius: 5px;
		}

		input {
			width: auto;
		}

		.formulir {
			border-radius: 5px;
			border: none;
			padding: 5px;
			height: 25px;
		}

		.button {
			background-color: #76b852;
			margin-top: 55px;
			border-radius: 5px;
			border: none;
			padding: 5px;
			height: 35px;
			color: white;
			width: 100px;
		}
		.button:hover {
			background-color: green;
		}
	</style>
</head>
<body>
	
	<!-- Notifikasi atau Pesan jika gagal login -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			$notif = "Sudah berhasil logout!";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		<h1 style="text-align: center; color: #76b852;"> Masuk </h1>
		<br>
		<table>
			<tr>
				<td><input class="formulir" type="text" name="username" placeholder="Username"></td>
			</tr>
			<tr>
				<td><input class="formulir" type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
		</table>
		<!-- Tombol Login -->
		<input class="button" type="submit" value="LOGIN">		
	</form>
</body>
</html>