<?php
include '../../config/conection.php';

if (isset($_GET['id_kendaraan'])) {
    if (isset($_GET['id_kendaraan'])) {
        $id_kendaraan = $_GET['id_kendaraan'];

        $query = "DELETE FROM mobil WHERE id_kendaraan = $id_kendaraan";
        $hasil = mysqli_query($koneksi, $query);

        if ($hasil) {
            // Redirect kembali ke halaman daftar kendaraan atau tampilkan pesan sukses
            echo "<script>window.alert('Berhasil Dihapus'); window.location.href=' index.php'</script>";
        } else {
            echo "<script>window.alert('Gagal Dihapus!'); window.location.href=' index.php'</script>" . mysqli_error($db);
        }
    } else {
        echo "ID kendaraan tidak valid.";
    }
}
