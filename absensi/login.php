<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "2021018" && $password == "admin"){
            header("location:absensi.php");
        }else{
            echo "gagal login";
        }
    }
?>