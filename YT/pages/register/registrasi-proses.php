<?php

include "../../config/conection.php";

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];


if (empty($nik) || empty($nama) || empty($alamat)) {
    echo '<script>window.alert("Mohon Di Isi Terlebih Dahulu")</script>';
} else {
    $cek_query = "SELECT * FROM user WHERE nik = '$nik'";
    $cek_hasil = mysqli_query($koneksi, $cek_query);

    if (mysqli_num_rows($cek_hasil) > 0) {
        echo '<script>window.alert("NIK Sudah Terdaftar")</script>';
    } else {
        $query = "INSERT INTO user(nik,nama,alamat) VALUE('$nik','$nama','$alamat')";

        if (mysqli_query($koneksi, $query)) {
            echo '<script>window.alert("Daftar Berhasil")</script>';
            header("Location:../login");
        } else {
            echo '<script>window.alert("Pendaftaran Gagal")</script>';
        }
    }
}
