<?php include('../patrial/patrial-top.php') ?>

<div class="global-container">
  <div class="card login-form">
    <div class="card-body">
      <h1 class="card-title text-center">LOGIN</h1>
    </div>
    <div class="card-text">
      <form action="login-proses.php" method="post">
        <div class="mb-3">
          <label for="id" class="form-label" name="nik">NIK</label>
          <input type="number" class="form-control" name="nik">
        </div>
        <input type="submit" class="btn btn-primary" value="Login">
        <a href="../../pages/register" class="registrasi">Registrasi akun</a>
      </form>
    </div>
  </div>
</div>
<?php include('../patrial/patrial-bot.php') ?>