<?php
    //Membuat koneksi PHP dan MYSQL dengan mysqli_connect
    $host_name = "localhost1234";
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
        die("<br>Koneksi PHP dengan MYSQL Gagal");
    }

    echo "<br><br>Selamat website Anda sudah terhubung ke database.";
    echo "<br>Lihat data-data terbaru yang sudah masuk."
?>