<?php 
    // Menampilkan variable GET
    print_r($_GET);
    echo"<br><br>";

    // Mengisi variable GET melalui code PHP
    $_GET['username'] = "Muhamad Zulfikar";
    $_GET['password'] = "Admin";

    // Menampilkan variable GET yang sudah di isi
    print_r($_GET);
    echo"<br><br>";

    // Menampilakn isi variable GET satu persatu
    echo($_GET['username']);
    echo"<br><br>";
    echo($_GET['password']);
?>