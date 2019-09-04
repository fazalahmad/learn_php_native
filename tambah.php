<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<body>

<?php
    
    if (isset($_POST['tambah'])){
        include "koneksi.php";

        //Deklarasi Variabel
        $id_mahasiswa = $_POST['id_mhs'];
        $nama = $_POST['nama'];

        //tambah data
        $add = "INSERT INTO tambah (id_mhs, nama) VALUES ('$id_mahasiswa', '$nama')";
        
        $data = mysqli_query($link, $add);
        
        if(! $data){
            die('Gagal Menambah Data');
        }
        //echo "Berhasil Menambah Data";
        //mysqli_close($link);
    }
?>
  
    <form method="POST" action="tambah.php">
        <table border="0" height="200px">
            <tr>
                <th colspan="2">Tambah Data Mahasiswa </th>
            </tr>

            <tr>
                <td>ID Mahasiswa</td>
                <td> <input type="text" name="id_mhs"> </td> 
            </tr>

            <tr>
                <td>Nama Mahasiswa</td>
                <td> <input type="text" name="nama"> </td>
            </tr>

            <tr>
                <td colspan="2" align="center"> 
                    <button type="submit" name="tambah"> Tambah Data </button>
                </td>
            </tr>
        </table>
    </form>
    <hr>

    <?php
        $host_name = "localhost";
        $username = "root";
        $password = "";
        $nm_database = "db_hotel";
    
        $link = mysqli_connect($host_name, $username, $password, $nm_database);
        if(!$link){
        die("Koneksi dengan MYSQL Gagal");
        }

        //query menampilkan database
        $tampil = "SELECT * FROM tambah ORDER BY id_mhs";
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
</body>
</html>