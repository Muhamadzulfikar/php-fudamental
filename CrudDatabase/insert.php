<?php
    $con = mysqli_connect("localhost", "root", "", "crud");

    if(isset($_POST["submit"])){
        $namaBarang = $_POST["namabarang"];
        $harga = $_POST["harga"];
        $stok = $_POST["stok"];
        $gambar = $_POST["gambar"];

        $query = "INSERT INTO databuku(id, namabarang, harga, stok, gambar) values('', '$namaBarang', '$harga', '$stok', '$gambar')";

        mysqli_query($con, $query);

        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Buku</title>
</head>
<body>
    <form action="" method="post" style="margin: auto; width:80%">
        <input style="display:block; width:100%; height:40px; margin-bottom:20px" type="text" placeholder="Nama Buku" name="namabarang">
        <input style="display:block; width:100%; height:40px; margin-bottom:20px" type="text" placeholder="Harga" name="harga">
        <input style="display:block; width:100%; height:40px; margin-bottom:20px" type="number" placeholder="Stok Buku" name="stok">
        <input style="display:block; width:100%; height:40px; margin-bottom:20px" type="text" placeholder="Gambar" name="gambar">
        <button style="display:block; width:100%; height:40px; margin-bottom:20px" type="submt" name="submit">Insert</button>
    </form>
</body>
</html>