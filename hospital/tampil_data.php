<!DOCTYPE html>
<html>
    <head>
        <title>Menampilkan Data Pasien</title>
    </head>
<body>
    <table border="1" align="center">
        <tr>
            <th colspan="8" Align="center">DATA PASIEN</th>
        </tr>
        <tr>
            <td>ID PASIEN</td>
            <td>Nama Pasien</td>
            <td>Jenis Kelamin</td>
            <td>Sakit</td>
            <td>Nomor Kamar</td>
            <td>Alamat</td>
            <td colspan="2" align="center">Action</td>
        </tr>

<?php
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

    //mengambil data dari database pasien
    $ambil_data = "SELECT * FROM pasien ORDER BY id_pasien";
    $data = mysqli_query($koneksi, $ambil_data);

    //menampilkan data pasien ke html
    $no = 1;
    while ($tampil = mysqli_fetch_array($data))
    {
        $id = $tampil['id_pasien'];
        $nama = $tampil['nama'];
        $js = $tampil['jenis_kelamin'];
        $sakit = $tampil['penyakit'];
        $no_kamar = $tampil['nomor_kamar'];
        $alamat = $tampil['alamat'];
       
        $no++;

       ?> <!-- ini digunkan untuk membuat tag html aktif -->

       <!-- table html -->
       <tr>
            <td> <?php echo $id ?> </td>
            <td> <?php echo $nama ?> </td>
            <td> <?php echo $js ?> </td>
            <td> <?php echo $sakit ?> </td>
            <td> <?php echo $no_kamar ?> </td>
            <td> <?php echo $alamat ?> </td>
            <td>
                <form method="post" action="hapus_data.php">
                    <input type="hidden" name="id" value="<?php echo $id ?>" >
                    <button type="submit">Hapus</button>
                </form>
            </td>
            <td>
                <form method="post" action="edit_data.php">
                    <input type="hidden" name="id" value="<?php echo $id ?>" >
                    <button type="submit">Edit</button>
                </form>
            </td>
        </tr>
        
        <?php //ini digunkan untuk mengakhiri kode php  }
    }
?>
    </table>
</body>
</html>