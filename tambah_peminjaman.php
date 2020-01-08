<h1>Tambah Data Peminjaman</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <p>Tanggal Pinjam 
    <label for="tgl_pinjam"></label>
  <input type="date" name="tgl_pinjam" id="tgl_pinjam">
  </p>
  <p>Jumlah Pinjam  
    <label for="jumlah_pinjam"></label>
    <input type="text" name="jumlah_pinjam" id="jumlah_pinjam">
  </p>
    <p>Tanggal Kembali 
      <label for="tgl_kembali"></label>
    <input type="date" name="tgl_kembali" id="tgl_kembali">
  </p>
    <p>Id Anggota
      <label for="tgl_pinjam"></label>
  <input type="text" name="id_anggota" id="id_anggota">
  </p>
  <p>Kode Buku 
    <label for="jumlah_pinjam"></label>
    <input type="text" name="kode_buku" id="kode_buku">
  </p>
    <p>Kembali 
      <label for="tgl_kembali"></label>
    <input type="text" name="kembali" id="kembali">
  </p>
  <p>
    <input type="submit" name="simpan" id="simpan" value="Simpan">
  </p>
</form>
<p>&nbsp;</p>

<?php  
include "koneksi.php";

if(isset($_POST["simpan"])) {	
	$tgl_pinjam=$_POST["tgl_pinjam"];
	$jumlah_pinjam=$_POST["jumlah_pinjam"];
	$tgl_kembali=$_POST["tgl_kembali"];
	$id_anggota=$_POST["id_anggota"];
	$kode_buku=$_POST["kode_buku"];
	$kembali=$_POST["kembali"];


$query=mysql_query("INSERT INTO `perpustakaan`.`memin` (`id_pinjam`, `tanggal_pinjam`, `jumlah_pinjam`, `tanggal_kembali`, `id_anggota`, `kode_buku`, `kembali`) VALUES (NULL, '$tgl_pinjam', '$jumlah_pinjam', '$tgl_kembali', '$id_anggota', '$kode_buku', '$kembali');");


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
    	<td>Tanggal Pinjam</td>
        <td>Jumlah Pinjam</td>
        <td>Tanggal Kembali</td>
        <td>Id Anggota</td>
        <td>Kode Buku</td>
        <td>Kembali</td>
        <td>Aksi</td> 	
    </tr>
<?php
$query_tampil = mysql_query("SELECT * FROM `meminjam` ORDER BY `meminjam`.`id_pinjam` DESC");

while ($tampil = mysql_fetch_array ($query_tampil)) {
?>
    
    <tr>
    	<td><?php echo $tampil["tanggal_pinjam"] ?></td>
        <td><?php echo $tampil["jumlah_pinjam"] ?></td>
        <td><?php echo $tampil["tanggal_kembali"] ?></td>
        <td><?php echo $tampil["id_anggota"] ?></td>
        <td><?php echo $tampil["kode_buku"] ?></td>
        <td><?php echo $tampil["kembali"] ?></td>
        <td> 
        <a href="editanggota.php?id=<?php echo $tampil["id_anggota"] ?>">Edit</a> / 
        <a href="hapus.php?id=<?php echo $tampil["id_anggota"] ?>">Hapus</a>
        </td>
    </tr>
<?php
}
?>
    </table>