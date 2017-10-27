<?php
	
	// Include file koneksi
	include"lib/conn.php";
	
	session_start();// Memulai Session
	// Menyimpan Session
	$user_check = $_SESSION['login_user'];
	// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
	$ses_sql=mysqli_query($link, "select nama_lengkap from user where usernm = '$user_check'");
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session = $row['nama_lengkap'];

	//data header
	$HEAD = array();
	$sqlhead = mysqli_query($link, "SELECT * FROM tb_pengaturan");
	while ($p = mysqli_fetch_assoc($sqlhead)) {
		$HEAD[$p['nama_peng']] = $p['val_peng'];
	}

	if(!isset($login_session)){
		mysqli_close($link); // Menutup koneksi
		header('Location: login.php'); // Mengarahkan ke Home Page
	}
?>