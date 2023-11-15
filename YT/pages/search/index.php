<?php
include '../../asset/css/header.php';
include '../patrial/function.php';
$a = " ";
$plat = isset($_POST['nopol']) ? $_POST['nopol'] : $a;
$platSpace = word($plat);
$query = "SELECT * FROM mobil INNER JOIN user on mobil.id_user=user.id_user WHERE nopol = '$platSpace'";

$hasil = searchCar($query);

?>

<form action="" method="post" class="mt-2 ms-3">
    <input type="text" name="nopol" class="form-control" style="width: 300px;">
    <button type="submit" value="submit" class="btn btn-sm btn-secondary mt-2">Search</button>
</form>
<div class="container-fluid">
    <table class="table table-secondary table-striped mt-3">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th style="width: 300px;">Plat Nomer</th>
                <th>Mobil</th>
                <th>Tipe</th>
                <th>Warna</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $row) {
                echo "<tr>";
                echo "<td>" . $row['nik'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['nopol'] . "</td>";
                echo "<td>" . $row['merk_kendaraan'] . "</td>";
                echo "<td>" . $row['tipe_kendaraan'] . "</td>";
                echo "<td>" . $row['warna'] . "</td>";
                echo "</tr>";
            } ?>
        </tbody>
    </table>
</div>
<?php include '../../asset/css/footer.php' ?>