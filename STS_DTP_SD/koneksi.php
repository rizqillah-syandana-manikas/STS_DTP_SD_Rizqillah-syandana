<?php
$coon = mysqli_connect("localhost", "root", "", "laporan_fasilitas");

if (!$coon) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>