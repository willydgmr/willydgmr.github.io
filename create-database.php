<?php 
    include "koneksi.php";
    
    $sql = "CREATE DATABASE pemasukan";

    if($koneksi->query($sql) === TRUE){
        echo "Database Succesfully Created";
    }   else{
        echo "Database Fail To Create";
    }

?>