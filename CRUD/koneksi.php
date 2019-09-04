<?php
        $host_name = "localhost";
        $username = "root";
        $password = "";
        $nm_database = "db_hotel";
    
        $link = mysqli_connect($host_name, $username, $password, $nm_database);
        if(!$link){
        die("Koneksi dengan MYSQL Gagal");
        }

?>