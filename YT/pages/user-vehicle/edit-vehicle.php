<?php
include "../patrial/patrial-top.php";
include '../user-vehicle/edit.php';
include '../user-vehicle/edit-proses-vehicle.php';

$data_kendaraan = $_SESSION['data_kendaraan'];
$id_kendaraan = $data_kendaraan[0]['id_kendaraan'];

if (isset($_POST['submit'])) {
    $data = [
        "nopol" => $_POST['nopol'],
        "merek" => $_POST['merek'],
        "tipe" => $_POST['tipe'],
        "tahun" => $_POST['tahun'],
        "warna" => $_POST['warna'],
    ];

    if (ubah($data, $id_kendaraan)) {
        echo "<script>alert('Data Berhasil Diubah'); window.location.href='../user-vehicle';</script>";
    } else {
        echo "<script>window.alert('Data Gagal Diubah')</script>; window.location.href='../user-vehicle'";
    }
}


?>



<div class="container mt-3" style="width: 450px;">
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                <h4 style="text-align: center;">EDIT KENDARAAN</h4>
                <table class="table table-borderless">
                    <tr>
                        <th><b>Nomer Polisi :</b></th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="nopol" value="<?php echo $data_kendaraan[0]['nopol'] ?>"></td>
                    </tr>
                    <tr>
                        <th><b>Merek Kendaraan :</b></th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="merek" value="<?php echo $data_kendaraan[0]['merk_kendaraan'] ?>"></td>
                    </tr>
                    <tr>
                        <th><b>Tipe Kendaraan :</b></th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="tipe" value="<?php echo $data_kendaraan[0]['tipe_kendaraan'] ?>"></td>
                    </tr>
                    <tr>
                        <th><b>Tahun Kendaraan :</b></th>
                    </tr>
                    <tr>
                        <td><input type="number" class="form-control" name="tahun" value="<?php echo $data_kendaraan[0]['thn_kendaraan'] ?>"></td>
                    </tr>
                    <tr>
                        <th><b>Warna Kendaraan :</b></th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="warna" value="<?php echo $data_kendaraan[0]['warna'] ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="btn btn-primary" value="Edit" name="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>




<?php include "../patrial/patrial-bot.php" ?>