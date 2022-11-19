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
    <div class="ml-10 mt-5">
        <h1 class='text-3xl font-bold'>Hallo selamat datang <?= $_GET['username']; ?> </h1>
        <p class="text-lg">Selamat datang di menu tambah data</p>
    </div>
    
    <form action="page3.php" method="POST" class="ml-10 mt-5 bg-white inline-block p-10 rounded-2xl shadow-2xl">
        <div class="mb-10">
            <label for="nama" class="text-2xl mr-3">Nama</label>
            <input type="text" name="nama" class="text-2xl ml-36 shadow-lg rounded-xl p-1 outline-none border border-black" />
        </div>
    
        <div class="mb-10">
            <label for="tempatlahir" class="text-2xl">Tempat Lahir</label>
            <input type="text" name="tempatlahir" class="text-2xl ml-20 shadow-lg rounded-xl p-1 outline-none border border-black" />
        </div>
    
        <div class="mb-10">
            <label for="tanggallahir" class="text-2xl">Tanggal Lahir</label>
            <input type="date" name="tanggallahir" class="text-2xl w-72 ml-20 shadow-lg rounded-xl p-1 outline-none border border-black" />
        </div>
    
        <div class="mb-16">
            <label for="alamat" class="text-2xl">Alamat</label>
            <input type="text" name="alamat" class="text-2xl ml-36 shadow-lg rounded-xl p-1 outline-none border border-black" />
        </div>
    
        <input type="submit" name="submit" class="text-2xl ml-96 px-5 py-3 rounded-2xl text-white bg-blue-600 shadow-lg" />
    </form>
</body>
</html>