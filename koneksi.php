<?php 

// Buat Variable koneksi untuk menghubungkan dengan Database
$koneksi = mysqli_connect('localhost', 'root', '', 'siswa');

// Cek Koneksi
if (mysqli) {
	echo "koneksi gagal";
}

// Artinya : Jika kondisi bernilai true ( error ) maka tampilkan pesan error


?>