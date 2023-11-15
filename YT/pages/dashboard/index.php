<?php
include '../../asset/css/header.php';
include '../patrial/function.php';

$today = date("Y-m-d");
$now = date("Y-m-d", strtotime($today . " -1 day"));
$date1 = isset($_POST['date1']) ? $_POST['date1'] : $now;
$date2 = isset($_POST['date2']) ? $_POST['date2'] : $now;

$cabangTemp = "cikupa";
$cabang = isset($_POST['cabang']) ? $_POST['cabang'] : $cabangTemp;
$query = "SELECT * FROM `service`
INNER JOIN mobil ON service.id_kendaraan = mobil.id_kendaraan
INNER JOIN user ON mobil.id_user = user.id_user
WHERE cabang = '$cabang' AND service.tgl BETWEEN '$date1' AND '$date2'
ORDER BY service.jam ASC";
$hasil = serviceOrder($query);
//echo $query;
?>

<form action="" method="post" class="mt-2 ms-3" style="width: 500px;">

    <select name="cabang" class="form-select mb-2" style="width: 25%;">
        <option selected>Cabang</option>
        <option value="cikupa">Cikupa</option>
        <option value="Cinere">Cinere</option>
    </select>
    <div class="input-group mt-1">
        <span class="input-group-text">Date</span>
        <input type="date" aria-label="First name" class="form-control" name="date1">
        <input type="date" aria-label="Last name" class="form-control" name="date2">
        <button class="btn btn-outline-secondary" type="submit" value="submit">Filter</button>
    </div>
</form>
<div class="container-fluid mt-3">
    <table class="table table-secondary table-striped ">
        <thead>
            <tr>
                <th>Nama</th>
                <th style="width: 300px;">Plat Nomer</th>
                <th>Mobil</th>
                <th>Tipe</th>
                <th>Jam</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $row) {
                echo "<tr>";
                $namaUpper = strtoupper($row['nama']);
                echo "<td>" . $namaUpper . "</td>";
                echo "<td>" . $row['nopol'] . "</td>";
                echo "<td>" . $row['merk_kendaraan'] . "</td>";
                echo "<td>" . $row['tipe_kendaraan'] . "</td>";
                $jam = $row['jam'];
                $jam_format = date("H:i", strtotime($jam));
                echo "<td>" . $jam_format . "</td>";
                echo "</tr>";
            } ?>
        </tbody>
    </table>

</div>
<?php include '../../asset/css/footer.php' ?>