<?php
include '../patrial/patrial-top.php';
include 'data-vehicle.php';
?>

<div class="container mt-3" style="width: 750px;">
    <div class="card">
        <h4 class="mt-3" style="text-align: center;">Daftar Kendaraan</h4>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Pilih</th>
                        <th scope="col">No</th>
                        <th scope="col">Nomer Polisi</th>
                        <th scope="col">Merek Kendaraan</th>
                        <th scope="col">Tipe Kendaraan</th>
                        <th scope="col">Tahun Kendaraan</th>
                        <th scope="col">Warna</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="">
                        <?php foreach ($list_kendaraan as $index => $kendaraan) { ?>
                            <tr>
                                <td><input type="radio" class="form-check-input" name="service"></td>
                                <td><?php echo $index + 1; ?></td>
                                <td><?php echo $kendaraan['nopol']; ?></td>
                                <td><?php echo $kendaraan['merk_kendaraan']; ?></td>
                                <td><?php echo $kendaraan['tipe_kendaraan']; ?></td>
                                <td><?php echo $kendaraan['thn_kendaraan']; ?></td>
                                <td><?php echo $kendaraan['warna']; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Menu
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="delete-vehicle.php?id_kendaraan=<?php echo $kendaraan['id_kendaraan']; ?>">Delete</a></li>
                                            <li><a class="dropdown-item" href="edit.php?id_kendaraan=<?php echo $kendaraan['id_kendaraan'] ?>">Edit</a></li>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </form>
                </tbody>
            </table>
            <a href="../register-vehicle" class="btn btn-primary me-2">Tambah</a>
            <a href="../register-vehicle" class="btn btn-primary">Pilih</a>
        </div>
    </div>
</div>


<?php include '../patrial/patrial-bot.php'; ?>