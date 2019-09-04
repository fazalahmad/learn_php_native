<?php
    if( isset($_POST['edit']) )
    {
        //membuat koneksi ke database hospital_db
        $host_name = "localhost";
        $username = "root";
        $password = "";
        $nm_database = "hospital_db";

        $koneksi = mysqli_connect($host_name, $username, $password, $nm_database);
    
        $id = $_POST['id'];
        //cek pengmabilan id
        if(!$id)
        {
            die('Halaman ini tidak bisa langsung diakses, karena id tidak terambil');
        }

        //Deklarasi Variabel or menampung nilai form
        $id_pasien = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis_k = $_POST['js'];
        $penyakit = $_POST['sakit'];
        $no_kamar = $_POST['kamar'];
        $alamat = $_POST['alamat'];

        //query update data
        $edit = "UPDATE pasien SET 
        nama='$nama', jenis_kelamin='$jenis_k', penyakit='$penyakit', nomor_kamar='$no_kamar', alamat='$alamat'
        WHERE id_pasien='$id_pasien' ";
        $terupdate = mysqli_query($koneksi, $edit);
        
        
        //cek data
        if(! $terupdate)
        {
            die('Data Gagal di Update');
        }
        echo "Data Berhasil di update";

        //link untuk menujuh ke Tampil Data Pasien
        header('location:tampil_data.php');
    }
    
   ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Edit Data</title>
    </head>
<body>
     
    <form method="POST" action="edit_data.php">
    
    <?php 
        //membuat koneksi ke database hospital_db
        $host_name = "localhost";
        $username = "root";
        $password = "";
        $nm_database = "hospital_db";

        $koneksi = mysqli_connect($host_name, $username, $password, $nm_database);
    
        $id = $_POST['id'];
        //cek pengmabilan id
        if(!$id)
        {
            die('Halaman ini tidak bisa langsung diakses, karena id tidak terambil');
        
        }

        $ambil_data = "SELECT * FROM pasien WHERE id_pasien='$id' ";
        $data = mysqli_query($koneksi, $ambil_data);

        //menampilkan data pasien ke html
        $tampil = mysqli_fetch_array($data)
    ?>

        <table border="0">
            <tr>
                <th colspan="2">Form Edit Data Pasien <br><br> </th>
            </tr>
    
            <tr>
                <td>ID Pasien</td>
                <td> <input type="text" name="id" value="<?php echo $tampil['id_pasien']; ?>"> </td> 
            </tr>

            <tr>
                <td>Nama Pasien</td>
                <td> <input type="text" name="nama" value="<?php echo $tampil['nama']; ?>"> </td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td> <input type="radio" name="js" value="Laki-laki" <?php if($tampil['jenis_kelamin']=="Laki-laki"){echo "checked";} ?> > Laki-laki 
                     <input type="radio" name="js" value="Perempuan" <?php if($tampil['jenis_kelamin']=="Perempuan"){echo "checked";} ?>> Perempuan
                </td>
            </tr>
            
            <tr>
                <td>Penyakit</td>
                <td> <input type="text" name="sakit" value="<?php echo $tampil['penyakit']; ?>"> </td>
            </tr>

            <tr>
                <td>Nomor Kamar</td>
                <td> <input type="text" name="kamar" value="<?php echo $tampil['nomor_kamar']; ?>"> </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><textarea rows="7px" cols="30px" name="alamat" ><?php echo $tampil['alamat']; ?> </textarea> </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <button type="submit" name="edit"> Update Data </button>
                </td>
            </tr>

        </table>
       
    </form>

</body>
</html>
