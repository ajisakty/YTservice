<?php
  session_start()

  if (isset($_SESSION['user'])) {
    header('Location: ../../index.php');
    exit();
  }

?>
  
  
  <?php include('../patrial/patrial-top.php')?>
  <div class="global-container">
    <div class="card login-form">
      <div class="card-body">
        <h1 class="card-title text-center">LOGIN</h1>
      </div>
      <div class="card-text">
        <form action="login-proses.php" method="post">
          <div class="mb-3">
            <label for="id" class="form-label" name="id">ID</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" name="Password">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <input type="submit" class="btn btn-primary" value="Login">
        </form>
      </div>
    </div>
  </div>
  <?php include('../patrial/patrial-bot.php')?>
