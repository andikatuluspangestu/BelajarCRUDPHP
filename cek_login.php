<?php

	// mengaktifkan session php
	session_start();

	// menghubungkan dengan koneksi
	include 'koneksi.php';

	// menangkap data yang dikirim dari Formulir
	$username = $_POST['username'];
	$password = $_POST['password'];

	// menyeleksi data admin dengan username dan password yang sesuai
	$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");

	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($data);

	/** 
	Jika $cek lebih besar dari 0 maka cek Session dan masuk ke Halaman admin, 
	jika tidak kembalikan ke halaman login
	**/

	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:admin/index.php");
	} else{
		header("location:index.php?pesan=gagal");
	}

?>