<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM siswa");
$i = 1;
if(isset($_POST["submit"])){
    $namaSiswa = $_POST["cari"];
    $data = mysqli_query($koneksi, "SELECT * FROM siswa where namaSiswa = '$namaSiswa' or NIM = '$namaSiswa'");
    
    if($namaSiswa == null){
        $data = mysqli_query($koneksi, "SELECT * FROM siswa");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Absensi Site</title>
    <link rel="stylesheet" href="absensi.css">
</head>
<body>
    <nav class="nav">
        <h1 class="header">Sistem Informasi Siswa</h1>
    </nav>
    <div class="navigasi">
        <form action="" method="post">
            <input type="text" name="cari" id="" class="pencarian" placeholder="masukan data yang ingin dicari">
            <button type="submit" name="submit" class="button blue">Cari Data</button>
        </form>
        <div>
            <button class="button green"><a href="update.php">Update Data</a></button>
        </div>
    </div>

    <table>
        <tr>
            <td><b>No</b></td>
            <td><b>Nama Siswa</b></td>
            <td><b>NIM</b></td>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($data)) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $row["namaSiswa"]; ?></td>
                <td><?= $row["NIM"]; ?></td>
                <td>
                    <button class="button green">Lihat Profile</button>
                    <button class="button red"><a href="delete.php?id=<?= $row["idSiswa"]; ?>">Delete Data</a></button>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>