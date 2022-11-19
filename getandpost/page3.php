<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="build/tailwind.css">
</head>
<body>
    <h1 class="mt-5 ml-7 text-3xl font-bold">Biodata</h1>
    <div class="w-96 ml-7 mt-5 border-t-2 border-blue-600 p-5 pt-20 rounded-b-2xl shadow-2xl">
        <h1 class="text-center text-2xl mb-3"><?= $_POST['nama']; ?></h1>
        <p class="text-center mb-16 text-gray-400">Sistem Informasi</p>
        <div class="flex mb-5">
            <p class="mr-10">Tempat Lahir</p>
            <p><?= $_POST['tempatlahir']; ?></p>
        </div>
        <div class="flex mb-5">
            <p class="mr-10">Tanggal Lahir</p>
            <p><?= $_POST['tanggallahir']; ?></p>
        </div>
        <div class="flex mb-3">
            <p class="mr-20">Alamat</p>
            <p><?= $_POST['alamat']; ?></p>
        </div>
    </div>
</body>
</html>