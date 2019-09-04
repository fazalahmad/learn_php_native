<?php
    //Membuat koneksi PHP dan MYSQL dengan mysqli_connect
    $host_name = "localhost";
    $username = "root";
    $password = "";

    $koneksi = mysqli_connect( $host_name, $username, $password );

    //cara mengecek koneksi MYSQL berhasil dihubungkan
    if($koneksi)
    {
        echo "Koneksi PHP dengan MYSQL berhasil dihubungkan";
    }
    else
    {
        die ("Koneksi PHP dengan MYSQL Gagal");
    }
    
?>