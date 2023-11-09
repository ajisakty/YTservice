<?php
session_start();
include "../../config/conection.php";



if (isset($_GET['id_kendaraan'])) {
    $id_kendaraan = $_GET['id_kendaraan'];
    $query = "SELECT * FROM mobil WHERE id_kendaraan = $id_kendaraan";
    $result = mysqli_query($koneksi, $query);
    $data_kendaraan = array();

    while ($row_data = mysqli_fetch_assoc($result)) {
        $data_kendaraan[] = $row_data;
    }
    $_SESSION['data_kendaraan'] = $data_kendaraan;
    $_SESSION['id_kendaraa'] = $data_kendaraan[0]['id_kendaraan'];
    header('Location: edit-vehicle.php');
}
