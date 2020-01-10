
<?php
include "koneksi.php" ;

$id = $_GET["id"] ;

$querydata3 = mysql_query("SELECT * FROM `anggota` WHERE `id_anggota` = $id ") ;

$tampildata = mysql_fetch_array($querydata3) ;

?>

<h1>Edit Data Perpustakaan</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <p>Nama Anggota 
    <label for="anggota"></label>
  <input type="text" name="anggota" id="anggota" value="<?php echo $tampildata["nama_anggota"] ?>">
  </p>
  <p>Alamat 
    <label for="alamat"></label>
    <input type="text" name="alamat" id="alamat" value="<?php echo $tampildata["alamat"] ?>">
  </p>
  <p>Tempat, Tanggal Lahir 
    <label for="ttl"></label>
    <input type="text" name="ttl" id="ttl" value="<?php echo $tampildata["ttl_anggota"] ?>">
  </p>
  <p>Status 
    <label for="status"></label>
    <select name="status" id="status">
    <option value="<?php echo $tampildata["status_anggota"] ?>"><?php echo $tampildata["status_anggota"] ?></option>
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
$id = $_GET["id"] ;
	$nama=$_POST["anggota"];
	$alamat=$_POST["alamat"];
	$ttl=$_POST["ttl"];
	$status=$_POST["status"];


$query=mysql_query("UPDATE `anggota` SET `nama_anggota` = '$nama', `alamat` = '$alamat', `ttl_anggota` = '$ttl', `status_anggota` = '$status' WHERE `anggota`.`id_anggota` = $id ;");
  

if($query)
{
	echo "Data Berhasil Di Edit";
	echo "<script>window.location='tambah_anggota.php'</script>" ;
}
else
{
	echo "Database Gagal Di Edit";
}
}
?>
</p>
