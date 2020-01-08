<?php
include "koneksi.php";

$id = $_GET["id"];
$query=mysql_query("SELECT * FROM `anggota` WHERE `id_anggota` = '$id' ORDER BY `id_anggota` DESC ");
$tampil=mysql_fetch_array($query);

?>
<h1>Edit Data Perpustakaan</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <p>Nama Anggota 
    <label for="anggota"></label>
  <input type="text" name="anggota" id="anggota" value="<?php echo $tampil["nama_anggota"] ?>">
  </p>
  <p>Alamat 
    <label for="alamat"></label>
    <input type="text" name="alamat" id="alamat" value="<?php echo $tampil["alamat"] ?>">
  </p>
  <p>Tempat, Tanggal Lahir 
    <label for="ttl"></label>
    <input type="text" name="ttl" id="ttl" value="<?php echo $tampil["ttl_anggota"] ?>">
  </p>
  <p>Status 
    <label for="status"></label>
    <select name="status" id="status">
    <option value="<?php echo $tampil["status_anggota"] ?>"><?php echo $tampil["status_anggota"] ?></option>
      <option value="1">aktif</option>
      <option value="0">tidak aktif </option>
    </select>
  </p>
  <p>
    <input type="submit" name="simpan" id="simpan" value="Simpan">
  </p>
</form>

  <?php  
include "koneksi.php";

if(isset($_POST["simpan"])) {	
	$nama=$_POST["anggota"];
	$alamat=$_POST["alamat"];
	$ttl=$_POST["ttl"];
	$status=$_POST["status"];
	$id_anggota=$_GET["id"];


$query=mysql_query("UPDATE `perpustakaan`.`anggota` SET `nama_anggota` = '$nama', `alamat` = '$alamat', `ttl_anggota` = '$ttl', `status_anggota` = '$status'  WHERE `anggota`.`id_anggota` = $id_anggota;");
  

if($query)
{
	echo "<script>window.location='tambah_anggota.php'</script>";
}
else
{
	echo "Database Gagal Diubah";
}
}
?>