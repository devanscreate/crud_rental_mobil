<?php
include "koneksi.php";
$kd_sewa = $_GET['kd_sewa'];
$sql = "SELECT * FROM sewa WHERE kd_sewa = '$kd_sewa' ";
$query = mysqli_query($koneksi, $sql);
while ($sewa = mysqli_fetch_assoc($query)) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Edit</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body>
        <h1>Edit</h1>
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="kd_sewa" value="<?= $sewa['kd_sewa']; ?>">
            <label>Kode Mobil</label>
            <input type="number" name="kd_mobil" value="<?= $sewa['kd_mobil']; ?>"><br>
            <label>Kode Customer</label>
            <input type="number" name="kd_customer" value="<?= $sewa['kd_customer']; ?>"><br>
            <label>Tanggal Pinjam</label>
            <input type="date" name="tgl_pinjam" value="<?= $sewa['tgl_pinjam']; ?>"><br>
            <label>Tanggal Kembali</label>
            <input type="date" name="tgl_kembali" value="<?= $sewa['tgl_kembali']; ?>"><br>
            <input type="submit" value="Simpan">
        </form>
    </body>

    </html>
<?php
}
?>