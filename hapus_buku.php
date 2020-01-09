<?php
include "koneksi.php" ;

$id = $_GET["id"] ;

mysql_query("DELETE FROM `buku` WHERE `buku`.`kode_buku` = $id ") ;

?>

<script>window.location='tambah_buku.php'</script>
