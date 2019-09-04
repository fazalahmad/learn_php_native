<!DOCTYPE html>
<html>
    <head>
        <title>FORM PASIEN</title>
    </head>
<body>
    <!--kode php dan SQL -->
    
    <?php
        if (isset($_POST['tambah']))
        {
            
            //membuat koneksi ke database hospital_db
            $host_name = "localhost";
            $username = "root";
            $password = "";
            $nm_database = "hospital_db";

            $koneksi = mysqli_connect($host_name, $username, $password, $nm_database);
        
            //cek koneksi
            if(! $koneksi)
            {
            die("Koneksi dengan MYSQL Gagal");
            }

            //Deklarasi Variabel or menampung nilai form
            $id_pasien = $_POST['id'];
            $nama = $_POST['nama'];
            $jenis_k = $_POST['js'];
            $penyakit = $_POST['sakit'];
            $no_kamar = $_POST['kamar'];
            $alamat = $_POST['alamat'];


            //penyeleksi data jenis kelamin untuk masuk ke database
            if($jenis_k == 'Laki-laki')
			{
                $jenis_kelamin = 'Laki-laki';
            }
		    else if($jenis_k == 'Perempuan')
			{
                $jenis_kelamin = 'Perempuan';
            }

            //query untuk menyimpan ke database
                                        //id_pasien -- alamat : nama variabel database
            $add = "INSERT INTO pasien (id_pasien, nama, jenis_kelamin, penyakit, nomor_kamar, alamat) 
                    VALUES ('$id_pasien', '$nama', '$jenis_kelamin', '$penyakit', '$no_kamar', '$alamat')";
                            //$id_pasien -- $alamat : nama variabel PHP
            $data = mysqli_query($koneksi, $add);
            
            //cek data tersimpan atau tidak
            if(! $data)
            {
                die('Gagal Menambah Data');
            }
            echo "Data Pasien Berhasil Ditambah";
            echo "<hr>";
            mysqli_close($koneksi);
        }
    ?>

    <form method="POST" action="tambah_pasien.php">
        <table border="0">
            <tr>
                <th colspan="2">Form Data Pasien <br><br> </th>
            </tr>
    
            <tr>
                <td>ID Pasien</td>
                <td> <input type="text" name="id"> </td> 
            </tr>

            <tr>
                <td>Nama Pasien</td>
                <td> <input type="text" name="nama"> </td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td> <input type="radio" name="js" value="Laki-laki"> Laki-laki 
                     <input type="radio" name="js" value="Perempuan"> Perempuan
                </td>
            </tr>
            
            <tr>
                <td>Penyakit</td>
                <td> <input type="text" name="sakit"> </td>
            </tr>

            <tr>
                <td>Nomor Kamar</td>
                <td> <input type="text" name="kamar"> </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><textarea rows="7px" cols="30px" name="alamat"></textarea> </td>
            </tr>

            <tr>
                <td colspan="2" align="center"> 
                    <button type="submit" name="tambah"> Tambah Data </button>
                </td>
            </tr>

        </table>
    </form>

</body>
</html>