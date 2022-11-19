<?php
//connect to database
$conection = mysqli_connect("localhost","root", "", "crudphp");

    //check if user clicked submit
    if(isset($_POST["submit"])){
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $prodi = $_POST["prodi"];

        //upload data to database
        $store = "INSERT INTO mahasiswa (nim,name,prodi) VALUES ('$nim', '$nama', '$prodi')";

        //execute the query
        mysqli_query($conection, $store);

        //back to home page
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar Membuat crud PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="text-bg-primary">
    <div class="container mt-2">
        <h1 class="text-center">Simple Crud PHP</h1>
        <form class="shadow-lg p-5 w-50 mx-auto my-5" action="" method="POST">
            <div class="row mb-4">
                <label class="col-md-3" for="nim">Nim</label>
                <input class="col" type="text" name="nim" id="">
            </div>

            <div class="row mb-4">
                <label class="col-md-3" for="nama">Nama</label>
                <input class="col" type="text" name="nama" id="">
            </div>

            <div class="row mb-4">
                <label class="col-md-3" for="prodi">Prodi</label>
                <input class="col" type="text" name="prodi" id="">
            </div>

            <div class="row mt-5 gap-3 justify-content-end">
                <button class="col-md-4 btn btn-success" type="submit" name="submit">Submit</button>
                <button class="col-md-4 btn btn-danger" type="reset">Cancel</button>
            </div>
        </form>
    </div>
</body>

</html>