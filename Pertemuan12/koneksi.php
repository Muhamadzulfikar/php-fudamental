<?php
$local = "localhost";
$user = "root";
$pass = "";
$dbnm = "db_Pertemuan12";

$host = mysqli_connect($local, $user, $pass);

if($host){
 $db = mysqli_select_db($dbnm);
    if(!$db){
        die("Database Tidak Dapat Dibuka");
    }
    } else {
        die("Server MySQL Tidak Terhubung");
    }
?>