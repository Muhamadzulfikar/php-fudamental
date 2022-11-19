<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>
</head>
<body>
    <?php 
        $nameStudentsIteba = array("Zulfikar", "Herdo", "Tapha", "Arif");
        $nameFruits = array("manggo", "apple", "grape", "banana"); 
    ?>
    <main class="container">
        <h1>Menampilkan data array di dalam website</h1>
        <br>

        <?php
            echo "<p>Menampilkan data nama mahasiswa iteba </p>";
            foreach ($nameStudentsIteba as $value) {
                echo "<p>$value</p>";
            }

            
            echo "<p>Menampilkan data nama buah-buahan</p>";
            foreach($nameFruits as $value){
                echo "<p>$value</p>";
            }

            echo "<br />";
        ?>

        <p>Menampilkan nama Tapha pada variable nameStudentsIteba</p>
        <p><?= $nameStudentsIteba[2]; ?></p>
        <br>

        <p>Menampilkan Apple pada variable nameFruits</p>
        <p><?= $nameFruits[1]; ?></p>
        <br>

        <p>Mengurutkan data array sesuai alpabet</p>
        <?php
            function sortData($name)
            {
                $a = array(null);
                array_shift($a);
                $i = 0;
                foreach ($name as $value) {
                    array_push($a, $name[$i++]);
                }
                sort($a);
                return $a;
            }

            print_r(sortData($nameStudentsIteba));
        ?>
    </main>
</body>
</html>