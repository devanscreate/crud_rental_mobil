<!DOCTYPE html>
<html>

<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
	<div class="container">
		<div class="row justify-content-center py-5">
			<div class="col-md-5">
				<div class="card-body">
					<h1>Tambah Data</h1>
					<form action="proses_tambah.php" method="POST">
						<label>Kode Mobil</label>
						<input type="number" name="kd_mobil" class="form-control" id="" placeholder="Masukkan Kode Mobil"><br>
						<label>Kode Customer</label>
						<input type="number" name="kd_customer" class="form-control" id="" placeholder="Masukkan Kode Customer"><br>
						<label>Tanggal Pinjam</label>
						<input type="date" name="tgl_pinjam" class="form-control" id="" placeholder="Masukkan Tanggal Pinjam"><br>
						<label>Tanggal Kembali</label>
						<input type="date" name="tgl_kembali" class="form-control" id="" placeholder="Masukkan Tanggal Kembali"><br>
						<input type="submit" value="Simpan" class="btn btn-primary ">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>