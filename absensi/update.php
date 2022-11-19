<?php
    include "koneksi.php";
    if(isset($_POST["submit"])){
        $namaSiswa = $_POST["namasiswa"];
        $NIM = $_POST["NIM"];
        $query = "INSERT INTO siswa(idSiswa, namaSiswa, NIM) values('', '$namaSiswa', '$NIM')";
        mysqli_query($koneksi, $query);
        header("location:absensi.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistem informasi sederhana</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
    <form class="login" action="" method="post">
        <h1 class="header">Masukan data baru</h1>
        <input type="text" name="namasiswa" id="" placeholder="Nama Siswa">
        <input type="text" name="NIM" id="" placeholder="NIM Siswa">
        <button type="submit" name="submit">Masukan</button>
    </form>    
</body>
</html>