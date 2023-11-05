<?php
session_start();
require '../../config/conection.php';

$nik = $_POST['nik'];


$query = "SELECT * FROM user WHERE nik = '$nik'";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    $data_user = mysqli_fetch_assoc($hasil);

    if ($data_user != null) {
        $_SESSION['id'] = $data_user['id_user'];
        header('Location: ../dashboard');
        exit;
        // echo "<script>window.alert('Berhasil Login')</script>";
    } else {
        echo "<script>window.alert('Anda Belum Terdaftar, Mohon Registrasi Terlebih Dahulu'); window.location.href='../login'</script>";
    }
} else {
    echo "Kesalahan dalam menjalankan query: " . mysqli_error($koneksi);
}
