<?php
include '../../asset/css/header.php';
include '../patrial/function.php';


$date1 = $_POST['date1'];
$date2 = $_POST['date2'];

$cabang = "cikupa";
$tgl = date("y-m-d");
$query = "SELECT * FROM `service`
INNER JOIN mobil ON service.id_kendaraan = mobil.id_kendaraan
INNER JOIN user ON mobil.id_user = user.id_user
WHERE cabang = '$cabang' AND service.tgl BETWEEN '$date1' AND '$date2'
ORDER BY service.jam ASC";
$hasil = serviceOrder($query);
echo $query;
?>
<form action="" method="post" class="mt-2">
    <select name="cabang" class="mb-2">
        <option value="cikupa">Cikupa</option>
        <option value="Cinere">Cinere</option>
    </select>
    <br><input type="date" name="date1"> and <input type="date" name="date2">
    <input type="submit" value="submit">
</form>
<div class="container-fluid">
    <table class="table">
        <thead>
            <tr>
                <td>Nama</td>
                <td style="width: 300px;">Plat Nomer</td>
                <td>Mobil</td>
                <td>Tipe</td>
                <td>Jam</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $row) {
                echo "<tr>";
                echo "<td>" . $row['nama'] . "</td>";
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