<!DOCTYPE html>  
 <html>  
 <head> <title>Form Input Siswa</title></head>  
 <body>  
  <form method="post"  name="formSiswa" >  
    <table>
        <tr>  
            <td>NIS</td>  
            <td><input  name="nis" /></td> 
        </tr>

        <tr>
            <td>Nama</td>  
            <td><input type="text" name="nama" /></td>  
        </tr>

        <tr>
            <td>Jenis Kelamin</td>  
            <td><input type="radio" name="jenis_kelamin" id="laki" value="L"/> Laki Laki   
                <input type="radio" name="jenis_kelamin" id="prm" value="P"/> Perempuan
            </td>  
        </tr>
        
        <tr>
            <td>Tanggal Lahir</td>  
            <td><input type="text" name="tanggal" id="tanggal" size="5"/>  
                <input type="text" name="bulan" id="bulan" size="5"/>  
                <input type="text" name="tahun" id="tahun" size="5"/>
            </td>  
        </tr>
        
        <tr> 
            <td><input type="submit" name="save" value="save" /></td>  
        </tr>
    </table>
  </form>  
 </body>  
 </html>