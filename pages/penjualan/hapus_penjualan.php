<?php
include "../../conf/conn.php";
$id = $_GET['id'];
$query = ("DELETE FROM penjualan WHERE id_penjualan ='$id'");
if ($koneksi->query($query)) {
  //redirect ke halaman index.php 
  //header("location: index.php");
  echo '<script>alert("Data Berhasil Dihapus !!!");
  window.location.href="../../index.php?page=data_penjualan"</script>';
} else {
  //pesan error gagal update data
  //echo "Data Gagal Diupate!";
  echo '<script>alert("Data Gagal Dihapus !!!");
  window.location.href="../../index.php?page=data_penjualan"</script>';
}
