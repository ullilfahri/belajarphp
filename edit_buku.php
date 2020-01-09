<?php
include "koneksi.php";

$id = $_GET["id"] ;

$query_tampil = mysql_query("SELECT * FROM `buku` WHERE `kode_buku` = $id ") ;

$tampil_data = mysql_fetch_array($query_tampil) ;

?>



<h1>Edit Data Buku</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <p>Judul Buku 
    <label for="judul"></label>
  <input type="text" name="judul" id="judul" value="<?php echo $tampil_data["judul_buku"] ?>">
  </p>
  <p>Pengarang 
    <label for="pengarang"></label>
    <input type="text" name="pengarang" id="pengarang" value="<?php echo $tampil_data["pengarang"] ?>" >
  </p>
  <p>Jenis Buku 
    <label for="jenis_buku"></label>
    <select name="jenis_buku" id="jenis_buku">
     <option value="<?php echo $tampil_data["jenis_buku"] ?>"><?php echo $tampil_data["jenis_buku"] ?></option>
      <option value="Fiksi">Fiksi</option>
      <option value="Non-Fiksi">Non-Fiksi</option>
    </select>
  </p>
  <p>Penerbit 
    <label for="penerbit"></label>
    <input type="text" name="penerbit" id="penerbit" value="<?php echo $tampil_data["penerbit"] ?>">
  </p>
  <p>
    <input type="submit" name="simpan" id="simpan" value="Simpan">
  </p>
</form>
<p>&nbsp;</p>

<?php  

if(isset($_POST["simpan"])) {	
		$id = $_GET["id"] ;

	$buku=$_POST["judul"];
	$pengarang=$_POST["pengarang"];
	$jenis=$_POST["jenis_buku"];
	$penerbit=$_POST["penerbit"];


$query=mysql_query("UPDATE `buku` SET `judul_buku` = '$buku', `pengarang` = '$pengarang', `jenis_buku` = '$jenis', `penerbit` = '$penerbit' WHERE `buku`.`kode_buku` = 3;");


if($query)
{
	echo "Data Berhasil Di Edit";
	echo "<script>window.location='tambah_buku.php'</script>" ;
}
else
{
	echo "Database Gagal Di Edit";
}
}
?>
