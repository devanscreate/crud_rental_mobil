<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username' AND password=md5('$password');";
$query = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($query) > 0) {
	$_SESSION['login'] = 'admin';
	header("location:index.php?login=sukses");
} else {
	echo "login gagal";
}
