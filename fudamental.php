<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 15;
    $y = 20;

    //cara 1
    echo "penjumlahan = ", $x + $y;
    
    //cara 2
    $result = $x + $y;
    echo "<br>";
    echo "Penjumlahan = $result";
    echo "<br>";
    if ($result < 50) {
        $x = 25;
    }

    echo $x;

    for ($i=0; $i <$result; $i++) { 
        echo "<br>";
        echo $i;
        echo "<br>";
    }
    ?>
</body>
</html>
