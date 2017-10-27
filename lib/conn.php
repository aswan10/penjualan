<?php
	$host = "localhost";
	$user = "root";
	$pass = "240698";
	$db = "db_toko";

	// $conn = mysqli_connect($host, $user, $pass) or die("Tidak terkoneksi ke server!");
	// if ($conn) {
	// 	$dbselect = mysql_select_db($db, $conn) or die("Tidak terhubung ke Database.");
	// }

	$link = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error());
	
	include"fungsi_flash.php";
?>
