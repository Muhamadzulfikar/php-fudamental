<?php
include 'koneksi.php';
$id = $_GET['$id'];
mysqli_query("DELETE FROM tbl_user WHERE id='$id'") or die(mysqli_error());

header("location:index.php?pesan=hapus");
?>