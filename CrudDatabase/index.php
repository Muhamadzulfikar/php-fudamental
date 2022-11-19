<?php
$con = mysqli_connect("localhost", "root", "", "crud");

$data = mysqli_query($con, "SELECT * FROM databuku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Crud Database</title>
</head>

<body>
    <a href="insert.php">Tambah Data Buku</a>
    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; text-align: center;">
        <tr>
            <th>ID</th>
            <th>Nama Buku</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th>Update/ Delete</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($data)) : ?>
            <tr>
                <td><?= $row["id"]; ?></td>
                <td><?= $row["namabarang"]; ?></td>
                <td><?= $row["harga"]; ?></td>
                <td><?= $row["stok"]; ?></td>
                <td><img src="<?= $row["gambar"] ?>" alt="" width="50%"></td>
                <td>
                   <a href="delete.php?id=<?= $row["id"]; ?>">delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>