<?php
session_start();
include "koneksi.php";
if (!isset($_SESSION['login'])) {
	header("location:login.php?logindulu");
}


$sql = "SELECT * FROM sewa";
$query = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html>

<head>
	<div class="container">
		<title>Rental Mobil</title>
		<link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
	<h1>Rental Mobil</h1>
	<a href="tambah.php"><button class="btn btn-info">Tambah</button></a>
	<a href="logout.php"><button class="btn btn-danger">Logout</button></a><br><br>
	<table class="table table-bordered">
		<thead class="table-dark">
			<tr>
				<th>Kode Sewa</th>
				<th>Kode Mobil</th>
				<th>Kode Customer</th>
				<th>Tanggal Pinjam</th>
				<th>Tanggal Kembali</th>
				<th>Total Sewa</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<?php
		while ($sewa = mysqli_fetch_assoc($query)) {
			echo "<tr>";
			echo "<td>" . $sewa['kd_sewa'] . "</td>";
			echo "<td>" . $sewa['kd_mobil'] . "</td>";
			echo "<td>" . $sewa['kd_customer'] . "</td>";
			echo "<td>" . $sewa['tgl_pinjam'] . "</td>";
			echo "<td>" . $sewa['tgl_kembali'] . "</td>";
			echo "<td>" . $sewa['total_sewa'] . "</td>";
			echo "<td><a href='hapus.php?kd_sewa=" . $sewa['kd_sewa'] . "'>Hapus</a>";
			echo " | <a href='edit.php?kd_sewa=" . $sewa['kd_sewa'] . "'>Edit</a></td>";
			echo "</tr>";
		}
		?>
	</table>
</body>

</html>