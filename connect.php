<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbName = "ajax";
    $db1 = mysqli_connect($host, $user, $password, $dbName);
    if(!$db1){
    die("Koneksi gagal : ".mysqli_connect_error());
    }
?>