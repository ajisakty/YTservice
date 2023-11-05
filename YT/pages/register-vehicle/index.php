<?php include '../patrial/patrial-top.php' ?>

<div class="container mt-3" style="width: 450px;">
    <div class="card">
        <div class="card-body">
            <form action="register-proses-vehicle.php" method="POST">
                <h4 style="text-align: center;">Pilih Kendaraan Yang Ingin Di Servis</h4>
                <table class="table table-borderless">
                    <tr>
                        <th><b>Nomer Polisi :</b></th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="nopol"></td>
                    </tr>
                    <tr>
                        <th><b>Merek Kendaraan :</b></th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="mrk-kendaraan"></td>
                    </tr>
                    <tr>
                        <th><b>Tipe Kendaraan :</b></th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="tp-kendaraan"></td>
                    </tr>
                    <tr>
                        <th><b>Tahun Kendaraan :</b></th>
                    </tr>
                    <tr>
                        <td><input type="number" class="form-control" name="thn-kendaraan"></td>
                    </tr>
                    <tr>
                        <th><b>Warna Kendaraan :</b></th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="wrn-kendaraan"></td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>



    <?php include '../patrial/patrial-bot.php' ?>