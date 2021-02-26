<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($koneksi,"update siswa set nama='$nama', jurusan='$jurusan', alamat='$alamat' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>