<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // isi jika ada password MySQL
$db   = 'kuliah_hitung';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Koneksi database gagal: " . mysqli_connect_error());
}

session_start(); // aktifkan session di semua halaman
?>
