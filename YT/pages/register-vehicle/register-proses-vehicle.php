<?php
include '../../config/conection.php';
include '../user-vehicle/data-vehicle.php';
$nopol = $_POST['nopol'];
$merek = $_POST['mrk-kendaraan'];
$tipe = $_POST['tp-kendaraan'];
$tahun = $_POST['thn-kendaraan'];
$warna = $_POST['wrn-kendaraan'];


$query = "INSERT INTO mobil(nopol, merk_kendaraan,tipe_kendaraan, thn_kendaraan, warna, id_user) VALUES 
('$nopol', '$merek', '$tipe', '$tahun', '$warna', '$id')";

$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>window.alert('Daftar Berhasil'); window.location.href=' ../user-vehicle'</script>";
} else {
    echo "<script>window.alert('Daftar Gagal')</script>";
}
