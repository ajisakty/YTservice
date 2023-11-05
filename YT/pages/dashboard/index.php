<?php
include '../../asset/css/header.php';
include 'data-dashboard.php';
?>
<div class="container">
    <div class="row">
        <div class="form">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomer Polisi</th>
                        <th scope="col">Type Kendaraan</th>
                        <th scope="col">Merek Kendaraan</th>
                        <th scope="col">Tahun Kendaraan</th>
                        <th scope="col">Warna</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_kendaraan as $index => $kendaraan) { ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $kendaraan['nopol']; ?></td>
                            <td></td>
                            <td><?php echo $kendaraan['merk_kendaraan']; ?></td>
                            <td><?php echo $kendaraan['thn_kendaraan']; ?></td>
                            <td><?php echo $kendaraan['warna']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <input type="submit" value="Tambah">
        </div>
    </div>
</div>





<?php include '../../asset/css/footer.php' ?>