<?php
include '../patrial/patrial-top.php';
include '../patrial/function.php';


$id_mobil = $_GET['service'];

$id = kendaraan($id_mobil);

if (isset($_POST["submit"])) {
    $data = [
        "cabang" => $_POST['cabang'],
        "jam" => $_POST['jam'],
        "tgl" => $_POST['tgl']
    ];

    if (inputService($data, $id_mobil)) {
        echo "Berhasil!";
    } else {
        echo "Gagal!";
        echo $data['cabang'] . "<br>";
        echo $data['jam'] . "<br>";
        echo $data['tgl'] . "<br>";
    }
}
?>




<div class="container mt-3" style="width: 750px;">
    <div class="card">
        <div class="card-body">

            <table>
                <tbody>
                    <tr>
                        <td>Plat Nomor</td>
                        <td>:</td>
                        <td><?php echo $id['nopol'] ?></td>
                    </tr>
                    <tr>
                        <td>Merk Kendaraan</td>
                        <td> :</td>
                        <td><?php echo $id['merk_kendaraan'] ?></td>
                    </tr>
                    <tr>
                        <td>Tipe Kendaraan</td>
                        <td>:</td>
                        <td><?php echo $id['tipe_kendaraan'] ?></td>
                    </tr>
                    <tr>
                        <td>Warna</td>
                        <td>:</td>
                        <td><?php echo $id['warna'] ?></td>
                    </tr>
                </tbody>
            </table>

            <form action="" method="POST">
                <label class="form-check-label">Cabang :</label>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cabang" value="cikupa">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Cinere
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cabang" value="cikupa">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Cikupa
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="form-label">Jam Kunjung</label><br>
                    <input type="time" name="jam">
                </div>
                <div class="mb-3">
                    <label for="form-label">Tanggal</labryel><br>
                        <input type="date" name="tgl">
                </div>
                <input type="submit" class="btn btn-primary" name="submit">
            </form>
        </div>
    </div>
</div>


<?php include '../patrial/patrial-bot.php' ?>