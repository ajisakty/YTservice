<?php
session_start();
include '../../config/conection.php';
$id = $_SESSION['id'];
$query = "SELECT * FROM mobil WHERE id_user = '$id'";
$result = mysqli_query($koneksi, $query);

$list_kendaraan = array();

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_kendaraan[] = $row;
    }
} else {
    echo "Kesalahan dalam menjalankan kueri SQL: " . mysqli_error($koneksi);
}
