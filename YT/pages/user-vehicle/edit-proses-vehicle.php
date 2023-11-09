<?php
include '../../config/conection.php';
include '../patrial/function.php';



function ubah($data, $id_kendaraan)
{
    global $koneksi;

    $nopol = htmlspecialchars($data['nopol']);
    $nopol = word($nopol);
    $mrk_kendaraan = htmlspecialchars($data['merek']);
    $mrk_kendaraan = strtoupper($mrk_kendaraan);
    $tp_kendaraan = htmlspecialchars($data['tipe']);
    $tp_kendaraan = strtoupper($tp_kendaraan);
    $thn_kendaraan = htmlspecialchars($data['tahun']);
    $warna_kendaraan = htmlspecialchars($data['warna']);
    $warna_kendaraan = strtoupper($warna_kendaraan);

    $query = "UPDATE mobil SET 
    nopol = '$nopol',
    merk_kendaraan = '$mrk_kendaraan',
    tipe_kendaraan = '$tp_kendaraan',
    thn_kendaraan = '$thn_kendaraan',
    warna = '$warna_kendaraan'
    WHERE id_kendaraan = $id_kendaraan";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        return $result;
    } else {
        echo "Data Gagal Diubah!";
    }
}
