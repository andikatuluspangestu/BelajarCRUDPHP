<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Siswa</title>
	<style type="text/css">
		body {
  			background: #76b852; 
  			font-family: "Roboto", sans-serif;      
		}
		form {
  			position: absolute;
  			top: 20%;
  			left: 35%;
  			background: #FFFFFF;
  			width: 360px;
  			margin: 0 auto 100px;
  			padding: 45px;
  			text-align: center;
  			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  			border-radius: 5px;
		}

		.formulir {
			background: #f2f2f2;
			border-radius: 5px;
			border: none;
			padding: 10px;
			height: 25px;
			width: 330px;
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
		.simpan {
			background-color: blue;
		}
		.simpan:hover {
			background-color: darkblue;
		}
	</style>
</head>
<body>

	<form method="post" action="tambah_aksi.php">
		<h3 style="text-align: center; color: #76b852">Tambah Siswa</h3>
		<table>
			<tr>			
				<td><input class="formulir" type="text" name="nama" placeholder="Nama"></td>
			</tr>
			<tr>
				<td><input class="formulir" type="text" name="jurusan" placeholder="Jurusan"></td>
			</tr>
			<tr>
				<td><input class="formulir" type="text" name="alamat" placeholder="Alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td>
				</td> 
			</tr>		
		</table>
		<input type="submit" class="button simpan" value="SIMPAN"> &nbsp; 
		<input type="submit" class="button" value="KEMBALI" href="index.php">
	</form>
	<br>
	<br>
</body>
</html>