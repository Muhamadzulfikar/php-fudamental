<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum Pemrograman Web</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="judul">
            <h1>Praktikum Pemrograman Web</h1>
            <h2>Politeknik Negeri Batam</h2>
        </div>

        <br/>
        <h3>Edit Data</h3>

        <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $query_mysql = mysqli_query("SELECT * FROM tbl_user WHERE id = '$id' ") or die(mysqli_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
        ?>
        <form action="update.php" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php $data['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="pekerjaan" value="<?php $data['pekerjaan'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
        <?php } ?>
    </body>
</html>