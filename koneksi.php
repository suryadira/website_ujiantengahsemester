<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_hotel";

// Buat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);

// Cek koneksi, tampilkan pesan error jika gagal terhubung
if (!$conn) {
  die("Gagal terhubung dengan MySQL: " . mysqli_connect_error());
}