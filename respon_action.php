<?php 
include 'koneksi.php';

$komentar = $_POST['komentar'];

mysqli_query($koneksi, "INSERT INTO tb_respon('respon') VALUES ('$komentar')");

header("location:display.php");

?>