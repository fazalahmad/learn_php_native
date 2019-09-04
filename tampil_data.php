<?php
     $host_name = "localhost";
        $username = "root";
        $password = "";
        $nm_database = "db_hotel";
    
        $link = mysqli_connect($host_name, $username, $password, $nm_database);
        if(!$link){
        die("Koneksi dengan MYSQL Gagal");
        }

        $tampil = "SELECT * FROM tambah";
        $hasil = mysqli_query($link, $tampil);

        $no = 1;
        while($row = mysqli_fetch_array($hasil))
        {
             $no++;
            echo "| $row[id_mhs] |";
            echo " $row[nama] |";
            echo "<br>";

        }
?>