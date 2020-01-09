


<h1>Tambah Data Perpustakaan</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <p>Nama Anggota 
    <label for="anggota"></label>
  <input type="text" name="anggota" id="anggota">
  </p>
  <p>Alamat 
    <label for="alamat"></label>
    <input type="text" name="alamat" id="alamat">
  </p>
  <p>Tempat, Tanggal Lahir 
    <label for="ttl"></label>
    <input type="text" name="ttl" id="ttl">
  </p>
  <p>Status 
    <label for="status"></label>
    <select name="status" id="status">
      <option value="1">aktif</option>
      <option value="0">tidak aktif </option>
    </select>
  </p>
  <p>
    <input type="submit" name="simpan" id="simpan" value="Simpan">
  </p>
</form>

<p>
  <?php  
include "koneksi.php";

if(isset($_POST["simpan"])) {	
	$nama=$_POST["anggota"];
	$alamat=$_POST["alamat"];
	$ttl=$_POST["ttl"];
	$status=$_POST["status"];


$query=mysql_query("INSERT INTO `perpustakaan`.`anggota` (`id_anggota`, `nama_anggota`, `alamat`, `ttl_anggota`, `status_anggota`) VALUES (NULL, '$nama', '$alamat', '$ttl', '$status');");
  

if($query)
{
	echo "Data Berhasil Di Simpan";
}
else
{
	echo "Database Gagal Di Simpan";
}
}
?>
</p>
<table width="800" border="1">
	<tr>
    	<td>Nama Anggota</td>
        <td>Alamat</td>
        <td>Tempat, Tanggal Lahir</td>
        <td>Status</td>
        <td>Aksi	</td> 	
    </tr>
<?php
$query_tampil = mysql_query("SELECT * FROM `anggota` ORDER BY `anggota`.`id_anggota` DESC");

while ($tampil = mysql_fetch_array ($query_tampil)) {
?>
    
    <tr>
    	<td><?php echo $tampil["nama_anggota"] ?></td>
        <td><?php echo $tampil["alamat"] ?></td>
        <td><?php echo $tampil["ttl_anggota"] ?></td>
        <td><?php echo $tampil["status_anggota"] ?></td>
        <td>
        Ubah / 
        <a href="hapusanggota.php?id=<?php echo $tampil["id_anggota"] ?>">Hapus </a></td>
    </tr>
<?php
}
?>
    </table>