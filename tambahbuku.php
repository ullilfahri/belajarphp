<p>Tambah Buku Perpustakaan</p>
<form name="form1" method="post" action="">
  <p>Judul Buku 
    <label for="judul_buku"></label>
  <input type="text" name="judul_buku" id="judul_buku">
  </p>
  <p>Pengarang 
    <label for="pengarang"></label>
    <input type="text" name="pengarang" id="pengarang">
  </p>
  <p>
    <label for="jenis_buku"></label>
    Jenis Buku 
    <input type="text" name="jenis_buku" id="jenis_buku">
  </p>
  <p>Penerbit 
    <label for="Penerbit"></label>
    <input type="text" name="penerbit" id="penerbit">
  </p>
  <p>
    <input type="submit" name="simpan" id="simpan" value="Simpan Buku">
  </p>
</form>
<p>&nbsp;</p>
<p>
  <?php
if(isset($_POST["simpan"])) {
	include "koneksi.php" ;
	$judul = $_POST["judul_buku"] ;
	$pengarang = $_POST["pengarang"] ;
	$jenis_buku = $_POST["jenis_buku"] ;
	$penerbit = $_POST["penerbit"] ;
	
$query = mysql_query("INSERT INTO `buku` (`kode_buku`, `judul_buku`, `pengarang`, `jenis_buku`, `penerbit`) VALUES (NULL, '$judul', '$pengarang', '$jenis_buku', '$penerbit');") ;

if($query) {
echo "Buku Berhasil Di Simpan" ;	
}
else
{
echo "Buku Gagal Di Simpan" ;	
}
	
	
}

?>
</p>
<table width="800" border="1">
  <tr>
    <td>Kode Buku</td>
    <td>Judul Buku</td>
    <td>Pengarang</td>
    <td>Jenis Buku</td>
    <td>Penerbit</td>
    <td>Action</td>
  </tr>

<?php
include "koneksi.php" ;
$querytampil = mysql_query("SELECT * FROM `buku` ORDER BY `buku`.`kode_buku` DESC ") ;

while ( $tampilbuku = mysql_fetch_array($querytampil)) {

?>
  <tr>
    <td><?php echo $tampilbuku["kode_buku"] ?></td>
    <td><?php echo $tampilbuku["judul_buku"] ?></td>
    <td><?php echo $tampilbuku["pengarang"] ?></td>
    <td><?php echo $tampilbuku["jenis_buku"] ?></td>
    <td><?php echo $tampilbuku["penerbit"] ?></td>
    <td>Edit /  Hapus</td>
  </tr>

<?php
}
?>


</table>
<p>&nbsp; </p>
