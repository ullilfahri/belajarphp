<?php 
include "koneksi.php" ;

$id = $_GET["id"] ;


mysql_query("DELETE FROM `anggota` WHERE `anggota`.`id_anggota` = $id ") ;

?>

<script>window.location='tambah_anggota.php'</script>