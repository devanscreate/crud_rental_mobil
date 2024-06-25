<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_rental_mobil";

$koneksi = mysqli_connect($server, $username, $password, $database);
if ($koneksi) {
	echo "";
} else {
	echo "gagal";
}
