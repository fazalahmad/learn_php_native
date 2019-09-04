<DOCTYPE html>
<html>
    <head>
        <title>Aplikasi Pemesanan Kamar</title>
    </head>
<body>

    <form method="POST" action="add_pemesanan.php">
        <table border="1" width="400px">
            <tr>
                <th colspan="2">Tambah Data Pemesan</th>
            </tr>

            <tr>
                <td>ID Pemesan : </td>
                <td> <input type="text" name="id_pemesan"> </td>
            </tr>

            <tr>
                <td>Nama Pemesan : </td>
                <td> <input type="text" name="nama"> </td>
            </tr>

            <tr>
                <td>jenis kamar : </td>
                <td> <input type="text" name="jenis_kamar"> </td>
            </tr>

            <tr>
                <td>Lama Menginap : </td>
                <td> <input type="text" name="waktu"> </td>
            </tr>

            <tr>
                <td>Nomor Kamar : </td>
                <td> <input type="text" name="no_kamar"> </td>
            </tr>

            <tr>
                <td>Harga : </td>
                <td> <input type="text" name="no_kamar"> </td>
            </tr>

            <tr>
                <td>Total Harga : </td>
                <td> <input type="text" value=""> </td>
            </tr>
        </table>
    </form>
</body>
</html>