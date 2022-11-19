<?php 

    include "koneksi.php";

    $a = isset($_POST['submit']);
   
    if($a){
        $name = $_POST['username'];
        $pass = $_POST['password'];
        $sql = "INSERT INTO user set username = '$name', password = '$pass'";
        mysqli_query($koneksi, $sql);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="username" placeholder="username" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit" value="submit" name="submit">
    </form>


<?php 

include 'koneksi.php';

$cari = "SELECT * FROM user";

$koneksi1 = mysqli_query($koneksi, $cari);

while($user = mysqli_fetch_array($koneksi1)){
    $namauser = $user['username'];
    $passworduser = $user['password'];
?>

    <div class="container">
        <table>
            <tr>
                    <td>username : <?= $namauser; ?></td><br>
            </tr>

            <tr>
            <td>password : <?= $passworduser; ?></td>
            </tr>
        </table>

    </div>

<?php
}

?>



</body>
</html>