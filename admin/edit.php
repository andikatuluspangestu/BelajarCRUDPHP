<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Siswa</title>
	<style type="text/css">
		body {
  			background: #76b852; /* fallback for old browsers */
  			font-family: "Roboto", sans-serif;      
		}
		form {
  			position: absolute;
  			top: 25%;
  			left: 33%;
  			background: #FFFFFF;
  			width: 360px;
  			margin: 0 auto 100px;
  			padding: 45px;
  			text-align: center;
  			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  			border-radius: 5px;
		}
		.formulir {
			border-radius: 5px;
			border: none;
			padding: 5px;
			height: 25px;
			opacity: 1;
			background: #f2f2f2;
			width: 250px;
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
		.alamat {
			width: auto;
			height: 100px;
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
	<br><br>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from siswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td style="text-align: left;">Nama &nbsp;&nbsp;&nbsp; </td>
					<td>
						<input class="formulir" type="hidden" name="id" value="&nbsp;&nbsp;&nbsp;<?php echo $d['id']; ?>">
						<input class="formulir" type="text" name="nama" value="&nbsp;&nbsp;&nbsp;<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Jurusan &nbsp;&nbsp;&nbsp; </td>
					<td><input class="formulir" type="text" name="jurusan" value="&nbsp;&nbsp;&nbsp;<?php echo $d['jurusan']; ?>"></td>
				</tr>
				<tr>
					<td style="text-align: left;">Alamat &nbsp;&nbsp;&nbsp; </td>
					<td><input class="formulir" type="text" name="alamat" value="&nbsp;&nbsp;&nbsp;<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td> 
					<td></td>
				</tr>		
			</table>
			<input type="submit" class="button simpan" value="SIMPAN"> &nbsp; 
			<input type="submit" class="button" value="KEMBALI" href="index.php">
		</form>
		<?php 
	}
?>

</body>
</html>
