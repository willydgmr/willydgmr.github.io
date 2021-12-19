<?php 
    include "koneksi.php";

    $sql = "CREATE TABLE user( 
        id int PRIMARY KEY,
        tanggal DATE,
        pemasukan int,
        pengeluaran int,
        total int
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Table Succesfully Created";
    }   else {
        echo "Table Fail to Create";
    }

?>