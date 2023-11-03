<?php
// Informasi koneksi ke database
$server = "localhost";  // Ganti dengan nama server database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda
$database = "pkm"; // Ganti dengan nama database yang ingin Anda hubungkan

// Membuat koneksi ke database
$koneksi = new mysqli($server, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
