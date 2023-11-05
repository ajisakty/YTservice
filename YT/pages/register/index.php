<?php
include "../patrial/patrial-top.php";
include "../../config/conection.php"
?>

<div class="global-container">
    <div class="card register-form">
        <span class="border border-dark">
            <div class="card-body border">
                <h1 class="card-title text-center">REGISTER</h1>
            </div>
        </span>
        <div class="card-text mt-3">
            <form action="registrasi-proses.php" method="post">
                <div class="mb-3">
                    <label for="nik" class="form-label" name="nik">NIK</label>
                    <input type="number" class="form-control" name="nik">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label" name="nama">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label" name="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>

                <input type="submit" class="btn btn-primary" value="Register">
            </form>
        </div>
    </div>
</div>



<?php include "../patrial/patrial-bot.php" ?>