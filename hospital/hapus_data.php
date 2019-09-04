<?php 
 //membuat koneksi ke database hospital_db
    $host_name = "localhost";
    $username = "root";
    $password = "";
    $nm_database = "hospital_db";

    $koneksi = mysqli_connect($host_name, $username, $password, $nm_database);
 
    //Ambil id melalui POST
    $id_pasien = $_POST['id'];

	//query hapus data di tabel pembelian
    $hapus = "DELETE FROM pasien WHERE id_pasien = '$id_pasien' ";
    $var = mysqli_query($koneksi, $hapus);
    if(! $var)
    {
        die("Data gagal Dihapus");
    }
    echo "Data berhasil dihapus";
?>