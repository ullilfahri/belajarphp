<?php
include "index.php" ;

?>


<h1>Tambah Data Buku</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <p>Judul Buku 
    <label for="judul"></label>
  <input type="text" name="judul" id="judul">
  </p>
  <p>Pengarang 
    <label for="pengarang"></label>
    <input type="text" name="pengarang" id="pengarang">
  </p>
  <p>Jenis Buku 
    <label for="jenis_buku"></label>
    <select name="jenis_buku" id="jenis_buku">
      <option value="Fiksi">Fiksi</option>
      <option value="Non-Fiksi">Non-Fiksi</option>
    </select>
  </p>
  <p>Penerbit 
    <label for="penerbit"></label>
    <input type="text" name="penerbit" id="penerbit">
  </p>
  <p>
    <input type="submit" name="simpan" id="simpan" value="Simpan">
  </p>
</form>
<p>&nbsp;</p>

<?php  
include "koneksi.php";

if(isset($_POST["simpan"])) {	
	$buku=$_POST["judul"];
	$pengarang=$_POST["pengarang"];
	$jenis=$_POST["jenis_buku"];
	$penerbit=$_POST["penerbit"];


$query=mysql_query("INSERT INTO `perpustakaan`.`buku` (`kode_buku`, `judul_buku`, `pengarang`, `jenis_buku`, `penerbit`) VALUES (NULL, '$buku', '$pengarang', '$jenis', '$penerbit');");


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

<table width="800" border="1">
	<tr>
    	<td>Judul Buku</td>
        <td>Pengarang</td>
        <td>Jenis Buku</td>
        <td>Penerbit</td>
        <td>Aksi</td> 	
    </tr>
<?php
$query_tampil = mysql_query("SELECT * FROM `buku` ORDER BY `buku`.`kode_buku` DESC");

while ($tampil = mysql_fetch_array ($query_tampil)) {
?>
    
    <tr>
    	<td><?php echo $tampil["judul_buku"] ?></td>
        <td><?php echo $tampil["pengarang"] ?></td>
        <td><?php echo $tampil["jenis_buku"] ?></td>
        <td><?php echo $tampil["penerbit"] ?></td>
        <td>Edit / Hapus</td>
    </tr>
<?php
}
?>
    </table>