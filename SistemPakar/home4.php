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

$data1 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g05'");
$data2 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g12'");
$data3 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g15'");
$data4 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g18'");
$data5 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g22'");
$data6 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g26'");
$data7 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g33'");
$data8 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g36'");
$data9 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g39'");


$row1 = mysqli_fetch_assoc($data1);
$row2 = mysqli_fetch_assoc($data2);
$row3 = mysqli_fetch_assoc($data3);
$row4 = mysqli_fetch_assoc($data4);
$row5 = mysqli_fetch_assoc($data5);
$row6 = mysqli_fetch_assoc($data6);
$row7 = mysqli_fetch_assoc($data7);
$row8 = mysqli_fetch_assoc($data8);
$row9 = mysqli_fetch_assoc($data9);

$stack = mysqli_query($con, "SELECT * FROM stack");
$rowstack = mysqli_fetch_assoc($stack);


if(isset($_POST[$row1["kode_gejala"]])){
    $data = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g05'");
    $penyakit = mysqli_query($con, "SELECT nama_penyakit,kode_penyakit FROM penyakit where kode_penyakit = 'p01'");
    $data2 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g04'");

    $rowpenyakit = mysqli_fetch_assoc($penyakit);
    $rowgejala = mysqli_fetch_assoc($data);
    $rowgejala2 = mysqli_fetch_assoc($data2);

    $nama_penyakit = $rowpenyakit['nama_penyakit'];
    $kode_penyakit = $rowpenyakit['kode_penyakit'];
    $kode_gejala = $rowgejala['kode_gejala'];

    $query = "INSERT INTO stack(nama_penyakit, kode_penyakit, kode_gejala) values('$nama_penyakit', '$kode_penyakit', '$kode_gejala')";

    mysqli_query($con, $query);
}

elseif (isset($_POST[$row2["kode_gejala"]])) {
    $data = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g12'");
    $penyakit = mysqli_query($con, "SELECT nama_penyakit,kode_penyakit FROM penyakit where kode_penyakit = 'p02'");
    $data2 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g11'");

    $rowpenyakit = mysqli_fetch_assoc($penyakit);
    $rowgejala = mysqli_fetch_assoc($data);
    $rowgejala2 = mysqli_fetch_assoc($data2);

    $nama_penyakit = $rowpenyakit['nama_penyakit'];
    $kode_penyakit = $rowpenyakit['kode_penyakit'];
    $kode_gejala = $rowgejala['kode_gejala'];

    $query = "INSERT INTO stack(nama_penyakit, kode_penyakit, kode_gejala) values('$nama_penyakit', '$kode_penyakit', '$kode_gejala')";

    mysqli_query($con, $query);
}

elseif (isset($_POST[$row3["kode_gejala"]])) {
    $data = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g15'");
    $penyakit = mysqli_query($con, "SELECT nama_penyakit,kode_penyakit FROM penyakit where kode_penyakit = 'p03'");

    $rowpenyakit = mysqli_fetch_assoc($penyakit);
    $rowgejala = mysqli_fetch_assoc($data);

    $nama_penyakit = $rowpenyakit['nama_penyakit'];
    $kode_penyakit = $rowpenyakit['kode_penyakit'];
    $kode_gejala = $rowgejala['kode_gejala'];

    $query = "INSERT INTO stack(nama_penyakit, kode_penyakit, kode_gejala) values('$nama_penyakit', '$kode_penyakit', '$kode_gejala')";

    mysqli_query($con, $query);
}

elseif (isset($_POST[$row4["kode_gejala"]])) {
    $data = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g18'");
    $penyakit = mysqli_query($con, "SELECT nama_penyakit,kode_penyakit FROM penyakit where kode_penyakit = 'p04'");
    $data2 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g01'");

    $rowpenyakit = mysqli_fetch_assoc($penyakit);
    $rowgejala = mysqli_fetch_assoc($data);
    $rowgejala2 = mysqli_fetch_assoc($data2);

    $nama_penyakit = $rowpenyakit['nama_penyakit'];
    $kode_penyakit = $rowpenyakit['kode_penyakit'];
    $kode_gejala = $rowgejala['kode_gejala'];

    $query = "INSERT INTO stack(nama_penyakit, kode_penyakit, kode_gejala) values('$nama_penyakit', '$kode_penyakit', '$kode_gejala')";

    mysqli_query($con, $query);
}

elseif (isset($_POST[$row5["kode_gejala"]])) {
    $data = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g22'");
    $penyakit = mysqli_query($con, "SELECT nama_penyakit,kode_penyakit FROM penyakit where kode_penyakit = 'p05'");
    $data2 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g21'");

    $rowpenyakit = mysqli_fetch_assoc($penyakit);
    $rowgejala = mysqli_fetch_assoc($data);
    $rowgejala2 = mysqli_fetch_assoc($data2);

    $nama_penyakit = $rowpenyakit['nama_penyakit'];
    $kode_penyakit = $rowpenyakit['kode_penyakit'];
    $kode_gejala = $rowgejala['kode_gejala'];

    $query = "INSERT INTO stack(nama_penyakit, kode_penyakit, kode_gejala) values('$nama_penyakit', '$kode_penyakit', '$kode_gejala')";

    mysqli_query($con, $query);
}

