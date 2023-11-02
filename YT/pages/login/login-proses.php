<?php
require '../../config/conection.php';

$id_user = $_POST['id'];
$password_user = $_POST['password'];

$query = "SELECT * FROM akses WHERE id_user = '$id_user' AND password = '$password_user'";
$hasil = mysqli_query($koneksi, $query);
$data_user = mysqli_fetch_assoc($hasil); 

if ($data_user != null) {
    $_SESSION['user'] = $data_user;
    header('Location: ../dashboard');    
}else{
    echo "<script>window.alert('Username atau password salah'); window.location.href='../login'</script>";
}
