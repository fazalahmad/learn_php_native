<?php  
 
 //koneksi database  
 $koneksi = mysqli_connect("localhost","root","","absensi_siswa"); 

 $nis = $_POST['nis'];  
 $nama = $_POST['nama'];  
 $jenis_kelamin = $_POST['jenis_kelamin'];  
 $tglLahir = $_POST['tahun'].'-'. $_POST['bulan'].'-'. $_POST['tanggal'];  

 $query = "INSERT INTO siswa (nis,nama, jenis_kelamin, tahun, bulan, tanggal) VALUES ('$nis', '$nama', '$jenis_kelamin', '$tgl_lahir') ";  
 $hasil = mysqli_query($koneksi, $query); 
 if($hasil){  
  echo "Data siswa telah disimpan"
 }else{  
  echo "Error! gagal menyimpan data siswa:".mysql_error();  
 }  
 ?>