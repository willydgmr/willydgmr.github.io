<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "pemasukan";
    $koneksi = mysqli_connect($host, $username, $password, $db);

    if  ($koneksi->connect_error){
        die("Koneksi ke Database Gagal");
    }  
?>