elseif (isset($_POST[$row6["kode_gejala"]])) {
    $data = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g26'");
    $penyakit = mysqli_query($con, "SELECT nama_penyakit,kode_penyakit FROM penyakit where kode_penyakit = 'p06'");
    $data2 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g25'");

    $rowpenyakit = mysqli_fetch_assoc($penyakit);
    $rowgejala = mysqli_fetch_assoc($data);
    $rowgejala2 = mysqli_fetch_assoc($data2);

    $nama_penyakit = $rowpenyakit['nama_penyakit'];
    $kode_penyakit = $rowpenyakit['kode_penyakit'];
    $kode_gejala = $rowgejala['kode_gejala'];

    $query = "INSERT INTO stack(nama_penyakit, kode_penyakit, kode_gejala) values('$nama_penyakit', '$kode_penyakit', '$kode_gejala')";

    mysqli_query($con, $query);
}

elseif (isset($_POST[$row7["kode_gejala"]])) {
    $data = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g33'");
    $penyakit = mysqli_query($con, "SELECT nama_penyakit,kode_penyakit FROM penyakit where kode_penyakit = 'p07'");
    $data2 = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g32'");

    $rowpenyakit = mysqli_fetch_assoc($penyakit);
    $rowgejala = mysqli_fetch_assoc($data);

    $nama_penyakit = $rowpenyakit['nama_penyakit'];
    $kode_penyakit = $rowpenyakit['kode_penyakit'];
    $kode_gejala = $rowgejala['kode_gejala'];
    $rowgejala2 = mysqli_fetch_assoc($data2);

    $query = "INSERT INTO stack(nama_penyakit, kode_penyakit, kode_gejala) values('$nama_penyakit', '$kode_penyakit', '$kode_gejala')";

    mysqli_query($con, $query);
}

elseif (isset($_POST[$row8["kode_gejala"]])) {
    $data = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g36'");
    $penyakit = mysqli_query($con, "SELECT nama_penyakit,kode_penyakit FROM penyakit where kode_penyakit = 'p08'");

    $rowpenyakit = mysqli_fetch_assoc($penyakit);
    $rowgejala = mysqli_fetch_assoc($data);

    $nama_penyakit = $rowpenyakit['nama_penyakit'];
    $kode_penyakit = $rowpenyakit['kode_penyakit'];
    $kode_gejala = $rowgejala['kode_gejala'];

    $query = "INSERT INTO stack(nama_penyakit, kode_penyakit, kode_gejala) values('$nama_penyakit', '$kode_penyakit', '$kode_gejala')";

    mysqli_query($con, $query);
}

elseif (isset($_POST[$row9["kode_gejala"]])) {
    $data = mysqli_query($con, "SELECT nama_gejala,kode_gejala FROM gejalas where kode_gejala = 'g39'");
    $penyakit = mysqli_query($con, "SELECT nama_penyakit,kode_penyakit FROM penyakit where kode_penyakit = 'p09'");

    $rowpenyakit = mysqli_fetch_assoc($penyakit);
    $rowgejala = mysqli_fetch_assoc($data);

    $nama_penyakit = $rowpenyakit['nama_penyakit'];
    $kode_penyakit = $rowpenyakit['kode_penyakit'];
    $kode_gejala = $rowgejala['kode_gejala'];

    $query = "INSERT INTO stack(nama_penyakit, kode_penyakit, kode_gejala) values('$nama_penyakit', '$kode_penyakit', '$kode_gejala')";

    mysqli_query($con, $query);
}

?>
    <section>
        <div class="container pb-16">
            <div class="pt-24 pb-16">
                <h1 class="text-4xl text-center font-bold text-primary mb-5 lg:mb-9">Apakah kamu <?= $rowgejala2["nama_gejala"] ?> </h1>
            </div>
            <?php if($rowgejala2): ?>
            <form method="post" action="home5.php">
                <div class="p-5 mb-9 items-center rounded bg-gray-100 text-dark hover:cursor-pointer">
                    <button type="submit" name=<?= $rowgejala2["kode_gejala"] ?> class="font-bold text-lg lg:text-2xl w-full">Iya</button>
                </div>

                <div class="p-5 mb-9 items-center rounded bg-gray-100 text-dark hover:cursor-pointer">
                    <button type="submit" name=<?= $rowgejala2["kode_gejala"] ?> class="font-bold text-lg lg:text-2xl w-full">Tidak</button>
                </div>
            </form>

            <?php 
            else:
                header("Location: home5.php");
            ?>
                
            <?php endif; ?>
        </div>
    </section>
</body>
</html>