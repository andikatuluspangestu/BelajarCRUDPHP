<?php 

$koneksi = mysqli_connect('localhost', 'root', '', 'siswa');

// Cek Koneksi
if (mysqli_connect_errno()) {
	echo "koneksi gagal :" . mysqli_connect_error();
}

// Artinya : Jika kondisi bernilai true ( error ) maka tampilkan pesan error


?>