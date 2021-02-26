<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari formulir data siswa
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('','$nama','$jurusan','$alamat')");

// mengalihkan halaman kembali ke index.php di halaman admin
header("location:index.php");

?>