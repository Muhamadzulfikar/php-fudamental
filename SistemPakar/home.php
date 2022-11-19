<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar dengan Laravel</title>
    <link rel="stylesheet" href="../public/css/tailwind.css">
</head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "", "sistempakar");

$data1 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g07'");
$data2 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g14'");
$data3 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g17'");
$data4 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g20'");
$data5 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g24'");
$data6 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g28'");
$data7 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g35'");
$data8 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g38'");
$data9 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g41'");


$row1 = mysqli_fetch_assoc($data1);
$row2 = mysqli_fetch_assoc($data2);
$row3 = mysqli_fetch_assoc($data3);
$row4 = mysqli_fetch_assoc($data4);
$row5 = mysqli_fetch_assoc($data5);
$row6 = mysqli_fetch_assoc($data6);
$row7 = mysqli_fetch_assoc($data7);
$row8 = mysqli_fetch_assoc($data8);
$row9 = mysqli_fetch_assoc($data9);
?>
    <section>
        <div class="container pb-16">
            <div class="pt-24 pb-16">
                <h1 class="text-4xl text-center font-bold text-primary mb-5 lg:mb-9">Apakah anda merasakan salah satu dibawah ini</h1>
                <p class="text-base text-slate lg:text-lg font-medium text-center max-w-xl mx-auto">silahkan pilih salah satu</p>
            </div>
            <form method="post" action="home2.php">
                <div class="p-5 mb-9 items-center rounded bg-gray-100 text-dark hover:cursor-pointer">
                    <button type="submit" name=<?= $row1["kode_gejala"] ?> class="font-bold text-lg lg:text-2xl w-full"><?= $row1["nama_gejala"] ?></button>
                </div>

                <div class="p-5 mb-9 items-center rounded bg-gray-100 text-dark hover:cursor-pointer">
                    <button type="submit" name=<?= $row2["kode_gejala"] ?> class="font-bold text-lg lg:text-2xl w-full"><?= $row2["nama_gejala"] ?></button>
                </div>
                <div class="p-5 mb-9 items-center rounded bg-gray-100 text-dark hover:cursor-pointer">
                    <button type="submit" name=<?= $row3["kode_gejala"] ?> class="font-bold text-lg lg:text-2xl w-full"><?= $row3["nama_gejala"] ?></button>
                </div>
                <div class="p-5 mb-9 items-center rounded bg-gray-100 text-dark hover:cursor-pointer">
                    <button type="submit" name=<?= $row4["kode_gejala"] ?> class="font-bold text-lg lg:text-2xl w-full"><?= $row4["nama_gejala"] ?></button>
                </div>
                <div class="p-5 mb-9 items-center rounded bg-gray-100 text-dark hover:cursor-pointer">
                    <button type="submit" name=<?= $row5["kode_gejala"] ?> class="font-bold text-lg lg:text-2xl w-full"><?= $row5["nama_gejala"] ?></button>
                </div>
                <div class="p-5 mb-9 items-center rounded bg-gray-100 text-dark hover:cursor-pointer">
                    <button type="submit" name=<?= $row6["kode_gejala"] ?> class="font-bold text-lg lg:text-2xl w-full"><?= $row6["nama_gejala"] ?></button>
                </div>
                <div class="p-5 mb-9 items-center rounded bg-gray-100 text-dark hover:cursor-pointer">
                    <button type="submit" name=<?= $row7["kode_gejala"] ?> class="font-bold text-lg lg:text-2xl w-full"><?= $row7["nama_gejala"] ?></button>
                </div>
                <div class="p-5 mb-9 items-center rounded bg-gray-100 text-dark hover:cursor-pointer">
                    <button type="submit" name=<?= $row8["kode_gejala"] ?> class="font-bold text-lg lg:text-2xl w-full"><?= $row8["nama_gejala"] ?></button>
                </div>
                <div class="p-5 mb-9 items-center rounded bg-gray-100 text-dark hover:cursor-pointer">
                    <button type="submit" name=<?= $row9["kode_gejala"] ?> class="font-bold text-lg lg:text-2xl w-full"><?= $row9["nama_gejala"] ?></button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>