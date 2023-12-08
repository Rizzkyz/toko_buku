<?php
include "../../conf/conn.php";
$id = $_GET['id'];
$query = ("DELETE FROM kasir WHERE id_kasir ='$id'");
if ($koneksi->query($query)) {
  //redirect ke halaman index.php 
  //header("location: index.php");
  echo '<script>alert("Data Berhasil Dihapus !!!");
  window.location.href="../../index.php?page=data_kasir"</script>';
} else {
  //pesan error gagal update data
  //echo "Data Gagal Diupate!";
  echo '<script>alert("Data Digagal Dihapus !!!");
  window.location.href="../../index.php?page=data_kasir"</script>';
}
