<?php 
    $con = mysqli_connect("localhost", "root", "", "crud");
    $id = $_GET["id"];
    mysqli_query($con, "DELETE FROM databuku WHERE id = '$id'");
?>