<?php
include "koneksi.php";

$id=$_GET["id"];

mysql_query("DELETE FROM `perpustakaan`.`anggota` WHERE `anggota`.`id_anggota` = '$id'");
echo"<script>window.location='tambah_anggota.php'</script>";

?>