<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$komentar = $_POST['komentar'];
$tanggal = date("y-m-d");

mysqli_query($koneksi, "INSERT INTO peserta VALUES('','$nama','$komentar','$tanggal')");

header("location:display.php");
?>