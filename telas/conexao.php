<?php 
    $servername = "localhost";
    $usarname = "root";
    $password = "";
    $database = "bdpetshopweb";

    $conn = mysqli_connect($servername, $usarname, $password, $database);

    mysqli_set_charset($conn, "utf8");
?>